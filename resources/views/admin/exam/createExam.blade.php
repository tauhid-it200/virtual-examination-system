@extends("admin.master")
@section("content")


<!--        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<?php echo Session::get("message"); ?>
        </div>-->
<div class="row">
                    <div class="col-lg-offset-1 col-lg-10">
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="text-center">Create Exams Here</h2>
    </div>
    <div class="panel-body">
        {!!Form::open(array("url" => "/save-exam", "role" => "form", "method" => "POST", "class" => "form-horizontal"))!!}
        <fieldset>
            <div class="form-group">
                <label for="subject" class="control-label col-lg-4">Subject</label>
                <div class="col-lg-6">
                    <select name="subject" id="subject" class="form-control" required>
                        <option>---Select Your Subject---</option>
                        <?php foreach ($subject as $row_subject) { ?>
                            <option value="<?php echo $row_subject->subj_code; ?>"><?php echo $row_subject->subj_name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exam_title" class="control-label col-lg-4">Exam Title</label>
                <div class="col-lg-6">
                    <input type="text" name="exam_title" id="exam_title" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="exam_code" class="control-label col-lg-4">Exam Code</label>
                <div class="col-lg-6">
                    <input type="text" name="exam_code" id="exam_code" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="exam_description" class="control-label col-lg-4">Exam Description</label>
                <div class="col-lg-6">
                    <textarea rows="6" name="exam_description" id="exam_description" class="form-control" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="total_questions" class="control-label col-lg-4">Total Questions</label>
                <div class="col-lg-6">
                    <input type="number" name="total_questions" id="total_questions" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="duration" class="control-label col-lg-4">Duration (mins)</label>
                <div class="col-lg-6">
                    <input type="number" name="duration" id="duration" class="form-control" required/>
                </div>
            </div>

<!--                    <script>

                        function totalTime() {
                            var totalQuestions=document.getElementById("total_questions").value;
                            var timePerQuestion=document.getElementById("time_per_question").value;
                            
                            var examDuration=parseInt(totalQuestions)*parseInt(timePerQuestion);
                            
                            document.getElementById("exam_duration").value= examDuration;
                        }
                    </script>-->

            <div class="form-group">
                <label class="control-label col-lg-4">Validity</label>
                <div class="col-lg-3">
                    <div>Start</div>
                    <div class='input-group date' id='start_date'>
                        <input type='text' class="form-control" name="start_date" required/>
                        <span class="input-group-addon">
                            <a><span class="glyphicon glyphicon-calendar"></span></a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div>End</div>
                    <div class='input-group date' id='end_date'>
                        <input type='text' class="form-control" name="end_date" required/>
                        <span class="input-group-addon">
                            <a><span class="glyphicon glyphicon-calendar"></span></a>
                        </span>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function () {
                    $(function () {
                        $('#start_date').datetimepicker({
                            showMeridian: true
                        });
                        $('#end_date').datetimepicker({
                            showMeridian: true
                        });
                    });
                });
            </script>

            <div class="form-group">
                <div class="col-lg-offset-4 col-lg-6">
                    <input type="submit" name="button" class="btn btn-primary btn-block" value="CREATE"/>
                </div>
            </div>
        </fieldset>
        {!!Form::close()!!}
    </div>
</div>
                    </div>
</div>

@endsection

