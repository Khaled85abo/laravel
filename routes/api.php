<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Products;
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

Route::post('/getProducts', function(Request $request){
    $output= Products::findAll($request->all());
    if($output  == 500){
        return response()->json(['message' => 'Internal server error'], 500);
    }
    return response()->json($output);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
