<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentProgramController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\StudentController;
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


Auth::routes([
    'register'=>false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [StudentProgramController::class, 'create']);
Route::post('apply', [StudentProgramController::class, 'store'])->name('apply.store');

Route::group(['middleware'=>'auth'],function(){
    Route::resource('programs', ProgramController::class);
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');

});
