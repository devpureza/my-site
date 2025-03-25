@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="contact-section">
            <h1 class="contact-title">Entre em Contato</h1>
            <p class="contact-description">Estou disponível para novos projetos e oportunidades. Entre em contato através dos canais abaixo:</p>

            <div class="contact-methods">
                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:mapureza@gmail.com">mapureza@gmail.com</a></p>
                </div>

                <div class="contact-card">
                    <i class="fab fa-whatsapp"></i>
                    <h3>WhatsApp</h3>
                    <p><a href="https://wa.me/5562992125425?text=Olá%20Mateus,%20encontrei%20você%20pelo%20seu%20site%20portfólio,%20vamos%20conversar?">(62) 99212-5425</a></p>
                </div>

                <div class="contact-card">
                    <i class="fab fa-linkedin"></i>
                    <h3>LinkedIn</h3>
                    <p><a href="https://www.linkedin.com/in/mateus-pureza/" target="_blank">Mateus Pureza</a></p>
                </div>
            </div>

            <div class="contact-form">
                <h2>Envie uma mensagem</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Assunto</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
@endsection