<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view("login");
    }


    public function store(Request $request){
        Account::create($request->all());
    }
    
}
