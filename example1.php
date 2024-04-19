<?php

declare(strict_types=1);

use Phpbergen\Di\Example1\Salutation;
use Phpbergen\Di\Example1\Writer;

require_once __DIR__ . '/vendor/autoload.php';

// Example 1.
$writer = new Writer();
$salutation = new Salutation($writer);
$salutation->exclaim();

// Example 1.1
$salutation2 = new Salutation($writer);
$salutation2->exclaim();
