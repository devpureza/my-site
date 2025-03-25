@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Contact Header -->
        <div class="section-header">
            <h2>Entre em <span class="text-highlight">Contato</span></h2>
            <div class="terminal-line"></div>
            <p class="section-description">Estou disponível para novos projetos e oportunidades. Como posso ajudar você?</p>
        </div>

        <!-- Contact Methods -->
        <div class="contact-methods">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email</h3>
                <p><a href="mailto:mapureza@gmail.com">mapureza@gmail.com</a></p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3>WhatsApp</h3>
                <p><a href="https://wa.me/5562992125425?text=Olá%20Mateus,%20encontrei%20você%20pelo%20seu%20site%20portfólio,%20vamos%20conversar?">(62) 99212-5425</a></p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fab fa-linkedin"></i>
                </div>
                <h3>LinkedIn</h3>
                <p><a href="https://www.linkedin.com/in/mateus-pureza/" target="_blank">Mateus Pureza</a></p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form-container">
            <div class="form-header">
                <div class="terminal-buttons">
                    <span class="terminal-btn close"></span>
                    <span class="terminal-btn minimize"></span>
                    <span class="terminal-btn maximize"></span>
                </div>
                <div class="form-title">nova_mensagem.sh</div>
            </div>
            <div class="contact-form">
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" placeholder="Seu nome" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Assunto</label>
                        <input type="text" id="subject" name="subject" placeholder="Motivo do contato" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea id="message" name="message" rows="5" placeholder="Descreva seu projeto ou ideia..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Enviar Mensagem
                    </button>
                </form>
            </div>
        </div>

        <!-- Map or Additional Info -->
        <div class="additional-info">
            <div class="info-card">
                <h3>Localização</h3>
                <p>Goiânia, GO - Brasil</p>
                <p>Disponível para trabalho remoto ou presencial</p>
            </div>
            <div class="info-card">
                <h3>Horário de Trabalho</h3>
                <p>Segunda - Sexta: 9h às 18h</p>
                <p>Final de semana: Disponível para emergências</p>
            </div>
        </div>
    </div>
@endsection