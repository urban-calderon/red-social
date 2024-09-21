@extends('layouts.app')

@section('contenido')
    <section class="relative flex flex-wrap lg:h-screen lg:items-center">
        <div class="w-full px-4 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-5">
            <div class="mx-auto max-w-screen-xl py-16 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-lg">  
                    <form method="POST" action="/registerUser" class="mb-0 space-y-5 
                    rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 bg-slate-200">
                    @csrf
                        <h4 class="text-center text-gray-600 text-3xl font-medium">Crear cuenta</h4>
                    
                        <div>
                            <label for="name" class="sr-only">Nombre</label>
                    
                            <div class="relative">
                            <input
                                id="name"
                                type="text"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm text-gray-700"
                                placeholder="Nombre"
                            />
                            </div>
                        </div>

                        <div>
                            <label for="father_last_name" class="sr-only">Apellido Paterno</label>
                    
                            <div class="relative">
                            <input
                                id="father_last_name"
                                type="text"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm text-gray-700"
                                placeholder="Apellido Paterno"
                            />
                            </div>
                        </div>

                        <div>
                            <label for="mother_last_name" class="sr-only">Apellido Paterno</label>
                    
                            <div class="relative">
                            <input
                                id="mother_last_name"
                                type="text"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm text-gray-700"
                                placeholder="Apellido Materno"
                            />
                            </div>
                        </div>

                        <div>
                            <label for="email" class="sr-only">Email</label>
                    
                            <div class="relative">
                            <input
                                id="email"
                                type="email"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm text-gray-700"
                                placeholder="Correo Electronico"
                            />
                            </div>
                        </div>

                        <div>
                            <label for="user_name" class="sr-only">Nombre de usuario</label>
                    
                            <div class="relative">
                            <input
                                id="user_name"
                                type="text"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm text-gray-700"
                                placeholder="Nombre de usuario"
                            />
                            </div>
                        </div>
                
                        <div>
                            <label for="password" class="sr-only">Contraseña</label>
                    
                            <div class="relative">
                            <input
                                id="password"
                                type="password"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Contraseña"
                            />
                            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-4 text-gray-400"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                    />
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                    />
                                </svg>
                                </span>
                            
                            </div>
                        </div>

                        <div>
                            <label for="password" class="sr-only">Contraseña</label>
                    
                            <div class="relative">
                            <input
                                id="password"
                                type="password"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Escribe nuevamente la contraseña"
                            />
                            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-4 text-gray-400"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                    />
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                    />
                                </svg>
                            </span>
                            </div>
                        </div>
                    
                        <button
                            type="submit"
                            class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
                        >
                            Registrarse
                        </button>
                    
                        <p class="text-center text-sm text-gray-500">
                            Ya tengo cuenta
                            <a class="underline" href="/">Iniciar sesión</a>
                        </p>
                    </form>
                </div>
              </div>
        </div>
    
        <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
            <img
                alt=""
                src="https://images.unsplash.com/photo-1630450202872-e0829c9d6172?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                class="absolute inset-0 h-full w-full object-cover"
            />
        </div>
    </section>
@endsection