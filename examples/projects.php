<?php

require dirname(dirname(__FILE__)).'/vendor/autoload.php';

$teamgrid = new TeamGrid\TeamGrid('api-token');

// GET /projects

$projects = $teamgrid->projects()->all();
var_dump($projects);

// GET /projects/:id

$project = $teamgrid->projects()->find('_id');
var_dump($project);

// POST /projects

$project = $teamgrid->projects()->create([
  'name' => 'Acme App'
]);
var_dump($project);

// PUT /projects/:id

$project = $teamgrid->projects()->update('_id', [
  'name' => 'Acme App V2'
]);
var_dump($project);
