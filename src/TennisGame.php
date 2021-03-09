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
            case [0, 1]:
                return "Love - Fifteen";
            case [1, 1]:
                return "Fifteen all";
            case [2, 0]:
                return "Thirty - Love";
            case [2, 1]:
                return "Thirty - Fifteen";
            case [1, 2]:
                return "Fifteen - Thirty";
            case [2, 2]:
                return "Thirty all";
            case [3, 2]:
                return "Forty - Thirty";
            case [2, 3]:
                return "Thirty - Forty";
            case [3, 3]:
            case [4, 4]:
                return "Deuce";
            case [4, 3]:
                return "Advantage Mikel";
            case [3, 4]:
                return "Advantage Pablo";
        }
    }
}