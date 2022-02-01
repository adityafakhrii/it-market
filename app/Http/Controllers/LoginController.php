<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
class LoginController extends Controller
{

Public function login(Request $request){
        $data = array(
            "email"=> $request->get('email'),
            "password"=> $request->get('password')
        );
        $rules = array(
            "email"=> "required|email|min:4|max:50",
            "password"=>"required|string|min:4|max:50"
        );
        $validator = Validator::make($data,$rules);

        if ($validator->fails()) {
            return redirect('login')->withErrors($validator->errors())->withInput($request->input());
        }
        else {
            if(Auth::attempt($data)){
                return redirect('home')->with('succes',"Berhasil");
            }
            else{
                return redirect('login')->with('fail',"gagal");
            }
        }
    }
}