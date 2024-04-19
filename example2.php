<?php

declare(strict_types=1);

use Phpbergen\Di\Example2\HtmlFormatter;
use Phpbergen\Di\Example2\Salutation;
use Phpbergen\Di\Example2\Writer;

require_once __DIR__ . '/vendor/autoload.php';

// Example 2 with standard formatter.
$writer = new Writer();
$salutation = new Salutation($writer);
$salutation->exclaim();

// Example 2 with HTML formatter.
$html_writer = new Writer(new HtmlFormatter());
$html_salutation = new Salutation($html_writer);
$html_salutation->exclaim();
