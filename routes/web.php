
<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShopController;

// Main Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/hot-deals', [PageController::class, 'hotDeals'])->name('hot-deals');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');



// Additional Routes (placeholders)
Route::get('/cart', function () { return view('pages.cart'); })->name('cart');
Route::get('/wishlist', function () { return view('pages.wishlist'); })->name('wishlist');
Route::get('/account', function () { return view('pages.account'); })->name('account');
Route::get('/order-tracking', function () { return view('pages.order-tracking'); })->name('order-tracking');
Route::get('/shipping-info', function () { return view('pages.shipping-info'); })->name('shipping-info');
Route::get('/returns', function () { return view('pages.returns'); })->name('returns');
Route::get('/size-guide', function () { return view('pages.size-guide'); })->name('size-guide');
