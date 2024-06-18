<?php


use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Route::get('/', [IndexController::class, 'home'])->name('home');
    Route::get('/about', [IndexController::class, 'about'])->name('about');
    Route::get('/products', [IndexController::class, 'products'])->name('products');
    Route::get('/products/{id}', [IndexController::class, 'banner'])->name('banner');
    Route::get('/resources', [IndexController::class, 'resources'])->name('resources');


});



Route::post('/request/demo', [DemoController::class, 'store'])->name('request.demo');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
