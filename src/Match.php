<?php

namespace App;

class Match extends Subject
{
    private $homeTeam;
    private $awayTeam;
    private $homeTeamScore;
    private $awayTeamScore;

    /**
     * Match constructor.
     * @param $homeTeam
     * @param $awayTeam
     */
    public function __construct($homeTeam, $awayTeam)
    {
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;
        $this->homeTeamScore = 0;
        $this->awayTeamScore = 0;
    }

    /**
     * Increments Home Team's Score
     */
    public function incrementHomeTeamScore()
    {
        $this->homeTeamScore++;
        $this->notify();
    }

    /**
     * Increments Away Team's Score
     */
    public function incrementAwayTeamScore()
    {
        $this->awayTeamScore++;
        $this->notify();
    }

    /**
     * @return mixed
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @return mixed
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @return int
     */
    public function getHomeTeamScore()
    {
        return $this->homeTeamScore;
    }

    /**
     * @return int
     */
    public function getAwayTeamScore()
    {
        return $this->awayTeamScore;
    }


}