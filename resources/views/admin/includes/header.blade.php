<div class="navbar-header">
    <a class="navbar-brand" href="{{ url('/') }}" style="padding-top: 15px; padding-left: 50px;">
        <p class="lead" style="color: #ffffff;">Virtual Examination System</p>
    </a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_menu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="collapse navbar-collapse navbar-nav" id="main_menu">
    <ul class="nav navbar-nav" style="padding-top: 50px;">
        <li class="">
            <a href="{{url('/dashboard')}}" class="" style=""><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#subject" style=""><i class="fa fa-book"></i> Subject <span class="fa fa-caret-down"></span></a>
            <ul class="dropdown-menu nav navbar-nav" role="" style="background-color: #000000;">
                <li><a href="{{url('/add-subject')}}" class="" style=""><i class="fa fa-plus-square"></i> Add Subject</a></li>
                <li><a href="{{url('/view-subject')}}" class="" style=""><i class="fa fa-eye"></i> View Subjects</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" style=""><i class="fa fa-pencil-square-o"></i> Exam <span class="fa fa-caret-down"></span></a>
            <ul class="dropdown-menu nav navbar-nav" role="menu" style="background-color: #000000;">
                <li><a href="{{url('/create-exam')}}" class="" style=""><i class="fa fa-file-text"></i> Create Exam</a></li>
                <li><a href="{{url('/view-exam')}}" class="" style=""><i class="fa fa-list"></i> Exam List</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="" style=""><i class="fa fa-users"></i> Participants</a>
        </li>
        
    </ul>
    
</div>
<ul class="nav navbar-right nav-pills" style="padding-top: 55px; padding-right: 50px;">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #ff6666;">
            <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu" style="background-color: #ccffff;">
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a></li>
            <li><a href="#"><i class="fa fa-unlock-alt fa-fw"></i> Change Password</a></li>
            <li class="divider"></li>
            <li><a href="{{ url('/admin-logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                <form id="logout-form" action="{{ url('/admin-logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
        </li>
    </ul>