<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example5;


final class ProductService
{
    private Repository $repository;

    public function __construct() {
        $this->repository = new Repository();
    }

    public function getBestsellingProducts(string $customer): array
    {
        $product = $this->repository->getProduct();

        if ($customer !== 'PHP Bergen') {
            return $product;
        }

        $product['price'] /= 2;
        return $product;
    }

}
