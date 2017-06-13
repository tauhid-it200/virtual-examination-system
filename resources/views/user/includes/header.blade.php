<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_menu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}" style="padding-top: 15px; padding-left: 50px;">
        <p class="lead" style="color: #ffffff;">Virtual Examination System</p>
    </a>
</div>
<div class="collapse navbar-collapse navbar-nav" id="main_menu">
    <ul class="nav navbar-nav" style="padding-top: 50px;">
        <li class="">
            <a href="{{url('/home')}}" class=""><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="">
            <a href="{{url('/home')}}" class=""><i class="fa fa-pencil-square-o"></i> Quiz</a>
        </li>
        <li>
            <a href="#" class=""><i class="fa fa-calculator"></i> Result</a>
        </li>
        <li>
            <a href="#" class=""><i class="fa fa-certificate"></i> Participations</a>
        </li>
    </ul>
</div>
<ul class="nav navbar-right nav-pills" style="padding-top: 55px; padding-right: 50px;">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #ff6666;">
            <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu" style="background-color: #ccffff;">
                <li><a href="{{url('/home')}}"><i class="fa fa-dashboard fa-fw"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-unlock-alt fa-fw"></i> Change Password</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/user-logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    <form id="logout-form" action="{{ url('/user-logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>