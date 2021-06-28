<?php

use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

//Route::get('/index', AdminController:: class, 'index');
//
//Route::get('/form', AdminController:: class, 'form');
//Route::get('/calendar', AdminController:: class, 'calendar');
//Route::get('/list', AdminController:: class, 'list');
//Route::get('/ui-elements-modals', AdminController:: class, 'uiElementsModals');

Route::get('/index', function () {
    return view('admin.index');
});

Route::get('/form', function () {
    return view('admin.form');
});

Route::get('/', function () {
    return view('admin.list');
});

Route::get('/', function () {
    return view('admin.ui-elements-modals');
});

Route::get('/', function () {
    return view('admin.calendar');
});





