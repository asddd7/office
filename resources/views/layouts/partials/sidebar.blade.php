<aside class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <span class="logo-icon"><i class="fa-solid fa-calendar-check"></i></span>
        <span class="logo-full">SFA</span>
    </div>
    <div class="sidebar-section">MENU UTAMA</div>
    <a
        href="{{ route(auth()->user()?->role_id === 1 ? 'admin.dashboard' : 'dashboard') }}"
        @class(['active' => request()->routeIs('dashboard', 'admin.dashboard')])
    >
        <i class="fa-solid fa-house"></i><span>Dashboard</span>
    </a>
</aside>
<div class="sidebar-backdrop" id="sidebarBackdrop"></div>
