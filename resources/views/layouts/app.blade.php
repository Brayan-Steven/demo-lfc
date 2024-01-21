<div>
    <nav>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- estilos -->


        <livewire:Navegation.menu/>
        @livewireStyles
        

        <div class="container mx-auto mt-4">
            @yield('content')
        </div>

        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        

        @livewireScripts
    </nav>
</div>
