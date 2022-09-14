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
            [   'nameClassBox'=>'BoxTop',
                'nameBoxBottom'=>'Антресоли',
                'placeholder'=>'длинна, мм',
                'typeBox'=>'parallelogram',
                'topPositionBottom'=>'126px',
                'leftPositionBottom'=>'600px',

            ],
            [   'nameClassBox'=>'BoxMiddle',
                'nameBoxBottom'=>'Верхние мод',
                'placeholder'=>'длинна, мм',
                'typeBox'=>'parallelogram',
                'topPositionBottom'=>'176px',
                'leftPositionBottom'=>'600px',

            ],
            [   'nameClassBox'=>'HTotal',
                'nameBoxBottom'=>'Высота кухни',
                'placeholder'=>'Высота, мм',
                'typeBox'=>'parallelogram',
                'topPositionBottom'=>'226px',
                'leftPositionBottom'=>'600px',

            ],
            [   'nameClassBox'=>'BoxDown',
                'nameBoxBottom'=>'Нижние мод',
                'placeholder'=>'Высота, мм',
                'typeBox'=>'modules',
                'topPositionBottom'=>'276px',
                'leftPositionBottom'=>'600px',

            ],
            [   'nameClassBox'=>'PenalFridge',
                'nameBoxBottom'=>'Пенал холодильник',
                'placeholder'=>'Длинна, мм',
                'typeBox'=>'parallelogram',
                'topPositionBottom'=>'396px',
                'leftPositionBottom'=>'20px',

            ],
            [   'nameClassBox'=>'PenalMicrowave',
                'nameBoxBottom'=>'Пенал микроволновка',
                'placeholder'=>'Длинна, мм',
                'typeBox'=>'parallelogram',
                'topPositionBottom'=>'326px',
                'leftPositionBottom'=>'20px',

            ],
            [   'nameClassBox'=>'PenalShelves',
                'nameBoxBottom'=>'Пенал полки',
                'placeholder'=>'Длинна, мм',
                'typeBox'=>'parallelogram',
                'topPositionBottom'=>'256px',
                'leftPositionBottom'=>'20px',

            ],
            [   'nameClassBox'=>'BottleMaker',
                'nameBoxBottom'=>'Бутылошница',
                'placeholder'=>'длинна, мм',
                'typeBox'=>'parallelogram',
                'topPositionBottom'=>'450px',
                'leftPositionBottom'=>'409px',

            ],
            [   'nameClassBox'=>'BoxShelves',
                'nameBoxBottom'=>'Шкаф с ящиками',
                'placeholder'=>'длинна, мм',
                'typeBox'=>'parallelogram',
                'topPositionBottom'=>'400px',
                'leftPositionBottom'=>'409px',

            ],
            [   'nameClassBox'=>'BoxDishwasher',
                'nameBoxBottom'=>'Для посудомойки',
                'placeholder'=>'длинна, мм',
                'typeBox'=>'parallelogram',
                'topPositionBottom'=>'450px',
                'leftPositionBottom'=>'250px',

            ],
            [   'nameClassBox'=>'BoxWashing',
                'nameBoxBottom'=>'Для мойки',
                'placeholder'=>'длинна, мм',
                'typeBox'=>'parallelogram',
                'topPositionBottom'=>'400px',
                'leftPositionBottom'=>'250px',

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

        return response()->json(['success'=>'Ajax request submitted successfully']);
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
