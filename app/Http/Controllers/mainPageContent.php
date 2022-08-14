<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PathConfig;

class mainPageContent extends Controller
{
    public function nullPage()
    {
        $path = new PathConfig();

        $arr = [
            'webTitle'=>'Ремесленники Урала',
            'meta'=>'Сообщество ремесленников Урала',
            'imagePath'=>$path->getPathStorage(),
        ];
        $view = view('nullpage')->with($arr);
        return Response($view);
    }
    public function mainPage()
    {
        $title = 'Скульптуры из бетона в Екатеринбурге';
        $meta = 'Скульптуры, купить скульптуры из бетона, из бетона, ручная работа';
        $path = new PathConfig();
        $arr = [
            'webTitle' => $title,
            'meta'=> $meta,
            'imagePath'=>$path->getPathStorage(),
        ];
        $view = view('main')->with($arr);
        return Response($view);
    }

    public function botmain()
    {
        $path = new PathConfig();
        $title = 'Telegram bot для самозаняты и мастеров';
        $meta = 'телеграм бот для самозанятых, самозанятый, мастера екб';
        $arr = [
            'webTitle' => $title,
            'meta'=> $meta,
            'imagePath'=>$path->getPathStorage(),
        ];

        $view = view('bot')->with($arr);
        return Response($view);
    }

    public function registration()
    {

        $title = 'Telegram bot для самозаняты и мастеров';
        $meta = 'телеграм бот для самозанятых, самозанятый, мастера екб';
        $arr = [
            'webTitle' => $title,
            'meta'=> $meta,
        ];
        $view = view('auth/login')->with($arr);
        return Response($view);
    }
    public function master()
    {
        $path = new PathConfig();
        $webTitle = 'Наш мастер';
        $nikname = 'Наш замечательный мастер';
        $meta = 'телеграм бот для самозанятых, самозанятый, мастера екб';
        $imageContainer = ['img.png', 'img_1.png', 'img_2.png', 'img_3.png'];
        $rootMaster = 'ivanov-ivan';
        $arr = [
            'webTitle'=> $webTitle,
            'nikname' => $nikname,
            'meta'=> $meta,
            'imageContainer'=>$imageContainer,
            'rootMaster'=>$rootMaster,
            'imagePath'=>$path->getPathStorage(),
        ];
        $view = view('master')->with($arr);
        return Response($view);
    }
    public function allMasters()
    {
        $webTitle = 'Ремесленники и ремесленницы Урала';
        $nikname = 'Иванов Иван';
        $meta = 'телеграм бот для самозанятых, самозанятый, мастера екб';
        $tags = ['Дерево', 'Метал', 'Кожа'];
        $craft = 'Изделия из дерева';
        $path = new PathConfig();
        $arr = [
            'webTitle'=> $webTitle,
            'nikname' => $nikname,
            'craft'=> $craft,
            'meta'=> $meta,
            'tags'=> $tags,
            'imagePath'=>$path->getPathStorage(),
        ];
        $view = view('allmasters')->with($arr);
        return Response($view);
    }

}
