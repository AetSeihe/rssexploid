<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Service\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;
use YooKassa\Model\NotificationEventType;

class PaymentController extends Controller
{
    public function index(){


    }

    public function create(Request $request, PaymentService $service){
        $amount = (float)$request->input('amount');
        $description = (string)$request->input('description');
        $user_id = (int)$request->input('user_id');
        $count_number = (int)$request->input('count_number');

        $transaction = Transaction::create([
            'amount'=>$amount,
            'description'=>$description,
            'user_id'=>$user_id,
            'count_number'=>$count_number,
        ]);

        if($transaction){
            $link = $service->createPayment($amount, $description, [
                'transaction_id'=>$transaction->id,
                'user_id'=>$transaction->user_id,
                'count_number'=>$transaction->count_number,
                ]);

            return redirect()->away($link);
        }
    }

    public function callback(Request $request, PaymentService $service){
        $source = file_get_contents('php://input');

        $requestBody = json_decode($source, true);
        $notification = (isset($requestBody['event']) && $requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED)
            ? new NotificationSucceeded($requestBody)
            : new NotificationWaitingForCapture($requestBody);

        $payment = $notification->getObject();

        if(isset($payment->status) && $payment->status === 'waiting_for_capture'){
        $service->getClient()->capturePayment([
            'amount'=>$payment->amount,
        ], $payment->id, uniqid('',true));
        }

        if(isset($payment->status) && $payment->status === 'succeeded'){
            if((bool)$payment->paid === true){
                $metadata = (object)$payment->metadata;
                if(isset($metadata->transaction_id)){
                    $transactionId = (int)$metadata->transaction_id;
                    $transaction = Transaction::find($transactionId);
                    $transaction->status = 'CONFIRMED';
                    $transaction->save();

                    $user = User::find($metadata->user_id);
                    $user->count_journal_free = $user->count_journal_free + $metadata->count_number;
                    $user->save();
                }

            }
        }
    }
}
