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

//User Routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Emplyers Routes
Route::get('/register/employer', 'Auth\RegisterController@showEmployerRegisterForm')->name('employers.register');
Route::post('/register/employer', 'Auth\RegisterController@createEmployer')->name('postemployerregister');
Route::get('/login/employer', 'Auth\LoginController@showEmployerLoginForm')->name('employer.login');
Route::post('/login/employer', 'Auth\LoginController@employerLogin')->name('employer.login.submit');
Route::get('/home/employer', 'EmployersHomeController@index')->name('employer.home');
