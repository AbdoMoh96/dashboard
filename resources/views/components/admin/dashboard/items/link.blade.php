<li class="nav-item mb-2">
    <a href="{{route($route)}}" class="nav-link @if(request()->routeIs($route)) active @endif">
        <i class="nav-icon {{ $icon ?? '' }}"></i>
        <p>
            {{ $name ?? '' }}
        </p>
    </a>
</li>


{{-- icon = fas fa-chart-pie --}}


{{-- <x-admin.dashboard.items.link
                name="Upload Video"
                route="admin.dashboard"
                icon="fas fa-upload"/> --}}