<?php

namespace Emagia\Characters;


use Emagia\Traits\Skill;

class WildBeast extends Characters
{
    use Skill;

    function __construct()
    {
        $this->stats = [
            'hp'    => rand(60, 90),
            'str'   => rand(60, 90),
            'def'   => rand(40, 60),
            'speed' => rand(40, 60),
            'luck'  => rand(25, 40)
        ];
    }
}
