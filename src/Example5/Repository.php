<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example5;

final readonly class Repository
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function getProduct(): array
    {
        return [
            'id' => $this->product->id(),
            'name' => $this->product->name(),
            'price' => $this->product->price(),
        ];
    }

}
