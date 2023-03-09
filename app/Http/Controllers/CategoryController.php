<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategory(int $categoryId)
    {
        return new CategoryResource(Category::findOrFail($categoryId));
    }
}
