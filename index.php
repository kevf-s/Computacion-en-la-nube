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
                <a href="#inicio">Inicio</a>
                <a href="#servicio">Contenido</a>
                <a href="#iaas">IaaS</a>
                <a href="#paas">PaaS</a>
                <a href="#saas">SaaS</a>
                <a href="#footer">Contactos</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">CLOUD COMPUTING</h1>
            <p class="copy">ELEMENTOS DEL CLOUD COMPUTING</p>
        </div>
        
    </header>
    <main>
        <section class="services contenedor" id="servicio">
            <h2 class="subtitulo">CONTENIDO</h2>
            <div class="contenedor-servicio">
                <img src="img/cloud_1.jpg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span>INFRASTRUCTURE AS A SERVICE (IaaS)</h3>
                        <p align=" justify"> La Infraestructura como Servicio (IaaS) es la entrega de hardware informático (servidores,
                            tecnología de redes almacenamiento y espacio en el centro de datos) como un servicio. También se puede esperar
                            que incluya la entrega de sistemas operativos y tecnología de virtualización para gestionar los recursos. Los
                            clientes de IaaS alquilan recursos informáticos en lugar de comprare instalarlos en su propio centro de datos.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>PLATFORM AS A SERVICE (PaaS)</h3>
                        <p align=" justify"> En la Plataforma como Servicio (PaaS) esta se define como una plataforma informática que
                            incluye un conjunto de capacidades de desarrollo, middleware y despliegue. Una característica clave del
                            proveedor es la creación y el fomento de un ecosistema profundo de socios que se comprometen con este
                            entorno para el futuro.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>SOFTWARE AS A SERVICE (SaaS)</h3>
                        <p align=" justify"> El Software como Servicio (SaaS) es un modelo de distribución de software donde el soporte
                            lógico y los respectivos datos que maneja se alojan en los servidores de un proveedor, cuyo acceso es a través
                            de Internet. El proveedor no solo proporciona el hardware, sino también el software correspondiente.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="iaas">
            <div class="contenedor">
                <h2 class="subtitulo">INFRASTRUCTURE AS A SERVICE (IaaS)</h2>
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
        <section class="contenedor" id="paas">
            <h2 class="subtitulo">PLATFORM AS A SERVICE (PaaS)</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/imagen8.jpg" alt="">
                    <h3 class="n-expert"></h3>
                </div>
                <div class="cont-expert">
                    <img src="img/imagen8.jpg" alt="">
                    <h3 class="n-expert"></h3>
                </div>
                <div class="cont-expert">
                    <img src="img/imagen8.jpg" alt="">
                    <h3 class="n-expert"></h3>
                </div>
            </section>
        </section>
        <section class="gallery" id="saas">
            <div class="contenedor">
                <h2 class="subtitulo">Software as a Service</h2>
                <div>
                    <h2>QUE ES?</h2>
                    <div class="contenedor-servicio">
                        <div class="checklist-servicio">
                            <p style="text-align: justify;">
                            Una de las primeras implementaciones de los servicios en la nube fue el software como servicio (SaaS) el cual constaba de aplicaciones empresariales alojadas por el proveedor y entregadas como un servicio.
        SaaS tiene sus raíces en un tipo temprano de operación de alojamiento realizada por proveedores de servicios de aplicaciones (ASP). Antes de la llegada de este tipo de servicio, las empresas a menudo gastaban grandes cantidades de dinero en implementar y personalizar estas aplicaciones para satisfacer los requisitos comerciales internos.
                            </p>
                        </div>
                        <img src="img/SaaS.png" class="img-galeria" alt="Hola">
                    </div>
                </div>
                <h2 style="text-align: center;">CARACTERISITCAS</h2>
                <div class="contenedor-galeria">
                    <div class="multi_opcion" style="background:#dcf2ff; border: 3px solid #0089d8;">
                        <p>La aplicación SaaS debe generalizarse lo suficiente para que muchos clientes se interesen en el servicio.</p>
                    </div>
                    <div class="multi_opcion" style="background:#dcf2ff; border: 3px solid #0089d8;">
                        <p>Las aplicaciones SaaS necesitan una navegación sofisticada y facilidad de uso.</p>
                    </div>
                    <div class="multi_opcion" style="background:#dcf2ff; border: 3px solid #0089d8;">
                        <p>La aplicación SaaS debe ser modular y orientada a servicios</p>
                    </div>
                    <div class="multi_opcion" style="background:#dcf2ff; border: 3px solid #0089d8;">
                        <p>Una aplicación SaaS debe incluir medición y monitoreo para que a los clientes se les pueda cobrar el uso real.</p>
                    </div>
                    <div class="multi_opcion" style="background:#dcf2ff; border: 3px solid #0089d8;">
                        <p>Una aplicación SaaS debe tener un servicio de facturación integrado.</p>
                    </div>
                    <div class="multi_opcion" style="background:#dcf2ff; border: 3px solid #0089d8;">
                        <p>Las aplicaciones SaaS necesitan interfaces publicadas y un ecosistema de socios que puedan expandir la base de clientes y el alcance del mercado de la empresa.</p>
                    </div>
                    <div class="multi_opcion" style="background:#dcf2ff; border: 3px solid #0089d8;">
                        <p>Las aplicaciones SaaS deben proporcionar configuradores de procesos comerciales sofisticados para los clientes.</p>
                    </div>
                    <div class="multi_opcion" style="background:#dcf2ff; border: 3px solid #0089d8;">
                        <p>Las aplicaciones SaaS necesitan proporcionar constantemente lanzamientos rápidos de nuevas funciones y nuevas capacidades.</p>
                    </div>
                    <div class="multi_opcion" style="background:#dcf2ff; border: 3px solid #0089d8;">
                        <p>Las aplicaciones SaaS tienen que proteger la integridad de los datos del cliente.</p>
                    </div>
                </div>
                <!-- <div class="contenedor-galeria">
                    <img src="img/imagen1.jpg" class="img-galeria" alt="Hola">
                    <img src="img/imagen2.jpg" class="img-galeria" alt="">
                    <img src="img/imagen3.jpg" class="img-galeria" alt="">
                    <img src="img/imagen4.jpg" class="img-galeria" alt="">
                    <img src="img/imagen5.jpg" class="img-galeria" alt="">
                    <img src="img/imagen6.jpg" class="img-galeria" alt="">
                </div> -->
            </div>
        </section>
        <section class="contenedor" id="paas">
            <h2 class="subtitulo">ELABORADO POR:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/imagen8.jpg" alt="">
                    <h3 class="n-expert">ALEXIS ANGELES SEGUNDO</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/imagen8.jpg" alt="">
                    <h3 class="n-expert">AARON CRUZ GONZALEZ</h3>
                </div>
            </section>
        </section>
    </main>
    <footer id="footer">
        <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">SISTEMAS DISTRIBUIDOS</h2>
                    <p>DIVISIÓN DE INGENIERÍA EN SISTEMAS COMPUTACIONALES</p>
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