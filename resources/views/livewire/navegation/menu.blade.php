<div>
<!-- resources/views/livewire/navigation-menu.blade.php -->
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @livewireStyles

        <script src="https://cdn.tailwindcss.com"></script>
        @livewireScripts
    <div>
        <nav class="fixed left-0 right-0 bg-custom-243764 top-0">
            <div class="container mx-auto flex items-center justify-between">
                <a href="">
                    <img src="{{ asset('img/logo.png') }}" alt="Mi Imagen" class="h-20 w-auto">
                </a>
        
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-white hover:text-gray-300">Inicio</a></li>
                    <li><a href="/liga" class="text-white hover:text-gray-300">La Liga</a></li>
                    <li><a href="/formats" class="text-white hover:text-gray-300">Resoluciones</a></li>
        
                    <li x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="text-white hover:text-gray-300 focus:outline-none">Torneos</button>
        
                        <ul x-show="open" @click.away="open = false" class="absolute z-10 mt-2 bg-custom-243764 rounded-md shadow-lg space-y-2 text-sm">
                            <li><a href="#" class="px-4 py-2 text-white inline-block w-auto">Tablas de posición</a></li>
                            <!-- Puedes agregar más opciones según sea necesario -->
                        </ul>
                    </li>
        
                    <li><a href="#" class="text-white hover:text-gray-300">Procesos</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">Galeria</a></li>
                    <li><a href="/admin/" class="text-white hover:text-gray-300">Admin</a></li>
                </ul>
            </div>
        </nav>        
    </div>
    <style> 
        .bg-custom-243764 {
            background-color: #243764;
        }
    </style>
    

</div>
