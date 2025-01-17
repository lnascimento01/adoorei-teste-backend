<?php

namespace App\Interfaces\Repositories;

use App\Models\SaleProduct;

interface SaleProductRepositoryInterface extends BaseRepositoryInterface
{
    public function create(array $data): SaleProduct;

    public function updateOrCreate(array $criteria, array $data): SaleProduct;
}
