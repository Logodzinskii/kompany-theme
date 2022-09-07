<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function listProducts($id)
    {
        $products = DB::table('products')->where('id',$id)->first();
        /**
         * массив данных для заполнения карточек с размерами
         *
         */
        $arrayParametrsForkitchen = [
            [
                'id'=>'1',
                'titleCard'=>'Размеры антресолей',
                'placeholderInput'=>'Длинна, м',
                'initPrice'=>'25000',
            ],
            [
                'id'=>'2',
                'titleCard'=>'Размеры верхнего модуля',
                'placeholderInput'=>'Длинна, м',
                'initPrice'=>'25000',
            ],
            [
                'id'=>'3',
                'titleCard'=>'Размеры нижних модулей',
                'placeholderInput'=>'Длинна, м',
                'initPrice'=>'25000',
            ],
            [
                'id'=>'4',
                'titleCard'=>'Шкафы над холодильником',
                'placeholderInput'=>'Длинна, м',
                'initPrice'=>'25000',
            ],
            [
                'id'=>'5',
                'titleCard'=>'Холодильник',
                'placeholderInput'=>'Длинна, м',
                'initPrice'=>'25000',
            ],

        ];

        return view('calculate',
            ['parametrs' => $arrayParametrsForkitchen,
            'products'=>[
                'type'=>$products->productType,
                'name'=>$products->productName,
                ]
            ]

        );
    }
}
