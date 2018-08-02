<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 31.07.18
 * Time: 21:06
 */
include_once "lib/Carnivore.php";
include_once "lib/Herbivore.php";
include_once "lib/Confrontation.php";

$hyena = new Carnivore("Гиены", 20, 60, 10, 7);
$zebra = new Herbivore("Зебры", 22, 65, 7, 1);
$cow = new Herbivore("Коровы",20,30,10,0);
$lion = new Carnivore("Львы",10,72,11,20);
$fight = new Confrontation($hyena, $zebra);
$fight = new Confrontation($lion,$cow);
$fight = new Confrontation($lion,$zebra);