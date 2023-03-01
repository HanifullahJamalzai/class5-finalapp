<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('property.index') }}">
          <i class="bi bi-grid"></i>
          <span>Property</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('tag.index') }}">
          <i class="bi bi-grid"></i>
          <span>Tag</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('testimonial.index') }}">
          <i class="bi bi-grid"></i>
          <span>Testimonial</span>
        </a>
      </li><!-- End Dashboard Nav -->
    @can('IsAdmin')
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('service.index') }}">
          <i class="bi bi-grid"></i>
          <span>Services</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('message.index') }}">
          <i class="bi bi-grid"></i>
          <span>Messages</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('setting.index') }}">
          <i class="bi bi-grid"></i>
          <span>Setting</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      
    @endcan
      <!-- End Dashboard Nav -->
      
      
      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('testimonial.index') }}">
          <i class="bi bi-grid"></i>
          <span>Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('testimonial.index') }}">
          <i class="bi bi-grid"></i>
          <span>Logout</span>
        </a>
      </li>

    </ul>

  </aside>
  