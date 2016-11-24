<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 24/11/16
 * Time: 19:20
 */

namespace Orion\interfaces;


interface Weapon
{
    function attack();
    function reload();
    function __toString();
}