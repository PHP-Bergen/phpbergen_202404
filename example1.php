<?php

declare(strict_types=1);

use Phpbergen\Di\Example1\Salutation;
use Phpbergen\Di\Example1\Writer;

require_once __DIR__ . '/vendor/autoload.php';

// Example 1.
$writer = new Writer();
$salutation = new Salutation($writer);
echo $salutation->exclaim() . PHP_EOL;

// Example 1.1 With separate Salutations and writers.
$salutation2 = new Salutation(new Writer());
echo $salutation2->exclaim() . PHP_EOL;
//var_dump($salutation === $salutation2);

// Example shared Writer.
$salutations3 = new Salutation($writer);
$salutations4 = new Salutation($writer);
echo $salutations3->exclaim() . PHP_EOL;
echo $salutations4->exclaim() . PHP_EOL;
//var_dump($salutations3 === $salutations4);
