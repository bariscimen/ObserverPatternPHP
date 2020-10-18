<?php

namespace App;

class Scoreboard implements Observer
{
    private $matches = [];
    private $name;

    /**
     * ScoreBoard constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param Match $match
     */
    public function addMatch(Match $match)
    {
        $match->attach($this);
        $this->matches[] = $match;
    }

    /**
     * @param Match $match
     */
    public function removeMatch(Match $match)
    {
        $match->detach($this);
        $this->matches = array_diff($this->matches, [$match]);
    }

    /**
     * Display the Scoreboard
     */
    public function show()
    {
        echo "Scoreboard: $this->name" . PHP_EOL;
        foreach ($this->matches as $match) {
            echo str_pad($match->getHomeTeam(), 20, " ", STR_PAD_LEFT);
            echo " " . $match->getHomeTeamScore();
            echo " - ";
            echo $match->getAwayTeamScore() . " ";
            echo $match->getAwayTeam() . PHP_EOL;
        }
    }

    /**
     * Run when a match is updated.
     */
    public function update()
    {
        echo "A match score has changed." . PHP_EOL;
        $this->show();
    }
}