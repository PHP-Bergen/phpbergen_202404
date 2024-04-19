<?php

namespace Phpbergen\Di\Example2;

class StandardFormatter implements FormatterInterface
{
    public function format(string $message): string
    {
        return $message;
    }
}
