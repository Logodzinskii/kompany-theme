<?php

class TextControler
{
    protected $ozon;

    protected string $text;

    public function __construct($text)
    {
        $this->text = $text;

    }
    public function executionChoiceMonth()
    {
        $keyboard = [
            'inline_keyboard' =>
                [
                    [
                        ['text'=> 'Сегодня', 'callback_data' => 'month|13'],
                        ['text'=> 'Другой месяц', 'callback_data' => 'month|0'],
                    ],
                ],
        ];

        $encodedKeyboard = json_encode($keyboard);
        return ['text' => 'Выберите месяц', 'reply_markup' => $encodedKeyboard ];
    }

    public function startButtonTextController()
    {
        $keyboard =[
            'keyboard'=>[
                [
                    ['text' => 'TOP-Ozon'],
                ],
                [
                    ['text' =>'Внести Расходы'],
                    ['text' =>'Пришли расходы'],
                ],
            ],
            "one_time_keyboard" => false,
            "resize_keyboard" => true


        ];
        $encodedKeyboard = json_encode($keyboard);
        return ['text' => 'Ok', 'reply_markup' => $encodedKeyboard];
    }

    public function choiceOzonTop()
    {
        $keyboard =[
            'keyboard'=>[
                [
                    ['text' => 'TOP-корзина'],
                    ['text' => 'TOP-показы на карточке товара'],
                    ['text' => 'TOP-всего показов'],
                ],
                [
                    ['text' => 'В начальное меню'],
                ],
            ],
            "one_time_keyboard" => false,
            "resize_keyboard" => true


        ];
        $encodedKeyboard = json_encode($keyboard);
        return ['text' => 'Ok', 'reply_markup' => $encodedKeyboard];
    }
    public function checkTextRegular()
    {
        $arrRegular =
            [
                'topOzonCart'=>'/^TOP*/',
                'ozonShowItem'=>'/^[a-zA-Z]*-[0-9]*-[0-9]*/',
                'executionAdd'=>'/^Расход-[0-9]*/',
                'yandexDiscCreateDirectory'=>'/^[a-zA-Z]*-[0-9]*\//'

            ];


        foreach ($arrRegular as $reg=>$val)
        {

            if(preg_match($val, $this->text) > 0)
            {

                return $reg;

            }
        }
    }


    public function executionAdd()
    {
        $price = explode('-', $this->text);
        $price = $price[1];

        $arrTodb = [
            'saller'=> 123456,
            'name_expens'=>file_get_contents('type.txt'),
            'totalPrice'=>intval($price),
            'date'=>file_get_contents('month.txt'),
            'location'=>file_get_contents('location.txt'),
        ];

        $res = $this->report->addExpenses($arrTodb);

        $keyboard = [
            'inline_keyboard' =>
                [
                    [
                        ['text'=> 'Удалить?', 'callback_data' => 'delete|'. $res],
                    ],
                ],
        ];

        $encodedKeyboard = json_encode($keyboard);

        return [
            'inline_keyboard' =>  [
                'text' => 'Расход за месяц - ' .  file_get_contents('month.txt') . ' в категорию - ' . file_get_contents('type.txt') . ' на сумму - ' . $this->text.' занесен' . 'id - ' . $res,
                'reply_markup' => $encodedKeyboard,
            ]
        ];
        //$telegram->sendMessage(['chat_id' => $chat_id, 'text' => 'Расход за месяц - ' .  file_get_contents('month.txt') . ' в категорию - ' . file_get_contents('type.txt') . ' на сумму - ' . $text.' занесен' . 'id - ' . $res, 'reply_markup' => $encodedKeyboard]);

        //file_put_contents('type.txt', 0);
        //file_put_contents('month.txt', 0);
        //file_put_contents('location.txt', 0);
    }

    public function yandexDiscCreateDirectory()
    {

        $res = $this->yaDisc->createPath($this->text);
        return [
            'sendMessage' =>[
                'text' => $res
            ]
        ];
    }

    public function showExpensesController()
    {

        return [

            'text' => $this->report->showExpenses(),

        ];
    }
}
