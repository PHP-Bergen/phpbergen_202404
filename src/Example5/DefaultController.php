<?php

declare(strict_types=1);

namespace Phpbergen\Di\Example5;

final class DefaultController
{
    public function view(string $user): array
    {
        $productService = new ProductService();
        $popular = $productService->getBestsellingProducts($user);
        $repository = new Repository();
        $product = $repository->getProduct();

        return [
            'Product' => [
                $product['name'],
                $product['price'],
            ],
            'Partners' => [
                $popular['name'],
                $popular['price'],
            ]
        ];

    }

}
