<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Exam;

class ExamController extends Controller
{
    public function __construct() {
        
        $this->middleware("auth:admin");
    }

    public function createExam() {
        
        $subject = Subject::all();

        return view("admin.exam.createExam", array("subject" => $subject));
    }

    public function saveExam(Request $request) {
        
        $exam = new Exam;

        $exam->subject = $request->subject;
        $exam->exam_title = $request->exam_title;
        $exam->exam_code = $request->exam_code;
        $exam->exam_description = $request->exam_description;
        $exam->total_questions = $request->total_questions;
        $exam->duration = $request->duration;
        $exam->start_date = $request->start_date;
        $exam->end_date = $request->end_date;
        
        $exam->save();

        return redirect("/view-exam")->with("message", "Exam Has Been Created Successfully!");
    }

    public function viewExam() {
        
        $exam = Exam::all();

        return view("admin.exam.viewExam", ["exam" => $exam, "serialNo" => 1]);
    }

    public function examDetails($id) {
        
        $exam = Exam::find($id);

        return view("admin.exam.examDetails", ["exam" => $exam]);
    }

    public function editExam($id) {
        
        $exam = Exam::find($id);
        $subject = Subject::all();

        return view("admin.exam.editExam", ["exam" => $exam, "subject" => $subject]);
    }
    
    public function updateExam(Request $request) {
        
        $id = $request->id;
        
        $exam = Exam::find($id);
        
        $exam->subject = $request->subject;
        $exam->exam_title = $request->exam_title;
        $exam->exam_code = $request->exam_code;
        $exam->exam_description = $request->exam_description;
        $exam->total_questions = $request->total_questions;
        $exam->duration = $request->duration;
        $exam->start_date = $request->start_date;
        $exam->end_date = $request->end_date;
        
        $exam->save();
        
        return redirect("/exam-details/" . $request->id)->with("message", "Exam Has Been Updated Successfully!");
    }

    public function unpublishExam($id) {
        
        $exam = Exam::find($id);
        
        $exam->publication_status = 0;
        
        $exam->save();

        return redirect("/exam-details/" . $id)->with("message", "Exam Has Been Unpublished Successfully!");
    }

    public function publishExam($id) {
        
        $exam = Exam::find($id);

        $exam->publication_status = 1;
        
        $exam->save();

        return redirect("/exam-details/" . $id)->with("message", "Exam Has Been Published Successfully!");
    }

    public function deleteExam($id) {
        
        $exam = Exam::find($id);

        $exam->delete();

        return redirect("/view-exam")->with("message", "Exam Has Been Deleted Successfully!");
    }

}
