<?php

use App\Http\Controllers\Controller;
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
    try {
        return '<strong>Routes mặc định /</strong>';
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    };
});

// 
Route::get('/test', [Controller::class, 'hello']);
