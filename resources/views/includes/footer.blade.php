<footer>
    <div class="container">
        <div class="about-us">
            <h2>Sobre nosotros</h2>
            <p>
                Somos alumnas del Colegio Salesianito, y creamos un Sitio Web con la finalidad de ayudar a las personas.
            </p>
            <p>
                Aquí podrás encontrar información referente al Covid-19 y todo lo que éste conlleva.
            </p>
            <a href="{{url('/sobre-nosotros')}}">Leer más</a>
        </div>
        <div class="register">
            <h2>Únete a la lista de correos</h2>
            <form action="{{url('/usuarios')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre *</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre aquí *" value="{{old('nombre')}}">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido *</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Ingresa tu apellido aquí *" value="{{old('apellido')}}">
                </div>
                <div class="form-group">
                    <label for="correo">Email *</label>
                    <input type="text" name="correo" id="correo" placeholder="Ingresa tu email aquí *" value="{{old('correo')}}">
                </div>
                <div class="form-group">
                    <label for="comentario">Comentario </label>
                    <textarea type="text" name="comentario" id="comentario" placeholder="Ingresa un comentario aquí ">{{old('comentario')}}</textarea>
                </div>
                <button type="submit">Unirse</button>
            </form>
        </div>
    </div>
</footer>
