<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">

        <a href="{{ route('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                {{-- Logo Here --}}
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="align-middle bx bx-chevron-left bx-sm"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="py-1 menu-inner">

        {{-- Admin --}}
        <li class="menu-item {{ request()->is('home') ? 'active' : '' }}">
            <a href="{{ route('home.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Home">Home</div>
            </a>
        </li>

        @role('Administrator')
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">User Management</span>
            </li>

            <li class="menu-item {{ request()->is('admin/users') ? 'open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="User management">User Management</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item {{ request()->is('admin/users') ? 'active' : '' }}">
                        <a href="{{ route('admin.users') }}" class="menu-link">
                            <div data-i18n="user lists">user lists</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endrole
    </ul>
</aside>
