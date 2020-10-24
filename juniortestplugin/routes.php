<?php

use Illuminate\Support\Facades\Route;
use App06\Juniortestplugin\Models\Product;
use Illuminate\Http\Request;

Route::get('/api/items/list', function(Request $request) {
    $categoryId = $request->get('category');
    $products = Product::where('category_id', $categoryId)->get();

    return $products;
});