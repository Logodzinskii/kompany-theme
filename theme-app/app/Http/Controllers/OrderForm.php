<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\TelegramBotHandler;

use Telegram\Bot\Api;


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
    public function orderUserStore(Request $request)
    {

        $order = new Orders();

        $order->userEmail = $request->email;
        $order->name = $request->firstname . '|' . $request->tel;
        $order->kitchenConfigurations = $request->body;
        $order->totalPrice = $request->sumForm;
        $order->status = 'new';
        $order->save();

        return response()->json([$request->sumForm]);
    }
}
