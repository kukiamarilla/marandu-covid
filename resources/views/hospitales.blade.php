@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center large highlight">Hospitales</h1>
    <p>Aquí encontrarás una tabla acerca de los diferentes hospitales alrededor del país, con información sobre su dirección, región y número de teléfono.</p>
    <br>
    <br>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Dirección</th>
            <th>Telefono</th>
        </tr>
        @foreach ($hospitales as $hospital)
            <tr>
                <td>{{$hospital->nom_hospital}}</td>
                <td>{{$hospital->ciudad_region}}</td>
                <td>{{$hospital->direccion}}</td>
                <td>{{$hospital->num_telefono}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
