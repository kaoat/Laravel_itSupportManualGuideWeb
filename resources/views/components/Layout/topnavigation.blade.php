<ul class="nav justify-content-center bg-dark">
  <!--<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>!-->
  <li class="nav-item">
    <a class="nav-link" href="{{route('indexpage')}}">Home</a>
  </li>

  @if(!is_null(Auth::user()))
  <li class="nav-item">
    <a class="nav-link" href="{{route('managementpage')}}">
      FAQ Management
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('logout')}}">
      Logout
    </a>
  </li>
  @else
    <li class="nav-item">
    <a class="nav-link" href="{{route('loginpage')}}">
      Login
    </a>
  </li>
  @endif
</ul>