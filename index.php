<?php
declare(strict_types=1);

$mensagem_status = $_GET['status'] ?? '';

$status_validos = [
    'sucesso',
    'erro',
    'campos_vazios',
    'nome_invalido',
    'email_invalido',
    'comentario_invalido'
];

if (!in_array($mensagem_status, $status_validos, true)) {
    $mensagem_status = '';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Dashboard Pro</title>

    <meta
        name="description"
        content="Interface profissional desenvolvida com HTML, CSS e JavaScript"
    >

    <link
        rel="stylesheet"
        href="style.css"
    >

</head>

<body>

<!-- ==================================================
     HEADER
================================================== -->

<header class="header">

    <div class="container header-content">

        <a
            href="#inicio"
            class="logo"
        >

            <span class="logo-icon">
                ◆
            </span>

            <span>
                Dashboard<span class="highlight">Pro</span>
            </span>

        </a>

        <nav
            class="nav"
            id="nav"
        >

            <a href="#inicio">
                Início
            </a>

            <a href="#recursos">
                Recursos
            </a>

            <a href="#contato">
                Contato
            </a>

        </nav>

        <button
            class="menu-button"
            id="menuButton"
            type="button"
            aria-label="Abrir menu"
            aria-expanded="false"
        >
            ☰
        </button>

    </div>

</header>


<main>

<!-- ==================================================
     INÍCIO
================================================== -->

<section
    class="hero"
    id="inicio"
>

    <div class="container hero-grid">

        <div class="hero-content">

            <span class="badge">
                ● Sistema moderno e responsivo
            </span>

            <h1>
                Uma experiência
                <span>
                    digital profissional.
                </span>
            </h1>

            <p>
                Uma estrutura moderna utilizando
                HTML, CSS e JavaScript para
                criar aplicações rápidas, elegantes
                e funcionais.
            </p>

            <p class="dashboard-description">
                Um dashboard é um painel visual que
                reúne e resume os principais dados,
                métricas e indicadores de desempenho
                (KPIs) de uma empresa ou operação
                em uma única tela.
            </p>

            <div class="hero-buttons">

                <a
                    href="#recursos"
                    class="btn btn-primary"
                >
                    Explorar recursos
                </a>

                <a
                    href="#contato"
                    class="btn btn-secondary"
                >
                    Entre em contato
                </a>

            </div>

        </div>


        <div class="dashboard-card">

            <div class="card-header">

                <div>

                    <span class="card-label">
                        Visão geral
                    </span>

                    <h2>
                        Desempenho
                    </h2>

                </div>

                <span class="status">
                    ● Online
                </span>

            </div>


            <div class="chart">

                <div class="chart-line"></div>

                <div class="chart-point p1"></div>
                <div class="chart-point p2"></div>
                <div class="chart-point p3"></div>
                <div class="chart-point p4"></div>
                <div class="chart-point p5"></div>

            </div>


            <div class="stats">

                <div>

                    <span>
                        Usuários
                    </span>

                    <strong>
                        12.584
                    </strong>

                </div>

                <div>

                    <span>
                        Crescimento
                    </span>

                    <strong class="success">
                        +24,8%
                    </strong>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ==================================================
     RECURSOS
================================================== -->

<section
    class="section"
    id="recursos"
>

    <div class="container">

        <div class="section-title">

            <span class="eyebrow">
                RECURSOS
            </span>

            <h2>
                Tudo que você precisa
                para começar
            </h2>

            <p>
                Uma base limpa e organizada
                para desenvolver projetos
                profissionais.
            </p>

        </div>


        <div class="cards">

            <article class="feature-card">

                <div class="feature-icon">
                    ⚡
                </div>

                <h3>
                    Performance
                </h3>

                <p>
                    Código otimizado para oferecer
                    uma experiência rápida e agradável.
                </p>

            </article>


            <article class="feature-card">

                <div class="feature-icon">
                    ◈
                </div>

                <h3>
                    Responsivo
                </h3>

                <p>
                    Interface adaptada para
                    computadores, tablets e smartphones.
                </p>

            </article>


            <article class="feature-card">

                <div class="feature-icon">
                    ⌘
                </div>

                <h3>
                    Organizado
                </h3>

                <p>
                    Separação entre estrutura,
                    estilos e comportamento.
                </p>

            </article>

        </div>

    </div>

</section>


<!-- ==================================================
     CONTATO
================================================== -->

<section
    class="contact-section"
    id="contato"
>

    <div class="container contact-grid">

        <div class="contact-info">

            <span class="eyebrow">
                CONTATO
            </span>

            <h2>
                Vamos conversar?
            </h2>

            <p>
                Preencha o formulário e envie
                sua mensagem. Seus dados serão
                recebidos com sucesso.
            </p>

        </div>


        <div class="contact-form-container">

            <form
                class="contact-form"
                id="contactForm"
                novalidate
            >

                <div class="form-group">

                    <label for="nome">
                        Nome
                    </label>

                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Seu nome"
                        maxlength="100"
                        autocomplete="name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        E-mail
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="seu@email.com"
                        maxlength="255"
                        autocomplete="email"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="mensagem">
                        Comentário
                    </label>

                    <textarea
                        id="mensagem"
                        name="mensagem"
                        rows="5"
                        maxlength="2000"
                        placeholder="Digite seu comentário..."
                        required
                    ></textarea>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary submit-button"
                    id="submitButton"
                >
                    Enviar mensagem
                </button>


                <p
                    class="form-feedback"
                    id="formFeedback"
                    role="alert"
                    aria-live="polite"
                ></p>

            </form>

        </div>

    </div>

</section>

</main>


<!-- ==================================================
     FOOTER
================================================== -->

<footer class="footer">

    <div class="container footer-content">

        <p>
            © <?= date('Y') ?> DashboardPro.
            Todos os direitos reservados.
        </p>

        <p>
            Desenvolvido com HTML,
            CSS e JavaScript.
        </p>

    </div>

</footer>


<script src="script.js"></script>

</body>

</html>