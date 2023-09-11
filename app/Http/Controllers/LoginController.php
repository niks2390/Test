<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register(){
        return view('register');
    }
    public function register_submit(Request $registerData){
    //    echo "<pre>";
    //     print_r($registerData->all());
        $user = new User();
        $user->name = $registerData->name;
        $user->email = $registerData->email;
        $user->subject = $registerData->subject;
        $user->message = $registerData->message;
               
    }
}
