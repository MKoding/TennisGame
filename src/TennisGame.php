<?php

namespace Deg540\PHPTestingBoilerplate;

class TennisGame
{
    private Player $player1;
    private Player $player2;

    public function __construct(string $player1Name, string $player2Name) {
        $this->player1 = new Player($player1Name);
        $this->player2 = new Player($player2Name);
    }

    public function wonPoint(string $playerName):void {

    }

    public function getScore():string {
        return "Love all";
    }
}