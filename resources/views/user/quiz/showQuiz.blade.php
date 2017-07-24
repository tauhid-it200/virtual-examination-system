@extends("user.master")
@section("content")

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="text-left"><b>Exam Title: </b><?php echo $exam->exam_title; ?></h3>
                <h3 class="text-left"><b>Exam Code: </b><?php echo $exam->exam_code; ?></h3>
            </div>
            <div class="panel-body">
                <hr/>
                <form class="form-horizontal" role="form" method="POST" action="{{ url("/submit-quiz") }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="quiz_title" value="<?php echo $exam->exam_title; ?>"/>
                    <input type="hidden" name="quiz_code" value="<?php echo $exam->exam_code; ?>"/>
                    <input type="hidden" name="participant" value="{{ Auth::user()->id }}"/>
                    
                    <?php foreach ($question as $rowQuestion) { ?>
                        <div class="form-group">
                            <div class="col-md-offset-1 col-md-1">
                                <pre><b>Q.<?php echo $serialNo; ?></b></pre>
                            </div>
                            <div class="col-md-10">
                                <pre><?php echo $rowQuestion->question; ?></pre>
                                <input type="hidden" name="<?php echo 'question' . $serialNo; ?>" value="<?php echo $rowQuestion->question; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="radio" name="<?php echo 'ans' . $serialNo; ?>" id="" value="<?php echo $rowQuestion->option_a; ?>"/> <b>A) </b><?php echo $rowQuestion->option_a; ?>
                                <input type="hidden" name="<?php echo 'option_a' . $serialNo; ?>" value="<?php echo $rowQuestion->option_a; ?>"/> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="radio" name="<?php echo 'ans' . $serialNo; ?>" id="" value="<?php echo $rowQuestion->option_b; ?>"/> <b>B) </b><?php echo $rowQuestion->option_b; ?>
                                <input type="hidden" name="<?php echo 'option_b' . $serialNo; ?>" value="<?php echo $rowQuestion->option_b; ?>"/> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="radio" name="<?php echo 'ans' . $serialNo; ?>" id="" value="<?php echo $rowQuestion->option_c; ?>"/> <b>C) </b><?php echo $rowQuestion->option_c; ?>
                                <input type="hidden" name="<?php echo 'option_c' . $serialNo; ?>" value="<?php echo $rowQuestion->option_c; ?>"/> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="radio" name="<?php echo 'ans' . $serialNo; ?>" id="" value="<?php echo $rowQuestion->option_d; ?>"/> <b>D) </b><?php echo $rowQuestion->option_d; ?>
                                <input type="hidden" name="<?php echo 'option_d' . $serialNo; ?>" value="<?php echo $rowQuestion->option_d; ?>"/> 
                            </div>
                        </div>
                        <input type="hidden" name="<?php echo 'correct_ans' . $serialNo; ?>" value="<?php echo $rowQuestion->correct_answer; ?>"/> 
                        <hr>
                        <?php $serialNo++;
                    }
                    ?>
                    <input type="hidden" name="no_of_qst" value="<?php echo $serialNo; ?>"/>
                    <div class="panel-footer text-center">
                        <input type="submit" name="" id="" class="btn btn-success" value="SUBMIT"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection