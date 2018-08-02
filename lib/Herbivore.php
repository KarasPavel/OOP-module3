<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 31.07.18
 * Time: 19:38
 */
include_once "AnimalAbstract.php";

class Herbivore extends AnimalAbstract
{

    public function __construct(string $name, int $amount, int $speed, int $health, int $damage)
    {
        parent::__construct($name, $amount, $speed, $health, $damage);
    }

    public function eat()
    {
        $this->amount += rand(0,1);
    }
}
