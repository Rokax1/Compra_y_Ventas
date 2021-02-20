<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/','LandingPage\LandingPageController@index')->name('LandingPage.index');

Route::get('/productos/{id}','LandingPage\LandingPageController@show')->name('LandingPage.show');


Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('Dashboard')->middleware('auth')->group(function(){

    Route::get('/','Dashboard\DashboardController@index')->name('Dashboard.index');

    //rutas productos
    Route::get('/Restore/{id}', 'Products\ProductsController@restore')->name('Products.restore');
    Route::get('/PapeleraProductos', 'Products\ProductsController@indexRestore')->name('Products.papelera');
    Route::resource('/Products', 'Products\ProductsController');

    //rutas categorias
    Route::get('/Restore/{id}', 'Categories\CategoriesController@restore')->name('Categories.restore');
    Route::get('/PapeleraCategorias', 'Categories\CategoriesController@indexRestore')->name('Categories.papelera');
    Route::resource('/Categories', 'Categories\CategoriesController');








});
