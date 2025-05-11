<div class="sidebar-container">
    <div class="sidebar-header">
        <div class="logo-admin">
            <img src="{{ asset('asset/images/logo_coffee_1.png') }}" alt="Logo" class="logo">
        </div>
        <span class="name-admin">Coffee Espresso Admin</span>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-item"><a href="{{ route('admin.index') }}" class="menu-link"><i class="fas fa-tachometer-alt"></i>
                Dashboard</a></li>
        <li class="menu-item"><a href="{{ route('admin.report') }}" class="menu-link"><i class="fas fa-chart-pie"></i>
                Reports</a></li>
        <li class="menu-item"><a href="{{ route('admin.import') }}" class="menu-link"><i class="fa-solid fa-file-import"></i> Import Product</a></li>
    </ul>
</div>
