<?php

namespace Phpbergen\Di\Example2;

interface WriterInterface
{
    public function write(string $message): void;
}
