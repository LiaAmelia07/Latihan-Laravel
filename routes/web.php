<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
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

Route::get('/', function () {
    return view('welcome');
});

//Latihan
// Route::get('biodata',function(){
//     $data = App\Models\biodatas::all();
//     return view('biodata', compact('data'));
// });

//Latihan Controller
Route::get('/biodata',[BiodataController::class,'bio']);
