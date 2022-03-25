<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
        // Page-account
        public function account_setting(){
            return view('account.account-setting',[
                'title' => 'Account Setting'
            ]);
        }
        public function account_notifications(){
            return view('account.account-notifications',[
                'title' => 'Account Notifications'
            ]);
            
        }
        public function account_connections(){
            return view('account.account-connections',[
                'title' => 'Account Connections'
            ]);
        }
}
