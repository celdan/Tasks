
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
        <a class="brand" href="{{ url('/') }}">
          <img src="{{ asset('images/logo/calendar-icon.png') }}" class="img-logo-home"/>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="javascript:void" class="dropdown-toggle" data-toggle="dropdown">&nbsp;&nbsp;<i class="fa fa-cog"></i>&nbsp;&nbsp;</a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('home') }}">
                Account Details<br />
                <small> @if (Auth::check())
                         {{ Auth::user()->name}}
                         @endif
              </small>
              </a></li>
              <li class="divider"></li>
              <li><a href="{{ url('/auth/logout') }}">Log out</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </nav>