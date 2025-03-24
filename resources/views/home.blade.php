@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <div class="header-content" id="home">
                <p class="greeting">Olá! 👋</p>
                <h1 class="name">Sou Mateus, <span class="title">Designer editorial e Desenvolvedor PHP com mais de <br> 5
                        anos de experiência.</span></h1>

                <div class="status">
                    <p><span class="status-highlight">Disponível</span> · Design editorial - Projetos Web</p>
                    <p>Entre em contato para discutirmos seu projeto → <a
                            href="mailto:mapureza@gmail.com">mapureza@gmail.com</a></p>
                </div>
            </div>

            <div class="profile-image">
                <img src="{{ asset('images/profile.png') }}" alt="Foto de perfil">
            </div>
        </div>

        <!-- About Me Section -->
        <div class="about-section" id="about">
            <div class="about-header">
                <div class="about-title">
                    <h2>Sobre <span class="text-highlight">Mim</span></h2>
                    <div class="terminal-line"></div>
                </div>
                <div class="about-tabs">
                    <button class="tab-btn active" data-tab="profile">Perfil</button>
                    <button class="tab-btn" data-tab="skills">Habilidades</button>
                    <button class="tab-btn" data-tab="experience">Experiência</button>
                </div>
            </div>
            
            <div class="about-content">
                <div class="tab-content active" id="profile">
                    <div class="terminal-window">
                        <div class="terminal-header">
                            <div class="terminal-buttons">
                                <span class="terminal-btn close"></span>
                                <span class="terminal-btn minimize"></span>
                                <span class="terminal-btn maximize"></span>
                            </div>
                            <div class="terminal-title">mateus@sobremim:~</div>
                        </div>
                        <div class="terminal-body">
                            <p><span class="terminal-prompt">$</span> <span class="command">cat sobre-mim.txt</span></p>
                            <div class="command-output">
                                <p>Olá! Sou um profissional de design editorial e o desenvolvimento web.</p>
                                <p>Com mais de 5 anos de experiência na diagramação de jornais impressos no Diário da Manhã, tenho alguns projetos pessoais de
                                desenvolvimento de sistemas web, como o DM Acervo.</p>
                                <p>Atualmente atuo como líder de tecnologia no Grupo B2, um grupo composto por 7 empresas, 
                                onde aplico meus conhecimentos em desenvolvimento para gerir uma equipe de desenvolvedores, suporte e comercial.</p>
                            </div>
                            <p><span class="terminal-prompt">$</span> <span class="command blink">_</span></p>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="skills">
                    <div class="skills-container">
                        <div class="skill-category">
                            <h3>Design</h3>
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span>InDesign</span>
                                    <span>100%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 100%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span>Photoshop</span>
                                    <span>90%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span>Tipografia</span>
                                    <span>85%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="skill-category">
                            <h3>Desenvolvimento</h3>
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span>PHP</span>
                                    <span>60%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 60%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span>Laravel</span>
                                    <span>70%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 70%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span>MySQL</span>
                                    <span>50%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="experience">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">2021 - Atual</div>
                            <div class="timeline-content">
                                <h3>Líder de Tecnologia</h3>
                                <p>Grupo B2</p>
                                <p>Liderança de equipe de desenvolvimento, suporte e comercial de dois sistemas web.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">2019 - Atual</div>
                            <div class="timeline-content">
                                <h3>Designer Editorial</h3>
                                <p>Diário da Manhã</p>
                                <p>Diagramação de jornal impresso diário, criação de layouts e gestão visual.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">2019 - Atual</div>
                            <div class="timeline-content">
                                <h3>Desenvolvedor Web</h3>
                                <p>Diário da Manhã</p>
                                <p>Desenvolvimento e manutenção do acervo digital do Jornal Diário da Manhã.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid" id="projects">
            <!-- Projeto 1 - Design Editorial -->
            <div class="project">
                <div class="project-info">
                    <h3 class="project-title">Diagramação de Jornal Impresso</h3>
                    <p class="project-description">Nos últimos 5 anos, trabalhei com o <a href="https://dmacervo.com.br/"
                            target="_blank">Diário da Manhã</a> no layout e tipografia de um jornal tradicional, com foco em
                        melhorar a legibilidade e experiência de leitura.</p>
                    <a href="{{ url('https://dmacervo.com.br/storage/edicoes/WUlH64vJzBtjuhlOjQzlbHBjB79kjlGtr8WhDAxd.pdf') }}"
                        class="case-study-link" target="_blank">Ver diagramação</a>
                </div>
                <div class="project-image design-project">
                    <img src="{{ asset('images/dm.png') }}" alt="Layout do DM" target="_blank">
                </div>
            </div>

            <!-- Projeto 2 - Desenvolvimento PHP -->
            <div class="project">
                <div class="project-info">
                    <h3 class="project-title">Líder de tecnologia</h3>
                    <p class="project-description">Atualmente, trabalho como líder de tecnologia no grupo <a
                            href="https://b2agencia.com.br/" target="_blank">B2</a>, onde lidero um time de desenvolvedores
                        criando soluções tecnológicas inovadoras.</p>
                    <a href="{{ url('https://site.eformei.com.br') }}" class="case-study-link" target="_blank">Projeto
                        eFormei</a> --
                    <a href="{{ url('https://deualiga.com.br') }}" class="case-study-link" target="_blank">Projeto LIGA</a>
                </div>
                <div class="project-image code-project">
                    <div class="code-preview">
                        <pre><code><span style="color: #FF69B4">class</span> <span style="color: #4169E1">Developer</span> {
    <span style="color: #32CD32">private</span> <span style="color: #FFA500">$technicalSkills</span> = [
        <span style="color: #9370DB">'PHP'</span> => <span style="color: #9370DB">'Intermediário'</span>,
        <span style="color: #9370DB">'Laravel'</span> => <span style="color: #9370DB">'Intermediário'</span>,
        <span style="color: #9370DB">'MySQL'</span> => <span style="color: #9370DB">'Básico'</span>,
        <span style="color: #9370DB">'Git'</span> => <span style="color: #9370DB">'Básico'</span>,
        <span style="color: #9370DB">'Indesign'</span> => <span style="color: #9370DB">'Avançado'</span>,
        <span style="color: #9370DB">'Photoshop'</span> => <span style="color: #9370DB">'Avançado'</span>
    ];

    <span style="color: #32CD32">private</span> <span style="color: #FFA500">$softSkills</span> = [
        <span style="color: #9370DB">'Liderança'</span> => <span style="color: #9370DB">'Em aprendizado'</span>,
        <span style="color: #9370DB">'Comunicação'</span> => <span style="color: #9370DB">'Excelente'</span>,
        <span style="color: #9370DB">'Resolução'</span> => <span style="color: #9370DB">'Excelente'</span>
    ];

    <span style="color: #32CD32">public</span> <span style="color: #4169E1">function</span> <span style="color: #FFA500">lead</span>(<span style="color: #FFA500">$team</span>) {
        <span style="color: #FF69B4">return</span> <span style="color: #9370DB">'Diagramador e Desenvolvedor'</span>;
    }
}</code></pre>
                    </div>
                </div>
            </div>

            <!-- Projeto 3 - Design Editorial -->
            <div class="project">
                <div class="project-info">
                    <h3 class="project-title">Projeto de site acervo de notícias</h3>
                    <p class="project-description">Sistema web desenvolvido em Laravel para gerenciamento de acervo digital de jornais. Conta com CMS para upload de edições e editais, sistema de permissões de usuário, busca avançada e visualização otimizada dos documentos.</p>
                    <a href="{{ url('https://dmacervo.com.br/') }}" class="case-study-link" target="_blank">DM Acervo</a>
                </div>
                <div class="project-image design-project">
                    <img src="{{ url('images/acervo.png') }}" alt="Infográfico">
                </div>
            </div>

            <!-- Projeto 4 - Desenvolvimento Web -->
            <div class="project">
                <div class="project-info">
                    <h3 class="project-title">Assistente virtual WhatsApp</h3>
                    <p class="project-description">Assistente virtual inteligente para WhatsApp utilizando OpenAI, Flash, Whisper e ElevenLabs. O sistema processa aprende com as interações e fornece respostas naturais tanto em texto quanto em áudio.</p>
                    <a href="https://wa.me/5547997113049" class="case-study-link">Converse com a IA!</a>
                </div>
                <div class="project-image code-project">
                    <div class="browser-mockup">
                        <img src="{{ asset('images/wpp.png') }}" alt="Assistente Virtual WhatsApp">
                    </div>
                </div>
            </div>
        </div>        

        <!-- CTA Section -->
        <div class="cta-section" id="contact">
            <h2 class="cta-title">Vamos trabalhar juntos no seu próximo projeto?</h2>
            <div class="whatsapp-button">
                <a href="https://wa.me/5562992125425?text=Olá%20Mateus,%20encontrei%20você%20pelo%20seu%20site%20portfólio,%20vamos%20conversar?" class="btn btn-whatsapp">
                    <i class="fab fa-whatsapp"></i> (62) 99212-5425
                </a>
            </div>
        </div>
    </div>
@endsection