<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <!-- End Dashboard Nav -->


      <!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Management system </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('students.create') }}">
              <i class="bi bi-circle"></i><span>Students Management </span>
            </a>
          </li>
          <li>
            <a href="{{ route('teachers.create') }}">
              <i class="bi bi-circle"></i><span>Teacher Management </span>
            </a>
          </li>
          <li>
            <a href="{{ route('courses.create') }}">
              <i class="bi bi-circle"></i><span>Course Management</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admissions.create') }}">
              <i class="bi bi-circle"></i><span>Admission System </span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>View Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('students.index') }}">
              <i class="bi bi-circle"></i><span>View Students Record</span>
            </a>
          </li>

          <li>
            <a href="{{ route('teachers.index') }}">
              <i class="bi bi-circle"></i><span>View Teacher Record</span>
            </a>
          </li>
          <li>
            <a href="{{ route('courses.index') }}">
              <i class="bi bi-circle"></i><span>View Course Record</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admissions.index') }}">
              <i class="bi bi-circle"></i><span>View Admission Record</span>
            </a>
          </li>
        
      
      
        </ul>
      </li><!-- End Tables Nav -->

     
      
      <!-- End Charts Nav -->

    <!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('register') }}">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('login') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}">
          <i class="bi bi-file-earmark"></i>
          <span>log out </span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside>
<!-- end of sidebar-->