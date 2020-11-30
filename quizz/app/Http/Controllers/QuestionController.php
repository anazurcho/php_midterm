<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        $this->authorize('is_student');
        $questions = Question::with('answers')->get();
        return view('question/index', compact('questions'));
    }

    public function create()
    {
//        $tags = Tag::all();
        $this->authorize('is_student');
        return view('question/create');
    }

    public function save(QuestionRequest $request)
    {
        $this->authorize('is_student');
        $question = new Question();
        $question -> name = $request->input('name');
        $question->save();
        $answer_1 = new Answer();
        $answer_1 -> name = $request->input('answer_1_name');
        $answer_1 -> is_correct = $request->input('is_true') == 1;
        $answer_1 -> question_id = $question->id;
        $answer_1->save();

        $answer_2 = new Answer();
        $answer_2 -> name = $request->input('answer_2_name');
        $answer_2 -> is_correct = $request->input('is_true') == 2;
        $answer_2 -> question_id = $question->id;
        $answer_2->save();

        $answer_3 = new Answer();
        $answer_3 -> name = $request->input('answer_3_name');
        $answer_3 -> is_correct = $request->input('is_true') == 3;
        $answer_3 -> question_id = $question->id;
        $answer_3->save();

        $answer_4 = new Answer();
        $answer_4 -> name = $request->input('answer_4_name');
        $answer_4 -> is_correct = $request->input('is_true') == 4;
        $answer_4 -> question_id = $question->id;
        $answer_4->save();

        return redirect()->action([QuestionController::class, 'index']);
    }

}
