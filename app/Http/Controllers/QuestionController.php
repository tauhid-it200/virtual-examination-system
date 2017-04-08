<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Exam;

class QuestionController extends Controller
{
    public function addQuestion($id){
        $exam=Exam::find($id);
        
        return view("admin.question.addQuestion", ["exam"=>$exam]);
    }
    
    public function saveQuestion(Request $request){
        $question=new Question;
        
        $question->exam_id=$request->exam_id;
        $question->question=$request->question;
        $question->option_a=$request->option_a;
        $question->option_b=$request->option_b;
        $question->option_c=$request->option_c;
        $question->option_d=$request->option_d;
        $question->correct_answer=$request->correct_answer;
        $question->save();
        
        return redirect("/view-question/".$request->exam_id)->with("message", "Question Has Been Added Successfully!");
    }
    
    public function viewQuestion($id){
        $question=Question::where("exam_id", $id)->get();
        $exam=Exam::find($id);
        
        return view("admin.question.viewQuestion", ["question"=>$question, "exam"=>$exam, "serialNo"=>1]);
    }
    
    public function editQuestion($id){
        $question=Question::find($id);
        $exam_id=$question->exam_id;
        $exam=Exam::find($exam_id);
        
        return view("admin.question.editQuestion",["exam"=>$exam,"question"=>$question]);
    }
    
    public function updateQuestion(Request $request){
        $id=$request->id;
        $question=Question::find($id);
        
        $question->exam_id=$request->exam_id;
        $question->question=$request->question;
        $question->option_a=$request->option_a;
        $question->option_b=$request->option_b;
        $question->option_c=$request->option_c;
        $question->option_d=$request->option_d;
        $question->correct_answer=$request->correct_answer;
        $question->save();
        
        return redirect("/view-question/".$request->exam_id)->with("message", "Question Has Been Updated Successfully!");
    }
    
    public function deleteQuestion($id){
        $question=Question::find($id);
        $exam_id=$question->exam_id;
        
        $question->delete();
        
        return redirect("/view-question/".$exam_id)->with("message", "Question Has Been Deleted Successfully!");
    }
}
