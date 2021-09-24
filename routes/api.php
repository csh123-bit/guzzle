<?php

use App\Http\Controllers\RequestController;
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

Route::get("posts",[RequestController::class,"postsListing"]);

Route::post('create-post', [RequestController::class,"createPost"]);

Route::put('update-post',[RequestController::class,"updatePost"]);

Route::delete('delete-post',[RequestController::class,'deletePost']);
