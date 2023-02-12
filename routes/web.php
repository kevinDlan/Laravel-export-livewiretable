<?php

use App\Http\Controllers\CompagnyController;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(["auth"])->group(function()
{
    Route::resource("compagny", CompagnyController::class);
    Route::resource("employee", EmployeeController::class);
    Route::get("employees/export",[EmployeeController::class, 'export'])->name('employee.export');
});


// composer install laravel/ui --dev
// php artisan ui bootstrap
// php artisan ui bootstrap --auth
