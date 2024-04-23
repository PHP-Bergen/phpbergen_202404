<?php

namespace Phpbergen\Di\Example1_1;

interface WriterInterface
{
    public function write(string $message): string;
}
