@extends("user.master")
@section("content")

<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center">Available Exams</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover data_table" width="100%">
                    <thead>
                        <tr>
                            <th class="col-lg-1 text-center">Serial No.</th>
                            <th class="text-center">Exam Title</th>
                            <th class="text-center">Exam Code</th>
                            <th class="col-lg-3 text-center">Exam Description</th>
                            <th class="text-center">Start Date</th>
                            <th class="text-center">End Date</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($exam as $rowExam) { ?>
                            <tr class="odd gradeX text-center">
                                <td><?php echo $serialNo; ?></td>
                                <td><?php echo $rowExam->exam_title; ?></td>
                                <td><?php echo $rowExam->exam_code; ?></td>
                                <td><?php echo $rowExam->exam_description; ?></td>
                                <td><?php echo $rowExam->start_date; ?></td>
                                <td><?php echo $rowExam->end_date; ?></td>
                                <td>
                                    <a href="{{url("/participate-exam/".$rowExam->id)}}" class="btn btn-primary"> Participate
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php $serialNo++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection