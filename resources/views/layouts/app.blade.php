<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from html.cwsthemes.com/aconte/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jun 2025 16:51:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" sizes="35x35" type="image/png">
    <title>@yield('title', 'CONEIA 2025 Unamad')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados del layout -->
    <style>
        /* Estilos para botones flotantes */
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

        /* Color temático */
        .thm-clr {
            color: #ff6b6b !important;
        }

        /* Botón temático */
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

        /* Clase personalizada para expandir el logo-menu-wrap */
        .logo-menu-wrap-expanded {
            width: 100vw !important;
            max-width: 100vw !important;
            margin-left: calc(-50vw + 50%) !important;
            margin-right: calc(-50vw + 50%) !important;
            padding-left: 2rem !important;
            padding-right: 2rem !important;
        }

        /* Asegurar que el header esté por encima del video */
        header {
            z-index: 1000 !important;
            position: relative;
            background-color: #ffffff !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        @yield('styles')
    </style>
</head>
<body>
    <main>
        <!-- Header -->
        <header class="stick style3 w-100">
            <div class="container">
                <div class="logo-menu-wrap logo-menu-wrap-expanded w-100 d-flex flex-wrap justify-content-between align-items-start">
                    <div class="logo">
                        <h1 class="mb-0">
                            <a href="{{ route('home') }}" title="Inicio">
                                <img class="img-fluid" style="height: 70px;" src="{{ asset('assets/images/logo3.png') }}" alt="Logo" srcset="{{ asset('assets/logo/logoconeia.png') }}">
                            </a>
                        </h1>
                    </div><!-- Logo -->
                    <nav class="d-inline-flex align-items-center">
                        <div class="header-left">
                            <ul class="mb-0 list-unstyled d-inline-flex">
                                <li class="menu-item-has-children">
                                    <a href="{{ route('home') }}" title="">Inicio</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);" title="">Presentacion</a>
                                    <ul class="children mb-0 list-unstyled">
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);" title="">Conferencias y Ponencias</a>
                                            <ul class="children mb-0 list-unstyled">
                                                <li><a href="#" title="">Conferencias Magistrales</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:void(0);" title="">Ponencias</a>
                                                    <ul class="children mb-0 list-unstyled">
                                                        <li><a href="#" title="">Resumen</a></li>
                                                        <li><a href="#" title="">Articulo para Publicacion</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" title="">Concurso de Proyectos de Investigacion</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('home') }}#comision-central" title="">Comision Central</a></li>
                                        <li><a href="#" title="">Programa</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('home') }}#beneficios" title="">Beneficios</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="https://forms.gle/pRg15EwZvcDs8gpo8" title="">Inscripcion</a>
                                </li>
                                <li><a href="{{ route('home') }}#ejes-tematicos" title="">Ejes Tematicos</a></li>
                                <li><a href="{{ route('home') }}#concursos" title="">Concursos</a></li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);" title="">Trabajos</a>
                                    <ul class="children mb-0 list-unstyled">
                                        <li><a href="{{ route('formato.resumenes') }}" title="">Formato de Resúmenes</a></li>
                                        <li><a href="{{ route('envio.resumenes') }}" title="">Envío de Resúmenes</a></li>
                                        <li><a href="{{ asset('bases_concurso/Bases Concurso TRABAJOS DE INVESTIGACIÓN CIENTÍFICA Y TECNOLÓGICA XXIV CONEIA 2025.pdf') }}" download title="">Descargar Bases</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);" title="">Madre de Dios</a>
                                    <ul class="children mb-0 list-unstyled">
                                        <li><a href="#" title="">Video</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);" title="">Servicios</a>
                                            <ul class="children mb-0 list-unstyled">
                                                <li><a href="{{ route('hospedajes') }}" title="">Hoteleros</a></li>
                                                <li><a href="#" title="">Alimentacion</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header-right-btns d-flex align-items-center">
                            @auth
                                <div class="user-menu mr-3 d-flex align-items-center">
                                    <a href="{{ route('submissions.index') }}" class="thm-clr mr-3 text-decoration-none">
                                        <i class="fas fa-folder"></i> Mis Trabajos
                                    </a>
                                    <span class="text-muted mr-2">Hola, {{ Auth::user()->name }}</span>
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 text-decoration-none thm-clr" style="border: none;">
                                            <i class="fas fa-sign-out-alt"></i> Salir
                                        </button>
                                    </form>
                                </div>
                            @else
                                <div class="auth-links mr-3">
                                    <a href="{{ route('login') }}" class="thm-clr mr-3 text-decoration-none">
                                        <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                                    </a>
                                    <a href="{{ route('register') }}" class="thm-btn" style="padding: 8px 20px; font-size: 14px;">
                                        <i class="fas fa-user-plus"></i> Registro
                                    </a>
                                </div>
                            @endauth
                            <a class="menu-btn2 rounded-circle" href="javascript:void(0);" title=""><i></i></a>
                        </div>
                    </nav>
                </div><!-- Logo Menu Wrap -->
            </div>
        </header><!-- Header -->

        <!-- Menu móvil -->
        <div class="menu-wrap">
            <span class="menu-close"><i class="fas fa-times"></i></span>
            <ul class="mb-0 list-unstyled w-100">
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}" title="">Inicio</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);" title="">Presentacion</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}#beneficios" title="">Beneficios</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeIHVAF35m7G9iC1XbGd_jzSZ1RFH-FnfOQsxRvzL4DWyGb3w/viewform" title="">Inscripcion</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}#ejes-tematicos" title="">Ejes Tematicos</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);" title="">Trabajos</a>
                    <ul class="children list-unstyled">
                        <li><a href="{{ route('formato.resumenes') }}" title="">Formato de Resúmenes</a></li>
                        <li><a href="{{ route('envio.resumenes') }}" title="">Envío de Resúmenes</a></li>
                        <li><a href="{{ asset('bases_concurso/Bases Concurso TRABAJOS DE INVESTIGACIÓN CIENTÍFICA Y TECNOLÓGICA XXIV CONEIA 2025.pdf') }}" download title="">Descargar Bases</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);" title="">Madre de Dios</a>
                </li>
            </ul>
        </div><!-- Menu Wrap -->
        
        <!-- Contenido principal -->
        @yield('content')
        
        <!-- Footer -->
        <div class="bottom-bar w-100">
            <div class="container">
                <div class="bottom-bar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <p class="mb-0">
                        <a href="https://coneia-madre-de-dios-2025.unamad.edu.pe/" title="">UNAMAD</a> - Universidad Nacional Amazonica de Madre de Dios
                    </p>
                </div>
            </div>
        </div><!-- Bottom Bar -->
    </main><!-- Main Wrapper -->
    
    <!-- Botones flotantes -->
    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.me/51938200014"
       class="whatsapp-float float-button-animate" 
       target="_blank"
       title="Contáctanos por WhatsApp">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>

    <!-- Botón flotante de Registro -->
    <a href="https://forms.gle/pRg15EwZvcDs8gpo8" 
       class="register-float float-button-animate"
       title="Regístrate ahora">
        <i class="fas fa-user-plus"></i> Regístrate
    </a>
    
    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.downCount.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-scripts.js') }}"></script>
    
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
    
    @yield('scripts')
</body>	

<!-- Mirrored from html.cwsthemes.com/aconte/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jun 2025 16:51:42 GMT -->
</html>