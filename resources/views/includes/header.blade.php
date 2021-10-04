<nav>
    <div class="container menu">
        <a href="{{url('/')}}" class="{{$nav == 'home' ? 'active' : ''}}">
            <div class="item">
                <p>
                    Inicio
                </p>
            </div>
        </a>
        <a href="{{url('/sobre-nosotros')}}" class="{{$nav == 'sobre-nosotros' ? 'active' : ''}}">
            <div class="item">
                <p>
                    Sobre Nosotros
                </p>
            </div>
        </a>
        <div class="submenu-container">
            <a href="{{url('/covid-19')}}" class="{{in_array($nav, ['covid-19', 'sintomas', 'medidas', 'familiares']) ? 'active' : ''}}">
                <div class="item">
                    <p>
                        Covid 19
                    </p>
                </div>
            </a>
            <div class="submenu">
                <a href="{{url('/sintomas')}}" class="{{$nav == 'sintomas' ? 'active' : ''}}">
                    <div class="item">
                        <p>
                            Síntomas
                        </p>
                    </div>
                </a>
                <a href="{{url('/medidas')}}" class="{{$nav == 'medidas' ? 'active' : ''}}">
                    <div class="item">
                        <p>
                            Medidas Preventivas
                        </p>
                    </div>
                </a>
                <a href="{{url('/familiares')}}" class="{{$nav == 'familiares' ? 'active' : ''}}">
                    <div class="item">
                        <p>
                            Qué hacer si un familiar está infectado
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <a href="{{url('/medicamentos')}}" class="{{$nav == 'medicamentos' ? 'active' : ''}}">
            <div class="item">
                <p>
                    Medicamentos
                </p>
            </div>
        </a>
        <div class="submenu-container">
            <a href="{{url('/hospitales')}}" class="{{in_array($nav, ['hospitales', 'hisopado']) ? 'active' : ''}}">
                <div class="item">
                    <p>
                        Hospitales
                    </p>
                </div>
            </a>
            <div class="submenu">
                <a href="{{url('/hisopado')}}" class="{{$nav == 'hisopado' ? 'active' : ''}}">
                    <div class="item">
                        <p>
                            Lugares para el hisopado
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <a href="{{url('/vacunas')}}" class="{{$nav == 'vacunas' ? 'active' : ''}}">
            <div class="item">
                <p>
                    Vacunas
                </p>
            </div>
        </a>
        <a href="{{url('/volantes')}}" class="{{$nav == 'volantes' ? 'active' : ''}}">
            <div class="item">
                <p>
                    Volantes
                </p>
            </div>
        </a>
        <a href="{{url('/registro')}}" class="{{$nav == 'registro' ? 'active' : ''}}">
            <div class="item">
                <p>
                    Registros
                </p>
            </div>
        </a>
    </div>
</nav>
