<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Core</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link collapsed" href="{{ route('dashboard') }}" >
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboards

            </a>
            <!-- Sidenav Accordion (Account)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Account" aria-expanded="false" aria-controls="Account">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Account
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Account" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                    <a class="nav-link" href="{{ route('superAdminUsers')}}">
                        List Account
                        <span class="badge bg-primary-soft text-primary ms-auto">limited</span>
                    </a>
                    <a class="nav-link" href="dashboard-2.html">Multipurpose</a>
                    <a class="nav-link" href="dashboard-3.html">Affiliate</a>
                </nav>
            </div>
            <!-- Sidenav Accordion (Product)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Product" aria-expanded="false" aria-controls="Product">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Product
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Product" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                    <a class="nav-link" href="dashboard-1.html">
                        Default
                        <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                    </a>
                    <a class="nav-link" href="dashboard-2.html">Multipurpose</a>
                    <a class="nav-link" href="dashboard-3.html">Affiliate</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">Valerie Luna</div>
        </div>
    </div>
</nav>
