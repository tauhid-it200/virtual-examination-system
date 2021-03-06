@extends("admin.master")
@section("content")
<!--000033-->
<div class="row">
    <div class="col-lg-offset-1 col-lg-10">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <a href="{{url("/view-question/".$exam->id)}}" class="btn btn-success pull-right" style="margin-right: 4px;">
                    <span class="glyphicon glyphicon-list-alt"></span> View Questions
                </a>
                <a href="{{url("/exam-details/".$exam->id)}}" class="btn btn-default pull-left">
                    <span class="glyphicon glyphicon-arrow-left"></span> Back to Exam Details
                </a>
                <h2 class="text-center">Add Questions Here</h2>
            </div>
            <div class="panel-body">

                @if (session('message'))
                <div class="alert alert-success lead">
                    <p><b>{{ session('message') }}</b></p>
                </div>
                @endif

                {!!Form::open(array("url" => "/save-question", "role" => "form", "method" => "POST", "class" => "form-horizontal", "name" => "add_question"))!!}
                <fieldset>
                    <div class="form-group">
                        <label for="option_a" class="control-label col-lg-4">Exam Title</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" value="<?php echo $exam->exam_title ?>" readonly/>
                            <input type="hidden" name="exam_id" value="<?php echo $exam->id; ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="question" class="control-label col-lg-4">Question</label>
                        <div class="col-lg-6">
                            <textarea rows="6" name="question" id="question" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="option_a" class="control-label col-lg-4">Option A</label>
                        <div class="col-lg-6">
                            <input type="text" name="option_a" id="option_a" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="option_b" class="control-label col-lg-4">Option B</label>
                        <div class="col-lg-6">
                            <input type="text" name="option_b" id="option_b" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="option_c" class="control-label col-lg-4">Option C</label>
                        <div class="col-lg-6">
                            <input type="text" name="option_c" id="option_c" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="option_d" class="control-label col-lg-4">Option D</label>
                        <div class="col-lg-6">
                            <input type="text" name="option_d" id="option_d" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correct_answer" class="control-label col-lg-4">Correct Answer</label>
                        <div class="col-lg-6">
                            <select name="correct_answer" id="correct_answer" class="form-control" required>
                                <option selected disabled value="">---Select Your Option---</option>
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
                            <input type="submit" name="button" id="button" class="btn btn-primary btn-block" value="ADD" onclick="return validateAddQuestion();"/>
                        </div>
                    </div>
                </fieldset>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>

<script>
    
    function validateAddQuestion() {
        if (document.add_question.question.value === "") {
                alert("Please type a Question!");
                document.add_question.question.focus();
                return false;
            }
        if (document.add_question.option_a.value === "") {
                alert("Please provide Option A!");
                document.add_question.option_a.focus();
                return false;
            }
        if (document.add_question.option_b.value === "") {
                alert("Please provide Option B!");
                document.add_question.option_b.focus();
                return false;
            }
        if (document.add_question.option_c.value === "") {
                alert("Please provide Option C!");
                document.add_question.option_c.focus();
                return false;
            }
        if (document.add_question.option_d.value === "") {
                alert("Please provide Option D!");
                document.add_question.option_d.focus();
                return false;
            }
        if (document.add_question.correct_answer.value === "") {
                alert("Please select a Correct Answer!");
                document.add_question.correct_answer.focus();
                return false;
            }
        
        var optionA = document.getElementById("option_a");
        var optionB = document.getElementById("option_b");
        var optionC = document.getElementById("option_c");
        var optionD = document.getElementById("option_d");

        var selectOptionA = document.getElementById("select_option_a");
        var selectOptionB = document.getElementById("select_option_b");
        var selectOptionC = document.getElementById("select_option_c");
        var selectOptionD = document.getElementById("select_option_d");

        selectOptionA.value = optionA.value;
        selectOptionB.value = optionB.value;
        selectOptionC.value = optionC.value;
        selectOptionD.value = optionD.value;
    }
    
</script>

@endsection

