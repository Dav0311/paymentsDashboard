
@extends('frontend.master')


@section('sidebar')

<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="#">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Alerts</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Accordion</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Badges</span>
        </a>
      </li>
      
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Form Elements</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Form Layouts</span>
        </a>
      </li>
      
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>General Tables</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Data Tables</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart">
      </i><span>Charts</span>
      <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Chart.js</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>ApexCharts</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>ECharts</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->

 

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
  <a class="nav-link collapsed" href="{{ route('profile.edit') }}">
    <i class="bi bi-person me-2"></i>
    <span>{{ __('Profile') }}</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li><!-- End Register Page Nav -->


 
</ul>

</aside>

@endsection

@section('footer')

<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>IPPU Payments</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://impactoutsourcing.co.ug/">Impact Outsourcing</a>
    </div>

@endsection