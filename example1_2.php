<?php

declare(strict_types=1);

use Phpbergen\Di\Example1_2\Identify;
use Phpbergen\Di\Example1_2\Salutation;
use Phpbergen\Di\Example1_2\SecureMessageWriter;
use Phpbergen\Di\Example1_2\Writer;

require_once __DIR__ . '/vendor/autoload.php';

// Example 1.
$writer = new Writer();
$salutation = new Salutation($writer);
echo $salutation->exclaim() . PHP_EOL;

// Example 1.1 use a decorator.
$writer = new SecureMessageWriter(new Identify(), $writer);
$salutation = new Salutation($writer);
echo $salutation->exclaim() . PHP_EOL;
