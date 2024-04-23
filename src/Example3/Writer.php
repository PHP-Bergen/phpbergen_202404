<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example3;

final class Writer implements WriterInterface
{
    private FormatterInterface $formatter;
    public function __construct() {
    }

    public function setFormatter(FormatterInterface $formatter): void {
        $this->formatter = $formatter;
    }

    public function write(string $message): void
    {
        if (isset($this->formatter)) {
            echo $this->formatter->format($message) . PHP_EOL;
        }
    }
}
