<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\CategoriesResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Category::all();
        return CategoriesResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        $category = Category::create($request->validated());
        return new CategoriesResource($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrfail($id);
        return new CategoriesResource($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category -> update($request->validated());
        return new CategoriesResource($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category -> delete();
        return response()->json(null, 204);
    }
}
