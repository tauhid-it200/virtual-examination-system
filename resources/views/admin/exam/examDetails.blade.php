@extends("admin.master")
@section("content")

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-red">
            <div class="panel-heading" style="">
                <a href="{{url("/view-question/".$exam->id)}}" class="btn btn-default pull-right" style="margin-right: 4px;">
                    <span class="glyphicon glyphicon-list-alt"></span> View Questions
                </a>
                <a href="{{url("/add-question/".$exam->id)}}" class="btn btn-primary pull-right" style="margin-right: 4px;">
                    <span class="glyphicon glyphicon-plus-sign"></span> Add Question
                </a>
                <h2 class="text-center">Exam Information</h2>
            </div>
            <div class="panel-body">
                
                @if (session('message'))
                <div class="alert alert-success lead">
                    <p><b>{{ session('message') }}</b></p>
                </div>
                @endif
                
                <table class="table table-responsive" style="width: 100%;">
                    <tr>
                        <th class="col-lg-4 text-right">Subject:</th>
                        <td class=""><?php echo $exam->subject; ?></td>
                    </tr>
                    <tr>
                        <th class="col-lg-4 text-right">Exam Title:</th>
                        <td><?php echo $exam->exam_title; ?></td>
                    </tr>
                    <tr>
                        <th class="col-lg-4 text-right">Exam Code:</th>
                        <td><?php echo $exam->exam_code; ?></td>
                    </tr>
                    <tr>
                        <th class="col-lg-4 text-right">Description:</th>
                        <td><?php echo $exam->exam_description; ?></td>
                    </tr>
                    <tr>
                        <th class="col-lg-4 text-right">Total Questions:</th>
                        <td><?php echo $exam->total_questions; ?></td>
                    </tr>
                    <tr>
                        <th class="col-lg-4 text-right">Duration:</th>
                        <td><?php echo $exam->duration." mins"; ?></td>
                    </tr>
                    <tr>
                        <th class="col-lg-4 text-right">Start Date:</th>
                        <td><?php echo $exam->start_date; ?></td>
                    </tr>
                    <tr>
                        <th class="col-lg-4 text-right">End Date:</th>
                        <td><?php echo $exam->end_date; ?></td>
                    </tr>
                    <tr>
                        <th class="col-lg-4 text-right">Status:</th>
                        <td>
                            <?php 
                            if($exam->publication_status==1){
                                echo "Published";
                            }else{
                                echo "Unpublished";
                            } 
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="col-lg-4"></th>
                        <td>
                            <br/>
                            <a href="{{url("/edit-exam/" . $exam->id)}}" class="btn btn-primary">
                                <span class="glyphicon glyphicon-edit"></span> Edit
                            </a>
                            <?php if($exam->publication_status==1){?> 
                                <a href="{{url("/unpublish-exam/" . $exam->id)}}" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-arrow-down"></span> Unpublish
                                </a>
                               <?php }else{?>
                                <a href="{{url("/publish-exam/" . $exam->id)}}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-arrow-up"></span> Publish
                                </a>
                               <?php }?>
                            
                                <a href="{{url("/delete-exam/" . $exam->id)}}" class="btn btn-danger" onclick="return confirmDelete();">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

