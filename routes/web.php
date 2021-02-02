<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//login page
// Route::get('/login',[HomeController::class, 'login']);


// Route::post('/home', [HomeController::class, 'loginUser']);


// //register
// Route::get('/register',[HomeController::class, 'register']);

// Route::post('/login', [HomeController::class, 'registerUser']);


//home
Route::get('/home',[HomeController::class, 'home']);




//product
Route::get('/product',[HomeController::class, 'product']);

//inserting product
Route::get('/addproduct',[HomeController::class, 'addproduct']);

Route::post('/product', [HomeController::class, 'insertProduct']);

//edit product
Route::get('/editproduct/{id}',[HomeController::class, 'editProduct']);

//Updating Product
Route::post('/editproduct/{id}',[HomeController::class,'updateProduct']);







//inventory
Route::get('/inventory',[HomeController::class, 'inventory']);

//Deleting Product 
Route::get('/inventory/{id}', [HomeController::class, 'deleteProduct']);













//transaction
Route::get('/transaction',[HomeController::class, 'transaction']);
