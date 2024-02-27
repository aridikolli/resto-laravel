<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;

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
Route::group(['middleware'=>'web'],function(){

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/',[RestoController::class,'index']);
    Route::get('/list',[RestoController::class,'list']);
    Route::get('/add',function (){
        return view('restaurant');
    });
    Route::post('/add',[RestoController::class,'save']);
    Route::get('/delete/{id}',[RestoController::class,'delete']);
    Route::get('/edit/{id}',[RestoController::class,'edit']);
    Route::post('/edit/{id}',[RestoController::class,'saveChanges']);
    Route::get('/register',function (){
        return view('registration');
    });
    Route::post('register',[RestoController::class,'register']);
    Route::get('profile',function(){
        return view('profile');
    });
    Route::get('logout',[RestoController::class,'logout']);
    Route::get('/login',function (){
        return view('login');
    });
    Route::post('/login',[RestoController::class,'login']);
});
