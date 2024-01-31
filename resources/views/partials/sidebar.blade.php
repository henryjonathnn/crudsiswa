
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:../../partials/_settings-panel.html -->
          <div class="theme-setting-wrapper">
              <div id="settings-trigger"><i class="ti-settings"></i></div>
              <div id="theme-settings" class="settings-panel">
                  <i class="settings-close ti-close"></i>
                  <p class="settings-heading">SIDEBAR SKINS</p>
                  <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                      <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                  </div>
                  <div class="sidebar-bg-options" id="sidebar-dark-theme">
                      <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                  </div>
                  <p class="settings-heading mt-2">HEADER SKINS</p>
                  <div class="color-tiles mx-0 px-4">
                      <div class="tiles success"></div>
                      <div class="tiles warning"></div>
                      <div class="tiles danger"></div>
                      <div class="tiles info"></div>
                      <div class="tiles dark"></div>
                      <div class="tiles default"></div>
                  </div>
              </div>
          </div>
          <!-- partial -->
          <!-- partial:../../partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <ul class="nav">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('dashboard1') }}">
                          <i class="ti-bar-chart menu-icon"></i>
                          <span class="menu-title">Dashboard</span>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('siswa') }}">
                          <i class="ti-user menu-icon"></i>
                          <span class="menu-title">Data Siswa</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link 
                      {{ Route::is('guru.index') || Route::is('guru.create') || Route::is('guru.edit') ? 'active' : '' }}" 
                      href="{{ route('guru.index') }}">
                          <i class="ti-headphone-alt menu-icon"></i>
                          <span class="menu-title">Data Guru</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link 
                      {{ Route::is('buku.index') || Route::is('buku.create') || Route::is('buku.edit') ? 'active' : '' }}" 
                      href="{{ route('buku.index') }}">
                          <i class="ti-agenda menu-icon"></i>
                          <span class="menu-title">Data Buku</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class=
                      "nav-link {{ Route::is('penulis.index') || Route::is('penulis.create') || Route::is('penulis.edit') ? 'active' : '' }}" 
                      href="{{ route('penulis.index') }}">
                          <i class="ti-marker-alt menu-icon"></i>
                          <span class="menu-title">Data Penulis</span>
                      </a>
                  </li>
              </ul>
          </nav>

          