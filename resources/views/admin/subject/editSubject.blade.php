@extends("admin.master")
@section("content")

<div class="row">
    <div class="col-lg-offset-1 col-lg-10">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h2 class="text-center">Edit Subjects Here</h2>
            </div>
            <div class="panel-body">

                @if (session('message'))
                <div class="alert alert-success lead">
                    <p><b>{{ session('message') }}</b></p>
                </div>
                @endif

                {!!Form::open(array("url" => "/update-subject", "role" => "form", "method" => "POST", "class" => "form-horizontal"))!!}
                <div class="form-group">
                    <label for="subj_name" class="control-label col-lg-4">Subject Name</label>
                    <div class="col-lg-6">
                        <input type="text" name="subj_name" id="subj_name" class="form-control" value="<?php echo $subject->subj_name; ?>" required/>
                        <input type="hidden" name="id" value="<?php echo $subject->id; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subj_code" class="control-label col-lg-4">Subject Code</label>
                    <div class="col-lg-6">
                        <input type="text" name="subj_code" id="subj_code" class="form-control" value="<?php echo $subject->subj_code; ?>" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subj_description" class="control-label col-lg-4">Description</label>
                    <div class="col-lg-6">
                        <textarea rows="6" name="subj_description" id="subj_description" class="form-control" required><?php echo $subject->subj_description; ?></textarea>
                    </div>
                </div>
                
                <br/>
                
                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-2">
                        <input type="submit" name="button" class="btn btn-primary btn-block" value="UPDATE"/>
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection

