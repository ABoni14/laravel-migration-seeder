<header class="container py-5">
  <ul class="nav nav-pills">
     <li class="nav-item">
       <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link {{ (Route::currentRouteName() === 'travels') ? 'active' : '' }}" href="{{ route('travels') }}">Viaggi</a>
     </li>
     <li class="nav-item">
       <a class="nav-link {{ (Route::currentRouteName() === 'offerte') ? 'active' : '' }}" href="{{ route('offerte') }}">Offerte</a>
     </li>
  </ul>
</header>