<div>
<div x-data="{ open: false }">
    <!-- Imagen en el lado derecho -->
    <img src="ruta/a/la/imagen.jpg" alt="Imagen" class="float-right" />

    <!-- Menú desplegable -->
    <div @click="open = !open" class="cursor-pointer">
        <span>Menú</span>
        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open }" class="inline w-4 h-4 ml-1 transition-transform duration-200 transform">
            <path fill-rule="evenodd" d="M10 18a1 1 0 0 1-.707-.293l-8-8a1 1 0 1 1 1.414-1.414L10 15.586l6.293-6.293a1 1 0 1 1 1.414 1.414l-7.999 8A1 1 0 0 1 10 18z"/>
        </svg>
    </div>

    <!-- Contenido del menú desplegable -->
    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
        <!-- Agrega tus elementos de menú aquí -->
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Elemento de Menú 1</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Elemento de Menú 2</a>
    </div>
</div>

</div>
