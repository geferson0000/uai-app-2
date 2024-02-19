@extends('layouts.template')

@section('title', 'Login')

@section('content')
<main class="flex min-h-screen flex-col items-center justify-between p-24 bg-cover bg-[url('{{ asset('images/cantv-bg.jpg') }}')] h-screen">
  <form
  class="flex flex-col justify-center items-center mt-5 md:mt-0 md:col-span-2 movil:w-72 sm:w-80 md:w-6/12 lg:w-4/12 xl:w-4/12 bg-slate-300 h-full"
  action=""
  >
    <figure class="mb-8 py-8 w-full h-2/5 bg-blue-800 flex justify-center" style="padding-top:0px;">
      <img
      src="{{ asset('images/cantv-log-longer.png') }}"
      alt="cantv"
      srcset="{{ asset('images/cantv-log-longer.png') }}"
      class="bg-cover h-full"/>
    </figure>
    <div class="w-9/12 flex flex-col justify-center">
      <label
      for="username"
      class="font-black text-xs text-blue-800 block text-sm font-medium text-blue-800 "
      >
        Usuario
      </label>
      
      <input
      class="px-3 py-2.5 mb-2 mt-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
      type="text"
      id="username"
      name="username"
        placeholder="Usuario de red"
        />
        
        <label
        for="password"
        class="mt-3 font-black text-xs text-blue-700 block text-sm font-medium text-blue-800"
        >
        Password
      </label>
      <input
      class="px-2 py-2.5 mb-2 mt-2 block w-full border border-gray-300 rounded-sm shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
      type="send"
      id="password"
      name="password"
      placeholder="Contraseña de red"
      />
      <input
      class="mt-2 w-full inline-flex justify-center border border-transparent rounded-md shadow-sm px-4 py-2 bg-blue-800 text-base font-medium text-white hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-auto sm:text-sm"
      type="submit"
      id="submit"
      name="submit"
      value="Ingresar"
      />
      
      <p class="mt-5 mb-12 text-gray-600 text-sm 0 text-center font">
        Unidad de Auditoria Interna © CANTV 2023
      </p>
    </div>
  </form>
</main>
@endsection