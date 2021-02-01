<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-dark-success">
    <!-- Brand Logo -->
    <div class="text-center">
      
      <a href="/dashboard" class="brand-link">
        <img src="{{asset('assets/img/smzlogo.png')}}" alt="SMZ Logo" class=" " style="opacity: .8;width:120px">
        {{-- <img src="img/smz.png" alt="SMZ Logo" class=" " style="opacity: .8;width:140px"> --}}
      </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
     

      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-legacy nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{request()->is('dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          {{-- <li class="nav-item">
            <a href="/hazard-list" class="nav-link {{request()->is('hazard-list') ? 'active' : ''}}">
              <i class="nav-icon fas fa-fire-extinguisher"></i>
              <p>
                Hazard
              </p>
            </a>
            
          </li> --}}
          
          <li class="nav-item has-treeview {{ request()->is('add-hazard','hazard-list') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{ request()->is('add-hazard','hazard-list') ? 'active' : ''}}">
              <i class="nav-icon fas fa-fire-extinguisher"></i>
              <p>
                Hazards
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/add-hazard" class="nav-link {{ request()->is('add-hazard') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Hazard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/hazard-list" class="nav-link {{ request()->is('hazard-list') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Hazard List</p>
                </a>
              </li>
              
            </ul>
          </li> 
          <li class="nav-item">
            <a href="/users-list" class="nav-link {{request()->is('users-list') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Users
                
              </p>
            </a>
          </li>
          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item ">
            <a href="/hazard-category" class="nav-link {{ request()->is('hazard-category','hazard-source','hazard-type') ? 'active' : ''}}  ">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Hazard Settings
              </p>
            </a>
           
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  