<?php

declare(strict_types=1);

namespace Kenashkov\ErpApi\Interfaces;

/**
 * Interface ErpInterface
 * @package Kenashkov\ErpApi\Interfaces
 */
interface ErpInterface
{

    /**
     * Get the API url in use
     * @return string
     */
    public function get_api_url(): string;

    /**
     * Get the API token in use
     * @return string
     */
    public function get_api_token(): string;

    /**
     * Used for both updategin existing products and creating new ones.
     * @param ProductInterface $Product
     * @return string
     */
    public function update_product(ProductInterface $Product): string;

    /**
     * Deletes the provided product
     * @param ProductInterface $Product
     */
    public function delete_product(ProductInterface $Product): void;

    /**
     * Returns a product from the ERP based on ERP compatible product from the local app
     * @param ProductInterface $Product
     * @return ProductInterface
     */
    public function get_product(ProductInterface $Product): ProductInterface;

    /**
     * Returns a product form the EPR by product_erp_id
     * @param string $product_erp_id
     * @return ProductInterface
     */
    public function get_product_by_id(string $product_erp_id): ProductInterface;

    /**
     * Returns an array of ProductInterface.
     * It is better to return an array of defined structure than just an two-dimensional associative array that is not validated.
     * @param string $class_name
     * @return ProductInterface[]
     */
    public function get_products(int $page = 0, int $page_size = 0): array;


}