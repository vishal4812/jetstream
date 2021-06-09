    <!-- sidebar menu start -->
    <div class="sidebar-menu sticky-sidebar-menu">

      <!-- logo start -->
      <div class="logo">
        <h1><a href="index.html">Menu</a></h1>
      </div>
      
      <!-- <div class="logo">
          <a href="index.html">
            <img src="{{ asset ('images/logo.png') }}" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
          </a>
        </div>
      -->
      <!-- if logo is image enable this -->
        <!-- image logo --
        //image logo -->

      <div class="logo-icon text-center">
        <a href="/dashboard" title="logo" ><img src="{{ asset ('images/logo.png') }}" alt="logo-icon" style="margin-left:10px;"></a>
      </div>
      <!-- //logo end

      <div class="sidebar-menu-inner">

        <!-- sidebar nav start -->
        <ul class="nav nav-pills nav-stacked custom-nav">
          <li class="active"><a href="/dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i><span> Dashboard</span></a></li>
          <li><a href="/employee"><i class="fa fa-group" aria-hidden="true"></i> <span>Employee</span></a></li>
          <li><a href="/department"><i class="fa fa-th-list" aria-hidden="true"></i> <span>Department</span></a></li>
          <li><a href="/student"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Student</span></a></li>
          <li><a href="/user"><i class="fa fa-user" aria-hidden="true"></i> <span>User</span></a></li>
  
          <li class="menu-list"><a href="/attendance"><i class="fa fa-clock-o" aria-hidden="true"></i>
            <span>Attendance <i class="lnr lnr-chevron-right"></i></span></a>
            <ul class="sub-menu-list">

            <li><a href="/attendance">Attendance</a> </li>
              <li><a href="/report">Report</a> </li>
            </ul>
          </li>

          <li class="menu-list"><a href="/timesheet"><i class="fa fa-table" aria-hidden="true"></i>
            <span>Timesheet <i class="lnr lnr-chevron-right"></i></span></a>
            <ul class="sub-menu-list">
              <li><a href="/project">Project</a> </li>
              <li><a href="/assignproject">Assign Project</a> </li>
              <li><a href="/task">Task</a> </li>
              <li><a href="/timesheet">Timesheet</a> </li>
            </ul>
          </li>
          
        </ul>
        <!-- //sidebar nav end -->
        <!-- toggle button start -->
        <a class="toggle-btn">
          <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
          <i class="fa fa-angle-double-right menu-collapsed__right"></i>
        </a>
        <!-- //toggle button end -->
      </div>

    </div>
    <!-- //sidebar menu end -->