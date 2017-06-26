@extends("admin.master")
@section("content")

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-green">
            <div class="panel-heading" style="background-color: #006633;">
                <h2 class="text-center">List of All Exams</h2>
            </div>
            <div class="panel-body">
                
                @if (session('message'))
                <div class="alert alert-success lead">
                    <p><b>{{ session('message') }}</b></p>
                </div>
                @endif
                
                <table class="table table-bordered table-striped table-hover data_table" width="100%">
                    <thead>
                        <tr>
                            <th class="col-lg-1 text-center">Serial No.</th>
                            <th class="text-center">Exam Title</th>
                            <th class="text-center">Exam Code</th>
                            <th class="col-lg-3 text-center">Description</th>
                            <th class="text-center">Start Date</th>
                            <th class="text-center">End Date</th>
                            <th class="text-center">Status</th>
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
                                    <?php
                                    if($rowExam->publication_status==1) {
                                        echo "Published";
                                    }else {
                                        echo "Unpublished";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="{{url("/exam-details/" . $rowExam->id)}}" class="btn btn-primary"> Details
                                        <span class="glyphicon glyphicon-menu-hamburger"></span>
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
