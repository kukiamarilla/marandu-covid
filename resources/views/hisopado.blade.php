@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center large highlight">Lugares para el Hispado</h1>
    <p>Aquí encontrarás información necesaria acerca de los lugares en los que actualmente se realizan los hisopados.</p>
    <br>
    <br>
    <h2>¡Tener en cuenta!</h2>
    <p>Para acceder al test, es necesario agendar turno llamando al 154, Call Center del Ministerio de Salud Pública o bien contactando directamente al hospital regional de su zona, de forma a evitar aglomeraciones.</p>
    <br>
    <br>
    <table>
        <tr>
            <th>Local</th>
            <th>Costo</th>
        </tr>
        @foreach ($hisopados as $hisopado)
            <tr>
                <td>{{$hisopado->local}}</td>
                <td>{{$hisopado->costo}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
