<?php

use App\Http\Controllers\ControlPanelController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
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

// Main routes :
Route::get('/', [MainController::class, 'index']);
Route::get('/type', [MainController::class, 'type']);
Route::get('/gallery', [MainController::class, 'gallery']);
Route::get('/contact', [MainController::class, 'contact']);

// Dance type routes :
Route::get('/type/{type:slug}', [TypeController::class, 'index']);

// Dance detail routes :
Route::get('/dance/{dance:slug}', [DetailController::class, 'index']);

// Auth routes :
Route::get('/login', [UserController::class, 'viewLogin'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

// Control Panel routes (currently just add new item to database) :
Route::get('/control-panel', [ControlPanelController::class, 'index'])
    ->middleware('auth');
Route::post('/control-panel', [ControlPanelController::class, 'store'])
    ->middleware('auth');
Route::get('/control-panel/dance-list', [ControlPanelController::class, 'danceList'])
    ->middleware('auth');
Route::get('control-panel/dance-edit/{dance:slug}', [ControlPanelController::class, 'viewDanceEdit'])
    ->middleware('auth');
Route::post('control-panel/dance-edit/{dance:slug}', [ControlPanelController::class, 'danceEdit'])
    ->middleware('auth');
Route::post('control-panel/dance-delete/', [ControlPanelController::class, 'delete'])
    ->middleware('auth');
