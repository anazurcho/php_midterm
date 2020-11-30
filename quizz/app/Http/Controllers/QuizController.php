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
//        $questions = Question::all();
        $this->authorize('is_student_true');
        $questions = Question::with('answers')->get();
        return view('quiz/index', compact('questions'));
    }
    public function save(Request $request)
    {
//        მაშინ ბაზაში უნდა შექმნა და
        $this->authorize('is_student_true');
        $request = $request->except(('_token'));
        $result = 0;
        foreach($request as $key => $value) {
            if(Answer::find((int)$value)->is_correct) {
                $result++;
            }
        }
        return view('quiz/result', compact('result'));
    }

}
