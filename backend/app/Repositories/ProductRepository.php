<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

Class ProductRepository implements ProductRepositoryInterface
{
    use HasFactory;

    public function getAll(): Collection
    {
        return Product::all();
    }

    public function getById($productId): Product
    {
        return Product::find($productId);
    }
}
