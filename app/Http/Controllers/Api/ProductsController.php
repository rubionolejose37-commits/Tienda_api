<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProductsResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\storeProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return ProductsResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $products = Product::create($request->validated());
        return new ProductsResource($products);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrfail($id);
        return new ProductsResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product -> update($request->validated());
        return new ProductsResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product -> delete();
        return response()->json(null, 204);
    }
}