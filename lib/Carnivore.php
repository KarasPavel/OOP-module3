<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 31.07.18
 * Time: 19:28
 */
include_once "AnimalAbstract.php";

class Carnivore extends AnimalAbstract
{


  public function __construct(string $name, int $amount, int $speed, int $health, int $damage)
  {
      parent::__construct($name, $amount, $speed, $health, $damage);
  }

    public function eat()
    {
        $this->amount += rand(-1,1);
    }
}
