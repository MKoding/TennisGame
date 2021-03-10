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

    /**
     * @test
     **/
    public function if_game_score_is_2_0_returns_Thirty_Love()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");

        $this->assertEquals("Thirty - Love", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_0_2_returns_Love_Thirty()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Love - Thirty", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_2_1_returns_Thirty_Fifteen()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Thirty - Fifteen", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_1_2_returns_Fifteen_Thirty()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Fifteen - Thirty", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_2_2_returns_Thirty_all()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Thirty all", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_3_0_returns_Forty_Love()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");

        $this->assertEquals("Forty - Love", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_0_3_returns_Love_Forty()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Love - Forty", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_3_1_returns_Forty_Fifteen()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Forty - Fifteen", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_1_3_returns_Fifteen_Forty()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Fifteen - Forty", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_3_2_returns_Forty_Thirty()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Forty - Thirty", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_2_3_returns_Thirty_Forty()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Thirty - Forty", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_3_3_returns_Deuce()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Deuce", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_4_3_returns_Advantage_Player1()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Advantage Mikel", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_3_4_returns_Advantage_Player2()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Advantage Pablo", $tennisGame->getScore());
    }

    /**
     * @test
     **/
    public function if_game_score_is_4_4_returns_Deuce()
    {
        $tennisGame = new TennisGame("Mikel", "Pablo");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Mikel");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");
        $tennisGame->wonPoint("Pablo");

        $this->assertEquals("Deuce", $tennisGame->getScore());
    }
}
