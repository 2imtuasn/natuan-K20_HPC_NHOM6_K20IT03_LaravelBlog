<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function icons_boxicons(){
        return view('components.icons-boxicons',[
            'title'=>'boxicons'
        ]);
    }
    
}
