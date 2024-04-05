  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="/admin/assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="/admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
       
      <li class="nav-item menu-items" style="margin-top: 60px;">
        <a class="nav-link" href="{{url('home')}}">
            <span class="menu-icon">
                <i class="mdi mdi-chart-bar" style="color: #789caa;"></i> <!-- Changed icon to a bar chart icon -->
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>
    
      
      <li class="nav-item menu-items" style="margin-top: 10px;">
        <a class="nav-link" href="{{url('add_doctor_view')}}">
          <span class="menu-icon">
            <i class="mdi mdi-plus-box" style="color: #789caa;"></i> <!-- Changed icon to mdi-plus-box for Add Doctors -->
          </span>
          <span class="menu-title">Add Doctors</span>
        </a>
      </li>
  
      <li class="nav-item menu-items" style="margin-top: 10px;">
        <a class="nav-link" href="{{url('showappointment')}}">
          <span class="menu-icon">
            <i class="mdi mdi-calendar-clock" style="color: #789caa;"></i> <!-- Changed icon to mdi-calendar-clock for Appointments -->
          </span>
          <span class="menu-title">Appointments</span>
        </a>
      </li>
  
      <li class="nav-item menu-items" style="margin-top: 10px;">
        <a class="nav-link" href="{{url('showdoctor')}}">
          <span class="menu-icon">
            <i class="mdi mdi-account-details" style="color: #789caa;"></i> <!-- Changed icon to mdi-account-details for Doctors details -->
          </span>
          <span class="menu-title">Doctors details</span>
        </a>
      </li>
  
    </ul>
  </nav>