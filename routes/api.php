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

Route::post('/products', function(Request $request){
    // dd($request->getContent());
    // $productsId = $request->getContent();
    $productsId = [
    98765,
    37657,
    890678
];
    $output= Products::find($productsId);
    if($output  == 500){
        return response('Internal server error', 500);
    }
    return response()->json($output);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
