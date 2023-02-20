<?php

use App\Http\Controllers\FieldController;
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

Route::get('/fieldSearch', [FieldController::class, 'index'])
    ->name('search.index');
Route::post('/FieldSearch/consult', [FieldController::class, 'consultCreate'])
    ->name('consult.create');
