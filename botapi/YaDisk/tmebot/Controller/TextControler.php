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

}
