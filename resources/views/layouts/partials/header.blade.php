<header>
    <h2>cod Free </h2>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active': ''}}">
                    Inicio <i class="fa fa-home "></i>
                </a>
                {{-- @dump(request()->routeIs('home')) --}}
            </li>
            <li>
                <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active': ''}}"> 
                    Cursos <i class="fa fa-credit-card"></i>
                </a>
            </li>
            <li>
                <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active': ''}}">
                    Nosotros <i class="fa fa-users"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>