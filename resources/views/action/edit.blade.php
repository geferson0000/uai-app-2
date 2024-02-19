@extends('layouts.template')

@section('title', 'edit')

@section('content')
<h1>En esta pagina tu puedes editar la actuacion fiscal</h1>
<form action="{{route('action.update', $response['action']->id)}}" method="post">
  @method('put')
  @csrf
  <input class="input-target" type="text" name="target" placeholder="Objetivo" value="{{old('target', $response['action']->target)}}">
  
  @error('target')
    <p>{{$message}}</p>
  @enderror
  
  
  <input type="date" name="started_at" value="{{ old('started_at', $response['action']->started_at)}}">
  @error('started_at')
    <p>{{$message}}</p>
  @enderror
  
  <input type="date" name="ended_at" value="{{old('ended', $response['action']->ended_at)}}">
  @error('ended_at')
    <p>{{$message}}</p>
  @enderror
  
  <select class="input-typeAudit" name="typeAudit" value="{{$response['typeAuditOld']->id}}">
    @foreach ($response['typeAuditList'] as $typeAudit)
      @if ($response['typeAuditOld']->id == $typeAudit->id)
        <option value="{{ $typeAudit->id }}" selected>{{ $typeAudit->name }}</option>
      @else
        <option value="{{ $typeAudit->id }}">{{ $typeAudit->name }}</option>
      @endif
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
    height: 30vh;
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