<?php

class PokerDice
{
    public static $dau = array('As','K','Q','J',7,8);

    public static function getNum()
    {
        return rand(0,5);
    }

    public static function shapeName(int $val)
    {
        return self::$dau[$val];
    }
}