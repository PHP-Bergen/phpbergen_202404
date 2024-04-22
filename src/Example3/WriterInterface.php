<?php

namespace Phpbergen\Di\Example3;

use Phpbergen\Di\Example3\FormatterInterface;

interface WriterInterface
{
    public function write(string $message): void;
}
