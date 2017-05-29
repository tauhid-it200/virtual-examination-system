<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Question;
use App\Quiz;
//use Illuminate\Support\Facades\Auth;
use Auth;

class QuizController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth');
    }
    
    public function showQuiz($id) {

        $exam = Exam::find($id);
        
        $question = Question::where("exam_id", $id)->get();

        return view("user.quiz.showQuiz")->with(["exam" => $exam, "question" => $question, "serialNo" => 1]);
    }

    public function submitQuiz(Request $request) {

        $quiz = new Quiz;
        
        $quizID = $quiz->all()->last()->quiz_id + 1;
        
        if ($quiz->count() == 0) {
            $quizID = 1;
        }
//
//            print_r($quizID);
//        if($quiz->id == null) {
//            $quizID = 0;
//        }else{
//            $quizID = $quiz->last()->pluck("id");
//        }

        for ($i = 1; $i < $request->no_of_qst; $i++) {

            $quiz = new Quiz;

            $quiz->quiz_id = $quizID;
            $quiz->quiz_title = $request->quiz_title;
            $quiz->quiz_code = $request->quiz_code;
            $quiz->participant = $request->participant;
            $quiz->qst_no = $i;

            $question = "question" . $i;
            $quiz->question = $request->$question;

            $optionA = "option_a" . $i;
            $quiz->option_a = $request->$optionA;

            $optionB = "option_b" . $i;
            $quiz->option_b = $request->$optionB;

            $optionC = "option_c" . $i;
            $quiz->option_c = $request->$optionC;

            $optionD = "option_d" . $i;
            $quiz->option_d = $request->$optionD;

            $ans = "ans" . $i;
            $quiz->given_ans = $request->$ans;

            $correctAns = "correct_ans" . $i;
            $quiz->correct_ans = $request->$correctAns;

            $quiz->save();
        }

        return redirect("/confirm-submit/" . $quizID)->with("message", "Exam Has Been Submitted Successfully!");
    }
    
    public function confirmSubmit($quizId) {
        
        return view("user.quiz.submitQuiz", ["quizId" => $quizId]);
    }
    
    public function showResult($quizId) {
        
        $quiz = Quiz::where("quiz_id", $quizId)->get();
//        print_r($quiz);
        
        return view("user.quiz.viewResult", ["quiz" => $quiz]);
    }

}
