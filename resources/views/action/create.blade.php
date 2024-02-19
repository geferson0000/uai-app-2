@extends('layouts.template')

@section('title', 'create')

@section('content')
<h1>En esta pagina tu puedes ingresar nuevas actuaciones fiscales</h1>
<form action="{{route('action.store')}}" method="POST">
  @csrf
  
  <input class="input-target" type="text" name="target" value="{{old('target')}}" placeholder="Objetivo">
  @error('target')
    <p>{{$message}}</p>
  @enderror

  <input type="date" name="started_at" value="{{old('started_at')}}">
  @error('started_at')
    <p>{{$message}}</p>
  @enderror

  <input type="date" name="ended_at" value="{{old('ended_at')}}" style="margin-top: 20px">
  @error('ended_at')
    <p>{{$message}}</p>
  @enderror
  
  <select class="input-typeAudit" name="typeAudit"  style="margin-top: 20px">
    @foreach ($typeAudits as $typeAudit)
    <option value="{{ $typeAudit->id }}">{{ $typeAudit->name }}</option>
    @endforeach
  </select>
  <input class="input-submit" type="submit" value="enviar">
</form>





















<Style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    width: 100vw;
  }

  h1 {
    margin-bottom: 10vh;
  }

  form {
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction: column;
    background-color: #25a;
    height-min: 30vh;
    width: 50vw;
  }

  .input-target {
    margin-bottom: 3vh;
  }

  .input-typeAudit {
    margin-bottom: 3vh;
  }

  .input-submit {
    margin-bottom: 3vh;
    background-color: white;
  }


  
</Style>
@endsection