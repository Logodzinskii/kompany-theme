<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderForm extends Controller
{
    public function store(Request $request)
    {
       return view('order', ['title'=>$request->post('title')]);
    }
}
