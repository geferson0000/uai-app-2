
@extends('layouts.template')

@section('title', 'show')

@section('content')
  <h1>bienvenido a la actuacion fiscal codigo {{ $response['typeAudit']->code }}-{{ $response['action']->id }} </h1>
  <a href="{{route('main')}}">volver al inicio</a>
  <a href="{{route('action.edit', $response['action']->id)}}">editar actuacion</a>
@endsection

