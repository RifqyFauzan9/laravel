<?php

use App\Http\Controllers\KopiController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [KopiController::class, 'home']);

Route::get('/input', [KopiController::class, 'input']);

Route::post('/store', [KopiController::class, 'store']);

Route::delete('/delete/{id}', [KopiController::class, 'destroy']);

Route::get('/update/{id}', [KopiController::class, 'editView']);

Route::put('/update/{id}', [KopiController::class, 'update']);

Route::delete('/deleteAllData', [KopiController::class, 'deleteAllData']);
