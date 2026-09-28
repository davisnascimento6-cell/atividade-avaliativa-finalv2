document.addEventListener("DOMContentLoaded", () => {

    // ========================================
    // MENU MOBILE
    // ========================================

    const menuButton =
        document.getElementById("menuButton");

    const nav =
        document.getElementById("nav");


    if (menuButton && nav) {

        menuButton.addEventListener("click", () => {

            const isActive =
                nav.classList.toggle("active");

            menuButton.setAttribute(
                "aria-expanded",
                isActive ? "true" : "false"
            );

        });


        document
            .querySelectorAll(".nav a")
            .forEach(link => {

                link.addEventListener("click", () => {

                    nav.classList.remove("active");

                    menuButton.setAttribute(
                        "aria-expanded",
                        "false"
                    );

                });

            });

    }


    // ========================================
    // FORMULÁRIO
    // ========================================

    const form =
        document.getElementById("contactForm");

    const feedback =
        document.getElementById("formFeedback");

    const submitButton =
        document.getElementById("submitButton");

    const nomeInput =
        document.getElementById("nome");

    const emailInput =
        document.getElementById("email");

    const mensagemInput =
        document.getElementById("mensagem");


    if (
        form &&
        feedback &&
        submitButton &&
        nomeInput &&
        emailInput &&
        mensagemInput
    ) {

        form.addEventListener("submit", (event) => {

            // Impede o envio para PHP
            event.preventDefault();


            const nome =
                nomeInput.value.trim();

            const email =
                emailInput.value.trim();

            const mensagem =
                mensagemInput.value.trim();


            // ========================================
            // LIMPA MENSAGEM ANTERIOR
            // ========================================

            feedback.textContent = "";

            feedback.style.color = "";


            // ========================================
            // CAMPOS VAZIOS
            // ========================================

            if (
                !nome ||
                !email ||
                !mensagem
            ) {

                feedback.textContent =
                    "Preencha todos os campos.";

                feedback.style.color =
                    "#ff7675";

                return;
            }


            // ========================================
            // LIMITE DO NOME
            // ========================================

            if (nome.length > 100) {

                feedback.textContent =
                    "O nome deve ter no máximo 100 caracteres.";

                feedback.style.color =
                    "#ff7675";

                return;
            }


            // ========================================
            // LIMITE DO E-MAIL
            // ========================================

            if (email.length > 255) {

                feedback.textContent =
                    "O e-mail deve ter no máximo 255 caracteres.";

                feedback.style.color =
                    "#ff7675";

                return;
            }


            // ========================================
            // VALIDAÇÃO DO E-MAIL
            // ========================================

            const emailValido =
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


            if (!emailValido.test(email)) {

                feedback.textContent =
                    "Digite um e-mail válido.";

                feedback.style.color =
                    "#ff7675";

                return;
            }


            // ========================================
            // LIMITE DA MENSAGEM
            // ========================================

            if (mensagem.length > 2000) {

                feedback.textContent =
                    "O comentário deve ter no máximo 2000 caracteres.";

                feedback.style.color =
                    "#ff7675";

                return;
            }


            // ========================================
            // SIMULAÇÃO DE ENVIO
            // ========================================

            submitButton.disabled = true;

            submitButton.textContent =
                "Enviando...";

            feedback.textContent =
                "Enviando seus dados...";

            feedback.style.color =
                "#00d68f";


            // Pequeno atraso apenas para
            // criar uma experiência de envio.

            setTimeout(() => {

                feedback.textContent =
                    "✓ Seus dados foram recebidos com sucesso!";

                feedback.style.color =
                    "#00d68f";


                // Limpa o formulário
                form.reset();


                // Restaura o botão
                submitButton.disabled = false;

                submitButton.textContent =
                    "Enviar mensagem";

            }, 800);

        });

    }

});