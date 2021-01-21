
  <nav class="nav nav-tabs bg-light mb-2">
    <a class="nav-link {{ request()->is('ministry') ? 'active' : ''}}" href="/ministry"><i class="fa fa-university"></i> Orodha ya Wizara</a>
    <a class="nav-link {{ request()->is('department-type') ? 'active' : ''}}" href="/department-type"><i class="fa fa-hospital"></i> Orodha ya aina za Idara</a>
    <a class="nav-link {{ request()->is('department') ? 'active' : ''}}" href="/department"><i class="fa fa-building"></i> Orodha ya Idara</a>
  </nav>

