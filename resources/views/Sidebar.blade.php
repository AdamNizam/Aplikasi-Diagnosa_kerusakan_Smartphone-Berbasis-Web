<!-- Page Sidebar Start-->
<header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">Administrator</h6></a>
            <p class="mb-0 font-roboto">{{ Auth::user()->username }}</p>
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>General</h6>
                    </div>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="/Utama"><i data-feather="home"></i><span>Halaman Utama</span></a>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Forms</h6>
                    </div>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="/form/kerusakan"><i data-feather="navigation-2"></i><span>Tambah Kerusakan</span></a></li>
                  <li><a class="nav-link menu-title link-nav" href="/form/kronologi"><i data-feather="file"></i><span>Tambah Kronologi</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="/Data"><i data-feather="aperture"></i><span>Data Kerusakan</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->