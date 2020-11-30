<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {  return view('welcome');});

Route::get('/users/login', [UserController::class, 'login'])->name('login');
Route::post('/users/post-login', [UserController::class, 'postLogin'])->name('post_login');
Route::get('/users/register', [UserController::class, 'register'])->name('register');
Route::post('/users/post-register', [UserController::class, 'postRegister'])->name('post_register');
Route::post('/users/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/questions', [QuestionController::class, 'index'])->name('questions')->middleware('auth');
Route::get('/questions/create', [QuestionController::class, 'create'])->name('questions.create')->middleware('auth');
Route::post('/questions/save', [QuestionController::class, 'save'])->name('questions.save')->middleware('auth');

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz')->middleware('auth');
Route::post('/quiz/save', [QuizController::class, 'save'])->name('quiz.save')->middleware('auth');
