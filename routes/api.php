<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PizzaController;

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
//Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
Route::get('/pizzas/search/{title}', [PizzaController::class, 'search']);
Route::get('/pizzas/tag/{tag}', [PizzaController::class, 'searchByTag']);


//Protected Routes
Route::resource('tags', TagController::class);
Route::group(['middleware'=>'auth:sanctum'], function (){
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::put('/pizzas/{id}', [PizzaController::class, 'update']);
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']); 
Route::post('/logout', [AuthController::class, 'logout']);
});
