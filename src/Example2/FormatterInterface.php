<?php

namespace Phpbergen\Di\Example2;

interface FormatterInterface
{
    public function format(string $message): string;
}
