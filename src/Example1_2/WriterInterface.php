<?php

namespace Phpbergen\Di\Example1_2;

interface WriterInterface
{
    public function write(string $message): string;
}
