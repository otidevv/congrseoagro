@extends('layouts.app')

@section('title', 'CONEIA 2025 Unamad')

@section('styles')
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
        z-index: 0;
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
        z-index: 1;
    }
    
    /* Asegurar que el contenido esté sobre el video */
    .container-with-video .container {
        position: relative;
        z-index: 2;
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

    /* Clase personalizada para expandir el logo-menu-wrap */
    .logo-menu-wrap-expanded {
        width: 100vw !important;
        max-width: 100vw !important;
        margin-left: calc(-50vw + 50%) !important;
        margin-right: calc(-50vw + 50%) !important;
        padding-left: 2rem !important;
        padding-right: 2rem !important;
    }
</style>
@endsection

@section('content')
<section>
    <div class="w-100 position-relative">
        <div class="about-me-wrap pt-140 position-relative w-100">
            <div class="container-with-video">
                <!-- Video de fondo -->
                <video class="video-background" autoplay muted loop playsinline>
                    <source src="{{ asset('assets/videos/video_portada.mp4') }}" type="video/mp4">
                    <!-- Puedes agregar más formatos para compatibilidad -->
                    <source src="{{ asset('assets/videos/video_portada.webm') }}" type="video/webm">
                    Tu navegador no soporta el elemento de video.
                </video>
                
                <!-- Overlay para mejorar legibilidad -->
                <div class="video-overlay"></div>
                
                <!-- Tu contenido original -->
                <div class="container">
                    <img class="img-fluid shp1 rotate-anim right revs position-absolute" src="{{ asset('assets/images/shp1.png') }}" alt="Shap 1" style="z-index: 3;">
                    <img class="img-fluid shp2 rotate-anim right position-absolute" src="{{ asset('assets/images/shp2.png') }}" alt="Shap 2" style="z-index: 3;">
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
                                    <i>10 - 14 Noviembre 2025</i>
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

<!--
<section id="envio-documentos">
    <div class="w-100 pt-100 pb-100 position-relative" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="document-info text-white">
                        <h2 class="mb-4 text-white">📄 Envío de Documentos y Trabajos</h2>
                        <p class="mb-4 text-white" style="font-size: 18px; color: white !important;">
                            Para participar en las ponencias, proyectos de investigación y demás actividades académicas del XXIV CONEIA 2025, 
                            envía tus documentos y trabajos al correo oficial del evento.
                        </p>
                        <div class="document-requirements p-4 mb-4" style="background: rgba(255,255,255,0.1); border-radius: 15px;">
                            <h4 class="text-white mb-3">Documentos requeridos:</h4>
                            <ul class="list-unstyled text-white">
                                <li class="mb-2 text-white" style="color: white !important;"><i class="fas fa-check-circle" style="color: white;"></i> Resúmenes de ponencias (formato PDF)</li>
                                <li class="mb-2 text-white" style="color: white !important;"><i class="fas fa-check-circle" style="color: white;"></i> Artículos para publicación</li>
                                <li class="mb-2 text-white" style="color: white !important;"><i class="fas fa-check-circle" style="color: white;"></i> Proyectos de investigación</li>
                                <li class="mb-2 text-white" style="color: white !important;"><i class="fas fa-check-circle" style="color: white;"></i> Constancia de matrícula</li>
                                <li class="mb-2 text-white" style="color: white !important;"><i class="fas fa-check-circle" style="color: white;"></i> Documento de identidad (DNI)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="email-box text-center p-5" style="background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="email-icon mb-4">
                            <i class="fas fa-envelope" style="font-size: 60px; color: #667eea;"></i>
                        </div>
                        <h3 class="mb-3" style="color: #333;">Envía tus documentos a:</h3>
                        <div class="email-address p-3 mb-4" style="background: #f8f9fa; border-radius: 10px; border: 2px dashed #667eea;">
                            <h4 style="color: #667eea; margin: 0;">
                                <i class="fas fa-paper-plane"></i> cursos_iag@unamad.edu.pe
                            </h4>
                        </div>
                        <div class="instructions">
                            <h5 class="mb-3">Formato del asunto del correo:</h5>
                            <p class="mb-2"><strong>Para ponencias:</strong> PONENCIA_NOMBRE_UNIVERSIDAD</p>
                            <p class="mb-2"><strong>Para proyectos:</strong> PROYECTO_NOMBRE_UNIVERSIDAD</p>
                            <p class="mb-2"><strong>Para inscripciones:</strong> INSCRIPCION_NOMBRE_UNIVERSIDAD</p>
                        </div>
                        <div class="deadline-box mt-4 p-3" style="background: #fff3cd; border-radius: 10px;">
                            <p class="mb-0" style="color: #856404;">
                                <i class="fas fa-exclamation-triangle"></i> 
                                <strong>Fecha límite:</strong> Consulta las bases de cada concurso
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="additional-info text-center p-4" style="background: rgba(255,255,255,0.95); border-radius: 15px;">
                        <h4 class="mb-3">Importante:</h4>
                        <ul class="list-inline">
                            <li class="list-inline-item mx-3">
                                <i class="fas fa-file-pdf thm-clr"></i> Archivos en formato PDF
                            </li>
                            <li class="list-inline-item mx-3">
                                <i class="fas fa-weight thm-clr"></i> Tamaño máximo: 10MB
                            </li>
                            <li class="list-inline-item mx-3">
                                <i class="fas fa-language thm-clr"></i> Idioma: Español
                            </li>
                            <li class="list-inline-item mx-3">
                                <i class="fas fa-clock thm-clr"></i> Respuesta en 48 horas
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->

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
                                <div class="about-img-item"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/about-img2.jpg') }}" alt="About Image 2"></div>
                                <div class="about-img-item"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/about-img1.jpg') }}" alt="About Image 1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="about-desc w-100">
                            <p class="mb-0">Sé parte de este evento académico donde aprenderás cómo liderar la agroindustria y sus áreas afines, aprovechando las nuevas tecnologías, bajo el eje temático de La innovación como camino para ser el país de mayor agroindustria, Perú modelo de crecimiento para el mundo. Además, te inspirarás con los casos de éxito y conectarás con otros profesionales y colegas.</p>
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
        <div class="fixed-bg back-blend-multiply bg-color4" style="background-image: url({{ asset('assets/images/parallax.jpg') }});"></div>
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
        <div class="fixed-bg patern-bg" style="background-image: url({{ asset('assets/images/patter-bg1.jpg') }});"></div>
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
                                        <img class="img-fluid w-100" src="{{ asset('assets/images/ejes/eje1.jpg') }}" alt="Speaker Image 1">
                                        <div class="speaker-info position-absolute">
                                            <h3 class="mb-0 text-white" style="font-size: 1rem; line-height: 1.2;">
                                                <a href="speaker-detail.html">Eje 1: </br>  Ingeniera e innovación en procesos alimentarios</a></h3>
                                            <span class="d-block">UNAMAD</span>
                                        </div>
                                        <h3 class="mb-0 text-white position-absolute">Eje 1</h3>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="speaker-box position-relative w-100 overflow-hidden">
                                        <img class="img-fluid w-100" src="{{ asset('assets/images/ejes/eje2.jpg') }}" alt="Speaker Image 2">
                                        <div class="speaker-info position-absolute">
                                            <h3 class="mb-0 text-white" style="font-size: 1rem; line-height: 1.2;">
                                                <a href="speaker-detail.html">Eje 2:</br>Biotecnología y aprovechamientos de subproductos </a></h3>
                                            <span class="d-block">UNAMAD</span>
                                        </div>
                                        <h3 class="mb-0 text-white position-absolute">Eje 2</h3>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="speaker-box position-relative w-100 overflow-hidden">
                                        <img class="img-fluid w-100" src="{{ asset('assets/images/ejes/eje3.jpg') }}" alt="Speaker Image 2" style="height: 250px; object-fit: cover;">
                                        <div class="speaker-info position-absolute">
                                            <h3 class="mb-0 text-white" style="font-size: 1rem; line-height: 1.2;">
                                                <a href="speaker-detail.html">Eje 3:</br>Productos funcionales y valor agregado </a></h3>
                                            <span class="d-block">UNAMAD</span>
                                        </div>
                                        <h3 class="mb-0 text-white position-absolute">Eje 3</h3>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="speaker-box position-relative w-100 overflow-hidden">
                                        <img class="img-fluid w-100" src="{{ asset('assets/images/ejes/eje4.jpg') }}" alt="Speaker Image 2" style="height: 250px; object-fit: cover;">
                                        <div class="speaker-info position-absolute">
                                            <h3 class="mb-0 text-white" style="font-size: 1rem; line-height: 1.2;">
                                                <a href="speaker-detail.html">Eje 4:</br> Seguridad alimentaria, postcosecha e inocuidad de la cadena alimentaria</a>
                                            </h3>
                                            <span class="d-block">UNAMAD</span>
                                        </div>
                                        <h3 class="mb-0 text-white position-absolute">Eje 4</h3>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="speaker-box position-relative w-100 overflow-hidden">
                                        <img class="img-fluid w-100" src="{{ asset('assets/images/ejes/eje5.jpeg') }}" alt="Speaker Image 2">
                                        <div class="speaker-info position-absolute">
                                            <h3 class="mb-0 text-white" style="font-size: 1rem; line-height: 1.2;">
                                                <a href="speaker-detail.html">Eje 5:</br>Biocombustible y energía </a></h3>
                                            <span class="d-block">UNAMAD</span>
                                        </div>
                                        <h3 class="mb-0 text-white position-absolute">Eje 5</h3>
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
                <div class="row justify-content-center">
                    <!-- Primera fila: Danzas y Miss & Mister -->
                    <!-- Concurso de Danzas -->
                    <div class="col-md-6 col-sm-12 col-lg-5 mb-4">
                        <div class="event-box w-100 position-relative overflow-hidden" style="border: 2px solid #e0e0e0; border-radius: 15px; padding: 25px; margin-bottom: 30px; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
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
                                    
                                    <a class="thm-btn d-inline-block w-100 text-center" href="{{ asset('bases_concurso/BASES DEL CONCURSO DE DANZAS Y EXPRESIONES ARTISTICAS_XXIV CONEIA 2025 MADRE DE DIOS.pdf') }}" download>
                                        <i class="fas fa-download"></i> Descargar Bases Completas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Concurso Miss y Mister -->
                    <div class="col-md-6 col-sm-12 col-lg-5 mb-4">
                        <div class="event-box w-100 position-relative overflow-hidden" style="border: 2px solid #e0e0e0; border-radius: 15px; padding: 25px; margin-bottom: 30px; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
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
                                    
                                    <a class="thm-btn d-inline-block w-100 text-center" href="{{ asset('bases_concurso/BASES_DEL_CONCURSO_MISS_Y_MISTER_XXIV_CONEIA_2025.pdf') }}" download>
                                        <i class="fas fa-download"></i> Descargar Bases Completas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Segunda fila: Copa Inter-Universidades y Trabajos de Investigación -->
                <div class="row justify-content-center" style="margin-top: 40px;">
                    <!-- Copa Inter-Universidades -->
                    <div class="col-md-6 col-sm-12 col-lg-5 mb-4">
                        <div class="event-box w-100 position-relative overflow-hidden" style="border: 2px solid #e0e0e0; border-radius: 15px; padding: 25px; margin-bottom: 30px; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
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
                                    
                                    <a class="thm-btn d-inline-block w-100 text-center" href="{{ asset('bases_concurso/BASES COPA INTER-UNIVERSIDADES 2025 ACTUALIZADA.docx') }}" download>
                                        <i class="fas fa-download"></i> Descargar Bases Completas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Concurso de Trabajos de Investigación -->
                    <div class="col-md-6 col-sm-12 col-lg-5 mb-4">
                        <div class="event-box w-100 position-relative overflow-hidden" style="border: 2px solid #e0e0e0; border-radius: 15px; padding: 25px; margin-bottom: 30px; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
                            <div class="event-date-header text-center mb-3" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; padding: 15px; border-radius: 10px;">
                                <h4 class="mb-0">10-14 de Noviembre</h4>
                                <span>Durante el evento - 2025</span>
                            </div>
                            <div class="event-info w-100">
                                <h3 class="mb-3 text-center"><a href="#" title="">Concurso de Trabajos de Investigación Científica y Tecnológica</a></h3>
                                <ul class="event-meta mb-3 list-unstyled">
                                    <li><i class="far fa-clock thm-clr"></i> <strong>Presentaciones:</strong> Durante el congreso</li>
                                    <li><i class="fas fa-map-marker-alt thm-clr"></i> <strong>Lugar:</strong> UNAMAD</li>
                                </ul>
                                <p class="mb-3">Fomenta la generación y difusión de conocimiento en el ámbito agroindustrial, promoviendo soluciones innovadoras y sostenibles.</p>
                                
                                <div class="event-details mt-3">
                                    <h5 class="mb-2" style="color: #fa709a;">📋 Etapas de Inscripción:</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li><strong>ETAPA I (Gratuita):</strong></li>
                                        <li><i class="fas fa-calendar-alt thm-clr"></i> Hasta el 15 de septiembre 2025</li>
                                        <li><i class="fas fa-file-alt thm-clr"></i> Envío de resumen (máx. 300 palabras)</li>
                                        <li class="mt-2"><strong>ETAPA II (Con costo):</strong></li>
                                        <li><i class="fas fa-calendar-alt thm-clr"></i> Hasta el 15 de octubre 2025</li>
                                        <li><i class="fas fa-money-bill-wave thm-clr"></i> Comunicación oral: S/. 50</li>
                                        <li><i class="fas fa-money-bill-wave thm-clr"></i> Póster: S/. 40</li>
                                    </ul>
                                    
                                    <h5 class="mb-2" style="color: #fa709a;">💳 Cuenta para pagos:</h5>
                                    <div style="background: #f8f9fa; padding: 10px; border-radius: 8px; margin-bottom: 15px;">
                                        <p class="mb-1"><strong>Yape:</strong> +51 962618961</p>
                                        <p class="mb-0">Lila Ruby Isuiza Pérez</p>
                                    </div>
                                    
                                    <h5 class="mb-2" style="color: #fa709a;">📚 Categorías:</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li><i class="fas fa-microphone thm-clr"></i> <strong>Comunicación Oral:</strong> 20 min exposición + 5 min preguntas</li>
                                        <li><i class="fas fa-chart-bar thm-clr"></i> <strong>Póster:</strong> 10 min exposición + 5 min preguntas</li>
                                    </ul>
                                    
                                    <h5 class="mb-2" style="color: #fa709a;">🎯 Ejes Temáticos:</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li>• Ingeniería e innovación en procesos alimentarios</li>
                                        <li>• Biotecnología y aprovechamiento de subproductos</li>
                                        <li>• Productos funcionales y valor agregado</li>
                                        <li>• Seguridad alimentaria e inocuidad</li>
                                        <li>• Biocombustible y energía</li>
                                    </ul>
                                    
                                    <h5 class="mb-2" style="color: #fa709a;">🏆 Premios:</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li><i class="fas fa-medal" style="color: gold;"></i> <strong>1er lugar:</strong> Medalla + Diploma + Premio sorpresa</li>
                                        <li><i class="fas fa-medal" style="color: silver;"></i> <strong>2do lugar:</strong> Medalla + Diploma + Premio sorpresa</li>
                                        <li><i class="fas fa-medal" style="color: #cd7f32;"></i> <strong>3er lugar:</strong> Medalla + Diploma</li>
                                        <li><i class="fas fa-star thm-clr"></i> Menciones honoríficas especiales</li>
                                    </ul>
                                    
                                    <h5 class="mb-2" style="color: #fa709a;">📌 Requisitos:</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li>• Máximo 3 estudiantes y 1 docente asesor</li>
                                        <li>• Máximo 2 trabajos por universidad por categoría</li>
                                        <li>• CTI Vitae y ORCID ID activos</li>
                                        <li>• Trabajos de los últimos 5 años</li>
                                        <li>• Plagio menor al 20% (Turnitin)</li>
                                    </ul>
                                    
                                    <a class="thm-btn d-inline-block w-100 text-center" href="{{ asset('bases_concurso/Bases Concurso TRABAJOS DE INVESTIGACIÓN CIENTÍFICA Y TECNOLÓGICA XXIV CONEIA 2025.pdf') }}" download>
                                        <i class="fas fa-download"></i> Descargar Bases Completas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Información adicional -->
                <!--
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <div class="concurso-info-box p-4" style="background: rgba(255, 107, 107, 0.1); border-radius: 15px;">
                            <h3 class="thm-clr mb-3">¡Inscríbete y Participa!</h3>
                            <p class="mb-3">Todos los concursos están abiertos para estudiantes de Ingeniería Agroindustrial de las universidades participantes.</p>
                            <p class="mb-0"><strong>Para más información contactar:</strong></p>
                            <ul class="list-unstyled mt-2">
                                <li><i class="fas fa-phone thm-clr"></i> Cel: +51 938200014 (Presidente)</li>
                                <li><i class="fas fa-envelope thm-clr"></i> Email: cursos_iag@unamad.edu.pe</li>
                            </ul>
                        </div>
                    </div>
                </div>
                -->
            </div><!-- Concursos Wrap -->
        </div>
    </div>
</section>

<section>
    <div class="w-100 position-relative">
        <div class="contact-map-wrap w-100">
            <h2 class="mb-0 text-center"><span class="thm-clr">📍 Ubicación del Evento: </span> Consulta el mapa interactivo para llegar  <br> fácilmente a la sede del Congreso de Ingeniería Agroindustrial.</h2>
            <div class="contact-map-inner gray-layer opc97 position-relative w-100">
                <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax6.jpg') }});"></div>
                <div class="row mrg align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="contact-map w-100" id="contact-map">
                            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.3931745573507!2d-69.21171648590169!3d-12.588565811287903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917b49441850fe49%3A0x2881b0658744e313!2sUniversidad%20Nacional%20Amaz%C3%B3nica%20de%20Madre%20de%20Dios!5e0!3m2!1ses!2spe!4v1702500000000!5m2!1ses!2spe" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Contact With Map -->
    </div>
</section>
@endsection

@section('scripts')
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
@endsection