<?php

use Illuminate\Support\Facades\Route;
use App\Product;
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

    /* name
    slug
    category_id
    short_description
    description
    specifications
    extra_info
    status
    active
    main_slider */

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
