@extends("user.master")
@section("content")

<div class="row">
    <div class="col-lg-offset-1 col-lg-10">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="text-center">Exam Title: <b><?php echo $quiz[0]->quiz_title; ?></b></h4>
                <h4 class="text-center">Exam Code: <b><?php echo $quiz[0]->quiz_code; ?></b></h4>
            </div>
            <div class="panel-body">
                
            </div>
        </div>
    </div>
</div>

@endsection