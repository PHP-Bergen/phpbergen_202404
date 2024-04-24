<?php

namespace Phpbergen\Di\Example5;

final class Product
{
    private int $id = 2;
    private int $price = 100;
    private string $product = 'Hansa';

    public function name(): string
    {
        return $this->product;
    }

    public function price(): float
    {
        return $this->price;
    }

    public function id(): int
    {
        return $this->id;
    }

}
