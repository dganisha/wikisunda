<ul class="navbar-nav mr-auto">
  <li class="nav-item active">
    <a class="nav-link waves-effect waves-light" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i>Logout<span class="sr-only"></span>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
  </li>
</ul>