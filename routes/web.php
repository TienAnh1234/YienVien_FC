<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\FootballerController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SearchController;
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
    return view('layouts.app');
});

Route::resources([
    'address' => AddressController::class,
]);

Route::resources([
    'position' => PositionController::class,
]);

Route::resources([
    'footballer' => FootballerController::class,
]);

Route::get('/searchFootballer', [SearchController::class, 'searchFootballer']); 
Route::get('/searchAddress', [SearchController::class, 'searchAddress']); 
Route::get('/searchPosition', [SearchController::class, 'searchPosition']); 



//phương thức post sẽ ko thể được truy cập từ url 
// return redict chỉ có thể bay tới các route có kiểu get

// Route::get('/books', [BookController::class, 'index']);
// Route::get('/books/create', [BookController::class, 'create']);
// Route::post('/books', [BookController::class, 'store']);
// Route::get('/books/{book}', [BookController::class, 'show']);
// Route::get('/books/{book}/edit', [BookController::class, 'edit']);
// Route::put('/books/{book}', [BookController::class, 'update']);
// Route::delete('/books/{book}', [BookController::class, 'destroy']);
  