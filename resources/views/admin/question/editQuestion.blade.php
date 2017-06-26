@extends("admin.master")
@section("content")

<div class="row">
    <div class="col-lg-offset-1 col-lg-10">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Edit Question Here</h2>
            </div>
            <div class="panel-body">

                @if (session('message'))
                <div class="alert alert-success lead">
                    <p><b>{{ session('message') }}</b></p>
                </div>
                @endif

                {!!Form::open(array("url" => "/update-question", "name" => "edit_question", "role" => "form", "method" => "POST", "class" => "form-horizontal"))!!}
                <fieldset>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Exam Title</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" value="<?php echo $exam->exam_title; ?>" readonly/>
                            <input type="hidden" name="exam_id" value="<?php echo $question->exam_id; ?>"/>
                            <input type="hidden" name="id" value="<?php echo $question->id; ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="question" class="control-label col-lg-4">Question</label>
                        <div class="col-lg-6">
                            <textarea rows="6" name="question" id="question" class="form-control" required><?php echo $question->question; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="option_a" class="control-label col-lg-4">Option A</label>
                        <div class="col-lg-6">
                            <input type="text" name="option_a" id="option_a" class="form-control" value="<?php echo $question->option_a; ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="option_b" class="control-label col-lg-4">Option B</label>
                        <div class="col-lg-6">
                            <input type="text" name="option_b" id="option_b" class="form-control" value="<?php echo $question->option_b; ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="option_c" class="control-label col-lg-4">Option C</label>
                        <div class="col-lg-6">
                            <input type="text" name="option_c" id="option_c" class="form-control" value="<?php echo $question->option_c; ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="option_a" class="control-label col-lg-4">Option D</label>
                        <div class="col-lg-6">
                            <input type="text" name="option_d" id="option_d" class="form-control" value="<?php echo $question->option_d; ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correct_answer" class="control-label col-lg-4">Correct Answer</label>
                        <div class="col-lg-6">
                            <select name="correct_answer" id="correct_answer" class="form-control" required>
                                <option>---Select Your Option---</option>
                                <option id="select_option_a">Option A</option>
                                <option id="select_option_b">Option B</option>
                                <option id="select_option_c">Option C</option>
                                <option id="select_option_d">Option D</option>
                            </select>
                        </div>
                    </div>
                    
                    <br/>
                    
                    <div class="form-group">
                        <div class="col-lg-offset-4 col-lg-2">
                            <input type="submit" name="button" class="btn btn-primary btn-block" value="UPDATE"/>
                        </div>
                    </div>
                </fieldset>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>

<script>
    document.forms["edit_question"].elements["correct_answer"].value = "<?php
switch ($question->correct_answer) {
    case $question->option_b:
        echo "Option B";
        break;
    case $question->option_c:
        echo "Option C";
        break;
    case $question->option_d:
        echo "Option D";
        break;
    default:
        echo "Option A";
        break;
}
?>";
    
    var optionA=document.getElementById("option_a");
    var optionB=document.getElementById("option_b");
    var optionC=document.getElementById("option_c");
    var optionD=document.getElementById("option_d");
    
    var selectOptionA=document.getElementById("select_option_a");
    var selectOptionB=document.getElementById("select_option_b");
    var selectOptionC=document.getElementById("select_option_c");
    var selectOptionD=document.getElementById("select_option_d");
    
    selectOptionA.value=optionA.value;
    selectOptionB.value=optionB.value;
    selectOptionC.value=optionC.value;
    selectOptionD.value=optionD.value;
</script>

@endsection

