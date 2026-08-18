    <!-- Vertical Sidebar -->
    <div>
      <div id="miniSidebar">
  <div class="brand-logo" style="padding: 1rem 1.5rem;">
  <a class="d-none d-md-flex align-items-center" href="{{ route('dashboard') }}">
    <img src="{{ asset('assets/images/brand/logo/kejarkarir-logo.png') }}" alt="KejarKarir.id" style="height: 30px; object-fit: contain; max-width: 100%;" />
  </a>
</div>
  <ul class="navbar-nav flex-column  ">

    {{-- ─── Static: Dashboard ─── --}}
    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
        <span class="nav-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M4 4h6v8h-6z" />
            <path d="M4 16h6v4h-6z" />
            <path d="M14 12h6v8h-6z" />
            <path d="M14 4h6v4h-6z" />
          </svg>
        </span>
        <span class="text">Dashboard</span>
      </a>
    </li>

    {{-- ─── Dynamic menus from database ─── --}}
    @if (!empty($sidebarMenus))
      @foreach ($sidebarMenus as $menu)
        @if ($menu->url === '/dashboard')
          {{-- Dashboard already rendered statically above --}}
          @continue
        @endif

        @if ($menu->url === '#')
          {{-- Admin group menus (e.g. Setting) are handled by the
               permission-gated hardcoded block below — skip here. --}}
          @continue
        @endif

        @if ($menu->children->isNotEmpty())
          {{-- Parent menu with dropdown children --}}
          @php
            $isChildActive = $menu->children->contains(fn($c) => request()->is(ltrim($c->url, '/').'*'));
          @endphp
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ $isChildActive ? 'active' : '' }}"
               href="#menu-{{ $menu->id }}" role="button" data-bs-toggle="dropdown" aria-expanded="{{ $isChildActive ? 'true' : 'false' }}">
              <span class="nav-icon">
                @if ($menu->icon)
                  <i class="{{ $menu->icon }}"></i>
                @else
                  <i class="ti-point"></i>
                @endif
              </span>
              <span class="text">{{ $menu->name }}</span>
            </a>
            <ul class="dropdown-menu flex-column {{ $isChildActive ? 'show' : '' }}">
              @foreach ($menu->children as $child)
                <li class="nav-item">
                  <a class="nav-link {{ request()->is(ltrim($child->url, '/').'*') ? 'active' : '' }}"
                     href="{{ $child->url }}">
                    {{ $child->name }}
                  </a>
                </li>
              @endforeach
            </ul>
          </li>
        @else
          {{-- Single menu item (no children) --}}
          <li class="nav-item">
            <a class="nav-link {{ request()->is(ltrim($menu->url, '/').'*') ? 'active' : '' }}"
               href="{{ $menu->url }}">
              <span class="nav-icon">
                @if ($menu->icon)
                  <i class="{{ $menu->icon }}"></i>
                @else
                  <i class="ti-point"></i>
                @endif
              </span>
              <span class="text">{{ $menu->name }}</span>
            </a>
          </li>
        @endif
      @endforeach
    @endif

    {{-- ─── Settings (admin-only, permission-gated) ─── --}}
    @canany(['USER_VIEW', 'ROLE_VIEW', 'MENU_VIEW', 'PERMISSION_VIEW'])
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#settingsMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="nav-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
          </svg>
        </span>
        <span class="text">Setting</span>
      </a>
      <ul class="dropdown-menu flex-column">
        @can('USER_VIEW')
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">User</a>
        </li>
        @endcan
        @can('ROLE_VIEW')
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}" href="{{ route('roles.index') }}">Roles</a>
        </li>
        @endcan
        @can('MENU_VIEW')
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('menus.*') ? 'active' : '' }}" href="{{ route('menus.index') }}">Menus</a>
        </li>
        @endcan
        @can('PERMISSION_VIEW')
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('permissions.*') ? 'active' : '' }}" href="{{ route('permissions.index') }}">Permission</a>
        </li>
        @endcan
      </ul>
    </li>
    @endcanany

    <!-- User profile block -->
    <li>
      <div class="text-center py-5 upgrade-ui ">
        <div>
          <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-md rounded-circle">
          <div class="my-3">
          <h5 class="mb-1 fs-6">{{ Auth::user()->name }}</h5>
    <span class="text-secondary">{{ Auth::user()->email }}</span>
  </div>
    <a href="#!" class="btn btn-primary">Upgrade</a>

        </div>

      </div>
    </li>

  </ul>

</div>


<div class="offcanvasNav offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">

      <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/images/brand/logo/kejarkarir-logo.png') }}" alt="KejarKarir.id" style="height: 30px; object-fit: contain; max-width: 100%;" />
      </a>

    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <ul class="navbar-nav flex-column  ">
        <!-- Nav item: Dashboard -->
    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
        <span class="nav-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M4 4h6v8h-6z" />
            <path d="M4 16h6v4h-6z" />
            <path d="M14 12h6v8h-6z" />
            <path d="M14 4h6v4h-6z" />
          </svg>
        </span>
        <span class="text">Dashboard</span>
      </a>
    </li>

    {{-- ─── Dynamic menus (offcanvas) ─── --}}
    @if (!empty($sidebarMenus))
      @foreach ($sidebarMenus as $menu)
        @if ($menu->url === '/dashboard')
          @continue
        @endif

        @if ($menu->url === '#')
          {{-- Admin group menus handled by hardcoded Setting block below --}}
          @continue
        @endif

        @if ($menu->children->isNotEmpty())
          @php $isChildActive = $menu->children->contains(fn($c) => request()->is(ltrim($c->url, '/').'*')); @endphp
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ $isChildActive ? 'active' : '' }}"
               href="#offmenu-{{ $menu->id }}" role="button" data-bs-toggle="dropdown" aria-expanded="{{ $isChildActive ? 'true' : 'false' }}">
              <span class="nav-icon">
                @if ($menu->icon)<i class="{{ $menu->icon }}"></i>@else<i class="ti-point"></i>@endif
              </span>
              <span class="text">{{ $menu->name }}</span>
            </a>
            <ul class="dropdown-menu flex-column {{ $isChildActive ? 'show' : '' }}">
              @foreach ($menu->children as $child)
                <li class="nav-item">
                  <a class="nav-link {{ request()->is(ltrim($child->url, '/').'*') ? 'active' : '' }}" href="{{ $child->url }}">
                    {{ $child->name }}
                  </a>
                </li>
              @endforeach
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ request()->is(ltrim($menu->url, '/').'*') ? 'active' : '' }}" href="{{ $menu->url }}">
              <span class="nav-icon">
                @if ($menu->icon)<i class="{{ $menu->icon }}"></i>@else<i class="ti-point"></i>@endif
              </span>
              <span class="text">{{ $menu->name }}</span>
            </a>
          </li>
        @endif
      @endforeach
    @endif

    {{-- ─── Settings (offcanvas) ─── --}}
    @canany(['USER_VIEW', 'ROLE_VIEW', 'MENU_VIEW', 'PERMISSION_VIEW'])
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#offcanvasSettings" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="nav-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
          </svg>
        </span>
        <span class="text">Setting</span>
      </a>
      <ul class="dropdown-menu flex-column">
        @can('USER_VIEW')
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">User</a>
        </li>
        @endcan
        @can('ROLE_VIEW')
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}" href="{{ route('roles.index') }}">Roles</a>
        </li>
        @endcan
        @can('MENU_VIEW')
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('menus.*') ? 'active' : '' }}" href="{{ route('menus.index') }}">Menus</a>
        </li>
        @endcan
        @can('PERMISSION_VIEW')
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('permissions.*') ? 'active' : '' }}" href="{{ route('permissions.index') }}">Permission</a>
        </li>
        @endcan
      </ul>
    </li>
    @endcanany

      <!-- Nav item -->
      <li>
        <div class="text-center py-5 upgrade-ui ">
          <div>
            <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-md rounded-circle">
            <div class="my-3">
            <h5 class="mb-1 fs-6">{{ Auth::user()->name }}</h5>
      <span class="text-secondary">{{ Auth::user()->email }}</span>
    </div>
      <a href="#!" class="btn btn-primary">Upgrade</a>

          </div>

        </div>
      </li>

    </ul>
  </div>
</div>
