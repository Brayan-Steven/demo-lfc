<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LFC</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        @livewireStyles
    </head>
    <body>
        <livewire:Navegation.menu/>
        <!-- <h1>lore</h1> -->
        {{-- @foreach( $Municipalitys as $Municipality)
        {{ $Municipality->municipality_name }} --}}
        {{-- @endforeach --}}

        
                
        <!-- El resto del contenido comienza después de la barra de navegación -->
        <div class="mt-16">
            <img src="{{ asset('img/portada.svg') }}" alt="Telefono" class="w-full h-auto">
        </div>
        <div class="container mx-auto my-8">
            <div class="bg-white p-4">
                <!-- Contenido variable -->
                <h1 class="text-right text-4xl font-bold mb-2">SELECCIÓN INFANTIL</h1>
                        <h2 class="text-right text-2xl font-bold mb-4">LISTA PARA EL TORNEO NACIONAL</h2>
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    
                    <div class="md:w-1/2 p-4">
                        
                        <p class="text-gray-700">
                            La Liga De Fútbol De Bogotá, cumple funciones de interés social, está constituida por clubes deportivos de fútbol a selección Cundinamarca, logró pasar a la siguiente ronda del torneo Nacional Infantil que se jugó en la ciudad de Bogotá, tras vencer 5 x 0 a la selección de Amazonas en la primera fecha, perder 5 x 0 frente a la selección de Meta, 1 x 0 contra Bogotá y finalmente, en la última fecha, vencer 1 x 0 a la selección de San Andrés Islas. Ahora, deben pensar en corregir errores, unirse más como equipo y lograr fortalecer el fútbol que tanto los caracteriza; ya se dio el primer paso, solo queda seguir trabajando para cumplir este sueño de llegar a la final del Torneo Nacional y convertirse en campeones. Redacción: Prensa Cundifutbol y su objeto principal es el de organizar, promover, apoyar, patrocinar, avalar torneos y fomentar la práctica del fútbol aficionado en el Distrito Capital.
                        </p>
                    </div>
                    <img src="{{ asset('img/portada.svg') }}" alt="Imagen 3" class="md:w-1/2 mt-4 md:mt-0">
                </div>
            </div>
            <div class="">
                <!-- Contenido variable -->
                <h1 class="text-4xl font-bold mb-2">SELECCIÓN 2</h1>
                <h2 class="text-2xl font-bold mb-4">LISTA PARA EL TORNEO NACIONAL</h2>
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <img src="{{ asset('img/portada.svg') }}" alt="Imagen 3" class="md:w-1/2 mt-4 md:mt-0">
                    
                    <div class="md:w-1/2 p-4">
                            La Liga De Fútbol De Bogotá, cumple funciones de interés social, está constituida por clubes deportivos de fútbol a selección Cundinamarca, logró pasar a la siguiente ronda del torneo Nacional Infantil que se jugó en la ciudad de Bogotá, tras vencer 5 x 0 a la selección de Amazonas en la primera fecha, perder 5 x 0 frente a la selección de Meta, 1 x 0 contra Bogotá y finalmente, en la última fecha, vencer 1 x 0 a la selección de San Andrés Islas. Ahora, deben pensar en corregir errores, unirse más como equipo y lograr fortalecer el fútbol que tanto los caracteriza; ya se dio el primer paso, solo queda seguir trabajando para cumplir este sueño de llegar a la final del Torneo Nacional y convertirse en campeones. Redacción: Prensa Cundifutbol y su objeto principal es el de organizar, promover, apoyar, patrocinar, avalar torneos y fomentar la práctica del fútbol aficionado en el Distrito Capital.
                        </p>
                    </div>
                </div>
            
            </div>
    
            <!-- Banner con varias imágenes -->
            <h1>NUESTROS ALIADOS</h1><br>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-8">
                <img src="{{ asset('img/logo.png') }}" alt="Banner" class="">
                <img src="{{ asset('img/logo.png') }}" alt="Banner" class="">
                <img src="{{ asset('img/logo.png') }}" alt="Banner" class="">
                <img src="{{ asset('img/logo.png') }}" alt="Banner" class="">
                <img src="{{ asset('img/logo.png') }}" alt="Banner" class="">
            </div>
    
            <!-- Galería de imágenes -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-8">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen 1" class="w-full h-auto">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen 2" class="w-full h-auto">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen 3" class="w-full h-auto">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen 3" class="w-full h-auto">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen 3" class="w-full h-auto">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen 3" class="w-full h-auto">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen 3" class="w-full h-auto">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen 3" class="w-full h-auto">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen 4" class="w-full h-auto">
                <!-- Agrega más imágenes según sea necesario -->
            </div>
        </div>
        
        {{-- <livewire:contacto/> --}}
        
        @livewireScripts
        <livewire:Navegation.footer/>
        

    </body>
</html>