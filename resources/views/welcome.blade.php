<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from html.cwsthemes.com/aconte/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jun 2025 16:51:37 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
        <title>CONEIA 2025 Unamad</title>

        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/color.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        /* Estilos para el contenedor con video de fondo */
        .container-with-video {
            position: relative;
            overflow: hidden;
            min-height: 600px; /* Ajusta según necesites */
        }
        
        /* Video de fondo */
        .video-background {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translateX(-50%) translateY(-50%);
            z-index: -2;
            object-fit: cover;
        }
        
        /* Overlay oscuro para mejorar legibilidad */
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Ajusta la opacidad según necesites */
            z-index: -1;
        }
        
        /* Asegurar que el contenido esté sobre el video */
        .container {
            position: relative;
            z-index: 1;
        }
        
        /* Estilos adicionales para mejorar la visibilidad del texto */
        .about-me-info {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            padding: 30px;
            border-radius: 15px;
            color: #fff;
        }
        
        .about-me-info h2 {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        
        .about-me-info span, .about-me-info i {
            color: #fff;
        }
        
        .thm-clr {
            color: #ff6b6b !important; /* Ajusta el color según tu tema */
        }
        
        /* Estilos para el contador */
        .countdown-wrap {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 15px;
            margin-top: 30px;
        }
        
        .countdown li {
            background: rgba(255, 255, 255, 0.2);
            margin: 0 10px;
            padding: 20px;
            border-radius: 10px;
            min-width: 80px;
        }
        
        .countdown span {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            display: block;
        }
        
        .countdown p {
            color: #fff;
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        /* Botón estilizado */
        .thm-btn {
            background: #ff6b6b;
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: all 0.3s ease;
        }
        
        .thm-btn:hover {
            background: #ff5252;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }
        
        /* Animaciones para las formas */
        .rotate-anim {
            animation: rotate 10s linear infinite;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .container-with-video {
                min-height: 100vh;
            }
            
            .about-me-info {
                padding: 20px;
                margin-bottom: 20px;
            }
            
            .countdown span {
                font-size: 2rem;
            }
        }
    </style>

    <style>
/* Botón flotante de WhatsApp */
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 1000;
    transition: all 0.3s ease;
}

.whatsapp-float:hover {
    transform: scale(1.1);
    background-color: #22c15e;
}

.whatsapp-icon {
    margin-top: 15px;
}

/* Botón flotante de Registro */
.register-float {
    position: fixed;
    bottom: 40px;
    left: 40px;
    background-color: #ff6b6b;
    color: #FFF;
    padding: 15px 30px;
    border-radius: 50px;
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 2px 2px 3px #999;
    z-index: 1000;
    transition: all 0.3s ease;
    text-decoration: none;
}

.register-float:hover {
    transform: scale(1.05);
    background-color: #ff5252;
    color: #FFF;
    text-decoration: none;
}

/* Animación de entrada */
.float-button-animate {
    animation: slideInUp 0.5s ease-out;
}

@keyframes slideInUp {
    from {
        transform: translateY(100px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Responsive */
@media screen and (max-width: 767px) {
    .whatsapp-float {
        width: 50px;
        height: 50px;
        bottom: 20px;
        right: 20px;
        font-size: 25px;
    }
    
    .whatsapp-icon {
        margin-top: 12px;
    }
    
    .register-float {
        bottom: 20px;
        left: 20px;
        padding: 12px 20px;
        font-size: 14px;
    }
}
</style>
    </head>
    <body>
        <main>
            <header class="stick style3 w-100">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                        <div class="logo"><h1 class="mb-0"><a href="https://coneia-madre-de-dios-2025.unamad.edu.pe/" title="Inicio"><img class="img-fluid" style="height: 70px;" src="assets/images/logo3.png" alt="Logo" srcset="assets/logo/logoconeia.png"></a></h1></div><!-- Logo -->
                        <nav class="d-inline-flex align-items-center">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Inicio</a>
                                        <!-- <ul class="children mb-0 list-unstyled">
                                            <li><a href="index.html" title="">Homepage 1</a></li>
                                            <li><a href="index2.html" title="">Homepage 2</a></li>
                                            <li><a href="index3.html" title="">Homepage 3</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Presentacion</a>
                                        <ul class="children mb-0 list-unstyled">
                                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Conferencias y Ponencias</a>
                                                <ul class="children mb-0 list-unstyled">
                                                    <li><a href="#" title="">Conferencias Magistrales</a></li>
                                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Ponencias</a>
                                                        <ul class="children mb-0 list-unstyled">
                                                            <li><a href="#" title="">Resumen</a></li>
                                                            <li><a href="#" title="">Articulo para Publicacion</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li><a href="#" title="">Concurso de Proyectos de Investigacion</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="#comision-central" title="">Comision Central</a></li>
                                            <li><a href="#" title="">Programa</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#beneficios" title="">Beneficios</a>
                                        <!-- <ul class="children mb-0 list-unstyled">
                                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Shop</a>
                                                <ul class="children mb-0 list-unstyled">
                                                    <li><a href="products.html" title="">Products</a></li>
                                                    <li><a href="products-list.html" title="">Products List</a></li>
                                                    <li><a href="product-detail.html" title="">Product Detail</a></li>
                                                    <li><a href="cart.html" title="">Product Cart</a></li>
                                                    <li><a href="checkout.html" title="">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Inscripcion</a>
                                                <ul class="children mb-0 list-unstyled">
                                                    <li><a href="gallery.html" title="">Gallery</a></li>
                                                    <li><a href="portfolio.html" title="">Portfolio Style 1</a></li>
                                                    <li><a href="portfolio2.html" title="">Portfolio Style 2</a></li>
                                                    <li><a href="portfolio3.html" title="">Portfolio Style 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Ejes Tematicos</a>
                                                <ul class="children mb-0 list-unstyled">
                                                    <li><a href="our-speakers.html" title="">Our Speakers</a></li>
                                                    <li><a href="speaker-detail.html" title="">Speaker Detail</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="content-elements.html" title="">Registro de Trabajos</a></li>
                                            <li><a href="pricing-plans.html" title="">Pricing Plan 1</a></li>
                                            <li><a href="pricing-plans2.html" title="">Pricing Plan 2</a></li>
                                            <li><a href="404.html" title="">404 Error Page</a></li>
                                            <li><a href="faq.html" title="">FAQ'S Page</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="https://forms.gle/pRg15EwZvcDs8gpo8" title="">Inscripcion</a>
                                        <!-- <ul class="children mb-0 list-unstyled">
                                            <li><a href="blog.html" title="">Blog Style 1</a></li>
                                            <li><a href="blog2.html" title="">Blog Style 2</a></li>
                                            <li><a href="blog3.html" title="">Blog Style 3</a></li>
                                            <li><a href="blog-list.html" title="">Blog List</a></li>
                                            <li><a href="blog-detail.html" title="">Blog Detail</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="#ejes-tematicos" title="">Ejes Tematicos</a></li>
                                    <li><a href="#concursos" title="">Concursos</a></li>
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Madre de Dios</a>
                                        <ul class="children mb-0 list-unstyled">
                                            
                                            <li><a href="#" title="">Video</a></li>
                                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Servicios</a>
                                                <ul class="children mb-0 list-unstyled">
                                                    <li><a href="#" title="">Hoteleros</a></li>
                                                    
                                                    <li><a href="#" title="">Alimentacion</a></li>
                                                    
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-right-btns">
                                <a class="menu-btn2 rounded-circle" href="javascript:void(0);" title=""><i></i></a>
                            </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->
            <div class="menu-wrap">
                <span class="menu-close"><i class="fas fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Inicio</a>
                       
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Presentacion</a>
                        <!-- <ul class="children list-unstyled">
                            <li><a href="event-schedule.html" title="">Event Schedule 1</a></li>
                            <li><a href="event-schedule2.html" title="">Event Schedule 2</a></li>
                            <li><a href="events.html" title="">Events Style 1</a></li>
                            <li><a href="events2.html" title="">Events Style 2</a></li>
                            <li><a href="events-list.html" title="">Events List</a></li>
                            <li><a href="event-detail.html" title="">Event Detail</a></li>
                        </ul> -->
                    </li>
                    <li class="menu-item-has-children"><a href="#beneficios" title="">Beneficios</a>
                        <!-- <ul class="children list-unstyled">
                            <li><a href="blog.html" title="">Blog Style 1</a></li>
                            <li><a href="blog2.html" title="">Blog Style 2</a></li>
                            <li><a href="blog3.html" title="">Blog Style 3</a></li>
                            <li><a href="blog-list.html" title="">Blog List</a></li>
                            <li><a href="blog-detail.html" title="">Blog Detail</a></li>
                        </ul> -->
                    </li>
                    <li class="menu-item-has-children"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeIHVAF35m7G9iC1XbGd_jzSZ1RFH-FnfOQsxRvzL4DWyGb3w/viewform" title="">Inscripcion</a>
                        <!-- <ul class="children list-unstyled">
                            <li><a href="products.html" title="">Products</a></li>
                            <li><a href="products-list.html" title="">Products List</a></li>
                            <li><a href="product-detail.html" title="">Product Detail</a></li>
                            <li><a href="cart.html" title="">Product Cart</a></li>
                            <li><a href="checkout.html" title="">Checkout</a></li>
                        </ul> -->
                    </li>
                    <li class="menu-item-has-children"><a href="#ejes-tematicos" title="">Ejes Tematicos</a>
                        <!-- <ul class="children list-unstyled">
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Our Speakers</a>
                                <ul class="children mb-0 list-unstyled">
                                    <li><a href="our-speakers.html" title="">Our Speakers</a></li>
                                    <li><a href="speaker-detail.html" title="">Speaker Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="content-elements.html" title="">Content Elements</a></li>
                            <li><a href="pricing-plans.html" title="">Pricing Plan 1</a></li>
                            <li><a href="pricing-plans2.html" title="">Pricing Plan 2</a></li>
                            <li><a href="404.html" title="">404 Error Page</a></li>
                            <li><a href="faq.html" title="">FAQ'S Page</a></li>
                        </ul> -->
                    </li>
                    <li><a href="#concursos" title="">Concursos</a></li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Madre de Dios</a>
                        <!-- <ul class="children list-unstyled">
                            <li><a href="gallery.html" title="">Gallery</a></li>
                            <li><a href="portfolio.html" title="">Portfolio Style 1</a></li>
                            <li><a href="portfolio2.html" title="">Portfolio Style 2</a></li>
                            <li><a href="portfolio3.html" title="">Portfolio Style 3</a></li>
                        </ul> -->
                    </li>
                    <!-- <li><a href="about.html" title="">About</a></li>
                    <li><a href="contact.html" title="">Contact</a></li> -->
                </ul>
                <!-- <div class="social-links4 d-flex flex-wrap">
                    <a class="facebook" href="javascript:void(0);" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="pinterest" href="javascript:void(0);" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                    <a class="twitter" href="javascript:void(0);" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="vimeo" href="javascript:void(0);" title="Vimeo" target="_blank"><i class="fab fa-vimeo-v"></i></a>
                </div> -->
            </div><!-- Menu Wrap -->
            
            <section>
                <div class="w-100 position-relative">
                    <div class="about-me-wrap pt-140 position-relative w-100">
	                    <img class="img-fluid shp1 rotate-anim right revs position-absolute" src="assets/images/shp1.png" alt="Shap 1">
	                    <img class="img-fluid shp2 rotate-anim right position-absolute" src="assets/images/shp2.png" alt="Shap 2">
                    	 <div class="container-with-video">
        <!-- Video de fondo -->
        <video class="video-background" autoplay muted loop playsinline>
            <source src="assets/videos/video_portada.mp4" type="video/mp4">
            <!-- Puedes agregar más formatos para compatibilidad -->
            <source src="assets/videos/video_portada.webm" type="video/webm">
            Tu navegador no soporta el elemento de video.
        </video>
        
        <!-- Overlay para mejorar legibilidad -->
        <div class="video-overlay"></div>
        
        <!-- Tu contenido original -->
        <div class="container">
            <div class="about-me w-100">
                <div class="row justify-content-center align-items-end">
                    <div class="col-md-6 col-sm-12 col-lg-6 order-md-1">
                        <div class="about-me-img position-relative">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="about-me-info w-100">
                            <span class="thm-clr d-block">XXIV CONGRESO NACIONAL DE ESTUDIANTES DE INGENIERÍA AGROINDUSTRIAL</span>
                            <h2 class="mb-0">Universidad Nacional Amazónica de Madre de Dios – Puerto Maldonado - 2025.</h2>
                            <i>10 - 14 Noviemnbre 2025</i>
                            <span class="d-block" style="color: white;"><i class="fas fa-map-marker-alt" style="color: white;"></i><strong style="color: white;">Ubicacion:</strong> AV. Jorge Chávez N° 1160</span>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-12 col-lg-8 order-md-1">
                        <div class="countdown-wrap position-relative text-center w-100">
                            <ul class="countdown position-relative d-inline-flex justify-content-center mb-0 list-unstyled">
                                <li>
                                    <span class="days" style="color: black;">00</span>
                                    <p class="days_ref mb-0">Dias</p>
                                </li>
                                <li>
                                    <span class="hours" style="color: black;">00</span>
                                    <p class="hours_ref mb-0">Horas</p>
                                </li>
                                <li>
                                    <span class="minutes" style="color: black;">00</span>
                                    <p class="minutes_ref mb-0">Minutos</p>
                                </li>
                                <li>
                                    <span class="seconds" style="color: black;">00</span>
                                    <p class="seconds_ref mb-0">Segundos</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    </div><!-- About Me Wrap -->
                </div>
            </section>
             <section>
                <div class="w-100 pt-120 pb-120 position-relative">
                    <div class="container">
                        <div class="sec-title mb-70 w-100 text-center">
                            <div class="sec-title-inner d-inline-block">
                                <i class=""></i>
                                <span class="d-block thm-clr">Descripción general del evento</span>
                                <h2 class="mb-0">Experiencia del Congreso de   <br> Ingeniería Agroindustrial</h2>
                            </div>
                        </div><!-- Sec Title -->
                        <div class="about-wrap w-100">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                                    <div class="about-img w-100">
                                        <div class="about-img-caro">
                                            <div class="about-img-item"><img class="img-fluid w-100" src="assets/images/resources/about-img2.jpg" alt="About Image 2"></div>
                                            <div class="about-img-item"><img class="img-fluid w-100" src="assets/images/resources/about-img1.jpg" alt="About Image 1"></div>
                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-6">
                                    <div class="about-desc w-100">
                                        <p class="mb-0">Sé parte de este evento académico donde aprenderás cómo liderar la agroindustria y sus áreas afines, aprovechando las nuevas tecnologías, bajo el eje temático de La innovación como camino para ser el país de mayor agroindustria, Perú modelo de crecimiento para el mundo. Además, te inspirarás con los casos de éxito y conectarás con otros profesionales y colegas.</p>
                                        <div class="about-info-wrap w-100">
                                            <div class="row">
                                               
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="about-info w-100">
                                                        <i class="thm-clr far fa-calendar-alt"></i>
                                                        <div class="about-info-inner">
                                                            <span>Inicio</span>
                                                            <p class="mb-0">10 Noviembre al 14 de Noviembre</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="about-info w-100">
                                                        <i class="thm-clr flaticon-pin-1"></i>
                                                        <div class="about-info-inner">
                                                            <span>Unamad</span>
                                                            <p class="mb-0">AV. Jorge Chávez N° 1160</p>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div><!-- About Wrap -->
                    </div>
                </div>
            </section>
         
            <section id="beneficios">
                <div class="w-100 pt-100 pb-80 blue-layer opc7 position-relative">
                    <div class="fixed-bg back-blend-multiply bg-color4" style="background-image: url(assets/images/parallax.jpg);"></div>
                    <div class="container">
                        <div class="sec-title btm-icn mb-50 w-100 text-center">
                            <div class="sec-title-inner d-inline-block">
                                <span class="d-block thm-clr">Plan</span>
                                <h2 class="mb-0">Beneficios</h2>
                                <i class=""></i>
                            </div>
                        </div><!-- Sec Title -->
                        <div class="packages-wrap w-100">
                            <div class="row res-caro mrg60">
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="package-box text-center position-relative w-100">
                                        <div class="package-head w-100">
                                            <h5 class="mb-0">Beneficios Academicos</h5>
                                            <span class="d-block"><i class="thm-clr rounded-circle fas fa-graduation-cap"></i></span>
                                            <i class="flaticon-show"></i>
                                        </div>
                                        <div class="package-body w-100">
                                            <p class="mb-0">Participarás en concursos académicos, ganarás premios y asistirás a eventos
                                            académicos, científicos y empresariales.</p>
                                            <span class="d-block">UNAMAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="package-box text-center position-relative w-100">
                                        <div class="package-head w-100">
                                            <h5 class="mb-0">Beneficios Networking</h5>
                                            <span class="d-block"><i class="thm-clr rounded-circle fas fa-people-arrows"></i></span>
                                            <i class="flaticon-show"></i>
                                        </div>
                                        <div class="package-body w-100">
                                            <p class="mb-0">Asistirás a networking con gerentes y profesionales de la ingeniería
                                            agroindustrial del país.</p>
                                            <span class="d-block">UNAMAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="package-box text-center position-relative w-100">
                                        <div class="package-head w-100">
                                            <h5 class="mb-0">Beneficios Sociales</h5>
                                            <span class="d-block"><i class="thm-clr rounded-circle fas fa-hands-helping"></i></span>
                                            <i class="flaticon-show"></i>
                                        </div>
                                        <div class="package-body w-100">
                                            <p class="mb-0">Podrás ser parte de las actividades de recreación e interacción social.</p>
                                            <span class="d-block">UNAMAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="package-box text-center position-relative w-100">
                                        <div class="package-head w-100">
                                            <h5 class="mb-0">Beneficios de Comunidad</h5>
                                            <span class="d-block"><i class="thm-clr rounded-circle fas fa-city"></i></span>
                                            <i class="flaticon-show"></i>
                                        </div>
                                        <div class="package-body w-100">
                                            <p class="mb-0">Fortalecerás y formarás parte de la comunidad de ingenieros agroindustriales
                                            del Perú.</p>
                                            <span class="d-block">UNAMAD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Packages Wrap -->
                    </div>
                </div>
            </section>

            <section id="comision-central">
                <div class="w-100 pb-60 position-relative">
                    <div class="container-fluid">
                        <hr class="devider mb-100 w-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="content-wrap mb-40 w-100">
                                        <h2 class="mb-0">COMISIÓN CENTRAL</h2>
                                        <div class="toggle2 w-100 mt-45" id="toggle2">
                                            <div class="toggle-item2 w-100">
                                                <h4 class="mb-0"><i class="fas fa-plus"></i> Est. Manuel Luis López Curasi</h4>
                                                <div class="toggle-content2 w-100">
                                                    <p class="mb-0">Presidente Cel: +51 938200014</p>
                                                </div>
                                            </div>
                                            <div class="toggle-item2 w-100">
                                                <h4 class="mb-0"><i class="fas fa-plus"></i> Est. Lucho Huaycho Huanca</h4>
                                                <div class="toggle-content2 w-100">
                                                    <p class="mb-0">Vicepresidente Cel: +51 917110215.</p>
                                                </div>
                                            </div>
                                            <div class="toggle-item2 w-100">
                                                <h4 class="mb-0"><i class="fas fa-plus"></i> Est. Luis Francisco Salinas Surco</h4>
                                                <div class="toggle-content2 w-100" id="toggle-item3">
                                                    <p class="mb-0">Tesorero Cel: +51 982701343.</p>
                                                </div>
                                            </div>
                                            <div class="toggle-item2 w-100">
                                                <h4 class="mb-0"><i class="fas fa-plus"></i> Est. Lila Ruby Isuiza Perez</h4>
                                                <div class="toggle-content2 w-100">
                                                    <p class="mb-0">Secretaría general Cel: +51 951227867.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <section id="ejes-tematicos">
                <div class="w-100 pt-120 pb-120 gray-layer opc9 position-relative">
                    <div class="fixed-bg patern-bg" style="background-image: url(assets/images/patter-bg1.jpg);"></div>
                    <div class="container">
                        <div class="speakers-wrap w-100">
                            <div class="row align-items-center">
                                <div class="col-md-12 col-sm-12 col-lg-4">
                                    <div class="speackers-desc w-100">
                                        <div class="sec-title mb-50 w-100">
                                            <div class="sec-title-inner pt-0 d-inline-block">
                                                <span class="d-block thm-clr">Ejes Destacados</span>
                                                <h3 class="mb-0">EJES  <br> TEMATICAS</h3>
                                            </div>
                                        </div><!-- Sec Title -->
                                        <p class="mb-0">Los ejes temáticos del Congreso de Ingeniería Agroindustrial abordan los principales desafíos, avances y oportunidades del sector agroindustrial, promoviendo la innovación, la sostenibilidad y el desarrollo tecnológico.</p>
                                        <a href="javascript:void(0);" title=""> Ejes Temáticos del Congreso de <br> Ingeniería Agroindustrial 2025 <i class="flaticon-trajectory"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-8">
                                    <div class="speaker-inner w-100">
                                        <div class="row mrg2">
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <div class="speaker-box position-relative w-100 overflow-hidden">
                                                    <img class="img-fluid w-100" src="assets/images/ejes/eje1.jpg" alt="Speaker Image 1">
                                                    <div class="speaker-info position-absolute">
                                                        <h3 class="mb-0 text-white" style="font-size: 1rem; line-height: 1.2;">
                                                            <a href="speaker-detail.html">Eje 1: </br>  Ingeniera e innovación en procesos alimentarios</a></h3>
                                                        <span class="d-block">UNAMAD</span>
                                                    </div>
                                                    <h3 class="mb-0 text-white position-absolute">Eje 1</h3>
                                                   
                                                    <!-- <a class="position-absolute" href="speaker-detail.html" title=""><i class="fas fa-expand-alt"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <div class="speaker-box position-relative w-100 overflow-hidden">
                                                    <img class="img-fluid w-100" src="assets/images/ejes/eje2.jpg" alt="Speaker Image 2">
                                                    <div class="speaker-info position-absolute">
                                                        <h3 class="mb-0 text-white" style="font-size: 1rem; line-height: 1.2;">
                                                            <a href="speaker-detail.html">Eje 2:</br>Biotecnología y aprovechamientos de subproductos </a></h3>
                                                        <span class="d-block">UNAMAD</span>
                                                    </div>
                                                    <h3 class="mb-0 text-white position-absolute">Eje 2</h3>
                                                   
                                                    <!-- <a class="position-absolute" href="speaker-detail.html" title=""><i class="fas fa-expand-alt"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <div class="speaker-box position-relative w-100 overflow-hidden">
                                                    <img class="img-fluid w-100" src="assets/images/ejes/eje3.jpg" alt="Speaker Image 2" style="height: 250px; object-fit: cover;">
                                                    <div class="speaker-info position-absolute">
                                                        <h3 class="mb-0 text-white" style="font-size: 1rem; line-height: 1.2;">
                                                            <a href="speaker-detail.html">Eje 3:</br>Productos funcionales y valor agregado </a></h3>
                                                        <span class="d-block">UNAMAD</span>
                                                    </div>
                                                    <h3 class="mb-0 text-white position-absolute">Eje 3</h3>
                                                   
                                                    <!-- <a class="position-absolute" href="speaker-detail.html" title=""><i class="fas fa-expand-alt"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <div class="speaker-box position-relative w-100 overflow-hidden">
                                                    <img class="img-fluid w-100" src="assets/images/ejes/eje4.jpg" alt="Speaker Image 2" style="height: 250px; object-fit: cover;">
                                                    <div class="speaker-info position-absolute">
                                                        <h3 class="mb-0 text-white" style="font-size: 1rem; line-height: 1.2;">
                                                            <a href="speaker-detail.html">Eje 4:</br> Seguridad alimentaria, postcosecha e inocuidad de la cadena alimentaria</a>
                                                        </h3>
                                                        <span class="d-block">UNAMAD</span>
                                                    </div>
                                                    <h3 class="mb-0 text-white position-absolute">Eje 4</h3>
                                                    <!-- <a class="position-absolute" href="speaker-detail.html" title=""><i class="fas fa-expand-alt"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <div class="speaker-box position-relative w-100 overflow-hidden">
                                                    <img class="img-fluid w-100" src="assets/images/ejes/eje5.jpeg" alt="Speaker Image 2">
                                                    <div class="speaker-info position-absolute">
                                                        <h3 class="mb-0 text-white" style="font-size: 1rem; line-height: 1.2;">
                                                            <a href="speaker-detail.html">Eje 5:</br>Biocombustible y energía </a></h3>
                                                        <span class="d-block">UNAMAD</span>
                                                    </div>
                                                    <h3 class="mb-0 text-white position-absolute">Eje 5</h3>
                                                   
                                                    <!-- <a class="position-absolute" href="speaker-detail.html" title=""><i class="fas fa-expand-alt"></i></a> -->
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Speakers Wrap -->
                    </div>
                </div>
            </section>
          
            <section id="concursos">
                <div class="w-100 pt-120 pb-120 position-relative">
                    <div class="container">
                        <div class="sec-title mb-70 w-100 text-center">
                            <div class="sec-title-inner d-inline-block">
                                <span class="d-block thm-clr">Participa y Gana</span>
                                <h2 class="mb-0">Concursos del XXIV CONEIA 2025</h2>
                                <i class=""></i>
                            </div>
                        </div><!-- Sec Title -->
                        
                        <div class="concursos-wrap w-100">
                            <div class="row">
                                <!-- Concurso de Danzas -->
                                <div class="col-md-6 col-sm-12 col-lg-4">
                                    <div class="event-box w-100 position-relative overflow-hidden" style="border: 2px solid #e0e0e0; border-radius: 15px; padding: 20px;">
                                        <div class="event-date-header text-center mb-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px; border-radius: 10px;">
                                            <h4 class="mb-0">11 de Noviembre</h4>
                                            <span>Martes - 2025</span>
                                        </div>
                                        <div class="event-info w-100">
                                            <h3 class="mb-3 text-center"><a href="#" title="">Concurso de Danzas y Expresiones Artísticas</a></h3>
                                            <ul class="event-meta mb-3 list-unstyled">
                                                <li><i class="far fa-clock thm-clr"></i> <strong>Horario:</strong> Por definir</li>
                                                <li><i class="fas fa-map-marker-alt thm-clr"></i> <strong>Lugar:</strong> Polideportivo "Hugo Martínez Calderón"</li>
                                                <li><i class="fas fa-map-pin thm-clr"></i> <strong>Dirección:</strong> Av. Jorge Chávez N°1160</li>
                                            </ul>
                                            <p class="mb-3">Espacio dedicado a celebrar la creatividad, el talento y la diversidad cultural de nuestro país a través de la comunidad estudiantil.</p>
                                            
                                            <div class="event-details mt-3">
                                                <h5 class="mb-2" style="color: #667eea;">📋 Inscripciones:</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li><i class="fas fa-calendar-alt thm-clr"></i> <strong>Período:</strong> Del 1 de julio al 31 de octubre del 2025</li>
                                                    <li><i class="fas fa-money-bill-wave thm-clr"></i> <strong>Costo:</strong> S/. 50 por grupo</li>
                                                    <li><i class="fas fa-users thm-clr"></i> <strong>Participación:</strong> De 6 a 12 parejas (mínimo y máximo)</li>
                                                    <li><i class="fas fa-clock thm-clr"></i> <strong>Duración máxima:</strong> 7 minutos en escena</li>
                                                    <li><i class="fas fa-university thm-clr"></i> <strong>Límite:</strong> Máximo 1 equipo por universidad</li>
                                                </ul>
                                                
                                                <h5 class="mb-2" style="color: #667eea;">💳 Cuenta para pagos:</h5>
                                                <div style="background: #f8f9fa; padding: 10px; border-radius: 8px; margin-bottom: 15px;">
                                                    <p class="mb-1"><strong>BCP:</strong></p>
                                                    <p class="mb-1">Salinas Luis -o- López Manuel</p>
                                                    <p class="mb-1">N° de cuenta: 485-07374631-0-90</p>
                                                    <p class="mb-0">Yape: +51 982701343</p>
                                                </div>
                                                
                                                <h5 class="mb-2" style="color: #667eea;">🏆 Premios:</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li><i class="fas fa-trophy" style="color: gold;"></i> <strong>1er lugar:</strong> S/. 400 + souvenirs</li>
                                                    <li><i class="fas fa-medal" style="color: silver;"></i> <strong>2do lugar:</strong> S/. 250 + souvenirs</li>
                                                    <li><i class="fas fa-medal" style="color: #cd7f32;"></i> <strong>3er lugar:</strong> S/. 150</li>
                                                </ul>
                                                
                                                <h5 class="mb-2" style="color: #667eea;">📊 Criterios de Evaluación:</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li>• Puntualidad (10 pts)</li>
                                                    <li>• Presentación (15 pts)</li>
                                                    <li>• Representación Cultural (15 pts)</li>
                                                    <li>• Creatividad y Originalidad (15 pts)</li>
                                                    <li>• Técnica y Ejecución (15 pts)</li>
                                                    <li>• Coherencia y Puesta en Escena (15 pts)</li>
                                                    <li>• Expresión y Proyección (15 pts)</li>
                                                </ul>
                                                
                                                <a class="thm-btn d-inline-block w-100 text-center" href="bases_concurso/BASES DEL CONCURSO DE DANZAS Y EXPRESIONES ARTISTICAS_XXIV CONEIA 2025 MADRE DE DIOS.pdf" download>
                                                    <i class="fas fa-download"></i> Descargar Bases Completas
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Concurso Miss y Mister -->
                                <div class="col-md-6 col-sm-12 col-lg-4">
                                    <div class="event-box w-100 position-relative overflow-hidden" style="border: 2px solid #e0e0e0; border-radius: 15px; padding: 20px;">
                                        <div class="event-date-header text-center mb-3" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; padding: 15px; border-radius: 10px;">
                                            <h4 class="mb-0">13 de Noviembre</h4>
                                            <span>Jueves - 2025</span>
                                        </div>
                                        <div class="event-info w-100">
                                            <h3 class="mb-3 text-center"><a href="#" title="">Concurso Miss y Mister XXIV CONEIA 2025</a></h3>
                                            <ul class="event-meta mb-3 list-unstyled">
                                                <li><i class="far fa-clock thm-clr"></i> <strong>Horario:</strong> 7:00 PM</li>
                                                <li><i class="fas fa-map-marker-alt thm-clr"></i> <strong>Lugar:</strong> Centro de Eventos TEOKAS</li>
                                            </ul>
                                            <p class="mb-3">Busca destacar la belleza, el carisma, la inteligencia y el compromiso cultural de los estudiantes universitarios.</p>
                                            
                                            <div class="event-details mt-3">
                                                <h5 class="mb-2" style="color: #f093fb;">📋 Inscripciones:</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li><i class="fas fa-calendar-alt thm-clr"></i> <strong>Período:</strong> Del 26 de julio al 10 de noviembre del 2025 (4:00 PM)</li>
                                                    <li><i class="fas fa-money-bill-wave thm-clr"></i> <strong>Costo:</strong> S/. 60 por pareja</li>
                                                    <li><i class="fas fa-users thm-clr"></i> <strong>Participación:</strong> 1 pareja por universidad (dama y caballero)</li>
                                                    <li><i class="fas fa-envelope thm-clr"></i> <strong>Email:</strong> hapazac211ia@unamad.edu.pe</li>
                                                </ul>
                                                
                                                <h5 class="mb-2" style="color: #f093fb;">💳 Cuenta para pagos:</h5>
                                                <div style="background: #f8f9fa; padding: 10px; border-radius: 8px; margin-bottom: 15px;">
                                                    <p class="mb-1"><strong>Yape:</strong></p>
                                                    <p class="mb-1">Hanay Leidy Apaza Chivigorre</p>
                                                    <p class="mb-0">Número: +51 993 012 083</p>
                                                </div>
                                                
                                                <h5 class="mb-2" style="color: #f093fb;">👗 Desarrollo del Certamen:</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li>• Desfile en ropa sport (casual)</li>
                                                    <li>• Desfile con traje típico de su región</li>
                                                    <li>• Show de talentos (máx. 5 min)</li>
                                                    <li>• Desfile con ropa de gala</li>
                                                    <li>• Pregunta individual</li>
                                                </ul>
                                                
                                                <h5 class="mb-2" style="color: #f093fb;">🏆 Premios:</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li><strong>MISS XXIV CONEIA 2025:</strong></li>
                                                    <li>• Corona + Banda + Premio sorpresa + Ramo de flores</li>
                                                    <li><strong>MR XXIV CONEIA 2025:</strong></li>
                                                    <li>• Banda + Premio sorpresa</li>
                                                    <li><strong>Segundo puesto:</strong> Premio sorpresa</li>
                                                </ul>
                                                
                                                <a class="thm-btn d-inline-block w-100 text-center" href="bases_concurso/BASES_DEL_CONCURSO_MISS_Y_MISTER_XXIV_CONEIA_2025.pdf" download>
                                                    <i class="fas fa-download"></i> Descargar Bases Completas
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Copa Inter-Universidades -->
                                <div class="col-md-6 col-sm-12 col-lg-4">
                                    <div class="event-box w-100 position-relative overflow-hidden" style="border: 2px solid #e0e0e0; border-radius: 15px; padding: 20px;">
                                        <div class="event-date-header text-center mb-3" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; padding: 15px; border-radius: 10px;">
                                            <h4 class="mb-0">12 de Noviembre</h4>
                                            <span>Miércoles - 2025</span>
                                        </div>
                                        <div class="event-info w-100">
                                            <h3 class="mb-3 text-center"><a href="#" title="">Copa Inter-Universidades 2025</a></h3>
                                            <ul class="event-meta mb-3 list-unstyled">
                                                <li><i class="far fa-clock thm-clr"></i> <strong>Horario:</strong> 8:00 AM</li>
                                                <li><i class="fas fa-map-marker-alt thm-clr"></i> <strong>Lugar:</strong> Polideportivo de la UNAMAD</li>
                                            </ul>
                                            <p class="mb-3">Campeonato deportivo que fomenta el espíritu deportivo y la integración estudiantil entre universidades participantes.</p>
                                            
                                            <div class="event-details mt-3">
                                                <h5 class="mb-2" style="color: #4facfe;">📋 Inscripciones:</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li><i class="fas fa-calendar-alt thm-clr"></i> <strong>Período:</strong> Del 25 de agosto al 31 de octubre del 2025</li>
                                                    <li><i class="fas fa-money-bill-wave thm-clr"></i> <strong>Costos por disciplina:</strong></li>
                                                    <li class="ml-3">• Fulbito (varones y mujeres): S/. 120</li>
                                                    <li class="ml-3">• Vóley (varones y mujeres): S/. 120</li>
                                                    <li><i class="fas fa-info-circle thm-clr"></i> <strong>Nota:</strong> Enviar boucher con nombre de la universidad</li>
                                                </ul>
                                                
                                                <h5 class="mb-2" style="color: #4facfe;">💳 Cuentas para pagos:</h5>
                                                <div style="background: #f8f9fa; padding: 10px; border-radius: 8px; margin-bottom: 15px;">
                                                    <p class="mb-1"><strong>Yape:</strong> 962 203 183</p>
                                                    <p class="mb-1">Edgard Alexis Marca Ramos</p>
                                                    <p class="mb-1"><strong>Banco de la Nación:</strong></p>
                                                    <p class="mb-1">Cuenta: 04-167-045737</p>
                                                    <p class="mb-0">Edgard Alexis Marca Ramos</p>
                                                </div>
                                                
                                                <h5 class="mb-2" style="color: #4facfe;">📱 Contacto para envío de boucher:</h5>
                                                <div style="background: #f8f9fa; padding: 10px; border-radius: 8px; margin-bottom: 15px;">
                                                    <p class="mb-0"><i class="fab fa-whatsapp" style="color: #25d366;"></i> WhatsApp: 931 559 655</p>
                                                </div>
                                                
                                                <h5 class="mb-2" style="color: #4facfe;">⚽ Disciplinas Deportivas:</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li><i class="fas fa-futbol thm-clr"></i> <strong>Fulbito:</strong> Varones y Mujeres</li>
                                                    <li><i class="fas fa-volleyball-ball thm-clr"></i> <strong>Vóley:</strong> Varones y Mujeres</li>
                                                </ul>
                                                
                                                <h5 class="mb-2" style="color: #4facfe;">📌 Importante:</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li>• Fecha límite: 31 de octubre 2025</li>
                                                    <li>• Enviar boucher por cada disciplina</li>
                                                    <li>• Indicar nombre de la universidad inscrita</li>
                                                </ul>
                                                
                                                <a class="thm-btn d-inline-block w-100 text-center" href="bases_concurso/BASES COPA INTER-UNIVERSIDADES 2025 ACTUALIZADA.docx" download>
                                                    <i class="fas fa-download"></i> Descargar Bases Completas
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Información adicional -->
                            <div class="row mt-5">
                                <div class="col-12 text-center">
                                    <div class="concurso-info-box p-4" style="background: rgba(255, 107, 107, 0.1); border-radius: 15px;">
                                        <h3 class="thm-clr mb-3">¡Inscríbete y Participa!</h3>
                                        <p class="mb-3">Todos los concursos están abiertos para estudiantes de Ingeniería Agroindustrial de las universidades participantes.</p>
                                        <p class="mb-0"><strong>Para más información contactar:</strong></p>
                                        <ul class="list-unstyled mt-2">
                                            <li><i class="fas fa-phone thm-clr"></i> Cel: +51 938200014 (Presidente)</li>
                                            <li><i class="fas fa-envelope thm-clr"></i> Email: coneia2025@unamad.edu.pe</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Concursos Wrap -->
                    </div>
                </div>
            </section>
            
            <section>
                <div class="w-100 position-relative">
                    <div class="contact-map-wrap w-100">
                    	<h2 class="mb-0 text-center"><span class="thm-clr">📍 Ubicación del Evento: </span> Consulta el mapa interactivo para llegar  <br> fácilmente a la sede del Congreso de Ingeniería Agroindustrial.</h2>
                    	<div class="contact-map-inner gray-layer opc97 position-relative w-100">
                			<div class="fixed-bg" style="background-image: url(assets/images/parallax6.jpg);"></div>
                    		<div class="row mrg align-items-center">
	                    		<div class="col-md-12 col-sm-12 col-lg-12">
	                    			<div class="contact-map w-100" id="contact-map">
                                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.3931745573507!2d-69.21171648590169!3d-12.588565811287903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917b49441850fe49%3A0x2881b0658744e313!2sUniversidad%20Nacional%20Amaz%C3%B3nica%20de%20Madre%20de%20Dios!5e0!3m2!1ses!2spe!4v1702500000000!5m2!1ses!2spe" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                                    </div>
	                    		</div>
	                    		
	                    	</div>
                    	</div>
                    </div><!-- Contact With Map -->
                </div>
            </section>
        
            <div class="bottom-bar w-100">
            	<div class="container">
            		<div class="bottom-bar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
            			<p class="mb-0"><a href="https://coneia-madre-de-dios-2025.unamad.edu.pe/" title="">UNAMAD</a> - Universidad Nacional Amazonica de Madre de Dios </p>
	            		
            		</div>
            	</div>
            </div><!-- Bottom Bar -->
        </main><!-- Main Wrapper -->
        <!-- Botón flotante de WhatsApp -->
        <a href="https://wa.me/51938200014"
        class="whatsapp-float float-button-animate" 
        target="_blank"
        title="Contáctanos por WhatsApp">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>

        <!-- Botón flotante de Registro -->
        <a href="https://forms.gle/pRg15EwZvcDs8gpo8 " 
        class="register-float float-button-animate"
        title="Regístrate ahora">
            <i class="fas fa-user-plus"></i> Regístrate
        </a>
        
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/jquery.downCount.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/perfect-scrollbar.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/custom-scripts.js"></script>
        <!-- Script para el contador (ejemplo básico) -->
        <script>
            // Fecha de inicio del evento: 10 de noviembre de 2025 a las 9:00 AM
            const countdownDate = new Date("2025-11-10T09:00:00").getTime();
            
            // Fecha de fin del evento (opcional, para mostrar duración)
            const eventEndDate = new Date("2025-11-14T18:00:00").getTime();

            const updateCountdown = () => {
                const now = new Date().getTime();
                const distance = countdownDate - now;

                if (distance > 0) {
                    // El evento aún no ha comenzado
                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Actualizar los elementos del contador
                    const daysElement = document.querySelector('.days');
                    const hoursElement = document.querySelector('.hours');
                    const minutesElement = document.querySelector('.minutes');
                    const secondsElement = document.querySelector('.seconds');

                    if (daysElement) daysElement.textContent = days.toString().padStart(2, '0');
                    if (hoursElement) hoursElement.textContent = hours.toString().padStart(2, '0');
                    if (minutesElement) minutesElement.textContent = minutes.toString().padStart(2, '0');
                    if (secondsElement) secondsElement.textContent = seconds.toString().padStart(2, '0');
                } else if (now < eventEndDate) {
                    // El evento está en curso
                    const countdownElement = document.querySelector('.countdown');
                    if (countdownElement) {
                        countdownElement.innerHTML = `
                            <h3 class="text-success">¡El evento está en curso!</h3>
                            <p>Del 10 al 14 de noviembre de 2025</p>
                        `;
                    }
                    clearInterval(countdownInterval);
                } else {
                    // El evento ha terminado
                    const countdownElement = document.querySelector('.countdown');
                    if (countdownElement) {
                        countdownElement.innerHTML = '<h3>¡El evento ha finalizado!</h3>';
                    }
                    clearInterval(countdownInterval);
                }
            };

            // Ejecutar el contador cuando el DOM esté listo
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', () => {
                    updateCountdown(); // Llamada inicial
                    const countdownInterval = setInterval(updateCountdown, 1000);
                });
            } else {
                updateCountdown(); // Llamada inicial
                const countdownInterval = setInterval(updateCountdown, 1000);
            }
        </script>
        <script>
        // Mostrar botones después de hacer scroll
        window.addEventListener('scroll', function() {
            const whatsappBtn = document.querySelector('.whatsapp-float');
            const registerBtn = document.querySelector('.register-float');
            
            if (window.scrollY > 100) {
                whatsappBtn.style.display = 'block';
                registerBtn.style.display = 'block';
            } else {
                // Opcional: ocultar cuando esté en la parte superior
                // whatsappBtn.style.display = 'none';
                // registerBtn.style.display = 'none';
            }
        });
        </script>
    </body>	

<!-- Mirrored from html.cwsthemes.com/aconte/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jun 2025 16:51:42 GMT -->
</html>