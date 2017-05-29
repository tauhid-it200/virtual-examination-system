<div class="sidebar" role="navigation" style="background-color: #333333;">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{URL::to("/home")}}" target="_blank" style="color: #00ccff;"><i class="fa fa-home fa-fw"></i> Home</a>
            </li>
            <li>
                <a href="{{URL::to("/dashboard")}}" style="color: #00ccff;"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#" style="color: #00ccff;"><i class="fa fa-book fa-fw"></i> Subject<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url(("/add-subject"))}}" style="color: #00ccff;"><i class="fa fa-plus fa-fw"></i> Add Subject</a>
                    </li>
                    <li>
                        <a href="{{url(("/view-subject"))}}" style="color: #00ccff;"><i class="fa fa-list fa-fw"></i> View Subjects</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#" style="color: #00ccff;"><i class="fa fa-pencil-square-o fa-fw"></i> Exam<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url(("/create-exam"))}}" style="color: #00ccff;"><i class="fa fa-plus fa-fw"></i> Create Exam</a>
                    </li>
                    <li>
                        <a href="{{url(("/view-exam"))}}" style="color: #00ccff;"><i class="fa fa-list fa-fw"></i> Exam List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url("")}}" style="color: #00ccff;"><i class="fa fa-users fa-fw"></i> Participants</a>
            </li>
        </ul>
    </div>
</div>