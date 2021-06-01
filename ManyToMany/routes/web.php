<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@employeeView') -> name('employeeHome');

Route::get('/details/{id}', 'EmployeeController@detailsView') -> name('employeeDetails');
