<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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


Route::get('/', [PostController::class, 'homePagePost']);
Route::get('/home/{category?}', [PostController::class, 'homePagePost']);

//Route::get('/home/{category?}', [PostfilterController::class, 'filterPost']);

Route::get('/login', function () {
    return view('login');
})->name('login'); 

Route::get('/signup', function () { return view('signup'); }); //for signup

Route::post('/processLogin', [AuthController::class, 'loginfunc']); // for authentication

Route::post('/signup', [AuthController::class, 'signupfunc']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [PostController::class, 'postDetails']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/addpost', function () {
        return view('addpost');
    });
    Route::post('/blogpost', [PostController::class, 'postdb']);

    

    Route::get('/updatepost/{postId}', [PostController::class, 'updatePost']);

    Route::post('/updatepost/{postId}', [PostController::class, 'updatePostInDB']);

    Route::get('/deletepost/{postId}', [PostController::class, 'deletePost']);

});