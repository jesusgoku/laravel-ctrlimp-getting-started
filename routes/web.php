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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Account
Route::get('/accounts', 'AccountController@index')->name('account.index');
Route::post('/accounts', 'AccountController@store')->name('account.store');
Route::get('/accounts/create', 'AccountController@create')->name('account.create');
Route::get('/accounts/{account}', 'AccountController@show')->name('account.show');

Route::post('/accounts/{account}/companies', 'CompanyController@store')->name('company.store');
Route::get('/accounts/{account}/companies/create', 'CompanyController@create')->name('company.create');

Route::get('/companies/{company}', 'CompanyController@show')->name('company.show');

Route::post('/companies/{company}/commitments', 'CommitmentController@store')->name('commitment.store');
Route::get('/companies/{company}/commitments/create', 'CommitmentController@create')->name('commitment.create');

Route::get('/commitments/{commitment}', 'CommitmentController@show')->name('commitment.show');

Route::post('/commitments/{commitment}/files', 'CommitmentFileController@store')->name('commitmentFile.store');
Route::get('/commitments/{commitment}/files/create', 'CommitmentFileController@create')->name('commitmentFile.create');

Route::get('/files/{commitment}', 'CommitmentFileController@show')->name('commitmentFile.show');