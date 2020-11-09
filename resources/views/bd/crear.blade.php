@if( isset($cliente) && is_object($cliente) )
<h1>Editar cliente</h1>
@else
<h1>Crear cliente</h1>
@endif
<form action="{{ isset($cliente) ? action('BDController@update') : action('BDController@store') }}" method="post">

    {{ csrf_field() }}

    @if( isset($cliente) && is_object($cliente) )
        <input type="hidden" name="id" value="{{ $cliente->id }}">
    @else
    <h1>Crear cliente</h1>
    @endif

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ $cliente->nombre ?? '' }}">

    <input type="submit" value="guardar">
</form>