@extends("public.master")
@section("content")

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Welcome to Virtual Examination System</h1>
        <a href="{{secure_url("/login")}}" class="button button-info">Login As Admin</a>
    </div>
</div>

@endsection
