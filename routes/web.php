<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FinishjobController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TrashcollController;
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
// frontend側
Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/service',[ServiceController::class,'index'])->name('service');
Route::get('/job',[FinishjobController::class,'index'])->name('finishjob');
Route::get('/trashcoll',[TrashcollController::class,'index'])->name('trashcoll');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/request',[ServiceController::class,'workrequest'])->name('workrequest');
Route::get('/request',[ServiceController::class,'workrequest'])->name('workrequest');
Route::get('/requestcreate',[ServiceController::class,'requestcreate'])->name('requestcreate');
Route::post('/requestcreate',[ServiceController::class,'requestcreate'])->name('requestcreate');


// 管理側
Route::middleware('auth')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::resource('services', AdminServiceController::class);
    Route::get('/admin',[AdminController::class,'addservice'])->name('addservice');
    Route::post('/admin',[AdminController::class,'addservice'])->name('addservice');
    Route::post('/addjob',[AdminController::class,'addjob'])->name('addjob');
    Route::get('/addjob',[AdminController::class,'addjob'])->name('addjob');
    Route::get('/jobrequest',[AdminController::class,'jobrequest'])->name('jobrequest');
    Route::post('/jobrequest',[AdminController::class,'jobrequest'])->name('jobrequest');
    Route::get('/list',[AdminController::class,'trashlist'])->name('trashlist');
    Route::post('/list',[AdminController::class,'trashlist'])->name('trashlist');
    Route::get('/contactcheck',[AdminController::class,'contactcheck'])->name('contactcheck');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';