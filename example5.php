<?php

declare(strict_types=1);

use Phpbergen\Di\Example5\DefaultController;

require_once __DIR__ . '/vendor/autoload.php';

$controller = new DefaultController();
var_dump($controller->view('PHP Bergen'));
