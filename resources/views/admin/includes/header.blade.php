<div class="navbar-header">
    <a class="navbar-brand" href="{{ url('/dashboard') }}">
        <h3 style="color: wheat">VIRTUAL EXAMINATION SYSTEM</h3>
    </a>
</div>
<ul class="nav navbar-top-links navbar-right" style="margin-top: 85px;">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #cccc00;">
            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-unlock-alt fa-fw"></i> Change Password</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{ url('/admin-logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                <form id="logout-form" action="{{ url('/admin-logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
</ul>