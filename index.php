<?php include "includes/header.php"; ?>

<main>

    <section id="hero">
        <div class="hero-texto">
            <span>Olá, Eu Sou</span>
            <h1>Matheus<br>Cordeiro<br>Reis</h1>
            <span>Desenvolvedor Web | Backend</span>
            <p>Transformo ideias em soluções eficientes
                com código limpo, tecnologia e propósito.</p>
            <div class="hero-botoes">
                <a href="#contato" class="botao-primario">Fale comigo</a>
                <a href="#projetos" class="botao-secundario">Ver projetos</a>
            </div>
            <div class="hero-redes">
                <a href="https://github.com/Matheuscordeiroreis" target="_blank"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in/matheus-cordeiro-reis-3021991b2/" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="mailto:cordeiroreism14@gmail.com"><i class="bi bi-envelope-fill"></i></a>
            </div>
        </div>
        <div class="hero-direita">
            <div class="hero-imagem">
                <img src="./assents/Minha_foto.png" alt="Matheus Cordeiro Reis">
            </div>
            <div class="tecnologias-card">
                <h3>Principais Tecnologias</h3>
                <ul>
                    <li><i class="devicon-java-plain-wordmark colored"></i></li>
                    <li><i class="devicon-php-plain colored"></i></li>
                    <li><i class="devicon-html5-plain-wordmark colored"></i></li>
                    <li><i class="devicon-css3-plain-wordmark colored"></i></li>
                    <li><i class="devicon-postgresql-plain-wordmark colored"></i></li>
                    <li><i class="devicon-git-plain colored"></i></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="sobre-mim" class="section-card">
        <h2>Sobre mim</h2>
        <p>Sou formado em Técnico em Informática pelo IFES, onde desenvolvi uma base sólida em tecnologia, lógica e infraestrutura. Atualmente, curso Ciência da Computação pela UCB, aprofundando meus conhecimentos em desenvolvimento de sistemas, arquitetura de software e análise de dados.</p>
        <br>
        <p>Iniciei minha trajetória profissional na Upsystem, atuando com suporte a sistemas ERP. Hoje, atuo no suporte especializado da Arco, com foco estratégico em operações de e-commerce e websites. Sou responsável por garantir a estabilidade, performance e continuidade das plataformas.</p>
        <br>
        <p>Meu objetivo é gerar valor real por meio da tecnologia, garantindo que sistemas críticos operem com alta performance, confiabilidade e escalabilidade.</p>
    </section>


    <section id="projetos" class="section-card">
        <h2>Projetos</h2>
        <div class="projetos-grid">
            <div class="projeto-card">
                <span class="status concluido">Concluido</span>
                <h3>STOC</h3>
                <p>Sistema web para gerenciamento de restaurante, com controle de pedidos, produtos e comandas. Desenvolvido com foco em organização operacional.</p>
                <div class="tecnologias-usadas">
                    <span>Python</span>
                    <span>MySQL</span>
                    <span>FastAPI</span>
                </div>
                <div class="projeto-links">
                    <a href="https://github.com/Matheuscordeiroreis/STOC_" target="_blank"><i class="bi bi-github"></i> GitHub</a>
                </div>
            </div>
            <div class="projeto-card">
                <span class="status andamento">Em andamento</span>
                <h3>Meu Site</h3>
                <p>Site pessoal desenvolvido para apresentar projetos e habilidades técnicas, com foco em semântica HTML e estrutura escalável utilizando PHP.</p>
                <div class="tecnologias-usadas">
                    <span>PHP</span>
                    <span>HTML</span>
                    <span>CSS</span>
                </div>
                <div class="projeto-links">
                    <a href="https://github.com/Matheuscordeiroreis/matheuscordeiroreis.dev.br" target="_blank"><i class="bi bi-github"></i> GitHub</a>
                </div>
            </div>
            <div class="projeto-card">
                <span class="status andamento">Em andamento</span>
                <h3>Cadastros de Ninjas</h3>
                <p>Sistema em Java com foco em orientação a objetos, percistencia em bancos de dados e springboot.</p>
                <div class="tecnologias-usadas">
                    <span>Java</span>
                    <span>Springboot</span>
                    <span>H2 database</span>
                </div>
                <div class="projeto-links">
                    <a href="https://github.com/Matheuscordeiroreis/Cadastro_de_NInja" target="_blank"><i class="bi bi-github"></i> GitHub</a>
                </div>
            </div>
        </div>
    </section>


    <div class="grid-duplo">
        <section id="formacoes" class="section-card">
            <h2>Formação</h2>
            <div class="item-formacao">
                <h3>Ciência da Computação</h3>
                <span>Universidade Católica de Brasília • Em andamento</span>
            </div>
            <div class="item-formacao">
                <h3>Técnico em Informática</h3>
                <span>IFES - Instituto Federal do Espírito Santo • Concluído</span>
            </div>
        </section>
        <section id="certificados" class="section-card">
            <h2>Certificados</h2>
            <div class="item-formacao">
                <h3>HTML Developer</h3>
                <span>DIO.me • Concluído</span>
            </div>
        </section>
    </div>

    <section id="contato" class="section-card">
        <h2>Contato</h2>
        <ul class="contato-lista">
            <li><i class="bi bi-telephone-fill"></i> (28) 99914-2826</li>
            <li><i class="bi bi-envelope-at-fill"></i> cordeiroreism14@gmail.com</li>
            <li><i class="bi bi-linkedin"></i> <a href="https://www.linkedin.com/in/matheus-cordeiro-reis-3021991b2/" target="_blank">LinkedIn</a></li>
            <li><i class="bi bi-github"></i> <a href="https://github.com/Matheuscordeiroreis" target="_blank">GitHub</a></li>
        </ul>
    </section>

</main>

<?php include "includes/footer.php"; ?>
