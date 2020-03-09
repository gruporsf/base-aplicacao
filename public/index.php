<?php

require_once '../vendor/autoload.php';

$home = new App\Controllers\HomeController();

var_dump($home->index());