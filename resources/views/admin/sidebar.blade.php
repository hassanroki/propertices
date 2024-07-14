 <!-- Sidebar -->
 <div class="sidebar" data-background-color="dark">

    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="{{ route('admin.dashboard') }}" class="logo">
          <h4 class="text-white">Dashboard</h4>
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">

          <li class="nav-item active">
            <a
              data-bs-toggle="collapse"
              href="#dashboard"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>Our Services</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="dashboard">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('service.index') }}">
                    <span class="sub-item">Services</span>
                  </a>
                </li>
              </ul>
            </div>

          </li>

          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Menu</h4>
          </li>

          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#baseOne">
              <i class="fas fa-layer-group"></i>
              <p>Header</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="baseOne">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('welcome.index') }}">
                    <span class="sub-item">Welcome</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('social.index') }}">
                    <span class="sub-item">Socail Icon</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('logo.index') }}">
                    <span class="sub-item">Logo</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('contact-icon.index') }}">
                    <span class="sub-item">Contact Icon</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('main-menu.index') }}">
                    <span class="sub-item">Main Menu</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Banner Section</h4>
          </li>

          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#baseTwo">
              <i class="fas fa-layer-group"></i>
              <p>Banner</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="baseTwo">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('banner.index') }}">
                    <span class="sub-item">Banner</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">About Section</h4>
          </li>

          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#baseThree">
              <i class="fas fa-layer-group"></i>
              <p>About</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="baseThree">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('about.index') }}">
                    <span class="sub-item">About Us</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Project Section</h4>
          </li>

          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#baseFour">
              <i class="fas fa-layer-group"></i>
              <p>Project</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="baseFour">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('project.index') }}">
                    <span class="sub-item">Projects</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Contact Section</h4>
          </li>

          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#baseFive">
              <i class="fas fa-layer-group"></i>
              <p>Contact</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="baseFive">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('contact-phone.index') }}">
                    <span class="sub-item">Contact Phone</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('contact.index') }}">
                    <span class="sub-item">Contacts</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Footer Section</h4>
          </li>

          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#baseSix">
              <i class="fas fa-layer-group"></i>
              <p>Footer</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="baseSix">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('footer.index') }}">
                    <span class="sub-item">Footer Content</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('send-mail.index') }}">
                    <span class="sub-item">Receive Mail</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div>
  <!-- End Sidebar -->