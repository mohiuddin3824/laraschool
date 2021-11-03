<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;

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

// routes for dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');

// All routes for Users
Route::prefix('users')->group(function(){
    Route::get('/view', [UserController::class, 'userView'])->name('view.user');
    Route::get('/add-new-user', [UserController::class, 'addUser'])->name('add.user');
    Route::post('/store-user-data', [UserController::class, 'storeUser'])->name('store.user');
    Route::get('/edit/{user_id}', [UserController::class, 'editUser'])->name('edit.user');
    Route::post('/update', [UserController::class, 'updateUser'])->name('update.user');
    Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('delete.user');
    Route::get('/admin/block/{id}',[UserController::class,'adminBlockUser'])->name('block.user');
    Route::get('/admin/unblock/{id}',[UserController::class,'adminUnBlockUser'])->name('unblock.user');
});
// All routes for Users
Route::prefix('user/profile')->group(function(){
    Route::get('/view', [UserController::class, 'userProfile'])->name('auth.profile');
    Route::get('/admin/view{id}', [UserController::class, 'adminViewUserProfile'])->name('view.user.profile');
    Route::get('/password/reset/{id}', [UserController::class, 'resetPass'])->name('reset.pass');
    Route::post('/password/update', [UserController::class, 'updatePassword'])->name('update.pass');
});