<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example3;

final class Writer implements WriterInterface
{
    private FormatterInterface $formatter;
    public function __construct() {
    }

    public function write(string $message): void
    {
        echo $this->formatter->format($message) . PHP_EOL;
    }

    public function setFormatter(FormatterInterface $formatter): void {
      $this->formatter = $formatter;
    }
}
