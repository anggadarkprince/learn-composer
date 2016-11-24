<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 24/11/16
 * Time: 17:53
 */

namespace Orion;

use Orion\interfaces\Creature;

class Player implements Creature
{
    private $name;
    private $hp;
    private $weapon;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function equipWeapon($weapon)
    {
        $this->weapon[] = $weapon;
    }

    function run()
    {
        echo "Run with 2 leg like hell<br>";
    }

    function eat()
    {
        echo "Eat kind of disgusting food on earth and beer<br>";
    }
}