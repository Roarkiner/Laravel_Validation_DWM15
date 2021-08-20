<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ActionController;

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

Route::get('/', [ViewController::class, 'showHome']);
Route::get('/characters/list', [ViewController::class, 'showChars']);
Route::get('/drawers/list', [ViewController::class, 'showDrawers']);
Route::get('/characters/add_form', [ViewController::class, 'showAddCharacters']);
Route::get('/drawers/add_form', [ViewController::class, 'showAddDrawers']);
Route::post('/characters/update_form', [ViewController::class, 'showUpdateCharacters']);
Route::post('/drawers/update_form', [ViewController::class, 'showUpdateDrawers']);
Route::post('/drawers/list_characters', [ViewController::class, 'charactersListOfDrawer']);

Route::post('/characters/add', [ActionController::class, 'addCharacters']);
Route::post('/drawers/add', [ActionController::class, 'addDrawers']);
Route::post('/characters/delete', [ActionController::class, 'deleteCharacters']);
Route::post('/drawers/delete', [ActionController::class, 'deleteDrawers']);
Route::post('/characters/update', [ActionController::class, 'updateCharacters']);
Route::post('/drawers/update', [ActionController::class, 'updateDrawers']);
