<?php
use Orion\factories\Gun;
use Orion\factories\Knife;
use Orion\models\Arena;
use Orion\models\Game;
use Orion\Player;

require_once __DIR__.'/vendor/autoload.php';

$faker = \Faker\Factory::create();

$gun = new Gun();
$knife = new Knife();

$player = new Player();
$player->equipWeapon($gun);
$player->equipWeapon($knife);
$player->setName($faker->firstName. ' '.$faker->lastName);
$player->setHp(1000);

$arena = new Arena();
$game = new Game($player);
$game->selectStage($arena->getArenaDessert(), Arena::$LEVEL_EASY);
$game->gameStart();
$game->gameOver();

// composer install / php composer.phar install
// composer update / php composer.phar update
// composer show / php composer.phar show
// composer remove vendor/package / php composer.phar remove vendor/package vendor/package2
// composer global / php composer.phar global require fabpot/php-cs-fixer
// composer search {keyword} / php composer.phar search monolog
// composer depends vendor/package / php composer.phar depends doctrine/lexer
// composer validate / php composer.phar validate
// composer status / php composer.phar status
// composer self-update / php composer.phar self-update
// composer dump-autoload / php composer.phar dump-autoload
// composer clear-cache / php composer.phar clear-cache