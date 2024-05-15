<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pagina.css"> 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Silent Passage</title>
</head>
<body>
    <div class="background">
        <link rel="stylesheet" href="">
        <img src="Imagens/imagem (1).png" alt="">   
    </div>

    <div class="app">
        <header>
            <ul class="nav_navegation">
                <li>
                    <a href="index.php"><img class="imagemLogo" src="Imagens/Logo PAP.jpg" alt=""></a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link">Sobre</a>
                </li>
                <li>
                    <a href="contacto.php" class="nav-link">Contacto</a>
                </li>
                <!-- <li>
                    <a href="densenvolvimento.html" class="nav-link">Desenvolvimento</a>
                </li> -->
            </ul>
            <ul>
                <li>
                    <a href="login1.php" class="login-link">Login</a>
                </li>
            </ul>
        </header>
    </div>
    <main>
        <div class="Frase">
            <img src="Imagens/pap site logo.png" alt="">
            <p>Neste jogo de aventura narrativa, o jogador assume o papel de um habilidoso ladrão numa situação complicada.</p>
            <p><strong>Objetivo </strong>- adquirir diamantes valiosos.</p>
            <p>Entretanto, a missão é interrompida quando é capturado por um guarda!</p>
            <p>Surge então uma personagem, Francis, numa tentativa de resgate.</p>
        </div>
    </main>
    <div class="background-two">
    <video src="./Videos/video correto.mp4" autoplay muted loop></video>
</div>
    <main class="download">
        <p>Este jogo foi desenvolvido no âmbito de um projecto final de curso.</p>
        <p>O jogo segue um estilo stealh, que consite em roubar diamantes, mas entretanto acontece algo insperado!</p>
        <p>O jogo está ainda em desenvolvimento.</p>
        <button type="button" class="jogo"> <a  href="Download/Export 9 (2).zip" target="_blank" rel="noopener noreferrer" download>Transferir Jogo</a></button>
        <br>
        <br>
        <p>Esperamos que gostem!</p>
        <p>Teremos novas atualizações em breve...</p>
    </main>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html