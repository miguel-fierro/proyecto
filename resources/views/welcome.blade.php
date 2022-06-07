<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description"
        content="Pet Shower es un local destinado al aseo de las mascotas. Ofrece un servicio destinado para que puedas lavar a tu mascota en un entorno perfecto.">
    <meta name="author" content="Miguel Fierro">

    <meta property="og:site_name" content="Pet Shower" />
    <meta property="og:site" content="https://petshower.es" />
    <meta property="og:title" content="Pet Shower | Auto lavado de mascotas" />
    <meta property="og:description"
        content="Pet Shower es un auto lavado de mascotas, ubicado en Oviedo. Encontrarás el lugar perfecto para asear a tu mascota." />
    <meta property="og:image" content="" />
    <meta property="og:url" content="https://petshower.es" /> 
    <meta property="og:type" content="article" />

    <title>Pet Shower - Autolavado de mascotas</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="{{asset('landing/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('landing/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('landing/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('landing/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('landing/css/styles.css')}}" rel="stylesheet">

    <link rel="icon" href="{{asset('landing/images/favicon.ico')}}">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="{{asset('landing/images/petshower-transparente.png')}}"
                    alt="alternative"></a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#home">INICIO<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#descripcion">¿QUÉ ES?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#precio">PRECIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#fotos">FOTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#testimonios">TESTIMONIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#mapa">UBICACIÓN</a>
                    </li>

                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm page-scroll" href="#download">INICIAR SESIÓN</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Un espacio diseñado para tu comodidad y la de tu mascota</h1>
                        <p class="p-large p-heading">En Pet Shower encontrarás el lugar perfecto para el aseo de tu
                            mascota, en un entorno muy cuidado y a un precio accesible. Olvídate de bañar a tu mascota
                            en tu casa y montar un escándalo.</p>
                        <a class="btn-solid-lg page-scroll" href="#descripcion"><i
                                class="fas fa-exclamation-circle fa-lg"></i> ¿QUÉ ES PET SHOWER?</a>
                        <a class="btn-solid-lg page-scroll" href="#mapa"><i class="fas fa-location-arrow fa-lg"></i>
                            ¿DÓNDE ESTAMOS?</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('landing/images/petshower1.jpeg')}}" width="80%" alt="alternative">
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div class="deco-white-circle-1">
            <img src="{{asset('landing/images/decorative-white-circle.svg')}}" alt="alternative">
        </div> <!-- end of deco-white-circle-1 -->
        <div class="deco-white-circle-2">
            <img src="{{asset('landing/images/decorative-white-circle.svg')}}" alt="alternative">
        </div> <!-- end of deco-white-circle-2 -->
        <div class="deco-blue-circle">
            <img src="{{asset('landing/images/decorative-blue-circle.svg')}}" alt="alternative">
        </div> <!-- end of deco-blue-circle -->
        <div class="deco-yellow-circle">
            <img src="{{asset('landing/images/decorative-yellow-circle.svg')}}" alt="alternative">
        </div> <!-- end of deco-yellow-circle -->
        <div class="deco-green-diamond">
            <img src="{{asset('landing/images/decorative-green-diamond.svg')}}" alt="alternative">
        </div> <!-- end of deco-yellow-circle -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>2 años con vosotros</h2>
                        <p>Durante estos 2 años que llevamos en activo, hemos transformado de manera rádical el momento
                            del cuidado de tu mascota.</p>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <p>Ahora el momento más tedioso para ti y tu mascota se ha convertido, en algo más fácil y
                            cómodo.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <i class="fas fa-dog blue"></i>
                            <div class="counter-value number-count" data-count="987">1</div>
                            <p class="counter-info">Mascotas satisfechas</p>
                        </div>
                    </div>
                    <!-- end of counter -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div id="descripcion"></div>
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Description 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('landing/images/dog1.png')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>¿Qué es Pet Shower?</h2>
                        <p><strong>Es un local destinado al auto lavado de tu mascota.</strong> Tan solo tendrás que ir
                            a la hora que tu quieras y podrás asear a tu peludo en un entorno perfectamente cuidado.
                            Olvídate de volver a llenar tu casa de agua y pelos.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">La bañera y la mesa de secado son de <strong>altura
                                        regulable</strong>. Podrás ajustarla perfectamente según tus necesidades.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Los shampoos que se emplean son de <strong>alta
                                        cosmética</strong>, de la marca Petuxe. Podrás elegir entre 3 variedades
                                    diferentes, para pieles sensibles, pelo negro o uno normal pensado para todas las
                                    mascotas.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Podrás secar a tu mascota con un <strong>secador
                                        profesional</strong> de peluquería, por lo que acabaras de secar a tu peludo en
                                    un momento.</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of description 1 -->


    <!-- Description 2 -->
    <div class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tabs-container">

                        <!-- Tabs Links -->
                        <ul class="nav nav-tabs" id="cedoTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab"
                                    aria-controls="tab-1" aria-selected="true"><i class="fas fa-shower"></i>Primero</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab"
                                    aria-controls="tab-2" aria-selected="false"><i class="fas fa-wind"></i>Segundo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab"
                                    aria-controls="tab-3" aria-selected="false"><i class="fas fa-list"></i>Tercero</a>
                            </li>
                        </ul>
                        <!-- end of tabs links -->

                        <!-- Tabs Content -->
                        <div class="tab-content" id="cedoTabsContent">
                            <!-- Tab -->
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                                <p><strong>Lo primero que necesitas</strong> es dinero en efectivo. Para esto,
                                    dispondrás de una máquina que cambiará tus billetes en monedas.</p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Introduce las monedas que necesites en el cajetín de
                                            pago para el lavado, recuerda que son 3€ para iniciarlo y durará 5 minutos.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Si necesitas más tiempo, puedes añadir más monedas y el
                                            tiempo se irá sumando autómaticamente, podrás ver lo que te queda en la
                                            pantalla.</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Tienes a tu disposición 3 tipos de shampoos, que se
                                            adecuan perfectamente a cada tipo de pelo de cada mascota.</div>
                                    </li>
                                </ul>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                            <!-- Tab -->
                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                                <p><strong>Lo segundo que necesitas</strong> para secar a tu mascota en volver a
                                    introducir dinero, pero esta vez en el cajetín de pago para el secado.</p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Podrás usar el secador durante 5 minutos por 2€, existen
                                            dos tipos de posiciones, una de calor y otro frio.</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Si necesitas más tiempo, puedes añadir más monedas y el
                                            tiempo se irá sumando autómaticamente, podrás ver lo que te queda en la
                                            pantalla.</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Puedes regular la velocidad del secador dependiendo de
                                            tu mascota.</div>
                                    </li>
                                </ul>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                            <!-- Tab -->
                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                                <p><strong>Por último</strong> segun has finalizado el lavado y el secado de tu mascota
                                    recomendamos hacer lo siguiente:</p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Puedes quitarle los nudos a tu mascota con los cepillos
                                            que tendrás disponibles en la mesa.</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Recomendamos que dejes todo lo más limpio posible, como
                                            te lo encontraste, así el próximo usuario se podrá encontrar el
                                            establecimiento en buenas condiciones.</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Tienes a tu disposición colonia para mascotas, un recoge
                                            pelos para que puedas pasarlo por tu ropa, entre otras cosas.</div>
                                    </li>
                                </ul>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->
                        </div> <!-- end of tab-content -->
                        <!-- end of nav tabs content -->
                    </div> <!-- end of tabs-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('landing/images/persona1.png')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div id="precio"></div>
    </div> <!-- end of tabs -->
    <!-- end of description 2 -->


    <!-- Small Features -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Te parecerá barato</h2>
                    <p class="p-heading">Con todo lo que ganarás utilizando nuestro establecimiento el precio te
                        parecerá barato, entre otras cosas, porque lo es. Tú casa dejará de ser una selva cuando tengas
                        que lavar a tu mascota, convertiremos ese proceso en algo realmente sencillo.</p>
                </div> <!-- end of div -->
            </div> <!-- end of div -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title pb-3">Lavado</h3>
                        </div>
                        <div class="card-image blue">
                            <i class="fas fa-shower"></i>
                        </div>
                        <div class="card-body">
                            <p style="font-size: 22px;"><strong>3€ por 5 minutos</strong></p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div>
                            <h3 class="card-title pb-3">Secado</h3>
                        </div>
                        <div class="card-image yellow">
                            <i class="fas fa-wind"></i>
                        </div>
                        <div>
                            <p style="font-size: 22px;"><strong>2€ por 5 minutos</strong></p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div id="fotos"></div>
    </div> <!-- end of cards-1 -->
    <!-- end of small features -->


    <!-- Screenshots -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/slider/perro1.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="{{asset('landing/images/slider/perro1.jpg')}}" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/slider/perro2.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="{{asset('landing/images/slider/perro2.jpg')}}" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/slider/perro3.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="{{asset('landing/images/slider/perro3.jpg')}}" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/slider/perro4.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="{{asset('landing/images/slider/perro4.jpg')}}" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/slider/perro5.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="{{asset('landing/images/slider/perro5.jpg')}}" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/slider/perro6.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="{{asset('landing/images/slider/perro6.jpg')}}" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/slider/perro7.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="{{asset('landing/images/slider/perro7.jpg')}}" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/slider/perro8.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="{{asset('landing/images/slider/perro8.jpg')}}" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div id="testimonios"></div>
    </div> <!-- end of slider -->
    <!-- end of screenshots -->


    <!-- Testimonials -->
    <div class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Testimonios</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                            <hr class="testimonial-line">
                        </div>
                        <div class="card-body">
                            <div class="testimonial-text">Es una muy buena forma de mantener limpia a tu mascota sin
                                provocarte una lumbalgia ven la bañera de tu casa. Además la potencia de ese tipo de
                                secadores me permite secar rápido a mi perra con pelo en doble capa.</div>
                            <div class="testimonial-author">Ana Isabel González</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                            <hr class="testimonial-line">
                        </div>
                        <div class="card-body">
                            <div class="testimonial-text">El sitio es impresionante, tanto la higiene como la calidad de
                                sus productos es excelente y todo ello por un precio a mi parecer muy económico. Llevé a
                                mi perro que es muy grande y no tuve ningún problema con el lavado ya q la bañera se
                                puede ajustar a varias alturas.</div>
                            <div class="testimonial-author">Jaime Fernández</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                            <hr class="testimonial-line">
                        </div>
                        <div class="card-body">
                            <div class="testimonial-text">La verdad que el sitio es impresionante, llevé a mi perro y la
                                verdad es que tanto la higiene del sitio como la bañera que se puede ajustar a tú altura
                                es una pasada, el precio es muy económico y además tienen de regalo una pelota para el
                                perro y una chuchería. Sin duda repetiré ya que calidad precio es espectacular.</div>
                            <div class="testimonial-author">Hasan Panamanan</div>
                        </div>
                    </div>
                    <!-- end of card -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div id="mapa"></div>
    </div> <!-- end of cards-2 -->
    <!-- end of testimonials -->

    
    <!-- Map -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2900.496765327752!2d-5.877728584511536!3d43.36663597913217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd368d88e5220c4b%3A0x1c4b5bb6688035b7!2sPet%20Shower%20Autolavado%20de%20Mascotas!5e0!3m2!1ses!2ses!4v1653997697842!5m2!1ses!2ses"
                        width="90%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of map -->

    
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h5>Sobre Pet Shower</h5>
                        <p class="p-small">Pet Shower es un autolavado de mascotas situado en Oviedo. Encontrarás todo
                            lo esencial para el aseo de tu mascota.</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h5>Contacto</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">Calle Pravia 1, bajo 2.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a href="mailto:contacto@petshower.es">contacto@petshower.es</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-phone-alt"></i>
                                <div class="media-body"><a href="tel:+34662095619">+34 662 095 619</a></div>
                            </li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <h5>Páginas útiles</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="#">Nuestros terminos y condiciones</a></li>
                            <li><a href="#">Nuestra politica de privacidad</a></li>
                            <li><a href="https://g.page/r/Cbc1gGi2W0scEAE">Visita nuestro perfil de Google</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->

                    <div class="footer-col fifth">
                        <span class="fa-stack">
                            <a target="_blank" href="https://www.instagram.com/pet_shower_spain/?hl=es">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a target="_blank" href="https://es-es.facebook.com/pages/category/Pet-Service/Pet-Shower-Spain-101256511342718/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a target="_blank" href="https://g.page/r/Cbc1gGi2W0scEAE">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="tel:+34662095619">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-phone-alt fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2022 <a href="https://petshower.es">Pet Shower</a> - Todos los
                        derechos reservados</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="{{asset('landing/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('landing/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('landing/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('landing/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('landing/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('landing/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('landing/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('landing/js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>

</html>