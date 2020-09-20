<?php

declare(strict_types=1);

namespace Kenashkov\ErpApi\Interfaces;

/**
 * Interface ErpInterface
 * @package Kenashkov\ErpApi\Interfaces
 */
interface ErpInterface
{
    public function get_api_url(): string;

    public function get_api_token(): string;

    public function update_product(ProductInterface $Product, ?\stdClass &$Response = NULL): string;

    public function delete_product(ProductInterface $Product, ?\stdClass &$Response = NULL): void;

    /**
     * Returns an array of ProductInterface.
     * It is better to return an array of defined structure than just an two-dimensional associative array that is not validated.
     * @param string $class_name
     * @return ProductInterface[]
     */
    public function get_products(int $page = 0, int $page_size = 0): array;


}