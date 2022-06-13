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
                <img src="img/cloud_1.jpg" class="img-galeria" alt="">
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
                <div>
                    <div class="contenedor-servicio">
                        <div class="checklist-servicio">
                            <h2 style="text-align: center;">SIGNIFICADO</h2><br>
                            <p style="text-align: justify;">
                            IaaS es la entrega de hardware informático(servidores, tecnología de red, almacenamiento y espacio de centro de datos) como un
                            servicio.También puede esperar que incluya la entrega de sistemas operativos y tecnología de virtualización para administrar los
                            recursos.Los clientes de IaaS alquilan recursos informáticos en lugar de comprarlos e instalarlos en su propio centro de datos. 
                            IaaS lleva el modelo ISP a un nuevo nivel. Si su infraestructura (incluido el hardware informático, los sistemas operativos y la 
                            tecnología de virtualización) se entrega como un servicio, esperará que el nivel de entrega del servicio esté sincronizado con. 
                            todas las variaciones en su demanda de esos servicios.
                            </p>
                        </div>
                        <img src="img/IaaS.png" class="img-galeria" alt="Hola">
                    </div>
                </div>
                
                <div class="contenedor-servicio"> 
                    <img src="img/Tabla.png" class="img-galeria" alt="IaaS">
                    <div class="checklist-servicio">
                        <div>
                            <h2 style="text-align: center;"> CARACTERÍSTICAS</h2><br>
                            <p style="text-align: justify;">
                            <li>Un entorno virtualizado en la nube pública.</li>
                            <li>Servidores virtuales, conexiones de red, y almacenamiento en la nube donde poder construir tu propia plataforma informática.</li>
                            <li>Crea soluciones y aplicaciones tecnológicas cloud fácilmente.</li>
                            <li>Externaliza el hardware al servicio cloud y disminuye costes.</li>
                            <li>Ejecuta cualquier carga de trabajo en cualquier momento.</li>
                            <li>Innovadoras herramientas para migrar el trabajo local a la nube.</li>
                            </p><br>                    
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="contenedor-servicio">
                        <div class="checklist-servicio">
                            <h2 style="text-align: center;">EXAMINAR LA TECNOLOGÍA QUE PERMITE EL IAAS</h2><br>    
                            <p style="text-align: justify;">APPLOGIC</p>
                            <p style="text-align: justify;">AppLogic es un software de gestión que convierte conjuntos de servidores en reservas de recursos virtualizados que pueden
                            compartirse entre varios usuarios.</p><br>
            
                            <li>Permite a los usuarios crear y retirar máquinas virtuales.</li>
                            <li>Ofrecen definir la infraestructura necesaria, como cortafuegos, VPN, equilibradores de carga y almacenamiento, mediante una interfaz de navegador.</li><br>
                        </div>
                        <img src="img/IaaS_1.png" class="img-galeria" alt="">
                    </div>
                </div>
                
                <div class="contenedor-servicio"> 
                    <img src="img/IaaS_2.png" class="img-galeria" alt="">
                    <div class="checklist-servicio">
                        <div>        
                            <p style="text-align: justify;">EUCALYPTUS</p>
                            <p style="text-align: justify;">Eucalyptus es un sistema para implementar nubes privadas e híbridas en las instalaciones, utilizando la infraestructura de hardware
                            y software existente, sin modificaciones. En efecto, es un complemento para la virtualización del centro de datos para crear una auténtica capacidad de nube, como el
                            aprovisionamiento de autoservicio, la seguridad, la gestión del rendimiento y la personalización del usuario final.</p><br>
                                
                            <li>Eucalyptus es de código abierto, por lo que el software puede descargarse gratuitamente y también se incluye en la distribución de Linux Ubuntu 9.04 (y posteriores).</li>
                            <li>Se implementa mediante herramientas disponibles en Linux y tecnologías básicas de servicios web.</li>
                            <li>La interfaz actual de Eucalyptus es compatible con las interfaces EC2, S3 y Elastic Block Store (EBS) de Amazon.</li>
                            </p><br>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="contenedor-servicio">
                        <div class="checklist-servicio">
                            <h2 style="text-align: center;">CONFIAR EN LA NUBE</h2><br>    
                            <p style="text-align: justify;">La perspectiva de utilizar los servicios en la nube está rodeada de un gran nerviosismo. Parte de esto puede atribuirse a la falta de
                            familiaridad con el uso de la capacidad basada en la nube, pero otra parte es mucho más profunda que eso. La nube de confianza incluye servicios que son:</p><br>
            
                            <li>Transparentes de control y resultado (si proporciona una completa interfaz para que puedas ver cómo funciona todo).</li>
                            <li>Capaz de proporcionar pruebas de que los sistemas funcionan como se anuncia (si definitivamente cumple con los niveles de servicios que se supone que proporciona).</li><br>
                        </div>
                        <img src="img/IaaS_3.jpg" class="img-galeria" alt="">
                    </div>
                </div>

        </section>
        <div class="imagen-light">
            <img src="img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </div>

        <section class="contenedor" id="paas">
            <div class="contenedor">
                <h2 class="subtitulo">PLATFORM AS A SERVICE (PaaS)</h2>
                <div class="contenedor-servicio"> 
                    <img src="img/PaaS_0.png" class="img-galeria" alt="PaaS">
                    <div class="checklist-servicio">
                        <div>
                            <h2 style="text-align: center;"> DEFINICIÓN</h2><br>
                            <p style="text-align: justify;">
                                Plataforma como servicio ( PaaS )  una categoría de servicios de computación en la nube que permite a los
                                clientes aprovisionar, instanciar, ejecutar y administrar un paquete modular que comprende una plataforma
                                informática y uno o más aplicaciones, sin la complejidad de construir y mantener la infraestructura típicamente
                                asociada con el desarrollo y lanzamiento de la(s) aplicación(es); y para permitir que los desarrolladores creen,
                                desarrollen y empaqueten dichos paquetes de software .
                            </p><br>                    
                        </div>
                    </div>
                </div>    

                <div>
                    <div class="contenedor-servicio">
                        <div class="checklist-servicio">
                            <h2 style="text-align: center;">CARACTERÍSTICAS</h2><br>    
                            <p style="text-align: justify;">
                            <li>PaaS debe ofrecer algún tipo de lenguaje de desarrollo para que los desarrolladores profesionales puedan añadir valor.</li>
                            <li>Estos entornos necesitan una forma de supervisar y medir el uso de los recursos y hacer un seguimiento del rendimiento
                                general de la plataforma del proveedor.</li>
                            <li>Casi todas las plataformas PaaS se basan en una arquitectura multi-tenancy (que permite que varios clientes ejecuten su
                                copia por separado de los demás a través de la virtualización).</li>
                            <li>Un entorno PaaS debe soportar el ciclo de vida del desarrollo y el proceso de desarrollo en equipo, incluyendo las pruebas.</li>
                            <li>Una plataforma PaaS debe ser capaz de desplegar, gestionar, probar y mantener las aplicaciones desarrolladas.</li>
                            </p><br>
                        </div>
                        <img src="img/PaaS_1.png" class="img-galeria" alt="">
                    </div>
                </div>

                <div class="contenedor-servicio"> 
                    <img src="img/PaaS_2.png" class="img-galeria" alt="">
                    <div class="checklist-servicio">
                        <div>
                            <h2 style="text-align: center;">INTRODUCCIÓN A LA PLATAFORMA DEL CICLO DE VIDA INTEGRADO</h2><br>
                            <p style="text-align: justify;">GOOGLE APP ENGINE</p>
                            <p style="text-align: justify;"> El App Engine gestiona el ciclo de vida de la aplicación web, incluyendo tareas rutinarias como el registro de solicitudes,
                                la comprobación del estado de la aplicación, la actualización de la versión de la aplicación, el funcionamiento de la base
                                de datos subyacente y la gestión del flujo de trabajo.</p><br>

                            <li>No se requiere ensamblaje.</li>
                            <li>Google App Engine expone un entorno de desarrollo totalmente integrado.</li>
                            <li>Es fácil de escalar.</li>
                            <li>Es gratis para empezar.</li>
                            </p><br>             
                        </div>
                    </div>
                </div>

                <div>
                    <div class="contenedor-servicio">
                        <div class="checklist-servicio">    
                                <p style="text-align: justify;">MICROSOFT AZURE</p>
                                <p style="text-align: justify;"> Azure es la estrategia PaaS de Microsoft que se anunció en 2008. Microsoft define la plataforma Azure como una plataforma 
                                    de servicios en la nube a escala de Internet alojada en los centros de datos de Microsoft, que proporciona un sistema operativo
                                    y un conjunto de servicios para desarrolladores que pueden utilizarse de forma individual o conjunta.</p><br>
                                
                                <li>Permite a los desarrolladores utilizar la misma tecnología subyacente y para crear tanto aplicaciones locales como en la nube.</li>
                                <li>Garantiza una combinación de computación local con servicios basados en la nube.</li>
                                </p><br>
                            </div>
                    <img src="img/PaaS_3.png" class="img-galeria" alt="">
                </div>

                <div>
                    <div class="contenedor-servicio">
                        <div class="checklist-servicio">
                            <h2 style="text-align: center;">LAS TECNOLOGÍAS DE APOYO COMO PLATAFORMA</h2><br>    
                            <p style="text-align: justify;">PRUEBAS EN LA NUBE</p>
                            <p style="text-align: justify;">Las pruebas en la nube son muy críticas; sin embargo, la mayoría de las plataformas no proporcionan su propio entorno de
                            pruebas. Cientos de proveedores, grandes y pequeños, ofrecen servicios para probar plataformas basadas en la nube. basadas en la nube. Entre ellos se 
                            encuentran HP, IBM y empresas independientes como iTKO y SOASTA.</p><br>
            
                            <li>Se integran con la plataforma y permiten a los clientes probar sus aplicaciones antes de desplegarlas en una nube pública o privada.</li>
                            <li>Ofrecen sus propias pruebas vinculadas a su plataforma, muchos clientes y desarrolladores necesitan pruebas para su propio código y para las pruebas de
                            integración.</li><br>
                        </div>
                        <img src="img/PaaS_4.jpg" class="img-galeria" alt="">
                    </div>
                </div>

                <div class="contenedor-servicio"> 
                    <img src="img/PaaS_5.jpg" class="img-galeria" alt="">
                    <div class="checklist-servicio">
                        <div>        
                            <p style="text-align: justify;">PLATAFORMAS DE INTEGRACIÓN Y CONFIGURACIÓN</p>
                            <p style="text-align: justify;">Para que el desarrollo en la nube prospere, se necesitan herramientas que faciliten la personalización de las aplicaciones
                            en la nube para las diferentes necesidades de los usuarios finales.</p><br>
                                
                            <li>WaveMaker es una plataforma de desarrollo en la nube basada en Java. Está pretende facilitar a los desarrolladores la personalización y ampliación de las
                            aplicaciones web desde un navegador web.</li>
                            <li>Gigaspaces es otra plataforma habilitadora, permite a los clientes construir aplicaciones web para la nube mediante la migración de aplicaciones empresariales
                            existentes.</li>
                            </p><br>
                        </div>
                    </div>
                </div>
            </div>       
        </section>

        </section>
        <section class="gallery" id="saas">
            <div class="contenedor">
                <h2 class="subtitulo">SOFTWARE AS A SERVICE (SaaS)</h2>
                <div>
                    <div class="contenedor-servicio">
                        <div class="checklist-servicio">
                            <h2 style="text-align: center;">¿QUÉ ES?</h2><br>
                            <p style="text-align: justify;">
                            Una de las primeras implementaciones de los servicios en la nube fue el software como servicio (SaaS) el cual constaba de aplicaciones empresariales alojadas por
                            el proveedor y entregadas como un servicio SaaS tiene sus raíces en un tipo temprano de operación de alojamiento realizada por proveedores de servicios de aplicaciones
                            (ASP). Antes de la llegada de este tipo de servicio, las empresas a menudo gastaban grandes cantidades de dinero en implementar y personalizar estas aplicaciones para 
                            satisfacer los requisitos comerciales internos.
                            </p>
                        </div>
                        <img src="img/SaaS.png" class="img-galeria" alt="Hola">
                    </div>
                </div>
            </div>

            <div class="contenedor-servicio"> 
                    <img src="img/Saas_0.png" class="img-galeria" alt="IaaS">
                    <div class="checklist-servicio">
                        <div>
                            <h2 style="text-align: center;"> CARACTERÍSTICAS DEL SOFTWARE COMO SERVICIO</h2><br>
                            <p style="text-align: justify;">
                            <li>La aplicación SaaS debe ser lo suficientemente generalizada como para que muchos clientes se interesen por el servicio.</li>
                            <li>Las aplicaciones SaaS necesitan una navegación sofisticada y facilidad de uso.</li>
                            <li>Una aplicación SaaS debe incluir la medición y el seguimiento para que a los clientes se les pueda cobrar el uso real.</li>
                            <li>Una aplicación SaaS debe tener un servicio de facturación incorporado.</li>
                            <li>Las aplicaciones SaaS necesitan interfaces publicadas y un ecosistema de socios que puedan ampliar la base de clientes de la empresa y alcance del mercado.</li>
                            <li>Las aplicaciones SaaS tienen que proporcionar sofisticados configuradores de procesos de negocio para los clientes.</li>
                            <li>Las aplicaciones SaaS tienen que garantizar que los datos y las configuraciones especializadas de cada cliente estén separados y seguros de los datos y configuraciones
                            de otros clientes.</li>
                            </p><br>                    
                        </div>
                    </div>
                </div>

                <div>
                    <div class="contenedor-servicio">
                        <div class="checklist-servicio">
                            <h2 style="text-align: center;">TIPOS DE PLATAFORMAS SaaS</h2><br>
                            <p style="text-align: justify;">SOFTWARE EMPAQUETADO</p>
                            <p style="text-align: justify;">
                            El software empaquetado viene en muchos tipos diferentes: gestión de la relación con el cliente, gestión de la cadena de suministro, gestión financiera y recursos humanos, 
                            por nombrar los más comunes. Estas ofertas integradas se centran en un proceso específico, como la gestión de los beneficios de los empleados, los salarios y las revisiones
                            anuales del rendimiento.</p><br>
                            <p style="text-align: justify;">
                            <li>Están diseñados con procesos empresariales específicos incorporados que los clientes pueden modificar. </li>
                            <li>Se han trasladado en gran número a la nube porque los clientes encontraban las plataformas demasiado difíciles de gestionar.</li>
                            </p><br>
                        </div>
                        <img src="img/SaaS_1.jpg" class="img-galeria" alt="Hola">
                    </div>
                </div>
            </div>

            <div class="contenedor-servicio"> 
                    <img src="img/SaaS_2.jpg" class="img-galeria" alt="">
                    <div class="checklist-servicio">
                        <div>        
                            <p style="text-align: justify;">SOFTWARE DE COLABORACIÓN</p>
                            <p style="text-align: justify;">Esta área está dominada por software que se centra en todo tipo de esfuerzos de colaboración, incluyendo conferencias, colaboración en documentos,
                            planificación de proyectos, mensajería instantánea e incluso correo electrónico. En cierto sentido, era inevitable que estas plataformas se trasladaran a la nube: Estas tareas se
                            llevan a cabo en toda la organización y deben ser fácilmente accesibles desde muchos lugares.</p><br>
                                
                            <li>Este sector del mercado, cada vez más dinámico, está de Internet, junto con el hecho de que los equipos se encuentran en todo el mundo.</li>
                            <li>Gigaspaces es otra plataforma habilitadora, permite a los clientes construir aplicaciones web para la nube mediante la migración de aplicaciones empresariales
                            existentes.</li>
                            </p><br>
                        </div>
                    </div>
                </div>

        </section>
        <section class="contenedor" id="paas">
            <h2 class="subtitulo">ELABORADO POR:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/Alx.png" alt="">
                    <h3 class="n-expert">ALEXIS ANGELES SEGUNDO</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/Aar.png" alt="">
                    <h3 class="n-expert">AARON CRUZ GONZALEZ</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/kev.png" alt="">
                    <h3 class="n-expert">KEVIN CELOTE SEGUNDO</h3>
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
