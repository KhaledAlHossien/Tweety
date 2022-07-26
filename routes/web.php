<?php

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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function (){


Route::get('/tweets',[App\Http\Controllers\TweetsController::class, 'index'])
    ->name('home');

Route::post('/tweets',[App\Http\Controllers\TweetsController::class, 'store']);
Route::delete('/tweets/{tweet}',[App\Http\Controllers\TweetsController::class, 'destroy']);
Route::get('/tweets/{tweet}/edit',[App\Http\Controllers\TweetsController::class, 'edit']);
Route::patch('/tweets/{tweet}',[App\Http\Controllers\TweetsController::class, 'update']);


Route::post('/tweets/{tweet}/like', [App\Http\Controllers\TweetLikesController::class, 'store']);
Route::delete('/tweets/{tweet}/like',[App\Http\Controllers\TweetLikesController::class, 'destroy']);



Route::post('/profiles/{user:username}/follow',[App\Http\Controllers\FollowController::class, 'store'])
->name('follow');

Route::get('/profiles/{user:username}/edit',[App\Http\Controllers\ProfilesController::class, 'edit'])
    ->middleware('can:edit,user');

Route::patch('/profiles/{user:username}',[App\Http\Controllers\ProfilesController::class, 'update'])
    ->middleware('can:edit,user');


Route::post('/replies/{tweet_id}',[\App\Http\Controllers\RepliesController::class,'store']);
Route::get('/replies/{reply}/edit',[App\Http\Controllers\RepliesController::class, 'edit']);
Route::patch('/replies/{reply}',[App\Http\Controllers\RepliesController::class, 'update']);

Route::get('/explore',[App\Http\Controllers\ExpolreController::class, 'index']);

});


Route::get('/profiles/{user:username}',[App\Http\Controllers\ProfilesController::class, 'show'])
    ->name('profile');

Auth::routes();


