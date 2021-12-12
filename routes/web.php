<?php
use App\Http\Controllers\ContactController;
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

//front end start
Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'home'])->name('home');
Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'contact']);
// Route::get('/', [ContactController::class, 'contact']);
Route::Post('/send-message',[IndexController::class, 'sendEmail'])->name('contact.send');
//front end end
