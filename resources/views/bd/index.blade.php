<h1>Tabla clientes</h1>
<h2><a href="{{ action('BDController@create') }}">Crear Cliente</a></h2>
@if(session('status'))
    {{ session('status') }}
@endif

<ul>
    @foreach($clientes as $cliente)
        <li>
            <a href="{{ action('BDController@detail', ['id' => $cliente->id]) }}">
                {{$cliente->nombre}}
            </a>
        </li>
    @endforeach
</ul>