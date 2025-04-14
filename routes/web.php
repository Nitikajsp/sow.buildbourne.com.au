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
use App\Http\Controllers\WorkGroupController;


// Authentication routes
Auth::routes();

// Routes requiring authentication
Route::middleware(['auth'])->group(function () {

    // Home Routes
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/home', 'index')->name('home');
    });

    Route::controller(PartyController::class)->group(function () {
        Route::resource('parties', PartyController::class);
        Route::put('/parties/{id}/updateStatus', 'updateStatus')->name('parties.updateStatus');
        Route::post('/check-email', 'checkEmail')->name('check.email');
        Route::post('/lists/{list}/projects/{party}/work-type', 'updateWorkType')->name('parties.updateWorkType');
        Route::get('/site-work/{party}/list/{list}', 'showSiteWork')->name('parties.siteWork');
        // Route::post('/site-work/{party}/save', 'saveSiteWork')->name('parties.saveSiteWork');
        Route::post('/save-site-work/{party}/list/{list}', 'saveSiteWork')->name('parties.saveSiteWork');
        Route::get('/submissions', 'showAllSubmissions')->name('submissions.index');
        Route::get('/submissions/{id}/edit', 'editsubmissions')->name('editsubmissions.show');
        Route::get('/submissions/{id}', 'showsubmissions')->name('showsubmissions.show');

        Route::put('/submissions/{id}/update',  'updateSubmission')->name('submission.update');
    });

    Route::post('/submissions/{id}', [PartyController::class, 'update'])->name('submissions.update');


    Route::controller(WorkGroupController::class)->prefix('work-group')->name('workgroup.')->group(function () {

        Route::get('addworkgroup', 'addworkgroup')->name('addworkgroup');
        Route::get('showworkgroup', 'showworkgroup')->name('showworkgroup');
        Route::get('addworkquestion', 'addworkquestion')->name('addworkquestion');
        Route::post('save', 'store')->name('store');
        Route::get('workgroupview/{id}', 'workgroupview')->name('workgroupview');
        Route::get('workgroupedit/{id}', 'workgroupedit')->name('workgroupedit');
        Route::put('workgroupupdate/{id}', 'workgroupupdate')->name('workgroupupdate');
        Route::delete('workgroupdelete/{id}', 'workgroupdelete')->name('workgroupdelete');


        Route::get('showgroupquestion', 'showgroupquestion')->name('showgroupquestion');
        Route::post('saveworkquestion', 'saveworkquestion')->name('saveworkquestion');
        Route::get('workquestionview/{id}', 'workquestionview')->name('workquestionview');
        Route::delete('workquestiondelete/{id}', 'workquestiondelete')->name('workquestiondelete');
        Route::get('workquestionedit/{id}', 'workquestionedit')->name('workquestionedit');
        Route::get('workgroupquestionedit/{id}', 'workgroupquestionedit')->name('workgroupquestionedit');
        Route::put('workgroupquestionupdate/{id}', 'workgroupquestionupdate')->name('workgroupquestionupdate');
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
        Route::get('/createproject/{party_id}', 'createproject')->name('createlist');
        Route::post('/lists', 'store')->name('lists.store');
        Route::get('/lists/{id}', 'show')->name('lists.show');
        Route::get('/project/{id}/edit', 'edit')->name('lists.edit');
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
        Route::get('/project/{listId}/party/{partyId}', 'showListParty')->name('showlistparty');
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
