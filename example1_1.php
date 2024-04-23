<?php

declare(strict_types=1);

use Phpbergen\Di\Example1_1\FileWriter;
use Phpbergen\Di\Example1_1\Salutation;
use Phpbergen\Di\Example1_1\Writer;

require_once __DIR__ . '/vendor/autoload.php';

// Example 1.
$writer = new Writer();
$salutation = new Salutation($writer);
echo $salutation->exclaim() . PHP_EOL;

// Example 1.1 use writer alone.
$file_writer = new FileWriter(__DIR__ . '/example1_1.log');
echo $file_writer->write('Use writer directly') . PHP_EOL;

// Inject writer into constructor.
$salutation2 = new Salutation($file_writer);
echo $salutation2->exclaim() . PHP_EOL;

// Simple loop example.
$writers = [$writer, $file_writer];
foreach ($writers as $writer) {
  $salutation = new Salutation($writer);
  echo $salutation->exclaim() . PHP_EOL;
}
