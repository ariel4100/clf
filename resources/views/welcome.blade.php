<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title',env('APP_NAME'))</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('uploads/image/favicon.png') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
        <!-- Styles -->

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>

        <style>
            .oswald{
                font-family: 'Oswald', sans-serif;
            }
            .line-h{
                line-height: 1.8em;
            }
            .color-clf{
                color: #AE9A64;
            }
            .fz-18{
                font-size: 18px;
            }
        </style>
    </head>
    <body class="fixed-sn homepage-v3" style="font-family: 'Raleway', sans-serif;">


    <!-- Navigation -->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">

            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('uploads/logo/clf-logo.png') }}" alt="" class="img-fluid" width="150px">
                </a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="https://forms.gle/ak2bbcc1QjaYjBj59" target="_blank" class="btn-outline-dark px-4 nav-link rounded-pill">REGISTRARSE</a>
                        </li>


                    </ul>
                    <ul class="list-unstyled list-inline text-center mb-0">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/CLFArgentina/" target="_blank" class="btn-floating btn-fb mx-1">
                                <i class="fab fa-facebook-f"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/clf_argentina" target="_blank" class="btn-floating btn-tw mx-1">
                                <i class="fab fa-twitter"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/clf_argentina/" target="_blank"class="btn-floating mx-1" style="background-color: #c32aa3">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                    </ul>
                    <!-- Search form -->
                    {{--                <form class="form-inline">--}}
                    {{--                    <div class="md-form my-0">--}}
                    {{--                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
                    {{--                    </div>--}}
                    {{--                </form>--}}
                </div>
                <!-- Collapsible content -->

            </div>

        </nav>
        <!--/.Navbar-->

    </header>
    <!--/ Navigation -->

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item   active">
                <div class="view h-100 d-flex justify-content-center ">
                    <img class="img-fluid" src="{{ asset('uploads/slider/01.webp') }}" alt="First slide">
{{--                    <div class="mask rgba-black-light ">--}}
{{--                        <!-- Caption -->--}}
{{--                        <div class="full-bg-img flex-center white-text d-none">--}}
{{--                            <ul class="animated fadeIn col-10 list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <h1 class="h1-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <p>Tempora incidunt ut labore et dolore veritatis et quasi architecto beatae</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a target="_blank" href="{{ asset('uploads/slider/01.webp') }}" class="btn btn-info"--}}
{{--                                       rel="nofollow">See more!</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!-- /.Caption -->--}}
{{--                    </div>--}}
                </div>
            </div>

        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->




    <div class="container mt-5 wow fadeIn" data-wow-delay="0.2s">
        <h1 class="font-weight-bolt oswald text-center mb-5">¿ESTÁ LISTO PARA SU RETORNO?</h1>
        <div class="row">
            <div class="col-md-6 fz-18">
                <p class="line-h">
                    Creemos que Dios ha permanecido igual a lo largo de los desafíos, tribulaciones y dificultades que hemos enfrentado este año y todavía está expresando claramente su eterna voluntad a través de la Biblia. A pesar de la tristeza y el dolor, Dios sigue diciéndonos que “He aquí os digo: Alzad vuestros ojos y mirad los campos, porque ya están blancos para la siega”.(San Juan 4:35). Muchos pastores de todo el mundo han tenido un mismo sentir. Saben que a través de las grandes tormentas y dificultades se encuentra la oportunidad de llevar más almas al único salvador, Jesucristo. Sin embargo, se encuentran haciendo preguntas:
                </p>
            </div>
            <div class="col-md-6 fz-18">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/tudoJ7IjrpI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-12 fz-18 mt-4">
                <p class="line-h">
                    "¿Seremos capaces de volver de esto?”,"¿Cómo podemos llegar a más almas que están desesperadas?", y "Nuestra iglesia necesita más líderes y trabajadores que se levanten en estos tiempos difíciles, pero ¿cómo sucederá esto?"

                </p>

                <br>
                <p class="line-h">
                    Ahí es donde el CLF da un paso. A través de la Fraternidad que compartiremos en nuestras conferencias y reuniones mundiales, creemos que Dios nos bendecirá con su sabiduría y su gracia para que prediquemos el evangelio de maneras más poderosas como nunca antes.

                </p>



                <br>
                <p class="line-h">
                    ¿Está listo para su retorno?
                </p>


            </div>
        </div>

    </div>




    <div class="view">
        <img src="{{ asset('uploads/image/conf.webp') }}" class="img-fluid" alt="">
        <div class="mask flex-center rgba-black-strong">
            <h1 class="text-white  display-4 d-md-block d-none font-weight-bolt pt-2 wow fadeIn"  data-wow-delay="0.2s"><strong>PARTICIPE A LA CONFERENCIA</strong></h1>
            <h1 class="text-white h4-responsive d-md-none d-block font-weight-bolt pt-2 wow fadeIn"  data-wow-delay="0.2s"><strong>PARTICIPE A LA CONFERENCIA</strong></h1>
        </div>
    </div>


    <div class="container my-5 wow fadeIn"  data-wow-delay="0.2s">
        <h1 class="oswald mb-0">ORADOR PRINCIPAL</h1>
        <h3 class="color-clf oswald">
            REV. OCK SOO PARK
        </h3>
        <div class="row mt-5 fz-18 wow fadeIn"  data-wow-delay="0.4s">
            <div class="col-md-3">
                <img src="{{ asset('uploads/image/pastor ocksoopark.webp') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-9 mt-4 mt-md-0 line-h">
                <ul>
                    <li>
                        Fundador de la Misión Buenas Nuevas: 760 iglesias activas en 80 países de los 6 continentes.
                    </li>
                    <li>
                        Pastor de Good News Gangnam Church
                    </li>
                    <li>
                        Fundador de la Fraternidad Internacional de Jóvenes: Educando y activando a la juventud en más de 80 países
                    </li>
                    <li>
                        Autor más vendido con 70 publicaciones del evangelio y el autodesarrollo que han transformado vidas
                    </li>
                    <li>
                        Innovador educativo pionero de la "educación del intelecto patenta para escuelas, empresas e iglesias."
                    </li>
                    <li>
                        Consejero espiritual de jefes de estado en América del Sur, África, Asia y el Pacífico Sur.
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <div class="container my-5 fz-18 py-5 wow fadeIn"  data-wow-delay="0.2s">
        <h1 class="oswald mb-0">ETERNA REDENCIÓN</h1>
        <h3 class="color-clf oswald">
            PASTOR JOSEPH PARK
        </h3>
        <div class="row mt-5 wow fadeIn"  data-wow-delay="0.4s">
            <div class="col-md-9 line-h">
                <p class="line-h">
                    Una explicación sistemática de cómo un alma se salva de la destrucción eterna a la vida eterna. Afirmar o reafirmar el evangelio del perdón de los pecados a través de un estudio bíblico profundo y sistemático ofrecido cada mañana.
                </p>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
                <img src="{{ asset('uploads/image/yosep.webp') }}" class="img-fluid" alt="">
            </div>
        </div>

    </div>

<div class="" style="background-color: #111111">
    <div class="container py-5 wow fadeIn text-white"  data-wow-delay="0.2s">
        <h1 class="oswald   my-5 text-center">COMUNIO GRUPAL</h1>
        <h6 class="line-h fz-18 text-center wow fadeIn"  data-wow-delay="0.2s">
            En un entorno de grupo, identificar las causas de los problemas que se producen en la vida de creencia y en los ministerios. Compartiendo sus luchas y lluvia de ideas para soluciones juntos con la ayuda de un experimentado moderador de CLF.
        </h6>
        <div class="row mt-5">
            <div class="col-md-4 mt-4 wow fadeInUp"  data-wow-delay="0.1s">
                <img src="{{ asset('uploads/image/clf-01.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 mt-4 wow fadeInUp"  data-wow-delay="0.2s">
                <img src="{{ asset('uploads/image/clf-02.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 mt-4 wow fadeInUp"  data-wow-delay="0.3s">
                <img src="{{ asset('uploads/image/clf-03.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</div>

    <div class="container mt-5 pt-4 wow fadeIn"  data-wow-delay="0.2s">
        <h1 class="oswald text-center">CLF GLOBAL</h1>

        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('uploads/image/map_clf.webp') }}" class="img-fluid" alt="">
            </div>
        </div>

    </div>



    <div class="container mt-5 wow fadeIn"  data-wow-delay="0.2s">
        <h1 class="oswald font-weight-bolt mb-5 text-center">TESTIMONIOS</h1>

        <div class="">
{{--            <div class="col-md-12">--}}
{{--                <img src="{{ asset('uploads/image/map_clf.webp') }}" class="img-fluid" alt="">--}}
{{--            </div>--}}
            <div class="row autoplay">
                @foreach([1,2,3,4,5,6,] as $item)
                <div class="col-md-4">
                    <img src="{{ asset("uploads/image/$item.webp") }}" class="img-fluid" alt="">
                </div>
                @endforeach
            </div>

        </div>

    </div>

    <!-- Footer -->
    <footer class="page-footer font-small pt-5 mt-5 wow fadeIn"  data-wow-delay="0.2s" style="background-color: #111111">

        <!-- Footer Elements -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">CLF ARGENTINA</h5>
                    <p>
                        Mediante la conferencia mundial del Congreso de Líderes Cristianos, usted será equipado de la palabra refrescándose espiritualmente y conectara profundamente con el corazón de Dios para traer un cambio poderoso a su ministerio.</p>

                </div>
                <div class="col-md-4">

                        <h5 class="text-uppercase font-weight-bold">CONTACTANOS</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Leopardi 47, Villa Luro, C.A.B.A</a>
                            </li>
                            <li>
                                <a href="#!">info@clfargentina.org</a>
                            </li>
                            <li>
                                <a href="#!">+54 11-5408-5660</a>
                            </li>
                            <li>
                                <a href="#!">+54 11-2637-6700</a>
                            </li>
                        </ul>

                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <!-- Social buttons -->
                    <ul class="list-unstyled list-inline text-center">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/CLFArgentina/" target="_blank" class="btn-floating btn-fb mx-1">
                                <i class="fab fa-facebook-f"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/clf_argentina" target="_blank" class="btn-floating btn-tw mx-1">
                                <i class="fab fa-twitter"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/clf_argentina/" target="_blank"class="btn-floating mx-1" style="background-color: #c32aa3">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>


            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Copyright © 2020 CLF Argentina, todos los derechos reservados.

        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- SCRIPTS -->
    <a href="https://wa.me/541122513262" target="_blank" class="btn p-0 rounded-pill  mb-3 d-flex justify-content-center align-items-center " style="z-index: 5; right: 10px; position: fixed; bottom: 0px; height: 50px; width: 50px; background-color: #25d366;">

        <i class="fab fa-whatsapp text-white fa-2x   "></i>
    </a>



    <!-- JQuery -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.js') }}"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>

        $('.autoplay').slick({
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $( document ).ready(function() {
            new WOW().init();
        });
    </script>

    </body>
</html>
