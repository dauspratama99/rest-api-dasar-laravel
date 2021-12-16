<?php

use App\Http\Controllers\ApiController;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// use App\Models\Item;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::get('/', function(){
// //    Item::all();
// });
Route::get('item', [ApiController::class, 'index']);