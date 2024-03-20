@extends('layouts.template')

@section('title', 'UAI')

@section('content')
<h1>soy acta</h1>
<form action="{{ route('cargo.guardar') }}" method="post">
@csrf


<input style="margin-top: 20vh" type="text" name="nombre">
<input type="submit" value="enviar">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>
  
@endsection
