<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function showKitchen()
    {
        $arr = [
            [   'nameClassBox'=>'BottleMaker',
                'nameBoxBottom'=>'Бутылошница',
                'placeholder'=>'кол-во, шт',
                'typeBox'=>'parallelogram',
                'defaultLen'=>[150,200],
                'defaultNum'=>'1',
                'price'=>'5400',

            ],
            [   'nameClassBox'=>'BoxShelves',
                'nameBoxBottom'=>'Шкаф с ящиками',
                'placeholder'=>'кол-во, шт',
                'typeBox'=>'parallelogram',
                'defaultLen'=>[450,600,800,'другой'],
                'defaultNum'=>'1',
                'price'=>'23400',

            ],
            [   'nameClassBox'=>'BoxDishwasher',
                'nameBoxBottom'=>'Для посудомойки',
                'placeholder'=>'кол-во, шт',
                'typeBox'=>'parallelogram',
                'defaultLen'=>[450,600,800],
                'defaultNum'=>'1',
                'price'=>'6400',

            ],
            [   'nameClassBox'=>'BoxWashing',
                'nameBoxBottom'=>'Для мойки',
                'placeholder'=>'кол-во, шт',
                'typeBox'=>'parallelogram',
                'defaultLen'=>[450,600,800,'другой'],
                'defaultNum'=>'1',
                'price'=>'12400',

            ],
            [   'nameClassBox'=>'BoxTop',
                'nameBoxBottom'=>'Антресоли',
                'placeholder'=>'нет',
                'typeBox'=>'parallelogram',
                'defaultLen'=>[2450],
                'defaultNum'=>'1',
                'price'=>'25400',

            ],
            [   'nameClassBox'=>'BoxMiddle',
                'nameBoxBottom'=>'Верхние мод',
                'placeholder'=>'нет',
                'typeBox'=>'parallelogram',
                'defaultLen'=>[2450],
                'defaultNum'=>'1',
                'price'=>'25400',

            ],
            [   'nameClassBox'=>'HTotal',
                'nameBoxBottom'=>'Высота кухни',
                'placeholder'=>'нет',
                'typeBox'=>'parallelogram',
                'defaultLen'=>[2450],
                'defaultNum'=>'1',
                'price'=>'12400',

            ],
            [   'nameClassBox'=>'BoxDown',
                'nameBoxBottom'=>'Нижние мод',
                'placeholder'=>'нет',
                'typeBox'=>'modules',
                'defaultLen'=>[870,900],
                'defaultNum'=>'1',
                'price'=>'5400',

            ],
            [   'nameClassBox'=>'PenalFridge',
                'nameBoxBottom'=>'Пенал холодильник',
                'placeholder'=>'кол-во, шт',
                'typeBox'=>'parallelogram',
                'defaultLen'=>[600],
                'defaultNum'=>'1',
                'price'=>'19500',

            ],
            [   'nameClassBox'=>'PenalMicrowave',
                'nameBoxBottom'=>'Пенал микроволновка',
                'placeholder'=>'кол-во, шт',
                'typeBox'=>'parallelogram',
                'defaultLen'=>[600],
                'defaultNum'=>'1',
                'price'=>'19500',

            ],
            [   'nameClassBox'=>'PenalShelves',
                'nameBoxBottom'=>'Пенал полки',
                'placeholder'=>'кол-во, шт',
                'typeBox'=>'parallelogram',
                'defaultLen'=>[600],
                'defaultNum'=>'1',
                'price'=>'19500',

            ],

        ];

        return view('/calculator/calcForm', ['items' => $arr]);

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        /**
         * массив данных для заполнения карточек с размерами
         *
         */
        $arrayParametrsForkitchen = [
            [
                'id'=>'1',
                'titleCard'=>'Общая длинна кухни',
                'placeholderInput'=>'Длинна, мм',
                'initPrice'=>'25000',
            ],
            [
                'id'=>'2',
                'titleCard'=>'Общая высота кухни',
                'placeholderInput'=>'Высота, мм',
                'initPrice'=>'25000',
            ],

        ];
        return view('calculate',['parametrs' => $arrayParametrsForkitchen]);
    }

    public function getCoordinates(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'mobile'    => 'required',
            'message'   => 'required',
        ]);

        $data = $request->all();
        #create or update your data here

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
