<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Laravel\Nova\ResourceCollection;

class QuestionController extends Controller
{
    public function getQuestion(int $questionId)
    {
        return new QuestionResource(Question::findOrFail($questionId));
    }
}
