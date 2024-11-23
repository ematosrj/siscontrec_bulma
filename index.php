<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siscontrec</title>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <img src="img/pm.png" alt="PM BA" width="100vw" height="48">
                <a class="navbar-item has-text-dark" href="index.php">Siscontrec</a>
            </div>
        </nav>
  

        <nav class="level">
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Carros GPM/CAB</p>
                    <p class="title" id="tweets-count">0</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Civis nas dependências</p>
                    <p class="title" id="following-count">0</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Visitantes outras OPM</p>
                    <p class="title" id="followers-count">0</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Efetivo GPM/CAB</p>
                    <p class="title" id="likes-count">0</p>
                </div>
            </div>
        </nav>
    </header>
    <div class="login-container">
        <div class="login-box">
        <h2 class="title is-4 has-text-centered has-text-dark">Sistema Guarda</h2>
        <form action="process_login.php" method="POST">
                <div class="field">
                    <label class="label">Matrícula sem dígito</label>
                    <div class="control">
                        <input class="input" type="text" name="matricula" placeholder="Digite sua matrícula" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Senha</label>
                    <div class="control">
                        <input class="input" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-dark is-fullwidth" type="submit">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="footer">
        Desenvolvedor SD PM Enes da Silva Matos - Departamento de Modernização e Tecnologia - 2024.
    </footer>

    <script>
        function animateCount(id, endValue, duration) {
            let startValue = 0;
            let increment = endValue / (duration / 50); // Aumenta a cada 50ms

            let interval = setInterval(function() {
                startValue += increment;
                if (startValue >= endValue) {
                    clearInterval(interval);
                    startValue = endValue;
                }
                document.getElementById(id).textContent = Math.floor(startValue).toLocaleString(); // Atualiza o texto
            }, 50);
        }

        animateCount('tweets-count', 523, 3000);  // 3 segundos para a contagem de Tweets
        animateCount('following-count', 123, 1500);  // 1.5 segundos para a contagem de Following
        animateCount('followers-count', 1529, 3000);  // 3 segundos para a contagem de Followers
        animateCount('likes-count', 525, 1500);  // 1.5 segundos para a contagem de Likes
    </script>
</body>
</html>