<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $orders = Orders::all();

        return view('admin/admin', ['orders'=>$orders]);

    }
}
