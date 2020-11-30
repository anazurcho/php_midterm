<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function index()
    {
        $questions = Question::all();
        return view('quiz/index', compact('questions'));
    }
    public function save(Request $request)
    {
//        $question =  Question::all();
//        echo($request);

        $result = 0;
        return view('quiz/result', compact('result'));
    }

}
