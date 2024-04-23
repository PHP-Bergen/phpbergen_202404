<?php

declare(strict_types=1);

use Phpbergen\Di\Example2\HtmlFormatter;
use Phpbergen\Di\Example2\Salutation;
use Phpbergen\Di\Example2\StandardFormatter;
use Phpbergen\Di\Example2\Writer;

require_once __DIR__ . '/vendor/autoload.php';

// Example 4 composition.

// Both Html- and StandardFormatter implement the FormatterInterface
$htmlFormatter = new HtmlFormatter();
$standardFormatter = new StandardFormatter();

// The Writer class uses composition to print a message using
// either StandardFormatter or HtmlFormatter
$standardWriter = new Writer($standardFormatter);
$standardSalutation = new Salutation($standardWriter);

$htmlWriter = new Writer($htmlFormatter);
$htmlSalutation = new Salutation($htmlWriter);

// Depending on which Formatter instance is passed to Writer,
// it will output the message given to it from Salutation in either plain text
// or HTML
$standardSalutation->exclaim();
$htmlSalutation->exclaim();
