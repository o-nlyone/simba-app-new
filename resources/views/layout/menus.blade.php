<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
              <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
              <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/input" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pembayaran"><i class="ficon" data-feather="plus-square"></i></a></li>
              <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/tagihan" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tagihan"><i class="ficon" data-feather="list"></i></a></li>
              <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/thnajaran" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tahun Ajaran"><i class="ficon" data-feather="calendar"></i></a></li>
              <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/datamhs" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data Mahasiswa "><i class="ficon" data-feather="users"></i></a></li>
            </ul>
            <ul class="nav navbar-nav">
            </ul>
          </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                        data-feather="moon"></i></a></li>
            </li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{auth()->user()->name}}</span><span
                            class="user-status">
                            @if (auth()->user()->id == 1)
                                Master Admin
                            @else
                                Admin
                            @endif
                            </span></div><span class="avatar"><img class="round"
                            src="{{asset('app-assets/images/portrait/small/default.jpeg')}}" alt="avatar" height="40"
                            width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="disabled dropdown-item" href="page-account-settings.html"><i
                            class="me-50" data-feather="settings"></i>
                        Pengaturan</a><a class="dropdown-item"
                        href="/logout"><i class="me-50" data-feather="power"></i>Keluar</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/xls.png')}}" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/jpg.png')}}" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/doc.png')}}" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                        Designer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-8.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-1.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-14.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-6.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No
                    results found.</span></div>
        </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="/"><span class="brand-logo">
                        <img src="{{asset('homepage_files/logo-umi.png')}}" class="brand-logo-img" alt=""></span>
                    <h2 class="brand-text">SIMBA</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{$dashboard ?? 'nav-item'}}"><a class="d-flex align-items-center" href="/dashboard"><i
                        data-feather="home"></i><span class="menu-title text-truncate"
                        data-i18n="Dashboards">Dashboard</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Informasi BPP</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class="{{$inputdata ?? 'nav-item'}}"><a class="d-flex align-items-center" href="/input"><i
                        data-feather="plus-square"></i><span class="menu-title text-truncate" data-i18n="Email">
                        Pembayaran</span></a>
            </li>
            <li class="{{$tagihan ?? 'nav-item'}}"><a class="d-flex align-items-center" href="/tagihan"><i
                data-feather="dollar-sign"></i><span class="menu-title text-truncate" data-i18n="Email">Tagihan</span></a>
            </li>
            <li class="{{$thnajaran ?? 'nav-item'}}"><a class="d-flex align-items-center" href="/thnajaran"><i
                        data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Todo">Tahun
                        Ajaran</span></a>
            </li>
            <li class="{{$mendata ?? 'nav-item'}}"><a class="d-flex align-items-center" href="/datamhs"><i
                        data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Calendar">Data
                        Mahasiswa</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="User Interface">Lain-Lain</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class="{{$pengaturan ?? 'nav-item'}}"><a class="d-flex align-items-center" href="/pengaturan"><i
                        data-feather="settings"></i><span class="menu-title text-truncate"
                        data-i18n="Typography">Pengaturan</span></a>
            </li>
            <li class="disabled  nav-item"><a class="d-flex align-items-center" href="/"><i
                        data-feather="phone"></i><span class="menu-title text-truncate"
                        data-i18n="Typography">Support</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="/logout"><i
                        data-feather="log-out"></i><span class="menu-title text-truncate"
                        data-i18n="Feather">Keluar</span></a>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
