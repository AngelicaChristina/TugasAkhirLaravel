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

Route::get('blog', 'BlogController@index')->name("blog");
Route::get('blog/create', 'BlogController@create');
Route::get('blog/edit/{id}', 'BlogController@edit');
Route::get('blog/delete/{id}', 'BlogController@destroy');
Route::post('blog/store', 'BlogController@store');
Route::post('blog/update', 'BlogController@update');

Route::get('individual', 'IndividualController@index')->name("individual");
Route::get('pageblog', 'PageBlogController@index')->name("pageblog");
Route::get('comment', 'CommentController@index')->name("comment");


Route::get('login', 'CustomAuthController@index')->name("login");

// Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



// Route::get('profile', 'ProfileController@edit')->name("profile");
// Route::get('profile', 'ProfileController@edit')->name("profile");

