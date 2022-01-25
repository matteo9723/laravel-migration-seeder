<header class="container">

  <ul class="nav nav-pills my-5">
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === "home") ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === "packages") ? 'active' : ''}}" href="{{route('packages')}}">Packages</a>
    </li>
    
  </ul>

</header>