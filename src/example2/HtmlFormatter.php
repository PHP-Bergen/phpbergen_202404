<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example2;

class HtmlFormatter implements FormatterInterface
{

    public function format(string $message): string
    {
        return "<p>$message</p>";
    }

}
