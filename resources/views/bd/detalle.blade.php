<h1>Cliente unico</h1>

<h2>{{$cliente->nombre}}</h2>

<a href="{{ action('BDController@destroy', ['id' => $cliente->id]) }}">Eliminar</a>
<a href="{{ action('BDController@editar', ['id' => $cliente->id]) }}">Actualizar</a>