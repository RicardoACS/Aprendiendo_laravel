@extends('layout')

@section('contenido')

<h1>Login</h1>

<form method="POST" accept="/login">
	{!! csrf_field() !!}
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="password">
	<input type="submit" name="Entrar">
</form>

@stop