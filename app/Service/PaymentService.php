<?php

namespace App\Service;


use YooKassa\Client;

class PaymentService
{
    public function getClient(): Client
    {
        $client = new Client();
        $client->setAuth(config('services.yookassa.shop_id'), config('services.yookassa.secret_key'));

        return $client;
    }

    public function createPayment(float $amount, string $description, array $options = []){
        $client = $this->getClient();
        $payment = $client->createPayment([
            'amount' => [
                'value' => $amount,
                'currency' => 'RUB',
            ],
            'capture' => false,
            'confirmation' => [
                'type' => 'redirect',
                'return_url' => route('personal_shop'),
            ],
            'metadata' => [
                'transaction_id' => $options['transaction_id'],
                'user_id' => $options['user_id'],
                'count_number' => $options['count_number'],
            ],
            'receipt' => [
                'customer' => [
                    'email' => auth()->user()->email,
                ],
                'items' => [
                    [
                        'amount' => [
                            'value' => $amount,
                            'currency' => 'RUB',
                        ],
                        'description' => $description,
                        'quantity' => '1',
                        'vat_code' => '1',
                    ]
                ],
            ],
            'description' => $description,
        ], uniqid('', true));

        return $payment->getConfirmation()->getConfirmationUrl();
    }


}
