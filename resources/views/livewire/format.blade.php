<div>
        <title>Resoluciones</title>

        <livewire:Navegation.menu/>
        
        
        {{-- {{ $formats}} --}}
        @foreach( $formats as $format)
        {{ $format->format_file }}
        {{ $format->format_name }}
        {{ $format->description }}
        @endforeach
        <livewire:Navegation.footer/>

</div>
