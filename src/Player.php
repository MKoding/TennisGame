<?php

namespace Deg540\PHPTestingBoilerplate;

class Player
{
    private string $name;
    private int $score;
    private int $winner;

    /**
     * Player constructor.
     * @param string $name
     */
    public function __construct(string $name) {
        $this->name = $name;
        $this->score = 0;
        $this->winner = false;
    }

    public function getName():string {
        return $this->name;
    }

    public function wonPoint():void {
        $this->score++;
    }

    public function getScore():int {
        return $this->score;
    }

    public function win():void {
        $this->winner = true;
    }

    public function getWinner():bool {
        return $this->winner;
    }
}