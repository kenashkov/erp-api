<?php

declare(strict_types=1);

namespace Kenashkov\ErpApi\Interfaces;

use Kenashkov\ErpApi\Traits\ProductTrait;

/**
 * Interface ProductInterface
 * @package Kenashkov\ErpApi
 *
 * Represents a product that can be added to an ERP
 *
 * Individual methods for each property as provided instead of a single method retreiving all the properties for a more
 * formal validation and descriptive purpose.
 */
interface ProductInterface
{

    /**
     * There is a erp_ prefix to the methods as otherwise they may be too generic (for example get_id())
     * and interfere with another class hierarchy when the interface is implemented
     * @return string
     */
    public function get_erp_id(): string;

    /**
     * @return string
     */
    public function get_erp_organization(): string;

    public function get_erp_name(): string;

    public function get_erp_description(): string;

    public function get_erp_account(): string;

    public function get_erp_product_number(): string;

    public function get_erp_suppliers_product_number(): string;

    public function get_erp_sales_tax_ruleset(): string;

    public function get_erp_is_archived(): bool;

    //public function get_prices(): array;

    /**
     * Returns an associative array as expected by the ERP API
     * @see self::PROPERTY_METHOD_MAP
     * @return array
     */
    public function get_erp_product_formatted_array(): array;

}