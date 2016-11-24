<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 24/11/16
 * Time: 19:10
 */

namespace Orion\models;


use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Orion\Player;

class Game
{
    private $level;
    private $arena;
    private $player;
    private $score;

    public function __construct(Player $player)
    {
        $this->player = $player;
        $this->score = 0;
    }

    public function selectStage($arena, $level)
    {
        $this->arena = $arena;
        $this->level = $level;
        echo "You're in $arena difficulty $level<br>";
    }

    public function gameStart()
    {
        echo "Game now is starting in $this->arena";
        foreach ($this->player->getWeapon() as $weapon) {
            $this->player->run();
            if (rand(1, 10) < 5) {
                echo "<br>";
                $this->player->eat();
                $weapon->attack();
                $this->score += 10;
                echo "You've kill a monster with " . $weapon . "<br><br>";
            }
        }
    }

    public function gamePause()
    {
        echo "Game now is pausing in $this->arena<br>";
    }

    public function gameOver()
    {
        echo "Game is ended in $this->arena<br>";

        $log = new Logger($this->player->getName());
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addWarning('Game over with score: ' . $this->score);
    }

}