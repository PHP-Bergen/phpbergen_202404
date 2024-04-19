<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example2;

final readonly class Writer implements WriterInterface
{
    public function __construct(
        private FormatterInterface $formatter = new StandardFormatter(),
    ) {
    }

    public function write(string $message): void
    {
        echo $this->formatter->format($message) . PHP_EOL;
    }
}
