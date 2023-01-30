<?php

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
    return view('welcome');
});

//Route::prefix('admin')->middleware('auth')->group(function(){
//    Route::view('homePage', 'welcome');
//});

//Route::middleware('atuh')->group(function(){
//    Route::group(['as'=>'admin.', 'prefix'=>'auth']);
//    Route::group(['as'=>'user.', 'prefix']);
//});

Route::get('/dashboard', [\App\Http\Controllers\BlogController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//prefix admin. -> auth
// prefix user.
