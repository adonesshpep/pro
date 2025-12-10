<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'lan'=>'string|in:en,sw'
        ]);
        return response()->json(['data' => ProductResource::collection(Product::all())], 200);
    }
}
