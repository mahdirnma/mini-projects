<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CategoryRequest;
use App\Http\Resources\CategoryApiResource;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return $this->response(CategoryApiResource::collection($categories));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $category=Category::create($request->all());
        return $this->response(new CategoryApiResource($category),'Category created successfully',201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $this->response(new CategoryApiResource($category),'Category retrieved successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return $this->response(new CategoryApiResource($category),'Category updated successfully',200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return $this->response(null,'Category deleted successfully',200);
    }
}
