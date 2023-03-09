<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/quiz/index', [QuizController::class, 'index']);
Route::get('/quiz/{quizId}', [QuizController::class, 'getQuiz']);
Route::get('/category/{categoryId}', [CategoryController::class, 'getCategory']);
Route::get('/question/{questionId}', [QuestionController::class, 'getQuestion']);
