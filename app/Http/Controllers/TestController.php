<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function getTest(int $testId)
    {
        $test = Quiz::findOrFail($testId);
    }
}
