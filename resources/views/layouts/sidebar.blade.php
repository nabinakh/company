
   <nav id="sidebar" aria-label="Main Navigation">
      <!-- Side Header -->
      <div class="content-header">
        <!-- Logo -->
        <a class="font-semibold text-dual" href="/">
          <span class="smini-visible">
            <i class="fa fa-circle-notch text-primary"></i>
          </span>
          <span class="smini-hide fs-5 tracking-wider">Cattolica <span class="fw-normal">Contest</span></span>
        </a>
        <!-- END Logo -->

        <!-- Extra -->
        <div>

          <!-- Close Sidebar, Visible only on mobile screens -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
            <i class="fa fa-fw fa-times"></i>
          </a>
          <!-- END Close Sidebar -->
        </div>
        <!-- END Extra -->
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <!-- END Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
          <ul class="nav-main">
            <li class="nav-main-item">
              <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/admin">
                <i class="nav-main-link-icon si si-cursor"></i>
                <span class="nav-main-link-name">Dashboard</span>
              </a>
            </li>
            <li class="nav-main-heading">Management</li>
            <li class="nav-main-item{{ request()->is('admin/participant*') || request()->is('admin/participant*') ? ' open' : '' }}">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                <i class="nav-main-link-icon fa fa-users"></i>
                <span class="nav-main-link-name">Participants</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link{{ request()->is('admin/participant/create') ? ' active' : '' }}" href="{{ route('participant.create') }}">
                    <span class="nav-main-link-name">Add Participants</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link{{ request()->is('admin/participant') ? ' active' : '' }}" href="{{ route('participant.index') }}">
                    <span class="nav-main-link-name">List Participants</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-main-item{{ request()->is('admin/testomonial/*') ? ' open' : '' }}">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                <i class="nav-main-link-icon si si-bulb"></i>
                <span class="nav-main-link-name">Testomonials</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link{{ request()->is('admin/testomonial') ? ' active' : '' }}" href="{{ route('testomonial.create')}}">
                    <span class="nav-main-link-name">Add Testomonial</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="{{ route('testomonial.index')}}">
                    <span class="nav-main-link-name">List Testomonials</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-main-item{{ request()->is('admin/team/*') ? ' open' : '' }}">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                <i class="nav-main-link-icon si si-bulb"></i>
                <span class="nav-main-link-name">Team</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link{{ request()->is('admin/team/create') ? ' active' : '' }}" href="{{ route('team.create')}}">
                    <span class="nav-main-link-name">Add Team</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link{{ request()->is('admin/team') ? ' active' : '' }}" href="{{ route('team.index')}}">
                    <span class="nav-main-link-name">List Team</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- END Side Navigation -->
      </div>

    </nav>
