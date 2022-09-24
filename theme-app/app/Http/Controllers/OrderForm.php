<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
      //645879928
      $text ='💬 заказ от ' . $request->firstname . ' 📱 '.  $request->tel .' 💳 ' . $request->sumForm;
      $response = array(
          'chat_id' => 645879928,
          'text' => $text
      );
        $token = config('conftelegram.telegram.token');
      $ch = curl_init('https://api.telegram.org/bot'.$token.'/sendMessage');
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_exec($ch);
      curl_close($ch);


        $order->save();

        return response()->json(['success'=>'ok']);
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
