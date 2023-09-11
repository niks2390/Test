<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function enqury(Request $enqury){
        $enqury->validate(
            [
                'name'=>'required',
                'email' =>'required|email',
                'subject'=>'required',
            ]
            );
        echo "<pre>";
        print_r($enqury->all());

    }
}
