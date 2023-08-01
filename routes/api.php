<?php

use App\Http\Controllers\API\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



// Update a product;
// Upload a photo for a product;
// Delete a product.

Route::namespace('API')->group(function(){
    // Retrieve all products with pagination;
    Route::get('/products',[ProductsController::class,'index']);
    // Create a new product;
    Route::post('/products',[ProductsController::class,'store']);
    // Retrieve a specific product;
    Route::get('/products/{id}',[ProductsController::class,'show']);
});