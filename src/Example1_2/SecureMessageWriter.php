<?php

namespace Phpbergen\Di\Example1_2;

/**
 * Decorator pattern. Inception pattern.
 */
final readonly class SecureMessageWriter implements WriterInterface
{

    public function __construct(
      private Identify $identify,
      private WriterInterface $writer,
    ) {
    }

    public function write(string $message): string
    {
        if ($this->identify->isAuthenticated()) {
            return $this->writer->write('Secure message to auth. user: ' . $message);
        }
        return '';
    }

}
