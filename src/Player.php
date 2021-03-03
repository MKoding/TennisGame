<?php

namespace Deg540\PHPTestingBoilerplate;

class Player
{
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}