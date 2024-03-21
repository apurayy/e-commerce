<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id="toaster"></div>

    <div class="wrapper">


        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="dashboard.php">
                <img src="images/logo.png" alt="Mono">
                <span class="brand-name">Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                  <li>
                    <a class="sidenav-item-link" href="team.html">
                      <i class="mdi mdi-account-group"></i>
                      <span class="nav-text">Team</span>
                    </a>
                  </li>

                  <li class="section-title">
                    Pages
                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#cate"
                      aria-expanded="false" aria-controls="cate">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Category</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="cate"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            
                            <li >
                              <a class="sidenav-item-link" href="all_cat.php">
                                <span class="nav-text">All Category</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="add_cat.php">
                                <span class="nav-text">Add New</span>
                              </a>
                            </li>
                            
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                      aria-expanded="false" aria-controls="users">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">User</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="users"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <!-- <li>
                              <a class="sidenav-item-link" href="show_user.php">
                                <span class="nav-text">User Manage</span>
                              </a>
                            </li> -->
                            <li >
                              <a class="sidenav-item-link" href="all_user.php">
                                <span class="nav-text">User list</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="user-profile-settings.html">
                                <span class="nav-text">User Profile Settings</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="user-account-settings.html">
                                <span class="nav-text">User Account Settings</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="user-planing-settings.html">
                                <span class="nav-text">User Planing Settings</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>

              </ul>

            </div>

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <ul class="d-flex">
                  <li>
                    <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
                  <li>
                    <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>