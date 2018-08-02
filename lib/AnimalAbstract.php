<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 31.07.18
 * Time: 19:02
 */

abstract class AnimalAbstract
{
    public $name;
    public $amount;
    public $speed;
    public $health;
    public $damage;

    public function __construct($name,$amount,$speed,$health,$damage)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->speed = $speed;
        $this->health = $health;
        $this->damage = $damage;

    }

    abstract public function eat();

}
