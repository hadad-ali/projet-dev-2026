<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">

            <li class="nav-item ">
                <a class="nav-link
    {{ request()->routeIs('hm') ? 'active bg-warning' : '' }}"
                    href="{{ route('hm') }}">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('abt') ? 'active bg-warning text-dark' : '' }}"
                    href="{{ route('abt') }}">About</a>
            </li>

        </ul>
    </div>
</nav>
