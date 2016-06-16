<?php

require 'vendor/autoload.php';

$teamgrid = new TeamGrid\TeamGrid('amq89b6wFzebiedhYvqrj4tJy');

// $all = $teamgrid->projects()->all();

/*
var_dump($teamgrid->projects()->update('PaANSaFQ4Ne9JSZyc', [
  'name' => 'API v2'
]));
*/

var_dump($teamgrid->teams()->all());
