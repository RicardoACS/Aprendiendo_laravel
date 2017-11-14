@extends('layout')

@section('contenido')

	<h1>Editar mensaje de {{ $message->nombre }}</h1>

	<form method="POST" action="{{ route('mensajes.update', $message->id) }}">

		{{-- PARA UPDATE UN MENSAJE  --}}
		{!! method_field('PUT') !!}

	    {{--  Token para middleware  --}}
	    {!! csrf_field() !!}

	    <p><label for="nombre">
	        Nombre
	        <input type="text" name="nombre" value="{{ $message->nombre  }}">
	        {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
	    </label></p>
	    <p><label for="email"></label>
	        Email
	        <input type="email" name="email" value=" {{ $message->email  }} ">
	        {!! $errors->first('email', '<span class=error>:message</span>') !!}
	    </label></p>
	    <p><label for="mensaje">
	        Mensaje
	        <textarea name="mensaje">{{ $message->mensaje  }}</textarea>
	        {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
	    </label></p>
	    <input type="submit" value="Enviar">
	</form>

@stop