@extends('base')

@section('content')
<div class="registro">

    <div class="container">
        <h1 class="text-center large highlight">Regístrate</h1>
        <p>Registra tu correo electrónico para ser un usuario oficial de nuestro sitio y recibir todas las actualizaciones.</p>
    </div>
    <div class="form-row">
        <div class="image-container" style="background-image: url('https://static.wixstatic.com/media/11062b_96f0475c8aac408ba7fcf60aba33d39f~mv2.jpg/v1/fill/w_1440,h_1426,al_c,q_90,usm_0.66_1.00_0.01/11062b_96f0475c8aac408ba7fcf60aba33d39f~mv2.webp')"></div>
        <div class="form-container">
            <p>Dr. Manuel Domínguez 1330, Asunción</p>
            <p>imaranducovid@gmail.com &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 123-456-7890</p>
            <form action="{{url('/usuarios')}}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="field" style="width: 50%;">
                        <label for="nombre">Nombre *</label>
                        <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
                    </div>
                    <div class="field" style="width: 50%;">
                        <label for="apellido">Apellido *</label>
                        <input type="text" name="apellido" id="apellido" value="{{old('apellido')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="field" style="width: 100%;">
                        <label for="correo">Correo Electrónico *</label>
                        <input type="text" name="correo" id="correo" value="{{old('correo')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="field" style="width: 100%;">
                        <label for="comentario">Comentario</label>
                        <textarea name="comentario" id="comentario" placeholder="Déjenos un comentario..."> {{old('comentario')}}</textarea>
                    </div>
                </div>
                <button type="submit"> Enviar</button>
            </form>
        </div>
    </div>
    <div id="map"></div>
</div>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
<script>
    var map = L.map('map').setView([-25.2955182, -57.6256641], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([-25.2955182, -57.6256641]).addTo(map)
    .bindPopup('Colegio Salesianito')
    .openPopup();
</script>
@endsection
