<div class="container">
<div class="navbar-header">
    <a class="navbar-brand" href="{{ url('/') }}">
        <h3 style="color: #ffffff">Virtual Examination System</h3>
    </a>
</div>
   <div class="collapse navbar-collapse" id="app-navbar-collapse">
    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!--<li class="dropdown" style="margin-top: 50px;">-->
        <a class="btn btn-danger" href="{{ url('/admin-logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    <form id="logout-form" action="{{ url('/admin-logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

<!--            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{url('/home')}}"><i class="fa fa-home fa-fw"></i> Home</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-unlock-alt fa-fw"></i> Change Password</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ url('/user-logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    <form id="logout-form" action="{{ url('/user-logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>-->
        <!--</li>-->
    </ul>
</div>
</div>