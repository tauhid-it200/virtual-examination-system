@extends("user.master")
@section("content")

<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="text-center">Exam Title: <b><?php echo $quiz[0]->quiz_title; ?></b></h4>
                <h4 class="text-center">Exam Code: <b><?php echo $quiz[0]->quiz_code; ?></b></h4>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" name="view_result" method="POST" action="">
                <?php foreach ($quiz as $rowQuiz) { ?>
                    <div class=" form-group">
                        <div class="col-lg-2 text-right">
                            <b>Q. <?php echo $rowQuiz->qst_no; ?></b>
                        </div>
                        <div class="">
                            <?php echo $rowQuiz->question; ?>
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="col-lg-2">

                        </div>
                        <div class="">
                            <?php if($rowQuiz->option_a == $rowQuiz->given_ans) { ?>
                            <input type="radio" checked disabled/> <b>A) </b><?php echo $rowQuiz->option_a; ?>
                            <?php }else { ?>
                            <input type="radio" disabled/> <b>A) </b><?php echo $rowQuiz->option_a; ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="col-lg-2">

                        </div>
                        <div class="">
                            <?php if($rowQuiz->option_b == $rowQuiz->given_ans) { ?>
                            <input type="radio" checked disabled/> <b>B) </b><?php echo $rowQuiz->option_b; ?>
                            <?php }else { ?>
                            <input type="radio" disabled/> <b>B) </b><?php echo $rowQuiz->option_b; ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="col-lg-2">

                        </div>
                        <div class="">
                            <?php if($rowQuiz->option_c == $rowQuiz->given_ans) { ?>
                            <input type="radio" checked disabled/> <b>C) </b><?php echo $rowQuiz->option_c; ?>
                            <?php }else { ?>
                            <input type="radio" disabled/> <b>C) </b><?php echo $rowQuiz->option_c; ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="col-lg-2">

                        </div>
                        <div class="">
                            <?php if($rowQuiz->option_d == $rowQuiz->given_ans) { ?>
                            <input type="radio" checked disabled/> <b>D) </b><?php echo $rowQuiz->option_d; ?>
                            <?php }else { ?>
                            <input type="radio" disabled/> <b>D) </b><?php echo $rowQuiz->option_d; ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="col-lg-2">

                        </div>
                        <div class="">
                            <?php if($rowQuiz->given_ans == $rowQuiz->correct_ans) { ?>
                            <b>Result: </b><b style="color: #009900;">Right</b>
                            <?php }else { ?>
                            <b>Result: </b><b style="color: red;">Wrong </b><b>Correct Ans: </b><b style="color: #009900;"><?php echo $rowQuiz->correct_ans; ?></b>
                            <?php } ?>
                            
                        </div>
                    </div>
                    <hr>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection