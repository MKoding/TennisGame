<?php

namespace Deg540\PHPTestingBoilerplate;

class TennisGame
{
    private const ZERO = "Love";
    private const ONE = "Fifteen";
    private const TWO = "Thirty";
    private const THREE = "Forty";
    private const DEUCE = "Deuce";
    private const ADVANTAGE = "Advantage";
    private const WIN = "Win";

    private Player $player1;
    private Player $player2;

    private bool $deuce = false;

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
                if (!$this->deuce && !$this->player2->getWinner() && ($this->player1->getScore() >= 4)) {
                    $this->player1->win();
                }
                break;
            case $this->player2->getName():
                $this->player2->wonPoint();
                if (!$this->deuce && !$this->player1->getWinner() && ($this->player2->getScore() >= 4)) {
                    $this->player2->win();
                }
                break;
        }

        if (!$this->player1->getWinner() && !$this->player2->getWinner()) {
            if ($this->player1->getScore() >= 3 && ($this->player1->getScore() == $this->player2->getScore())) {
                $this->deuce = true;
            }

            if ($this->deuce && (abs($this->player1->getScore() - $this->player2->getScore()) > 1)) {
                $this->deuce = false;
                if ($this->player1->getScore() > $this->player2->getScore()) {
                    $this->player1->win();
                } else {
                    $this->player2->win();
                }
            }
        }
    }

    public function getScore():string {
        $player1Win = $this->player1->getWinner();
        $player2Win = $this->player2->getWinner();
        $player1Score = $this->player1->getScore();
        $player2Score = $this->player2->getScore();

        $exit = "";
        if (!$this->deuce && !$player1Win && !$player2Win) {
            switch ($player1Score) {
                case 0:
                    $exit .= self::ZERO;
                    break;
                case 1:
                    $exit .= self::ONE;
                    break;
                case 2:
                    $exit .= self::TWO;
                    break;
                case 3:
                    $exit .= self::THREE;
                    break;
            }

            if (($player1Score == $player2Score) && $player1Score < 3) {
                $exit .= " all";
                return $exit;
            } else {
                switch ($player2Score) {
                    case 0:
                        $exit .= " - " . self::ZERO;
                        return $exit;
                    case 1:
                        $exit .= " - " . self::ONE;
                        return $exit;
                    case 2:
                        $exit .= " - " . self::TWO;
                        return $exit;
                    case 3:
                        $exit .= " - " . self::THREE;
                        return $exit;
                }
            }
        } else if ($this->deuce) {
            $difference = abs($player1Score - $player2Score);
            if ($difference == 0) {
                return self::DEUCE;
            } else if ($player1Score - $player2Score > 0) {
                return self::ADVANTAGE . " " . $this->player1->getName();
            } else {
                return self::ADVANTAGE . " " . $this->player2->getName();
            }
        } else if ($player1Win){
            return self::WIN . " " . $this->player1->getName();
        } else {
            return self::WIN . " " . $this->player2->getName();
        }

        return "ERROR";
    }
}