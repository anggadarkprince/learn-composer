<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 24/11/16
 * Time: 19:07
 */

namespace Orion\factories;

use Orion\interfaces\Weapon;

class Gun implements Weapon
{

    function attack()
    {
        echo "Show bullets rapidly<br>";
    }

    function reload()
    {
        echo "Switch empty magazine with new one<br>";
    }

    function __toString()
    {
        return "Gun";
    }
}