<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example2;

final readonly class Salutation
{
    public function __construct(
        private Writer $writer,
    ) {
    }

    public function exclaim(): void
    {
        $this->writer->write('Hello PHP Bergen!');
    }
}
