<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example1;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Salutation::class)]
final class SalutationTest extends TestCase
{
    public function testWriteASalutationMessage(): void
    {
        $writer = new Writer();
        $salutation = new Salutation($writer);
        $this->assertSame(
          'Hello PHP Bergen!',
          $salutation->exclaim(),
        );
    }
}
