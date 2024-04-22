<?php

namespace Phpbergen\Di\Example3;

interface FormatterInterface
{
    public function format(string $message): string;
}
