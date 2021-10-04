@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center large highlight">Lista de Medicamentos</h1>
    <p>Aquí encontrarás una extensa lista de medicamentos y remedios que se utilizan para tratar los síntomas del Sras-Cov-2. Además,  del precio de cada uno de ellos y el laboratorio en donde fue creado.</p>
    <br>
    <br>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Laboratorio</th>
            <th>Precio</th>
            <th>Farmacia</th>
        </tr>
        @foreach ($medicamentos as $medicamento)
            <tr>
                <td>{{$medicamento->nombre_med}}</td>
                <td>{{$medicamento->laboratorio}}</td>
                <td>{{$medicamento->precio_med}}</td>
                <td>{{$medicamento->nombre_far}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
