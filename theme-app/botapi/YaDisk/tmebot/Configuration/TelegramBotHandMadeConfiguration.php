<?php

class TelegramBotHandMadeConfiguration
{
    public $botToken;
    public $managerId;
    public $managerIdSecond;
    static private $_ins = NULL;
    public $i=0;

    static public function get_instance()
    {
        if(self::$_ins instanceof self)
        {
            return self::$_ins;
        }
        return self::$_ins = new self;
    }

    public function __construct()
    {
        /**
         * token для бота кухни t.me/ThemeGroupBot
         */
        $this->botToken = "";
        $this->managerId = '';
        $this->managerIdSecond = '';

    }

    private function __clone()
    {

    }

    /**
     * @return string
     */
    public function getBotToken(): string
    {
        return $this->botToken;
    }

    /**
     * @return mixed
     */
    public function getManagerId()
    {
        return $this->managerId;
    }

    /**
     * @return string
     */
    public function getManagerIdSecond(): string
    {
        return $this->managerIdSecond;
    }

}
