@extends('layouts.template')

@section('title', 'Home')

@section('content')
  <a href="{{route('hello-world')}}">hello-world page</a><br>
  <a href="{{route('action.create')}}">create a new actions</a>
  <h1 class="text-green-400">I am the main page</h1>
  <ul class="list-none p-4">
  @foreach ($actions as $action)
    <li class='flex items-center py-2 border-b border-gray-200'>
      <div class="w-10 h-10 rounded-full bg-gray-300"></div>
      <span class="underline ml-4 text-blue-700"><a href="{{route('action.show', $action->id)}}">{{$action->target}}</a></span>
    </li>
  @endforeach
  </ul>

<style>
  .list-none {
  list-style: none;
}

.border-b {
  border-bottom-width: 1px;
}

.rounded-full {
  border-radius: 50%;
}

.bg-gray-300 {
  background-color: #e5e7eb;
}

.text-gray-700 {
  color: #374151;
}

</style>

  
  {{$actions->links()}}
@endsection