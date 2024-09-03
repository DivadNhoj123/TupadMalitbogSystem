<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                <img src="../assets/img/logo/tupad-logo.png" alt="" class=" rounded-circle" style="height:30px;">
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">{{ config('app.name', 'TIMS') }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="menu-toggle-icon d-xl-block align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="menu-icon tf-icons ri-mac-line"></i>
                <div data-i18n="Basic">Dashboard</div>
            </a>
        </li>
        <li class="menu-header mt-3">
            <span class="menu-header-text">TUPAD Information</span>
        </li>
        <li class="menu-item {{ request()->routeIs('tupad-applicant.index') ? 'active' : '' }}">
            <a href="{{ route('tupad-applicant.index') }}"
                class="menu-link {{ request()->routeIs('tupad-applicant.index') ? 'active' : '' }}">
                <i class="menu-icon tf-icons ri-hand-coin-line"></i>
                <div data-i18n="Basic">TUPAD Applicant</div>
            </a>
        </li>
        <li class="menu-header mt-3">
            <span class="menu-header-text">Officials</span>
        </li>
        <li class="menu-item {{ request()->routeIs('barangay-officials.index') ? 'active' : '' }}">
            <a href="{{ route('barangay-officials.index') }}"
                class="menu-link {{ request()->routeIs('barangay-officials.index') ? 'active' : '' }}">
                <i class="menu-icon tf-icons ri-government-line"></i>
                <div data-i18n="Basic">Barangay Officials</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('appointed-officials.index') ? 'active' : '' }}">
            <a href="{{ route('appointed-officials.index') }}"
                class="menu-link {{ request()->routeIs('appointed-officials.index') ? 'active' : '' }}">
                <i class="menu-icon tf-icons ri-user-star-line"></i>
                <div data-i18n="Basic">Appointed Officials</div>
            </a>
        </li>
        <li class="menu-header mt-3">
            <span class="menu-header-text">System Settings</span>
        </li>
        <li class="menu-item {{ request()->routeIs('manage.index') ? 'active' : '' }}">
            <a href="{{ route('manage.index') }}"
                class="menu-link {{ request()->routeIs('appointed-officials.index') ? 'active' : '' }}">
                <i class="menu-icon tf-icons ri-settings-line"></i>
                <div data-i18n="Basic">Manage</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
