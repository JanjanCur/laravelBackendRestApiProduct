<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('products',
    [App\Http\Controllers\ProductController::class, 'products']
);
Route::get('categories',
    [App\Http\Controllers\ProductController::class, 'categories']
);
Route::get('filter-products',
    [App\Http\Controllers\ProductController::class, 'filter_products']
);
Route::get('edit-product/{id}',
    [App\Http\Controllers\ProductController::class, 'edit_product']
);
Route::post('save-product',
    [App\Http\Controllers\ProductController::class, 'save_product']
);
Route::delete('delete-product/{id}',
    [App\Http\Controllers\ProductController::class, 'delete_product']
);
Route::post('update-product/{id}',
    [App\Http\Controllers\ProductController::class, 'update_product']
);
