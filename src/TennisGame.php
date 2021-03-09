<?php

namespace Deg540\PHPTestingBoilerplate;

class TennisGame
{
    private Player $player1;
    private Player $player2;

    /**
     * TennisGame constructor.
     * @param string $player1Name
     * @param string $player2Name
     */
    public function __construct(string $player1Name, string $player2Name) {
        $this->player1 = new Player($player1Name);
        $this->player2 = new Player($player2Name);
    }

    public function wonPoint(string $playerName):void {
        switch ($playerName) {
            case $this->player1->getName():
                $this->player1->wonPoint();
                break;
            case $this->player2->getName():
                $this->player2->wonPoint();
                break;
        }
    }

    public function getScore():string {
        $player1Score = $this->player1->getScore();
        $player2Score = $this->player2->getScore();

        switch ([$player1Score, $player2Score]) {
            case [0, 0]:
                return "Love all";
            case [1, 0]:
                return "Fifteen - Love";
        }
    }
}