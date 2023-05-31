<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PageController extends Controller
{
    public function showMaster(){
        return view('master');
       }

    public function showContent(){
        return view('index');
    }

    public function showHome(){
        return view('Pages.home');
    }

   
}
