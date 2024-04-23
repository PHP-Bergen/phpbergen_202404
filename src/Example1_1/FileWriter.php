<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example1_1;

final readonly class FileWriter implements WriterInterface {

  public function __construct(private string $fileName)
  {
  }

  public function write(string $message): string {
    file_put_contents($this->fileName, $message . PHP_EOL, FILE_APPEND);
    return 'Wrote ' . $message . ' to ' . $this->fileName;
  }

}
