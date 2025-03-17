<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SettingController;

// Authentication routes
Auth::routes();

// Routes requiring authentication
Route::middleware(['auth'])->group(function () {

    // Home Routes
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/home', 'index')->name('home');
    });

    // Parties Routes
    Route::controller(PartyController::class)->group(function () {
        Route::resource('parties', PartyController::class);
        Route::put('/parties/{id}/updateStatus', 'updateStatus')->name('parties.updateStatus');
        Route::post('/check-email', 'checkEmail')->name('check.email');
    });

    // Product Routes
    Route::controller(ProductController::class)->group(function () {
        Route::resource('products', ProductController::class);
        Route::post('/check-product-code', 'checkProductCode')->name('checkProductCode');
        Route::post('/products/add', 'addproduct')->name('addproduct');
        Route::get('/showproduct', 'showallproductdata')->name('showproduct');
        Route::post('/products/update-stock', 'updateStock')->name('products.updateStock');
    });

    // List Routes
    Route::controller(ListController::class)->group(function () {
        Route::get('/get-lists', 'getLists')->name('get-lists');
        Route::get('/createlist/{party_id}', 'createlist')->name('createlist');
        Route::post('/lists', 'store')->name('lists.store');
        Route::get('/lists/{id}', 'show')->name('lists.show');
        Route::get('/lists/{id}/edit', 'edit')->name('lists.edit');
        Route::put('/lists/{id}', 'update')->name('lists.update');
        Route::delete('/lists/{id}', 'destroy')->name('lists.destroy');
        Route::get('/lists/{list}/projects/{party}', 'addCartProject')->name('lists.addcartproject');
        Route::post('/lists/add-to-cart/{list}/{party}', 'addToCart')->name('lists.add-to-cart');
        Route::post('/lists/{list}/view-cart/{party_id}', 'viewCart')->name('lists.view-cart');
        Route::get('/lists/{list}/view-cart/{party_id}', 'viewCart')->name('lists.view-cart-get-method');
        Route::delete('/cart/remove/{list}/{productId}/{partyId}', 'removeFromCart')->name('cart.remove');
        Route::get('/cart/view/{listId}', 'viewCart')->name('cart.view');
        Route::patch('/cart/update/{list}/{productId}', 'updateqty')->name('cart.updateqty');
        Route::post('/orders/save', 'saveOrder')->name('orders.save');
        Route::get('/list/{listId}/party/{partyId}', 'showListParty')->name('showlistparty');
        Route::patch('/orders/{order}/updateQuantity', 'updateQuantity')->name('orders.updateQuantity');
        Route::delete('/orders/{order}', 'destroyOrders')->name('orders.destroyOrders');
        Route::get('/send-email/{list_id}/{party_id}', 'sendEmail')->name('send.email');
    });

    // Order Routes
    Route::controller(OrdersController::class)->group(function () {
        Route::get('/showorder', 'showallorderdata')->name('showorder');
        Route::get('/viewsingalorders/{listId}', 'viewsingalorders')->name('vieworders');
    });

   

    // Category Routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/showcategory', 'showallcategory')->name('showcategory');
        Route::get('/addcategory', 'addcategory')->name('addcategory');
        Route::post('/categorystore', 'categorystore')->name('categorystore');
        Route::get('/editcategory/{category}', 'edit')->name('editcategory');
        Route::delete('/destroycategory/{id}', 'destroycategory')->name('destroycategory');
        Route::put('/updatecategory/{category}', 'update')->name('updatecategory');
        Route::get('/categories', 'getCategories')->name('getCategories');
    });

    // Setting Routes
    Route::controller(SettingController::class)->group(function () {
        Route::get('/settings', 'index')->name('settings.index');
        Route::post('/settings', 'update')->name('settings.update');
    });
});
