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
                <li class="nav-item <?php if ($page == 'dashboard'){ echo "active";}?>">
                    <a href="dashboard" class="nav-link nav-toggle">
                        <i data-feather="airplay"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>