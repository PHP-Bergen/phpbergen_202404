<?php

namespace Phpbergen\Di\Example3;

class StandardFormatter implements FormatterInterface
{
    public function format(string $message): string
    {
        return $message;
    }
}
