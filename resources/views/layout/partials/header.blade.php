<header>
    <div class="bg-green-200">
        <a href="{{ route('home') }}">
            <h1>Proyecto Universidad</h1>
        </a>
        <!--nav-->
        <div class="bg-green-400">
            <nav>
                <ul>
                    <li>
                        <!--activacion de los links-->
                        <a href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'active' : ''}}">Inicio</a>
                    </li>
                    <li>
                        <a href="{{route('asignaturas.index')}}" class="{{request()->routeIs('asignaturas.*') ? 'active' : ''}}">Asignaturas</a>
                    </li>
                    <li>
                        <a href="{{route('grupos.index')}}">Grupos</a>
                    </li>
                    <li>
                        <a href="{{ route('plan-estudios') }}">Plan de estudios</a>
                    </li>
                    <li>
                        <a href="{{route('profesors.index')}}">Profesores</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
 </header>
