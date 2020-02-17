<nav id="sidebar">
    <div class="sidebar-header">
        <h1>
            <a href="index.html">Booking Schedule</a>
        </h1>
        <span>M</span>
    </div>
    <div class="profile-bg"></div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{url('/dashboard')}}">
                <i class="fas fa-th-large"></i>
                Dashboard
            </a>
        </li>
        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
            {{--users bar--}}
            <li>
                <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    User
                    <i class="fas fa-angle-down fa-pull-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu3">
                    <li>
                        <a href="{{url('/user')}}">User</a>
                    </li>
                    {{--<li>--}}
                    {{--<a href="register.html">Register</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="forgot.html">Forgot password</a>--}}
                    {{--</li>--}}
                </ul>
            </li>
        @endif


        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Schedule Booking's
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{url('/calendar')}}">Add Booking</a>
                </li>
                {{--<li>--}}
                    {{--<a href="carousels.html">Carousels</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="forms.html">Forms</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="modals.html">Modals</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="tables.html">Tables</a>--}}
                {{--</li>--}}
            </ul>
        </li>

        <li>
        <a href="{{url('/teacher')}}">
        <i class="fas fa-user-circle"></i>
        Teacher
        </a>
        </li>
        {{--<li>--}}
        {{--<a href="grids.html">--}}
        {{--<i class="fas fa-th"></i>--}}
        {{--Grid Layouts--}}
        {{--</a>--}}
        {{--</li>--}}
        {{----}}
        {{--<li>--}}
        {{--<a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">--}}
        {{--<i class="far fa-file"></i>--}}
        {{--Pages--}}
        {{--<i class="fas fa-angle-down fa-pull-right"></i>--}}
        {{--</a>--}}
        {{--<ul class="collapse list-unstyled" id="pageSubmenu1">--}}
        {{--<li>--}}
        {{--<a href="404.html">404</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="500.html">500</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="blank.html">Blank</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</li>--}}

        {{----}}
        {{--<li>--}}
        {{--<a href="mailbox.html">--}}
        {{--<i class="far fa-envelope"></i>--}}
        {{--Mailbox--}}
        {{--<span class="badge badge-secondary float-md-right bg-danger">5 New</span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="widgets.html">--}}
        {{--<i class="far fa-window-restore"></i>--}}
        {{--Widgets--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="pricing.html">--}}
        {{--<i class="fas fa-table"></i>--}}
        {{--Pricing Tables--}}
        {{--</a>--}}
        {{--</li>--}}

        {{--<li>--}}
        {{--<a href="maps.html">--}}
        {{--<i class="far fa-map"></i>--}}
        {{--Maps--}}
        {{--</a>--}}
        {{--</li>--}}
    </ul>
</nav>