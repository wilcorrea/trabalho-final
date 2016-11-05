<?php

define('__APP_ROOT__', dirname(__DIR__));

require_once __APP_ROOT__ . '/vendor/autoload.php';

use Simples\Core\App;

$output = App::output(__APP_ROOT__);

App::http($output);
