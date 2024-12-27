<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','LoginController@login');
Route::get('/login','LoginController@login');
Route::post('/login','LoginController@postLogin');

Route::middleware(['auth.login'])->group(function () {
	Route::get('/logout','LoginController@logout');
	Route::get('/loan','LoanController@loan');
	Route::get('/emi/cal','LoanController@loanEMI');
	Route::get('emi/list/{id}','LoanController@getLoanEMIDetails');
	Route::get('emi/list','LoanController@getLoanEMIDetails');
	Route::get('emi/calculator','LoanController@getLoanEMICalculator');
	
});




