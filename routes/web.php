<?php

use Illuminate\Support\Facades\Route;
use Modules\AccountManagement\App\Http\Controllers\AccountManagementController;

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

Route::group([], function () {
    Route::resource('accountmanagement', AccountManagementController::class)->names('accountmanagement');
});
