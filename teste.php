<?php
require_once __DIR__.'/bootstrap.php';

use Rancher\Client;

echo '<pre>';

$client = new Rancher\Client('http://localhost:8080/v1', '27A79F2F88E2B3094A98', 'EGfzCNP5C9fPMMX5QWQdgmT3f3ehu8aHLQ1UC9Ta');
$project = $client->getProjects()->first();
$host = $project->getHosts()->first();

echo json_encode($host->getInstances('1i16'));
die;
