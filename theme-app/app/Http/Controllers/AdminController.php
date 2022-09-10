<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->paginate(10);
        //var_dump((json_encode($orders)));
        return view('admin/admin', ['orders'=>json_decode(json_encode($orders),true)]);

    }
}
