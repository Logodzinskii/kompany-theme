<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/botapi/YaDisk/tmebot/Configuration/TelegramBotHandMadeConfiguration.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/botapi/YaDisk/tmebot/Controller/CallBackController.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/botapi/YaDisk/tmebot/Controller/TextControler.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/botapi/YaDisk/tmebot/Configuration/DateBase.php';

include($_SERVER['DOCUMENT_ROOT'].'/botapi/YaDisk/tmebot/vendor/autoload.php'); //Подключаем библиотеку
use Telegram\Bot\Api;

$botApiConfiguration = TelegramBotHandMadeConfiguration::get_instance();
$db = DateBase::get_instance();

/**
 * Устанавливаем токен, полученный у BotFather
 */
$telegram = new Api($botApiConfiguration->getBotToken());
/**
 * Передаем в переменную $result полную информацию о сообщении пользователя
 */
$result = $telegram -> getWebhookUpdates();
$message_id = $result["message"]["message_id"];
//file_put_contents('res.txt', 'asd');
/**
 * Текст сообщения
 */
$text = $result["message"]["text"];
/**
 * Уникальный идентификатор пользователя
 */
$chat_id = $result["message"]["chat"]["id"];
/**
 * Юзернейм пользователя
 */
$name = $result["message"]["from"]["username"];
$path = $_SERVER['DOCUMENT_ROOT'].'/botapi/YaDisk/tmebot/';
//$db->setUserChatId($chat_id);

$photo = $result["message"]['photo'];
$file = $result["message"]['document'];
$capture = $result['message']['caption'];
/**
 * @param string $callBack
 * Например: type|Материалы
 */
$callBack = $result['callback_query']['data'];

if(isset($callBack))
{
    /**
     * @param array $arrayCallBackData
     * Массив выступает в роли маршрутизатора, в ключе массива маршрут month
     * в значении ключа имя вызываемого метода
     */
    $arrayCallBackData = [
        'month'=>'monthResponse',
        'type'=>'typeResponse',
        'location'=>'locationRespons',
        'delete'=>'deleteExpenses',
    ];
    /**
     * @param string $callBack
     * содержит строку со значением callback_data in_line_keyboard
     * например 'callback_data' => 'type|Материалы', callBack = 'type|Материалы'
     */
    $callBackController = new CallBackController($callBack, $db->getConnection());
    $callBackControllerMethod = explode("|", $callBack);
    $callBackControllerMethod = $callBackControllerMethod[0];
    $callBackControllerMethod = $arrayCallBackData[$callBackControllerMethod];
    $chat_id = $result['callback_query']['message']['chat']['id'];
    $chat_id = ['chat_id'=>$chat_id];
    /**
     * @param array $callBackControllerMethod
     * Возвращает массив, который содержит ключ 'text' => string, 'reply_markup' => (json клавиатуру)
     */
    $telegram->sendMessage(array_merge($chat_id, $callBackController->$callBackControllerMethod()));

}

if($chat_id == $botApiConfiguration->getManagerId() || $botApiConfiguration->getManagerIdSecond())
{

    if (!is_null($photo))
    {
        $token = $botApiConfiguration->getBotToken();

        if (!empty($result['message']['photo'])) {
            //$photo = array_pop($result['message']['photo']);

            $ch = curl_init('https://api.telegram.org/bot' . $token . '/getFile');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, array('file_id' => $result["message"]['photo'][3]['file_id']));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            $res = curl_exec($ch);
            curl_close($ch);

            $res = json_decode($res, true);
            if ($res['ok']) {
                $src  = 'https://api.telegram.org/file/bot' . $token . '/' . $res['result']['file_path'];
                $dest = $_SERVER['DOCUMENT_ROOT'].'/botapi/YaDisk/photoUsers/'. basename($src);

                if(!copy($src, $dest))
                {
                    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => 'Файл не записан на сервер']);
                }
            }
        }
        return false;
    }
    if (!is_null($file))
    {
        $token = $botApiConfiguration->getBotToken();

        if (!empty($result['message']['document'])) {

            $ch = curl_init('https://api.telegram.org/bot' . $token . '/getFile');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, array('file_id' => $result["message"]['document']['file_id']));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            $res = curl_exec($ch);
            curl_close($ch);

            $res = json_decode($res, true);
            if ($res['ok']) {
                $src  = 'https://api.telegram.org/file/bot' . $token . '/' . $res['result']['file_path'];
                $dest = $_SERVER['DOCUMENT_ROOT'].'/botapi/YaDisk/fileUsers/'. basename($src);

                if(!copy($src, $dest))
                {
                    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => 'Файл не записан на сервер']);
                }
            }
        }
        return false;
    }

    if(isset($text))
    {
        $chat_id = [ 'chat_id' => $chat_id];

        $textController = new TextControler($text);
        /**
         * @param array $textRoutArray
         * Массив для маршрутизации по полученному текстовому значению от пользователя
         * ключ - маршрут, значение ключа это имя метода
         */
        $textRoutArray =
            [
                '/start' => 'startButtonTextController',
            ];
        if(array_key_exists($text, $textRoutArray))
        {
            /**
             * Если полученный текст от пользователя содержится в ключе массива,
             * То получим имя метода по ключу из массива и запишем в @param string $textControllerMethod
             */
            $textControllerMethod = $textRoutArray[$text];
            /**
             *
             */
            $telegram->sendMessage(array_merge($chat_id, $textController->$textControllerMethod(), ['parse_mode'=>'HTML']));

        }else
        {
            $textController = new TextControler($text);

            $textControllerMethod = $textController->checkTextRegular();//ozonShowItem

            file_put_contents('checkTextRegular.txt', $textControllerMethod);
            if($textControllerMethod === 'not found')
            {
                $telegram->sendMessage(array_merge($chat_id['chat_id'], ['text'=> $textControllerMethod]));
            }

            $responseTextControllerArray = $textController->$textControllerMethod();

            if(array_key_exists('sendPhoto', $responseTextControllerArray))
            {
                file_put_contents('checkTextRegular.txt', $chat_id['chat_id'] . '|' . $responseTextControllerArray['sendPhoto']['photo'] . '|' . $responseTextControllerArray['sendPhoto']['caption']);

                $telegram->sendPhoto(
                    [
                        'chat_id' => $chat_id['chat_id'],
                        'photo'=> $responseTextControllerArray['sendPhoto']['photo'],
                        'caption'=> $responseTextControllerArray['sendPhoto']['caption'],
                    ]
                );

            }elseif(array_key_exists('sendMessage', $responseTextControllerArray))
            {

                $telegram->sendMessage(
                    [
                        'chat_id' => $chat_id['chat_id'],
                        'text' => $responseTextControllerArray['sendMessage']['text'],
                    ]);
            }elseif(array_key_exists('inline_keyboard', $responseTextControllerArray))
            {
                $telegram->sendMessage(
                    [
                        'chat_id' => $chat_id['chat_id'],
                        'text' => $responseTextControllerArray['inline_keyboard']['text'],
                        'reply_markup' => $responseTextControllerArray['inline_keyboard']['reply_markup'],
                    ]);
            }

        }

    }


    if(isset($result["message"]["location"]))
    {
        file_put_contents('location.txt', $result["message"]["location"]);
        $telegram->sendMessage(['chat_id' => $chat_id, 'text' => 'Пришли сумму расхода. Пример: Расход-120']);
    }


}else{

    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => 'Только для меня']);

}
