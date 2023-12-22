@extends('layouts.landing')
@section('title', 'Services')
@section('content')
    <h1>Services</h1>
    <div class="cards">
        @component('_components.card')
            @slot('title', 'Desarrollo de Sitios Web')
            @slot('image', '/assets/img/desarrollo.png')
            @slot('content',
                'Diseño y desarrollo de sitios web modernos y funcionales. Utilizo las últimas tecnologías web para
                crear experiencias únicas para los usuarios. Desde sitios estáticos hasta aplicaciones web dinámicas, estoy aquí
                para llevar tu presencia en línea al siguiente nivel.')
            @endcomponent
            @component('_components.card')
                @slot('title', 'Optimización y Mantenimiento')
                @slot('image', 'assets/img/optimizacion.png')
                @slot('content',
                    'Ofrezco servicios de optimización y mantenimiento para garantizar que tu sitio web funcione de
                    manera eficiente y segura. Realizo actualizaciones, correcciones de errores y mejoras continuas para mantener tu
                    presencia en línea siempre en su mejor forma.')
                @endcomponent
                @component('_components.card')
                    @slot('title', 'Consultoría en Desarrollo Web')
                    @slot('image', 'assets/img/consultoria.png')
                    @slot('content',
                        'Brindo servicios de consultoría en desarrollo web, ayudándote a tomar decisiones informadas sobre
                        arquitectura de sitios, tecnologías a utilizar y estrategias para mejorar la eficiencia y escalabilidad de tus
                        aplicaciones.')
                    @endcomponent
                </div>
            @endsection
