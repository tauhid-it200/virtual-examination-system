@extends("user.master")
@section("content")

<div class="row">
    <div class="col-lg-12">
        <h3 class="text-success"><?php echo Session::get("message"); ?></h3>
        <div class="">
            <div class="text-center" style="margin: 150px;">
                <a href="{{url('/show-result/' . $quizId)}}" class="btn btn-success btn-lg">See Result <span class="glyphicon glyphicon-search"></span></a>
                <a href="{{url('/home')}}" class="btn btn-primary btn-lg">Back To Home <span class="glyphicon glyphicon-home"></span></a>
            </div>
        </div>
    </div>
</div>

@endsection
