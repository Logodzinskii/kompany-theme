<?php

namespace App\Http\Controllers;

class PathConfig
{
    public $pathStorage;

    public function __construct()
    {
        $this->setPathStorage('storage/app/public/');
        //$this->setPathStorage('storage/');
    }
    /**
     * @param mixed $pathStorage
     */
    public function setPathStorage($pathStorage): void
    {
        $this->pathStorage = $pathStorage;
    }

    /**
     * @return mixed
     */
    public function getPathStorage()
    {
        return $this->pathStorage;
    }
}
