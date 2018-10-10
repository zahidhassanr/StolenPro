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
    session()->put('user_id',null);
    return view('welcome');
});

Route::get('/', function () {

    return view('welcome');
})->name('home');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('login', function () {
    return view('login');
})->name('login');


Route::get('check', function () {
    return view('check');
})->name('check');


Route::get('report', [
    'uses' => 'Controller@report',
    'as' => 'report'
]);

Route::get('al_reg_device', function () {
    return view('find_device');
})->name('al_reg_device');


Route::get('lost_found', function () {
    return view('lost_found');
})->name('lost_found');


Route::get('update_device{device_id}', [
    'uses' => 'Controller@update_device',
    'as' => 'update_device'
]);



Route::get('my_devices', function () {
    return view('my_devices');
})->name('my_devices');

Route::get('device_registration', function () {
    return view('device_register');
})->name('device_registration');

Route::post('signing-up', [
    'uses' => 'Controller@signingup',
    'as' => 'signingup'

]);

Route::post('login-user', [
    'uses' => 'Controller@login',
    'as' => 'login-user'

]);

Route::post('device', [
    'uses' => 'Controller@register_device',
    'as' => 'register_device'

]);


Route::post('matched_device', [
    'uses' => 'Controller@check_device',
    'as' => 'matched_device'

]);

Route::post('find_device', [
    'uses' => 'Controller@find_device',
    'as' => 'find_device'

]);


Route::post('submitting_report', [
    'uses' => 'Controller@report_submit',
    'as' => 'report_submit'

]);

Route::post('updating_device{device_id}', [
    'uses' => 'Controller@updating_device',
    'as' => 'updating_device'

]);

Route::post('report_reg_device{device_id}', [
    'uses' => 'Controller@report_register',
    'as' => 'report_reg_device'

]);