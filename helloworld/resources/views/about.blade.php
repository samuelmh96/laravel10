@extends('layouts.landing')
@section('title', 'About')

@section('content')
    <section class="about-section">
        <div class="about-content">
            <h1>Acerca de Mí</h1>
            <p>Hola, soy Samuel, un apasionado desarrollador web con experiencia en la creación de soluciones digitales
                innovadoras. Mi enfoque se centra en...</p>
            <ul>
                <li>Desarrollo web frontend y backend</li>
                <li>Diseño de interfaz de usuario (UI)</li>
                <li>Optimización y mantenimiento de sitios web</li>
            </ul>
            <p>Estoy comprometido a ofrecer resultados excepcionales, utilizando las últimas tecnologías y mejores prácticas
                en el desarrollo web.</p>
        </div>
        <div class="about-image">
            <img src="{{ 'assets/img/consultoria.png' }}" alt="Acerca de Mí">
        </div>
    </section>
@endsection
