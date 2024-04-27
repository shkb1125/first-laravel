<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MiddlewareController;

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

// Route::get('/', [TestController::class, 'index']);

// Route::get('/test', [TestController::class, 'index']);
// Route::get('/hello', [HelloController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

// ルーティングの処理でブラウザ表示する場合
// Route::get('/test/{text}', [TestController::class, 'index']);
// Route::get('/test/{text?}', [TestController::class, 'index']);

// 0-8問題 http://localhost/test/200/3
// Route::get('test/{room}/{id}', function ($room, $id) {
//     return 'roomが' . $room .'でidは'. $id . 'です';
// }  );

// 0-8問題 http://localhost/test/200/3
// Route::get("/test/{greeting?}", function ($greeting = 'Goodmorning') {
//     return $greeting . '=おはようございます';
// });

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);

// 2章2-2
Route::get('/middleware', [MiddlewareController::class, 'index']);
// Route::post('/middleware', [MiddlewareController::class, 'post'])->middleware('first');
Route::post('/middleware', [MiddlewareController::class, 'post']);