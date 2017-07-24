@extends("user.master")
@section("content")

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="col-md-offset-1"><b>Exam Title: </b><?php echo $quiz[0]->quiz_title; ?></h3>
                <h3 class="col-md-offset-1"><b>Exam Code: </b><?php echo $quiz[0]->quiz_code; ?></h3>
            </div>
            <div class="panel-body">
                <table class="col-md-offset-9">
                    <tr>
                        <td class="col-md-3"><h4 class="text-right"><b>Total Questions: </b></h4></td>
                        <td class="col-md-1"><h4><?php echo $noOfQuestion; ?></h4></td>
                    </tr>
                    <tr>
                        <td class="col-md-3"><h4 class="text-right"><b>Answered: </b></h4></td>
                        <td class="col-md-1"><h4><?php echo $answered; ?></h4></td>
                    </tr>
                    <tr>
                        <td class="col-md-3"><h4 class="text-right"><b>Right Answer: </b></h4></td>
                        <td class="col-md-1"><h4><?php echo $marks; ?></h4></td>
                    </tr>
                </table>
                <hr/>
                <form class="form-horizontal" role="form" name="view_result" method="POST" action="">
                    <?php foreach ($quiz as $rowQuiz) { ?>
                        <div class="form-group">
                            <div class="col-md-offset-1 col-md-1">
                                <pre><b>Q.<?php echo $rowQuiz->qst_no; ?></b></pre>
                            </div>
                            <div class="col-md-10">
                                <pre><?php echo $rowQuiz->question; ?></pre>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <?php if ($rowQuiz->option_a == $rowQuiz->given_ans) { ?>
                                    <input type="radio" checked disabled/> <b>A) </b><?php echo $rowQuiz->option_a; ?>
                                <?php } else { ?>
                                    <input type="radio" disabled/> <b>A) </b><?php echo $rowQuiz->option_a; ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <?php if ($rowQuiz->option_b == $rowQuiz->given_ans) { ?>
                                    <input type="radio" checked disabled/> <b>B) </b><?php echo $rowQuiz->option_b; ?>
                                <?php } else { ?>
                                    <input type="radio" disabled/> <b>B) </b><?php echo $rowQuiz->option_b; ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <?php if ($rowQuiz->option_c == $rowQuiz->given_ans) { ?>
                                    <input type="radio" checked disabled/> <b>C) </b><?php echo $rowQuiz->option_c; ?>
                                <?php } else { ?>
                                    <input type="radio" disabled/> <b>C) </b><?php echo $rowQuiz->option_c; ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <?php if ($rowQuiz->option_d == $rowQuiz->given_ans) { ?>
                                    <input type="radio" checked disabled/> <b>D) </b><?php echo $rowQuiz->option_d; ?>
                                <?php } else { ?>
                                    <input type="radio" disabled/> <b>D) </b><?php echo $rowQuiz->option_d; ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <?php if ($rowQuiz->given_ans == $rowQuiz->correct_ans) { ?>
                                    <p><b>Result: <span style="color: #009900;">Right</span></b></p>
                                <?php } elseif ($rowQuiz->given_ans == "") { ?>
                                    <p><b>Result: </b><b style="color: yellow;">Not Answered </b></b></p>
                                    <p><b>Correct Ans: <span style="color: #009900;"><?php echo $rowQuiz->correct_ans; ?></span></b></p>
                                <?php } else { ?>
                                    <p><b>Result: <span style="color: red;">Wrong</span></b></p>
                                    <p><b>Correct Ans: <span style="color: #009900;"><?php echo $rowQuiz->correct_ans; ?></span></b></p>
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