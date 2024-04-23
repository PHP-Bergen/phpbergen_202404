<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example1_1;

final readonly class Writer implements WriterInterface
{
    public function write(string $message): string
    {
        return $message;
    }
}
