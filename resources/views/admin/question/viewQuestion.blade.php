@extends("admin.master")
@section("content")

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-green">
            <div class="panel-heading" style="background-color: #006633;">
                <a href="{{url("/add-question/" . $exam->id)}}" class="btn btn-primary pull-right" style="margin-right: 4px;">
                    <span class="glyphicon glyphicon-plus-sign"></span> Add Question
                </a>
                <a href="{{url("/exam-details/" . $exam->id)}}" class="btn btn-default pull-left">
                    <span class="glyphicon glyphicon-arrow-left"></span> Back to Exam Details
                </a>
                <h2 class="text-center">List of All Questions</h2>
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
                            <th class="col-lg-1 text-center">Qst. No.</th>
                            <th class="col-lg-3 text-center">Question</th>
                            <th class="text-center">Option A</th>
                            <th class="text-center">Option B</th>
                            <th class="text-center">Option C</th>
                            <th class="text-center">Option D</th>
                            <th class="text-center">Correct Answer</th>
                            <th class="col-lg-2 text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($question as $rowQuestion) { ?>
                            <tr class="odd gradeX text-center">
                                <td><?php echo $serialNo; ?></td>
                                <td><?php echo $rowQuestion->question; ?></td>
                                <td><?php echo $rowQuestion->option_a; ?></td>
                                <td><?php echo $rowQuestion->option_b; ?></td>
                                <td><?php echo $rowQuestion->option_c; ?></td>
                                <td><?php echo $rowQuestion->option_d; ?></td>
                                <td><?php echo $rowQuestion->correct_answer; ?></td>
                                <td>
                                    <a href="{{url("/edit-question/" . $rowQuestion->id)}}" class="btn btn-primary" title="Edit">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url("/delete-question/" . $rowQuestion->id)}}" class="btn btn-danger" title="Delete" onclick="return confirmDelete();">
                                        <span class="glyphicon glyphicon-trash"></span>
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
