<?php

use Velolia\Foundation\Application;
use Velolia\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

$app = new Application();
$app->handleRequest(Request::capture());