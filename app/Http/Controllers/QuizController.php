<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Question;
use App\Quiz;
use App\User;
use Auth;

class QuizController extends Controller {

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

        if ($quiz->count() == 0) {
            $quizID = 1;
        } else {
            $quizID = $quiz->all()->last()->quiz_id + 1;
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

        $noOfQuestion = 0;
        $answered = 0;
        $marks = 0;

        foreach ($quiz as $rowQuiz) {
            if ($rowQuiz->given_ans != "") {
                if ($rowQuiz->given_ans == $rowQuiz->correct_ans) {
                    $marks++;
                }
                $answered++;
            }
            $noOfQuestion++;
        }

        return view("user.result.viewResult", [
            "quiz" => $quiz,
            "noOfQuestion" => $noOfQuestion,
            "answered" => $answered,
            "marks" => $marks
        ]);
    }

    public function showAllResult($userId) {

        $quiz = Quiz::where("participant", $userId)->get();

        return view("user.result.viewAllResult", [
            "quiz" => $quiz,
            "quizId" => 0,
            "serialNo" => 1,
            "quizTitle" => "",
            "quizCode" => "",
            "dateParticipated" => "",
            "marks" => 0,
            "noOfQuestions" => 0
        ]);
    }
    
    public function deleteQuiz($quizId) {
        
        $quiz = Quiz::where("quiz_id", $quizId)->get();
        
        foreach($quiz as $rowQuiz) {
            $rowQuiz->delete();
        }
        
        return redirect("/all-result/" . Auth::user()->id)->with("message", "Quiz History Has Been Cleared Successfully!");
    }

}
