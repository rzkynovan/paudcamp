<div class="navbar-expand-md">
  <div class="collapse navbar-collapse" id="navbar-menu">
    <div class="navbar navbar-light">
      <div class="container-xl">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
              </span>
              <span class="nav-link-title">
                Home
              </span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard') }}" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grip-horizontal" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="5" cy="9" r="1"></circle>
                  <circle cx="5" cy="15" r="1"></circle>
                  <circle cx="12" cy="9" r="1"></circle>
                  <circle cx="12" cy="15" r="1"></circle>
                  <circle cx="19" cy="9" r="1"></circle>
                  <circle cx="19" cy="15" r="1"></circle>
               </svg>
              </span>
              <span class="nav-link-title">
                Dashboard
              </span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="6" height="5" rx="2" /><rect x="4" y="13" width="6" height="7" rx="2" /><rect x="14" y="4" width="6" height="7" rx="2" /><rect x="14" y="15" width="6" height="5" rx="2" /></svg>
              </span>
              <span class="nav-link-title">
                Master
              </span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-columns">
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="./layout-horizontal.html" >
                    Siswa
                  </a>
                  <a class="dropdown-item" href="./layout-boxed.html" >
                    Boxed
                  </a>
                  <a class="dropdown-item" href="./layout-vertical.html" >
                    Vertical
                  </a>
                  <a class="dropdown-item" href="./layout-vertical-transparent.html" >
                    Vertical transparent
                  </a>
                  <a class="dropdown-item" href="./layout-vertical-right.html" >
                    Right vertical
                  </a>
                  <a class="dropdown-item" href="./layout-condensed.html" >
                    Condensed
                  </a>
                  <a class="dropdown-item" href="./layout-combo.html" >
                    Combined
                  </a>
                </div>
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="./layout-navbar-dark.html" >
                    Navbar dark
                  </a>
                  <a class="dropdown-item" href="./layout-navbar-sticky.html" >
                    Navbar sticky
                  </a>
                  <a class="dropdown-item" href="./layout-navbar-overlap.html" >
                    Navbar overlap
                  </a>
                  <a class="dropdown-item" href="./layout-rtl.html" >
                    RTL mode
                  </a>
                  <a class="dropdown-item" href="./layout-fluid.html" >
                    Fluid
                  </a>
                  <a class="dropdown-item" href="./layout-fluid-vertical.html" >
                    Fluid vertical
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
          <form action="." method="get">
            <div class="input-icon">
              <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
              </span>
              <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>