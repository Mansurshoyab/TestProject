<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'index'])->name('student');
Route::post('/student',[StudentController::class,'store'])->name('student.store');

Route::get('/address',[AddressController::class,'index'])->name('address');
Route::post('/address',[AddressController::class,'store'])->name('address.store');

// Route::get('/mail',[MailController::class, 'index'])->name('mail');

Route::get('/send', [MailController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/update/{student}', [AdminController::class, 'update'])->name('admin.update');