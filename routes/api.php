<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', 'Api\LoginController@login')->name('login');

Route::get('/accounts', 'Api\AccountController@index')->name('accounts.index');
Route::post('/accounts', 'Api\AccountController@store')->name('accounts.store');
Route::get('/accounts/{account}', 'Api\AccountController@show')->name('accounts.show');
Route::patch('/accounts/{account}', 'Api\AccountController@update')->name('accounts.update');
Route::delete('/accounts/{account}', 'Api\AccountController@destroy')->name('accounts.delete');

Route::get('/accounts/{account}/companies', 'Api\CompanyController@index')->name('company.index');
Route::post('/accounts/{account}/companies', 'Api\CompanyController@store')->name('company.store');
Route::get('/companies/{company}', 'Api\CompanyController@show')->name('company.show');
Route::patch('/companies/{company}', 'Api\CompanyController@update')->name('company.update');
Route::delete('/companies/{company}', 'Api\CompanyController@destroy')->name('company.destroy');

Route::get('/companies/{company}/commitments', 'Api\CommitmentController@index')->name('commitment.index');
Route::post('/companies/{company}/commitments', 'Api\CommitmentController@store')->name('commitment.store');
Route::get('/commitments/{commitment}', 'Api\CommitmentController@show')->name('commitment.show');
Route::patch('/commitments/{commitment}', 'Api\CommitmentController@update')->name('commitment.update');
Route::delete('/commitments/{commitment}', 'Api\CommitmentController@destroy')->name('commitment.destroy');
