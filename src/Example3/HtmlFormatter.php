<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example3;

final class HtmlFormatter implements FormatterInterface
{
    public function format(string $message): string
    {
        return "<p>$message</p>";
    }
}
