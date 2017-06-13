@extends("admin.master")
@section("content")
<!--000033-->
<div class="row">
    <div class="col-lg-offset-1 col-lg-10">
        <h3 class="text-success"><?php echo Session::get("message"); ?></h3>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <a href="{{url("/view-question/".$exam->id)}}" class="btn btn-success pull-right" style="margin-right: 4px;">
                    <span class="glyphicon glyphicon-list-alt"></span> View Questions
                </a>
                <a href="{{url("/exam-details/".$exam->id)}}" class="btn btn-default btn-outline">
                    <span class="glyphicon glyphicon-arrow-left"></span> Back to Exam Details
                </a>
                <h2 class="text-center">Add Questions Here</h2>
            </div>
            <div class="panel-body">
                {!!Form::open(array("url" => "/save-question", "role" => "form", "method" => "POST", "class" => "form-horizontal"))!!}
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
                            <textarea rows="6" name="question" id="question" class="form-control" required></textarea>
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
                                <option>---Select Your Option---</option>
                                <option id="select_option_a">Option A</option>
                                <option id="select_option_b">Option B</option>
                                <option id="select_option_c">Option C</option>
                                <option id="select_option_d">Option D</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-4 col-lg-6">
                            <input type="submit" name="button" id="button" class="btn btn-primary btn-block" value="ADD"/>
                        </div>
                    </div>
                </fieldset>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#option_a").keyup(function () {
            $("#select_option_a").val($(this).val());
        });
        $("#option_b").keyup(function () {
            $("#select_option_b").val($(this).val());
        });
        $("#option_c").keyup(function () {
            $("#select_option_c").val($(this).val());
        });
        $("#option_d").keyup(function () {
            $("#select_option_d").val($(this).val());
        });
    });
</script>

@endsection

