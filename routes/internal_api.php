<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Internal API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Internal API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', 'InventoryController@index')->name('inventory.index');
Route::put('/inventories/{inventory}', 'InventoryController@update')->name('inventory.update');
