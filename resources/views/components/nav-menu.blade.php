
  <nav class="nav nav-tabs bg-light mb-2">
    <a class="nav-link {{ request()->is('hazard-category') ? 'active' : ''}}" href="/hazard-category"> Hazard Category</a>
    <a class="nav-link {{ request()->is('hazard-source') ? 'active' : ''}}" href="/hazard-source"> Hazard Source</a>
    <a class="nav-link {{ request()->is('hazard-type') ? 'active' : ''}}" href="/hazard-type">Hazard Type</a>
  </nav>

