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

}
