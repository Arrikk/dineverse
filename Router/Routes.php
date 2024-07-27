<?php
use Core\Router\Router as Route;

Route::get('', 'home@index');
Route::get('dashboard', 'home@dashboard');
Route::get('employees', 'hr@employees@pages');
Route::get('employees/overview', 'hr@overview@pages');
Route::get('employees/schedule', 'hr@schedule@pages');
Route::get('inventory', 'inventory@forcast@pages');
Route::get('inventory/sales', 'inventory@sales@pages');
Route::get('inventory/invoice', 'inventory@invoice@pages');
Route::get('forcast/sales', 'forcast@sales@pages');
Route::get('forcast/calender', 'forcast@calender@pages');
Route::get('chat', 'home@chat');

// Auth Route
Route::post('register', 'users@register@auth');
Route::post('auth/login', 'users@login@auth');

// Password
Route::put('password/change', 'password@change@auth');
Route::post('password/forgot', 'password@forgot@auth');
Route::post('password/reset', 'password@reset@auth');
Route::get('password/token/{token:[\da-f]+}', 'password@token@auth');

// Profile
Route::get('profile', 'account@profile');
Route::post('profile', 'account@update');
