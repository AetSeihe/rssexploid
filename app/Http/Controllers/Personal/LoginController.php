<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {

    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if(!isset($user)){
            return redirect(route('home'));
        }

        if($user->password == NULL){
            return redirect(route('personal.reset', "email=$user->email"));
        }

        $formFields = $request->only(['email', 'password']);

        if(Auth::attempt($formFields)){
            return redirect()->intended(route('personal_account'));
        }
        return redirect(route('home'));
    }

    public function reset(Request $request){
        $user = User::where('email', $request->email)->first();
        if(!isset($user)){
            //dd(1);
            exit;

        }

        if($request->password == $request->repeat_password){
            $user->password = $request->password;
            $user->save();
        }else{
            //dd(2);
            exit;
        }

        Auth::login($user);
        return redirect()->intended(route('personal_account'));
    }


}
