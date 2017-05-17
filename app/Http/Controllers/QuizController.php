<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Question;
use App\Quiz;
//use Illuminate\Support\Facades\Auth;
use Auth;

class QuizController extends Controller {

    public function showQuiz($id) {

        $exam = Exam::find($id);
        $question = Question::where("exam_id", $id)->get();

        return view("user.quiz.showQuiz")->with(["exam" => $exam, "question" => $question, "serialNo" => 1]);
        ;
    }

    public function saveQuiz(Request $request) {

        $quiz = new Quiz;

        for ($i = 0; $i < $request->no_of_qst; $i++) {

            $quiz->exam_id = $request->exam_id;

            $quiz->participant = $request->participant;

            $qstNo = "qst_no" . ($i + 1);
            $quiz->qst_no = $request->$qstNo;

            $question = 'question' . ($i + 1);
            $quiz->question = $request->$question;

            $optionA = 'option_a' . ($i + 1);
            $quiz->question = $request->$optionA;

            $optionB = 'option_b' . ($i + 1);
            $quiz->question = $request->$optionB;

            $optionC = 'option_c' . ($i + 1);
            $quiz->question = $request->$optionC;

            $optionD = 'option_d' . ($i + 1);
            $quiz->question = $request->$optionD;

            $ans = 'ans' . ($i + 1);
            $quiz->given_ans = $request->$ans;

            $correctAns = 'correct_ans' . ($i + 1);
            $quiz->correct_ans = $request->$correctAns;

            $quiz->save();

            return view("user.quiz.submitQuiz")->with("message", "Exam Has Been Submitted Successfully!");
        }
    }

}
