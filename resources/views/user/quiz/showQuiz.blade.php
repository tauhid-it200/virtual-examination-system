@extends("user.master")
@section("content")

<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="text-center">Exam Title: <b><?php echo $exam->exam_title; ?></b></h4>
                <h4 class="text-center">Exam Code: <b><?php echo $exam->exam_code; ?></b></h4>
            </div>
            <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url("/submit-quiz") }}">

                {{ csrf_field() }}

                <input type="hidden" name="quiz_title" value="<?php echo $exam->exam_title; ?>"/>
                <input type="hidden" name="quiz_code" value="<?php echo $exam->exam_code; ?>"/>
                <input type="hidden" name="participant" value="{{ Auth::user()->email }}"/>
                <?php foreach ($question as $rowQuestion) { ?>
                    <div class=" form-group">
                        <div class="col-lg-2 text-right">
                            <b>Q. <?php echo $serialNo; ?></b>
                        </div>
                        <div class="">
                            <?php echo $rowQuestion->question; ?>
                            <input type="hidden" name="<?php echo 'question' . $serialNo; ?>" value="<?php echo $rowQuestion->question; ?>"/>
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="col-lg-2">

                        </div>
                        <div class="">
                            <input type="radio" name="<?php echo 'ans' . $serialNo; ?>" id="" value="<?php echo $rowQuestion->option_a; ?>"/> <b>A) </b><?php echo $rowQuestion->option_a; ?>
                            <input type="hidden" name="<?php echo 'option_a' . $serialNo; ?>" value="<?php echo $rowQuestion->option_a; ?>"/> 
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="col-lg-2">

                        </div>
                        <div class="">
                            <input type="radio" name="<?php echo 'ans' . $serialNo; ?>" id="" value="<?php echo $rowQuestion->option_b; ?>"/> <b>B) </b><?php echo $rowQuestion->option_b; ?>
                            <input type="hidden" name="<?php echo 'option_b' . $serialNo; ?>" value="<?php echo $rowQuestion->option_b; ?>"/> 
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="col-lg-2">

                        </div>
                        <div class="">
                            <input type="radio" name="<?php echo 'ans' . $serialNo; ?>" id="" value="<?php echo $rowQuestion->option_c; ?>"/> <b>C) </b><?php echo $rowQuestion->option_c; ?>
                            <input type="hidden" name="<?php echo 'option_c' . $serialNo; ?>" value="<?php echo $rowQuestion->option_c; ?>"/> 
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="col-lg-2">

                        </div>
                        <div class="">
                            <input type="radio" name="<?php echo 'ans' . $serialNo; ?>" id="" value="<?php echo $rowQuestion->option_d; ?>"/> <b>D) </b><?php echo $rowQuestion->option_d; ?>
                            <input type="hidden" name="<?php echo 'option_d' . $serialNo; ?>" value="<?php echo $rowQuestion->option_d; ?>"/> 
                        </div>
                    </div>
                    <input type="hidden" name="<?php echo 'correct_ans' . $serialNo; ?>" value="<?php echo $rowQuestion->correct_answer; ?>"/> 
                    <hr>
                    <?php $serialNo++;
                } ?>
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