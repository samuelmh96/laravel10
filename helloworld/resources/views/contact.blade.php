@extends('layouts.landing')
@section('title', 'Contact')
@section('content')
    <section class="contact-section">
        <div class="contact-info">
            <h1>Contacto</h1>
            <p>¡Ponte en contacto conmigo! Completa el formulario a continuación y estaré encantado de responderte lo antes
                posible.</p>
            <ul>
                <li>Email: info@mododev.com</li>
                <li>Teléfono: +123 456 789</li>
                <li>Dirección: Santa Cruz</li>
            </ul>
        </div>
        <div class="contact-form">
            <form>
                @csrf
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Enviar Mensaje</button>
            </form>
        </div>
    </section>
@endsection
