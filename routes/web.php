<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings',[
        'heading'=>'Lasting List',
        'listings'=>Listing::all()
    ]);
});
Route::get('/listings/{id}', function ($id) {
    return view('listing',[
        'heading'=>'Lasting List',
        'listing'=>Listing::find($id)
    ]);
});

