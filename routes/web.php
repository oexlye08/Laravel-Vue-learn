<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomesController;
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

// Route::get('/', function () {
//     // return view('welcome');

//     try {
//         DB::connection()->getPdo();
//         echo "Yeay, Connected";
//     } catch (\Throwable $th) {
//         die('Couldnt connect to db'. $th);
//     }
// });

Route::get('/About-Us', [AboutusController::class, 'test']);

Route::get('/', [HomesController::class, 'index']);
Route::get('/page/{page}', [HomesController::class, 'page']);
Route::get('/contact-us', [ContactusController::class, 'index']);
Route::post('/contact-us/sendmessages', [ContactusController::class, 'sendmessages']);
