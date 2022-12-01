<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function save(Request $request){
        //dd($request->name);
        $user = User::where('email', $request->email)->first();
        if(isset($user)){
            return redirect(route('home'));
        }
        if($request->password != $request->repeat_password){
            return redirect(route('home'));
        }

        $user = User::create([
            'last_name' => $request->surname,
            'first_name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if($user){
            $user->assignRole('user');
            Auth::login($user);
            return redirect()->intended(route('personal_account'));
        }
        return view('home');
    }


}
