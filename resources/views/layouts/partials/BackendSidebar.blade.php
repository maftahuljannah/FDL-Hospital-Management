<!-- Dashboard -->
<li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
    <a href="{{ route('admin.dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Dashboard</div>
    </a>
</li>

<!-- Department -->
<li class="menu-item {{ request()->routeIs('admin.department') ? 'active' : '' }}">
    <a href="{{ route('admin.department') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-buildings"></i>
        <div>Department</div>
    </a>
</li>

<!-- Doctor -->
<li class="menu-item {{ request()->routeIs('admin.doctor*') ? 'active' : '' }}">
    <a href="{{ route('admin.doctor') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div>Doctor</div>
    </a>
</li>

<!-- Staff -->
<li class="menu-item {{ request()->routeIs('admin.staff*') ? 'active' : '' }}">
    <a href="{{ route('admin.staff') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-group"></i>
        <div>Staff</div>
    </a>
</li>

<!-- Reports -->
<li class="menu-item {{ request()->routeIs('admin.reports.*') ? 'active' : '' }}">
    <a href="{{ route('admin.reports.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-group"></i>
        <div>Reports</div>
    </a>
</li>