<?php
require_once __DIR__ . "/../vendor/autoload.php";

use FlintExample\ExampleApp,
    Flint\Config;

$config = Config::getInstance()->load(__DIR__ . "/../app/config.php");

$app = ExampleApp::getInstance($config);
$app->run();
