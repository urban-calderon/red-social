@extends('layouts.app')

@section('contenido')
   <div>
        <h3 class="text-center text-white text-4xl my-10 font-bold">Bienvenido, Nombre de User</h3>
        <div class="flex gap-8 justify-center items-center">
            <img
                src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=2680&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Imagen de perfil"
                class="lg:size-60 sm:size-24 md:size-48 rounded-lg object-cover"
            />
            <div class="text-white">
                <p class="font-bold">Nombre de usuario</p>
                <p>0 <span>Seguidores</span></p>
                <p>0 <span>Siguiendo</span></p>
                <p>0 <span>Post</span></p>
            </div>
        </div>

        <h3 class="text-center text-white text-4xl my-10 font-bold">Publicaciones</h3>
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8 py-8">
            <div class="h-48 rounded-lg bg-gray-200"></div>
            <div class="h-48 rounded-lg bg-gray-200"></div>
            <div class="h-48 rounded-lg bg-gray-200"></div>
            <div class="h-48 rounded-lg bg-gray-200"></div>
        </div>
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8 py-8">
            <div class="h-48 rounded-lg bg-gray-200"></div>
            <div class="h-48 rounded-lg bg-gray-200"></div>
            <div class="h-48 rounded-lg bg-gray-200"></div>
            <div class="h-48 rounded-lg bg-gray-200"></div>
        </div>
   </div>
@endsection