<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>eKibali</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
         <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <!-- Ionicons -->
        {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}"> --}}
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
        {{-- Sweetalert2 --}}
        <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
          <!-- Toastr -->
        <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="sidebar-mini layout-fixed small-text control-sidebar-slide-open text-sm">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-light navbar-white">
              <!-- Left navbar links -->
              
              <ul class="navbar-nav">
                
                <li class="nav-item d-none d-sm-inline-block">
                  <h5 class="text-muted pl-3">MFUMO WA KIBALI CHA SAFARI</h5>
                </li>
              </ul>
          
          
              <!-- Right navbar links -->
              <ul class="navbar-nav ml-auto">
               
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-envelope mr-2"></i> 4 new messages
                      <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-users mr-2"></i> 8 friend requests
                      <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-file mr-2"></i> 3 new reports
                      <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
                </li>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" title="Profile" href="#">System Administrator</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="userNavigation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="far fa-user-circle fa-2x fa-fw"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNavigation">
                          <a class="dropdown-item" href="#"><i class="fa fa-user-edit fa-fw text-muted"></i> Profile</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-user-lock fa-fw text-muted"></i> Change Password</a>
                          <div class="dropdown-divider"></div>
                          <button type="submit" class="dropdown-item btn btn-link navbar-btn nav-item"><i class="fa fa-sign-out-alt fa-fw text-muted"></i> Logout</button>
                      </div>
                  </li>
          </ul>
              </ul>
            </nav>
            <!-- /.navbar -->
          
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar elevation-4 sidebar-light-primary">
              <!-- Brand Logo -->
              <div class="text-center">
                
                <a href="#" class="brand-link">
                  <img src="img/smz.png" alt="SMZ Logo" class=" "
                       style="opacity: .8;width:90px">
                  
                </a>
              </div>
          
              <!-- Sidebar -->
              <div class="sidebar">
               
          
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-legacy nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                      <a href="#" class="nav-link {{request()->is('') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                      
                    </li>
                    <li class="nav-item">
                      <a href="/users-list" class="nav-link {{request()->is('users-list') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                         Watumiaji
                          
                        </p>
                      </a>
                    </li>
                   
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                          Charts
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="pages/charts/chartjs.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>ChartJS</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="pages/charts/flot.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Flot</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="pages/charts/inline.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inline</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item has-treeview">
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
                    </li>
                    <li class="nav-item has-treeview">
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
                    </li>
                    <li class="nav-item ">
                      <a href="/ministry" class="nav-link {{ request()->is('ministry','department','department-type') ? 'active' : ''}}  ">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                          Taasisi
                        </p>
                      </a>
                     
                    </li>
                   
                   
                  
                   
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
            </aside>
          
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0 text-dark">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                      </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content-header -->
          <!-- main content -->

          <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
          </section>
          <!-- end main content -->
           
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
              <strong>Copyright &copy; <?php echo date('Y')?> <a href="http://egoz.go.tz">Wakala wa Serikali Mtandao</a>.</strong>
              Haki zote zimehifadhiwa.
              <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
              </div>
            </footer>
          
            
          </div>
          <!-- ./wrapper -->
     
        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
        {{-- <script src="plugins/daterangepicker/daterangepicker.js') }}"></script> --}}
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/adminlte.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        {{-- <script src="{{ asset('js/pages/dashboard.js') }}"></script> --}}
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('js/demo.js') }}"></script>
        {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
        <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
        <!-- Toastr -->
        <script src="plugins/toastr/toastr.min.js"></script>
        @if (Session::has('errors'))
        <script>
          $(document).ready(function(){
            $('#institute').modal('show')
          })
        </script>
        @endif

        <script type="text/javascript">
            $(function() {
            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });
            });
                  $('.swalDefaultSuccess').click(function() {
                    Toast.fire({
                    icon: 'success',
                    title: 'Lorem ipsum dodlor sit amet, consetetur sadipscing elitr.'
                      })
                    });
          </script>

                  <!-- DataTables -->
          <script src="plugins/datatables/jquery.dataTables.min.js"></script>
          <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
          <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
          <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
          <script>
            $(function () {
              $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
              });
              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
              });
            });

          </script>

  <script>
            $(document).on('change','#inputMinistry', function(){
                var mini_id = $(this).val();
                var opt =" ";
                $.ajax({
                    type: 'GET',
                    url: '{!!URL::to('getDeptById')!!}',
                    data: {'id':mini_id},
                    success:function(data){
                        opt += '<option valu="0" selected disabled>..Select Department..</option>';
                        
                        for(var i=0; i < data.length; i++){

                            opt += '<option value="'+data[i].Id+'" >'+data[i].DepartmentName+'</option>';
                        }
                        $('#department').html("");
                        $('#department').append(opt);
                    }

                });
            });

           
        </script>
    </body>
</html>
