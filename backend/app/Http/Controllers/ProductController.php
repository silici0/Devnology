<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Psy\Util\Json;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll(): JsonResponse
    {
        return response()->json((
            $this->productRepository->getAll()
        ), Response::HTTP_OK);
    }

    public function getById($productId): JsonResponse
    {
        return response()->json((
           $this->productRepository->getById($productId)
        ), Response::HTTP_OK);
    }
}
