<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoAppController;

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

Route::get('/', [todoAppController::class, 'Fetch_Tasks'])-> name("todo.welcome");


Route::get('/CreateTodoItem', function () {
    return view('CreateTodoItem');
})->name("todo.CreateTodoItem");



Route::get('/EditItem/{id}', [todoAppController::class, 'Edit'])->name("todo.EditTodoItem");

Route::post('/CreateTodoItem', [todoAppController::class, 'store'])->name("todo.store");

Route::post('/updating', [todoAppController::class, 'update'])->name("todo.update");



Route::get('/Delete/{id}', [todoAppController::class, 'Delete'])->name("todo.ItemDelete");