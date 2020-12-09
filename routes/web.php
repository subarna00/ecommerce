<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontProductListController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[FrontProductListController::class,'index']);
Route::get('/product/{id}',[FrontProductListController::class,'show'])->name('product.view');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'auth','middleware'=>['auth','isAdmin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::resource('/category',CategoryController::class);
    Route::get('/sub_categories/{id}',[ProductController::class,'loadSubCategories']);
    Route::resource('/sub_category',SubCategoryController::class);
    Route::resource('/products',ProductController::class);
    
});

