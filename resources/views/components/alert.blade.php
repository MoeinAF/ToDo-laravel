<div>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs($route) ? 'active':'' }}" href="{{ route($route) }}"> {{ $index }} </a>
    </li>
</div>