<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelos Openness</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">



    <meta name="theme-color" content="#2091F9">

    <meta name="title" content="La mejor experiencia...">
    <meta name="description" content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">


    <meta property="og:type" content="website">
    <meta property="og:url" content="https://aprendecss.com">
    <meta property="og:title" content="Aprende CSS desde cero">
    <meta property="og:description" content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="og:image" content="https://aprendecss.com/images/css.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://aprendecss.com/">
    <meta property="twitter:title" content="Aprende CSS desde cero">
    <meta property="twitter:description" content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="twitter:image" content="https://aprendecss.com/images/css.jpg">

</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Vuelos</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="#" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Blog</a>
                </li>

                <img src="./images/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="./images/bc.jpg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Ten la mejor experiencia con vuelos Openness</h1>
            <p class="hero__paragraph">Eliga y personalice el vuelo que mejor se adapte a su preferencia.</p>
            <a href="#" class="cta">Comience ahora</a>
        </section>
    </header>


    <main>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Somos el equipo de Vuelos Openness</h2>
                </div>

                <figure class="knowledge__picture">
                    <img src="./images/equipo.jpeg" class="knowledge__img">
                </figure>

            </div>
        </section>
        <section class="container about">
            <h2 class="subtitle">¿Qué vuelos podemos ofrecer?</h2>
            <p class="about__paragraph">Vuelos de todo tipo, desde los mas economicos hasta aquellos vuelos que te haran
                pasar una unica experiencia</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./images/edificio.png" class="about__icon">
                    <h3 class="about__title">Excelentes locaciones</h3>
                    <p class="about__paragrah">Contamos con locaciones agradables para todos nuestros clientes</p>
                </article>

                <article class="about__icons">
                    <img src="./images/empleados.png" class="about__icon">
                    <h3 class="about__title">Buen trato</h3>
                    <p class="about__paragrah">Contamos con el mejor a trato a nuestros clientes, ya que no solo son
                        clientes parte de nuestra familia</p>
                </article>

                <article class="about__icons">
                    <img src="./images/precios.png" class="about__icon">
                    <h3 class="about__title">Precios accesibles</h3>
                    <p class="about__paragrah">Con nosotros encontraras los mejores precios del mercado, axcesibles y
                        confiables </p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">No te pierdas de esas vacaciones ¡Vuelos al 2x1!</h2>
                    <a href="#" class="cta">Comprar vuelo</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="./images/vuelos2x1.avif" class="knowledge__img">
                </figure>
            </div>
        </section>

        <section class="price container">
            <h2 class="subtitle">Obten el mejor vuelo para ti...</h2>

            <div class="price__table">
                <div class="price__element">
                    <p class="price__name">Turista</p>
                    <h3 class="price__price">Desde los MEX$150</h3>

                    <div class="price__items">
                        <p class="price__features">Acientos comodos</p>
                        <p class="price__features">Servicio de comida y bebidas</p>
                        <p class="price__features">Entretenimiento</p>
                    </div>

                    <a href="#" class="price__cta">Comprar</a>
                </div>


                <div class="price__element price__element--best">
                    <p class="price__name">Primera clase</p>
                    <h3 class="price__price">Desde los MEX$100,000</h3>

                    <div class="price__items">
                        <p class="price__features">Asientos más amplios y cómodos con reclinación total o casi total.
                        </p>
                        <p class="price__features">Pantallas individuales de entretenimiento con una amplia selección de
                            películas, programas de televisión y música.</p>
                        <p class="price__features">Acceso a salones VIP del aeropuerto, que ofrecen servicios exclusivos
                            como bebidas, alimentos, periódicos y revistas.</p>
                    </div>

                    <a href="#" class="price__cta">Comprar</a>
                </div>


                <div class="price__element">
                    <p class="price__name">Premium</p>
                    <h3 class="price__price">Desde los MEX$10,000</h3>

                    <div class="price__items">
                        <p class="price__features">Asientos más amplios y cómodos</p>
                        <p class="price__features">Comida y bebidas de alta calidad</p>
                        <p class="price__features">Entretenimiento mejorado</p>
                    </div>

                    <a href="#" class="price__cta">Comprar</a>
                </div>


            </div>
        </section>

        <section class="testimony">
            <div class="testimony__container container">
                <img src="./images/leftarrow.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Jesus Trinidad Salinas León<span class="testimony__course">estudiante
                                de Ing en Sistemas </span></h2>
                        <p class="testimony__review">Desarrollador de esta pagina web</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/Jesus.jpeg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Leonardo Covarrubias Lemus <span class="testimony__course">estudiante de
                                Ing en Sistemas.</span></h2>
                        <p class="testimony__review">Estudiante y Desarrollador de esta p&aacute;gina Web</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/Leonardo.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                    <h2 class="subtitle">Mi nombre es Luis Alberto Soto Mejia, <span class="testimony__course">estudiante de
                                Ingenieria en Sistemas.</span></h2>
                        <p class="testimony__review">Desarrollador de esta pagina web</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/Alberto.jpeg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Francisco González Rodriguez, <span class="testimony__course">estudiante de
                             Ingenieria en Sistemas.</span></h2>
                        <p class="testimony__review">Desarrollador de esta pagina web</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/Francisco.jpeg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="5">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Isaac Salvador Bravo Estrada, <span class="testimony__course">estudiante de
                                Ingenieria en Sistemas.</span></h2>
                        <p class="testimony__review">Desarrollador de esta pagina web</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/isaac.jpg" class="testimony__img">
                    </figure>
                </section>

                

                <img src="./images/rightarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>






    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Vuelos Openness</h2>


                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Acerca de</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Blog</a>
                    </li>
                </ul>
            </nav>


            <form class="footer__form" action="registro.php" method="POST">
                <h2 class="footer__newsletter">Suscribete a la newsletter</h2>
                <?php
                if (isset($_GET['r'])) {
                    if ($_GET['r'] == 't') {
                        echo '<div class="alert alert-success" role="alert">
                                 Se envío el correo con exito!
                              </div>';
                    } else if ($_GET['r'] == 'f') {
                        echo '<div class="alert alert-warning" role="alert">
                                    Por favor llene todos los campos!
                              </div>';
                    } else if ($_GET['r'] == 'err') {
                        echo '<div class="alert alert-danger" role="alert">
                                     Error al enviar el correo
                              </div>';
                    }
                }

                ?>
                <div class="footer__inputs">
                    <input type="text" placeholder="Nombre:" class="footer__input" name="nombre">
                    <input type="email" placeholder="Email:" class="footer__input" name="correo">
                    <input type="submit" value="Registrate" class="footer__submit" name="registro">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; The Openness</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>

    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>