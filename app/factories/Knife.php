<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 24/11/16
 * Time: 19:08
 */

namespace Orion\factories;

use Orion\interfaces\Weapon;

class Knife implements Weapon
{

    function attack()
    {
        echo "Thrust enemy with stab it deeply<br>";
    }

    function reload()
    {
        echo "Reload is not necessary<br>";
    }

    function __toString()
    {
        return "Knife";
    }
}