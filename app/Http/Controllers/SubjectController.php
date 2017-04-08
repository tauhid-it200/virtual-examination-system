<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function addSubject(){
        
        return view("admin.subject.addSubject");
    }
    
    public function saveSubject(Request $request){
        $subject= new Subject;
        
        $subject->subj_name=$request->input("subj_name");
        $subject->subj_code=$request->input("subj_code");
        $subject->subj_description=$request->input("subj_description");
        $subject->save();
        
        return redirect("/view-subject")->with("message", "Subject Has Been Added Successfully!");
    }
    
    public function viewSubject(){
        $subject=Subject::all();
        
        return view("admin.subject.viewSubject", array("subject"=>$subject, "serialNo"=>1));
    }
    
    public function editSubject($id){
        $subject=Subject::find($id);
        
        return view("admin.subject.editSubject", ["subject"=>$subject]);
    }
    
    public function updateSubject(Request $request){
        $id=$request->input("id");
        $subject=Subject::find($id);
        
        $subject->subj_name=$request->input("subj_name");
        $subject->subj_code=$request->input("subj_code");
        $subject->subj_description=$request->input("subj_description");
        $subject->save();
        
        return redirect("/view-subject")->with("message", "Subject Has Been Updated Successfully!");
    }
    
    public function deleteSubject($id){
        $subject=Subject::find($id);
        $subject->delete();
        
        return redirect("/view-subject")->with("message", "Subject Has Been Deleted Successfully!");
    }
}
