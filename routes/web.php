<?php

use App\Http\Controllers\Page;
use Illuminate\Support\Facades\Route;

Route::get('/', [Page::class, 'home']);


Route::get('/details', function () {
    return view('product-details');
});
