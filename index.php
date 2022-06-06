<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <header class="header" id="inicio">
        <img class="hamburguer" src="img/hamburguesa.svg" alt="">
        <nav class="menu-navegacion">
                <a href="#inicio">INICIO</a>
                <a href="#servicio">IMPORTANCIA</a>
                <a href="#galeria">GALERÍA</a>
                <a href="#expertos">MOMENTOS</a>
                <a href="#footer">CONTACTOS</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">BIENVENIDA PRIMAVERA</h1>
            <p class="copy">LA ESTACIÓN DE LOS NUEVOS COMIENZOS</p>
        </div>
        
    </header>
    <main>
        <section class="services contenedor" id="servicio">
            <h2 class="subtitulo">IMPORTANCIA DE LA PRIMAVERA</h2>
            <div class="contenedor-servicio">
                <img src="img/imagen8.jpg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span>POSEES MÁS ENERGÍA</h3>
                        <p> CON EL AUMENTO DE LOS RAYOS DEL SOL, LAS PERSONAS TIENEN MÁS ENERGÍA Y MENOS SUEÑO.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>CAMBIOS ANÍMICOS</h3>
                        <p> CON EL CAMBIO DE ESTACIÓN AUMENTA LA SEROTONINA, HORMONA QUE MEJORA TU ESTADO DE ÁNIMO.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>DÍAS MÁS SOLEADOS</h3>
                        <p> CON DÍAS MÁS SOLEADOS CRECE EL DESEO DE REALIZAR ACTIVIDADES AL AIRE LIBRE.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="galeria">
            <div class="contenedor">
                <h2 class="subtitulo">MOMENTOS UNICOS E INOLVIDABLES</h2>
                <div class="contenedor-galeria">
                    <img src="img/imagen1.jpg" class="img-galeria" alt="Hola">
                    <img src="img/imagen2.jpg" class="img-galeria" alt="">
                    <img src="img/imagen3.jpg" class="img-galeria" alt="">
                    <img src="img/imagen4.jpg" class="img-galeria" alt="">
                    <img src="img/imagen5.jpg" class="img-galeria" alt="">
                    <img src="img/imagen6.jpg" class="img-galeria" alt="">
                </div>
            </div>
        </section>
        <div class="imagen-light">
            <img src="img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </div>
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">BENDITA PRIMAVERA</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/imagen9.jpg" alt="">
                    <h3 class="n-expert"></h3>
                </div>
                <div class="cont-expert">
                    <img src="img/imagen10.jpg" alt="">
                    <h3 class="n-expert"></h3>
                </div>
                <div class="cont-expert">
                    <img src="img/imagen11.jpg" alt="">
                    <h3 class="n-expert"></h3>
                </div>
            </section>
        </section>
    </main>

    <footer id="footer">
        <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">ALEXIS ANGELES SEGUNDO | AARON CRUZ GONZALEZ</h2>
                    <p>INGENIERIA EN SISTEMAS COMPUTACIONALES</p>
                </div>
                <div class="social-media">
                    <a href="./" class="social-media-icon">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="./" class="social-media-icon">
                        <i class='bx bxl-twitter' ></i>
                    </a>
                    <a href="./" class="social-media-icon">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </div>
        </div>
        <div class="line"></div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>