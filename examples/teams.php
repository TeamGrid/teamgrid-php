<?php

require dirname(dirname(__FILE__)).'/vendor/autoload.php';

$teamgrid = new TeamGrid\TeamGrid('api-token');

// GET /teams

$teams = $teamgrid->teams()->all();
var_dump($teams);
