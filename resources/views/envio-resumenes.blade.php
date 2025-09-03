@extends('layouts.app')

@section('title', 'Envío de Resúmenes - CONEIA 2025')

@section('content')
<section class="page-header">
    <div class="w-100 pt-250 pb-120 position-relative" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <div class="page-header-inner text-center w-100">
                <h1 class="text-white mb-0">Envío de Resúmenes</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Inicio</a></li>
                        <li class="breadcrumb-item text-white">Trabajos</li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Envío de Resúmenes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="w-100 pt-120 pb-120 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="development-notice p-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 20px; color: white;">
                        <i class="fas fa-tools" style="font-size: 80px; margin-bottom: 30px; opacity: 0.8;"></i>
                        <h2 class="mb-4">Página en Desarrollo</h2>
                        <p class="mb-4" style="font-size: 1.2rem;">
                            Estamos trabajando para brindarte la mejor experiencia en el envío de tus trabajos de investigación.
                        </p>
                        <p class="mb-4">
                            Muy pronto podrás encontrar aquí toda la información detallada sobre el proceso de envío de resúmenes para el XXIV CONEIA 2025.
                        </p>
                        <div class="mt-5">
                            <a href="{{ route('home') }}" class="thm-btn" style="background: white; color: #667eea; margin-right: 15px;">
                                <i class="fas fa-home"></i> Volver al Inicio
                            </a>
                            <a href="{{ route('formato.resumenes') }}" class="thm-btn" style="background: rgba(255,255,255,0.2); color: white; border: 2px solid white;">
                                <i class="fas fa-file-alt"></i> Ver Formato de Resúmenes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection