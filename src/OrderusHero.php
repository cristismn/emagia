<?php

namespace Emagia;

use Emagia\Characters\Hero;
use Emagia\Characters\WildBeast;
use Emagia\Game\BattleSimulator;

class OrderusHero
{

    public function spawnBeast()
    {
        $beast = new WildBeast();
        $beast->setName('WildBeast');
        return $beast;
    }

    public function spawnHero()
    {
        $hero = new Hero();
        $hero->setName('Orderus');
        return $hero;
    }

    public function battle()
    {
        $hero = $this->spawnHero();
        $beast = $this->spawnBeast();
        $battle = new BattleSimulator($hero, $beast);
        $battle->start();
    }
}
