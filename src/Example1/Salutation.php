<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example1;

/**
 * Constructor injection example.
 */
final readonly class Salutation
{
    public function __construct(
        private Writer $writer,
    ) {
    }

    public function exclaim(): string
    {
        return $this->writer->write('Hello PHP Bergen!');
    }
}
