<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\TennisGame;
use PHPUnit\Framework\TestCase;

class TennisGameTest extends TestCase
{
    /**
     * @test
     **/
    public function if_game_starts_and_get_score_returns_Love_all()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");

        $this->assertEquals("Love all", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_1_0_returns_Fifteen_Love()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");

        $this->assertEquals("Fifteen - Love", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_0_1_returns_Love_Fifteen()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Love - Fifteen", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_1_1_returns_Fifteen_all()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Fifteen all", $tennisGame->getScore());
    }
}
