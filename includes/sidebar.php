<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img alt="image" src="assets/images/avatar.jpg">
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name">Admin</div>
                            <div class="user-role">Administrator</div>
                        </div>
                    </div>
                </li>
                <li class="nav-item <?php if ($page == 'dashboard') {
                    echo "active";
                } ?>">
                    <a href="dashboard" class="nav-link nav-toggle">
                        <i data-feather="airplay"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item <?php if ($page == 'course') {
                    echo "active";
                } ?>">
                    <a href="course" class="nav-link nav-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span class="title">Course</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>