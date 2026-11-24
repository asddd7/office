<aside class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <span class="logo-icon"><i class="fa-solid fa-calendar-check"></i></span>
        <span class="logo-full">SFA - ADMIN</span>
    </div>
    <div class="sidebar-section">MENU UTAMA</div>
    <a href="{{ route('admin.dashboard') }}" @class(['active' => request()->routeIs('admin.dashboard')])>
        <i class="fa-solid fa-house"></i><span>Dashboard</span>
    </a>
    <a href="{{ route('admin.customer.index') }}" @class(['active' => request()->routeIs('admin.customer.*')])>
        <i class="fa-solid fa-users"></i><span>Data Pelanggan</span>
    </a>
</aside>
<div class="sidebar-backdrop" id="sidebarBackdrop"></div>
