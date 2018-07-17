<?php

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

Route::resource('products','ProductsController');
Route::resource('employees','EmployeesController');
Route::resource('expenses','ExpensesController');
Route::resource('invoices','InvoicesController');
Route::resource('sales','SalesController');
Route::resource('stocks','StocksController');
Route::resource('stocklevels','StockLevelsController');
Route::resource('customers','CustomersController');


