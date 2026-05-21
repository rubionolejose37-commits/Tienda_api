<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Resources\ProductsResource;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    public function index()
    {
        return ProductsResource::collection(Product::all());
    }

    public function store(StoreProductsRequest $request)
    {
        $product = Product::create($request->validated());
        
        return new ProductsResource($product);
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        
        return new ProductsResource($product);
    }

    public function update(UpdateProductsRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->validated());
        
        return new ProductsResource($product);
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(null, 204);
    }
}