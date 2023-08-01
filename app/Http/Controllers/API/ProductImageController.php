<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function uploadPhoto(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $file = $request->file('img');
        $file_name = $file->getClientOriginalName();
        $path = $file->storeAs('product_images', $file_name, 'public');

        $product_image = new ProductImage([
            'filename' => $path
        ]);
        $product->images()->save($product_image);
        // $product->save();
        return response()->json(['message' => 'Photo Saved']);
    }
}
