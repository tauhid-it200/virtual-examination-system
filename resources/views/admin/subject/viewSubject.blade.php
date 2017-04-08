@extends("admin.master")
@section("content")

<div class="row">
    <div class="col-lg-12">
        <h3 class="text-success"><?php echo Session::get("message"); ?></h3>
        <div class="panel panel-green">
            <div class="panel-heading" style="background-color: #006633;">
                <h2 class="text-center">List of All Subjects</h2>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover data_table" width="100%">
                    <thead>
                        <tr>
                            <th class="col-lg-1 text-center">Serial No.</th>
                            <th class="col-lg-2 text-center">Subject Name</th>
                            <th class="col-lg-2 text-center">Subject Code</th>
                            <th class="col-lg-4 text-center">Subject Description</th>
                            <th class="col-lg-3 text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($subject as $rowSubject) { ?>
                            <tr class="odd gradeX text-center">
                                <td><?php echo $serialNo; ?></td>
                                <td><?php echo $rowSubject->subj_name; ?></td>
                                <td><?php echo $rowSubject->subj_code; ?></td>
                                <td><?php echo $rowSubject->subj_description; ?></td>
                                <td>
                                    <a href="{{url("/edit-subject/".$rowSubject->id)}}" class="btn btn-info"> Edit
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url("/delete-subject/".$rowSubject->id)}}" class="btn btn-danger" id="btn_delete" onclick="return confirmDelete();"> Delete
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
