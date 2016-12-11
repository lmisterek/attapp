<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Assistant
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            @if (Auth::guest())
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/login') }}">Dashboard</a></li>
                    <li><a href="{{ url('/login') }}">Create a Class</a></li>
                    <!--
                    <li><a href="{{ url('/login') }}">Attendance History</a></li>
                    -->
                </ul>
            @else

                <ul class="nav navbar-nav">
                    <li class="{{ URL::route('courses.index') === URL::current() ? 'active' : '' }}" ><a href="/courses">Dashboard</a></li>
                    <li class="{{ URL::route('courses.create') === URL::current() ? 'active' : '' }}" ><a href="/courses/create">Create a Class</a></li>
                    <!--
                    <li><a href="#">Attendance History</a></li>
                    -->
                </ul>

            @endif
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
