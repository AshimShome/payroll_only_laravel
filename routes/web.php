<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\department\DepartmentController;
use App\Http\Controllers\position\PositionController;
use App\Http\Controllers\allowance\AllowanceController;
use App\Http\Controllers\deductions\DeductionsController;
use App\Http\Controllers\bonus\BonusController;
use App\Http\Controllers\employee\EmployeeController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\attendance\AttendanceController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::prefix('user')->group(function () {
        Route::get('/index', [UserController::class, 'userIndex'])->name('user');

    });
    
    Route::prefix('department')->group(function () {
        Route::get('/index', [DepartmentController::class, 'departmentIndex'])->name('department');

    });
    Route::prefix('position')->group(function () {
        Route::get('/index', [PositionController::class, 'positionIndex'])->name('position');

    });
    Route::prefix('allowance')->group(function () {
        Route::get('/index', [AllowanceController::class, 'allowanceIndex'])->name('allowance');
        Route::post('/store', [AllowanceController::class, 'store'])->name('store');
        Route::get('/show', [AllowanceController::class, 'show'])->name('show');

    });
    Route::prefix('deductions')->group(function () {
        Route::get('/index', [DeductionsController::class, 'deductionsIndex'])->name('deductions');
        Route::post('/store', [DeductionsController::class, 'store'])->name('store');
        Route::get('/show', [DeductionsController::class, 'show'])->name('show');

    });
    Route::prefix('bouns')->group(function () {
        Route::get('/index', [BonusController::class, 'bonusIndex'])->name('bouns');

    });
    Route::prefix('employee')->group(function () {
        Route::get('/index', [EmployeeController::class, 'employeeIndex'])->name('employee');

    });
    Route::prefix('attendance')->group(function () {
        Route::get('/add-attendance', [AttendanceController::class, 'addAttendance'])->name('add-attendance');
        Route::get('/view-attendance', [AttendanceController::class, 'viewAttendance'])->name('view-attendance');

    });

});
