<?php

declare(strict_types=1);

use Phpbergen\Di\Example3\HtmlFormatter;
use Phpbergen\Di\Example3\Salutation;
use Phpbergen\Di\Example3\Writer;

require_once __DIR__ . '/vendor/autoload.php';

// Example 3 with setter injection.
$writer = new Writer();
$writer->setFormatter(new HtmlFormatter());
$salutation = new Salutation($writer);
$salutation->exclaim();
