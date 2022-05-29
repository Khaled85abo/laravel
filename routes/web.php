<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/products/{productId}', function($productId){
    // return  '<h1>Hello Woorld!</h1>';
    // die and dump, debugging method
    return response('Post with Id: ' . $productId . ' Has been accessed by a user!');
})-> where('id', '[0-9]+');

Route::get('/search', function(Request $request){
    // dd($request);
    return "Search query with name: " . $request->name . " and lastname: " . $request->lastname;

});

Route::get('/listings', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});
Route::get('listings/{id}', function($id){
    $listing = Listing::find($id);
    return view('listing', [
        'data' => Listing::find($id)
    ]);
});
