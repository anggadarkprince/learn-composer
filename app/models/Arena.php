<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 24/11/16
 * Time: 19:12
 */

namespace Orion\models;


class Arena
{
    public static $LEVEL_EASY = 1;
    public static $LEVEL_MEDIUM = 2;
    public static $LEVEL_HARD = 3;

    public function getArenaJungle(){
        return "Kalimantan Deep Forest<br>";
    }

    public function getArenaDessert(){
        return "Sahara Temper Heat<br>";
    }

    public function getArenaCity(){
        return "New York Battlefield<br>";
    }
}