<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LexiiController;
use App\Http\Controllers\aicontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("ai{id}", [aicontroller::class,'get_ai']);
Route::post("ai_response",[aicontroller::class, 'add_ai']);
Route::post("emo_post",[aicontroller::class, 'emo_post']);
Route::get("emotion{id}",[aicontroller::class, 'get_emo']);
Route::get("answer{id}",[aicontroller::class, 'get_answer']);