<?php

require dirname(dirname(__FILE__)).'/vendor/autoload.php';

$teamgrid = new TeamGrid\TeamGrid('api-token');

// GET /contacts

$contacts = $teamgrid->contacts()->all();
var_dump($contacts);

// GET /contacts/:id

$contact = $teamgrid->contacts()->find('_id');
var_dump($contact);

// POST /contacts

$contact = $teamgrid->contacts()->create([
  'type' => 'company',
  'companyTitle' => 'Acme Inc.'
]);
var_dump($contact);

// PUT /contacts/:id

$contact = $teamgrid->contacts()->update('_id', [
  'type' => 'company',
  'companyTitle' => 'Acme Inc. V2'
]);
var_dump($contact);
