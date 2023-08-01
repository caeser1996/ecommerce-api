<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Get all the products with pagination
    public function index()
    {
        $products = Products::paginate(10);
        return response()->json($products);
    }

    //  Store a product
    public function store(Request $request)
    {
        $product = Products::create($request->all());
        return response()->json($product, 200);
    }

    public function show($id)
    {
        $product = Products::findOrFail($id);
        return response()->json($product, 200);
    }


}
