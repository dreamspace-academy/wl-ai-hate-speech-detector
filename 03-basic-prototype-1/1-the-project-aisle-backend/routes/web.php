<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

Route::get('/',[PageController::class, 'ViewLoginPageController']);

Route::POST('/handle-login', [UserController::class, 'HandleLogin']);

Route::GET('/handle-logout', [UserController::class, 'HandleLogout']);

Route::GET('/view-dashboard', [PageController::class, 'ViewDashboardPageController']);

Route::GET('/view-change-password-page', [PageController::class, 'ViewChangePasswordController']);

Route::POST('/change-password', [UserController::class, 'ChangePassword']);
