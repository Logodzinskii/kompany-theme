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

        $order->totalPrice = $request->sumForm;
        $order->status = 'new';

        /**

         * Все выбранные параметры кухни, внесем в таблицу orders в колонку в виде json
         */
        $parametrs = [];
        foreach ($request->input() as $key => $value)
        {
            $parametrs[] = [$key => $value];
        }
        $order->kitchenConfigurations = json_encode($parametrs);


        //601768998
        /*
        $text = '💬 заказ от ' . $request->email . '📱 - +79030817322. 👋 - Александр. 💳 - 250000';
        $response = array(
            'chat_id' => 601768998,
            'text' => $text
        );

        $ch = curl_init('https://api.telegram.org/bot{token}/sendMessage');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_exec($ch);
        curl_close($ch);*/


        $order->save();

        return response()->json([$request->sumForm]);
    }

    public function showDetailOrder($id)
    {
        $arr=[];

        $order = DB::table('orders')->where('id',$id)->get();
        foreach ($order as $ord)
        {
            $arr = json_decode($ord->kitchenConfigurations, true);
        }
        //file_put_contents('test.log', print_r($arr));

        return view('details/details', ['details' => $order , 'parametrs' => $arr]);
    }
}
