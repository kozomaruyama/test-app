<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TestController; //追加
use App\Models\User;

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


Route::get('/pivot', function(){ 
    $user=User::find(1);
    foreach ($user->roles as $role) {
        echo $role->pivot;
    }
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashbord');
})->middleware(['auth', 'verified'])->name('Dashbord');


//管理者
Route::group(['middleware' => ['auth', 'can:user-admin']], function () {
    Route::get('/admin', function () {
        return Inertia::render('Admin');
    })->middleware(['auth', 'verified'])->name('admin');
});

//スタッフ
Route::group(['middleware' => ['auth', 'can:user-staff']], function () {
    Route::get('/staff', function () {
        return Inertia::render('Staff');
    })->middleware(['auth', 'verified'])->name('staff');
});

// 保護者
Route::group(['middleware' => ['auth', 'can:user-parent']], function () {
    Route::get('/parent', function () {
        return Inertia::render('Parent');
    })->middleware(['auth', 'verified'])->name('parent');
});

// 生徒
Route::group(['middleware' => ['auth', 'can:user-student']], function () {
    Route::get('/student', function () {
        return Inertia::render('Student');
    })->middleware(['auth', 'verified'])->name('student');
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('test', TestController::class); //追加
});

require __DIR__.'/auth.php';
