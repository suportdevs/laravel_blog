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

Route::get('/', [App\Http\Controllers\HomeController::class, 'HomeIndex']);
Route::post('/ContactSend', [App\Http\Controllers\HomeController::class, 'ContactSend']);
Route::get('/Courses', [App\Http\Controllers\CoursesController::class, 'CoursesPage']);
Route::get('/Projects', [App\Http\Controllers\ProjectsController::class, 'ProjectsPage']);
Route::get('/Terms', [App\Http\Controllers\TermsController::class, 'TermsPage']);
Route::get('/Policy', [App\Http\Controllers\PolicyController::class, 'PolicyPage']);
Route::get('/Contact', [App\Http\Controllers\ContactController::class, 'ContactPage']);

Route::get('/Login', [App\Http\Controllers\LoginRegistationController::class, 'LoginIndex']);
Route::get('/CallGithub', [App\Http\Controllers\LoginRegistationController::class, 'CallGithub']);
Route::get('/GitHubCallBack', [App\Http\Controllers\LoginRegistationController::class, 'GitHubCallBack']);
Route::get('/Dashboard', [App\Http\Controllers\LoginRegistationController::class, 'Dashboard']);
Route::get('/userLogout', [App\Http\Controllers\LoginRegistationController::class, 'userLogout']);
Route::post('/userLogin', [App\Http\Controllers\LoginRegistationController::class, 'userLogin']);