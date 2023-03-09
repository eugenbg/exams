<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuizResource;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Laravel\Nova\ResourceCollection;

class QuizController extends Controller
{
    public function getQuiz(int $quizId)
    {
        return new QuizResource(Quiz::findOrFail($quizId));
    }

    public function index()
    {
        return new ResourceCollection(Quiz::all());
    }
}
