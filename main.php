<?php

require __DIR__ . '/vendor/autoload.php';

$match1 = new \App\Match(
    "Galatasaray",
    "Fenerbahçe"
);

$match2 = new \App\Match(
    "Barcelona",
    "Real Madrid"
);

$match3 = new \App\Match(
    "Milan",
    "Inter"
);

$scoreBoard1 = new \App\Scoreboard("SB1");
$scoreBoard1->addMatch($match1);
$scoreBoard1->addMatch($match2);
$scoreBoard1->show();

$scoreBoard2 = new \App\Scoreboard("SB2");
$scoreBoard2->addMatch($match1);
$scoreBoard2->addMatch($match3);
$scoreBoard2->show();

$match1->incrementHomeTeamScore();
$match2->incrementAwayTeamScore();
$match3->incrementAwayTeamScore();

