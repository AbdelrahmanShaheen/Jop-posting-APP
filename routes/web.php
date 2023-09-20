<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
// All listings
Route::get('/', [ListingController::class, 'index']);



//show and create listing Form
Route::get('/listings/create', [ListingController::class, 'create'])
  ->middleware('auth');

//store a listing data
// Route::post('/listings', [ListingController::class, 'store'])
//   ->middleware('auth');

Route::get('/listings/manage', [ListingController::class, 'manage'])
  ->middleware('auth');

//find a single listing by id
Route::get('/listings/{listing}', [ListingController::class, 'show']);


//show edit listing Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');


//update a listing data
// Route::put('/listings/{listing}', [ListingController::class, 'update'])
//   ->middleware('auth');

//delete a listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])
  ->middleware('auth');



//show user register form
Route::get('/register', [UserController::class, 'create'])
  ->middleware('guest');


//logout
Route::post('/logout', [UserController::class, 'logout'])
  ->middleware('auth');

//show login form
Route::get('/login', [UserController::class, 'showLogin'])
  ->middleware('guest')
  ->name('login');

//login
Route::post('/users/authenticate', [UserController::class, 'authenticate'])
  ->middleware('guest');