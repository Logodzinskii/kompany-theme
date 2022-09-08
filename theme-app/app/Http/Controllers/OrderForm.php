<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\TelegramBotHandler;


class OrderForm extends Controller
{
    public function index()
    {
        return view('calculate');
    }
    public function listOrders()
    {
        $orders = Orders::all();
        return response()->json($orders);
    }
    public function store(Request $request)
    {
        $orderData = ['email' => $request->email, 'body'=>$request->body];
        $order = new Orders();
        $order->userEmail = $request->email;
        $order->name = 'test';
        $order->kitchenConfigurations = $request->body;
        $order->totalPrice = '250000';
        $order->status = 'new';

        $order->save();
        return response()->json($orderData);
    }
}
