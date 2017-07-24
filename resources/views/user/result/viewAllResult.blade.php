@extends("user.master")
@section("content")

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                <h3>Result Summary</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover data_table" width="100%">
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Quiz Title</th>
                            <th>Quiz Code</th>
                            <th>Participated At</th>
                            <th>Marks Obtained</th>
                            <th>Total Marks</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($quiz) != 0) { ?>
                            <?php foreach ($quiz as $rowQuiz) { ?>
                                <?php
                                if ($quizId != $rowQuiz->quiz_id) {
                                    $newQuizId = $rowQuiz->quiz_id;
                                    ?>
                                    <?php foreach ($quiz as $newRowQuiz) { ?>
                                        <?php if ($newQuizId == $newRowQuiz->quiz_id) { ?>
                                            <?php
                                            $noOfQuestions++;
                                            if ($newRowQuiz->given_ans == $newRowQuiz->correct_ans) {
                                                $marks++;
                                            }
                                            ?>
                                        <?php } ?>
                                    <?php } ?>
                                    <tr>
                                        <td><?php echo $serialNo; ?></td>
                                        <td><?php echo $rowQuiz->quiz_title; ?></td>
                                        <td><?php echo $rowQuiz->quiz_code; ?></td>
                                        <td><?php echo $rowQuiz->updated_at; ?></td>
                                        <td><?php echo $marks; ?></td>
                                        <td><?php echo $noOfQuestions; ?></td>
                                        <td>
                                            <a href="{{url("/show-result/" . $rowQuiz->quiz_id)}}" class="btn btn-primary"> Details
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <?php
                                    $serialNo++;
                                    $quizId = $newQuizId;
                                    $noOfQuestions = 0;
                                    $marks = 0;
                                }
                                ?>
                            <?php } ?>
<?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection