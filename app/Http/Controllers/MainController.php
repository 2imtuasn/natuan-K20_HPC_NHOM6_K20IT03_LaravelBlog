<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function dashboard(){
       return view('admin.dashboard',[
           'title'=>'Trang chủ DashBoard'
       ]);
   }
   
   public function login(){
    return view('admin.login',[
        'title'=>'login'
    ]);
   }

    public function register(){
        return view('admin.register',[
            'title'=>'register'
        ]);
    }

    public function password(){
        return view('admin.password',[
            'title'=>'password'
        ]);
    }
}
