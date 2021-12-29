<div class="c-sidebar-brand">
    <a href="{{url('/')}}">
        <img class="c-sidebar-brand-full sidebar-logo" src="{{ url('/assets/brand/logo-white-1.png') }}" style="height:50px; width: 50px;" alt="Logo">
        <img class="c-sidebar-brand-minimized sidebar-favicon" src="{{ url('assets/favicon/favicon.png') }}" alt="Logo">
    </a>
</div>
<ul class="c-sidebar-nav ps ps--active-y">
    <li class="c-sidebar-nav-item">

        @if(auth()->guard('admin')->check() && request()->segment(1) == 'admin')
            <a class="c-sidebar-nav-link {{ request()->segment(1) == 'admin' && request()->segment(2) == 'dashboard' ? 'c-active' : '' }}" href="{{ auth()->guard('admin')->check() && request()->segment(1) == 'admin' ? url('/admin') : url('/dashboard')}}"><i class="cil-speedometer c-sidebar-nav-icon"></i>Dashboard </a>
        @else
            <a class="c-sidebar-nav-link {{ request()->is('/') ? 'c-active' : '' }}" href="{{ auth()->guard('admin')->check() && request()->segment(1) == 'admin' ? url('/admin') : url('/dashboard')}}"><i class="cil-speedometer c-sidebar-nav-icon"></i>Dashboard </a>
        @endif

    </li>
    {{-- @can('user-section') --}}
    @if(auth()->guard('admin')->check() && Request::segment(1) == 'admin')
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="javascript:;">
                <i class="cil-user c-sidebar-nav-icon"></i>
                User Management
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('/admin/users') ? 'c-active' : '' }}" href="{{url('/admin/users')}}">
                        <span class="c-sidebar-nav-icon"></span>
                        Users
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('/admin/users/create') ? 'c-active' : '' }}" href="{{url('/admin/users/create')}}">
                        <span class="c-sidebar-nav-icon"></span>
                        Add User
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="javascript:;">
                <i class="cil-compass c-sidebar-nav-icon"></i>
                Hub Management
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('/admin/hubs') ? 'c-active' : '' }}" href="{{url('/admin/hubs')}}">
                        <span class="c-sidebar-nav-icon"></span>
                        Hubs
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('/admin/hubs/create') ? 'c-active' : '' }}" href="{{url('/admin/hubs/create')}}">
                        <span class="c-sidebar-nav-icon"></span>
                        Add Hub
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="javascript:;">
                <i class="cil-car-alt c-sidebar-nav-icon"></i>
                Vehicle Management
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('/admin/vehicles') ? 'c-active' : '' }}" href="{{url('/admin/vehicles')}}">
                        <span class="c-sidebar-nav-icon"></span>
                        Vehicles
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('/admin/vehicles/create') ? 'c-active' : '' }}" href="{{url('/admin/vehicles/create')}}">
                        <span class="c-sidebar-nav-icon"></span>
                        Add Vehicle
                    </a>
                </li>
            </ul>
        </li>
    @endif
    {{-- @endcan --}}
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 519px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 420px;"></div>
    </div>
</ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
    data-class="c-sidebar-minimized"></button>
</div>