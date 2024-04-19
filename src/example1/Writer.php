<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example1;

class Writer
{

    public function write(string $message): void
    {
        echo $message;
    }
}
