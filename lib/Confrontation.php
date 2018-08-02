<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 31.07.18
 * Time: 19:44
 */

class Confrontation
{
    protected $restoreCarnivore;
    protected $restoreHerbivore;

    public function __construct(Carnivore $carnivore, Herbivore $herbivore)
    {
        $this->Speed($carnivore, $herbivore);
        if ($carnivore->amount == 0) {
            return true;
        }

        $this->restoreCarnivore = $carnivore->health;
        $this->restoreHerbivore = $herbivore->health;

        while ($carnivore->amount >= 0 || $herbivore->amount >= 0) {
            if ($carnivore->amount <= 0 || $herbivore->amount <= 0) {
                break;
            } else {
                $this->Fight($carnivore, $herbivore);
            }
        }

        $this->Result($carnivore, $herbivore);
    }

    protected function Speed($carnivore, $herbivore): bool
    {
        if ($herbivore->speed > $carnivore->speed) {
            $carnivore->amount = 0;
            echo $herbivore->name . " выжили. " .
                "<br>" . $carnivore->name . " умерли от голода. <br>";
        }

        return true;
    }

    protected function Fight($carnivore, $herbivore)
    {
        $herbivore->health -= $carnivore->damage;
        if ($herbivore->health <= 0) {
            --$herbivore->amount;
            $herbivore->health = $this->restoreHerbivore;
        }
        $carnivore->health -= $herbivore->damage;
        if ($carnivore->health <= 0) {
            --$carnivore->amount;
            $carnivore->health = $this->restoreCarnivore;
        }
        if ($herbivore->amount > 2) {
            $herbivore->eat();
        } elseif ($carnivore->amount > 2) {
            $carnivore->eat();
        }

    }

    protected function Result($carnivore, $herbivore)
    {
        if ($carnivore->amount == 0) {
            echo $herbivore->name . " побеждают в количетсве " . $herbivore->amount .
                "<br>$carnivore->name умерли ";
        } elseif ($herbivore->amount == 0) {
            echo $carnivore->name . " побеждают в количетсве " . $carnivore->amount .
                "<br>$herbivore->name сьедены ";;
        }
        echo "<br>";
        return true;
    }

}


