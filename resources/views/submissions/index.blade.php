@extends('layouts.app')

@section('title', 'Mis Trabajos - CONEIA 2025')

@section('content')
<section class="page-header">
    <div class="w-100 pt-250 pb-120 position-relative" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <div class="page-header-inner text-center w-100">
                <h1 class="text-white mb-0">Mis Trabajos Enviados</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Inicio</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Mis Trabajos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="w-100 pt-60 pb-60 position-relative">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success text-center mb-4">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="thm-clr">Mis Trabajos de Investigación</h2>
                        <a href="{{ route('envio.resumenes') }}" class="thm-btn">
                            <i class="fas fa-plus"></i> Enviar Nuevo Trabajo
                        </a>
                    </div>

                    @if($submissions->count() > 0)
                        <div class="row">
                            @foreach($submissions as $submission)
                                <div class="col-lg-12 mb-4">
                                    <div class="submission-card p-4" style="background: white; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); border-left: 4px solid 
                                        @if($submission->status === 'accepted') #28a745
                                        @elseif($submission->status === 'rejected') #dc3545
                                        @else #ffc107 @endif;">
                                        
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <div class="submission-info">
                                                    <h4 class="mb-2">{{ $submission->title }}</h4>
                                                    <p class="text-muted mb-2">{{ Str::limit($submission->abstract, 150) }}</p>
                                                    
                                                    <div class="submission-details">
                                                        <span class="badge badge-info mr-2">
                                                            <i class="fas fa-file-pdf"></i> {{ $submission->pdf_files_count }} PDF{{ $submission->pdf_files_count > 1 ? 's' : '' }}
                                                        </span>
                                                        <span class="badge 
                                                            @if($submission->status === 'accepted') badge-success
                                                            @elseif($submission->status === 'rejected') badge-danger
                                                            @else badge-warning @endif">
                                                            {{ $submission->status_label }}
                                                        </span>
                                                    </div>
                                                    
                                                    <small class="text-muted">
                                                        <i class="fas fa-calendar"></i> Enviado el {{ $submission->created_at->format('d/m/Y H:i') }}
                                                    </small>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4 text-right">
                                                <div class="submission-actions">
                                                    <a href="{{ route('submissions.show', $submission) }}" class="btn btn-outline-primary btn-sm mb-2">
                                                        <i class="fas fa-eye"></i> Ver Detalles
                                                    </a>
                                                    
                                                    @if($submission->pdf_files && count($submission->pdf_files) > 0)
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                                                                <i class="fas fa-download"></i> Descargar PDFs
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                @foreach($submission->pdf_files as $index => $file)
                                                                    <a class="dropdown-item" href="{{ route('submissions.download', [$submission, $index]) }}">
                                                                        <i class="fas fa-file-pdf"></i> {{ $file['original_name'] ?? 'Archivo ' . ($index + 1) }}
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        @if($submission->review_comments)
                                            <div class="mt-3 pt-3" style="border-top: 1px solid #e9ecef;">
                                                <h6 class="mb-2"><i class="fas fa-comment"></i> Comentarios de Revisión:</h6>
                                                <p class="mb-0 text-muted">{{ $submission->review_comments }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Estadísticas -->
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="stat-card text-center p-4" style="background: #e3f2fd; border-radius: 10px;">
                                    <h3 class="mb-2" style="color: #1976d2;">{{ $submissions->count() }}</h3>
                                    <p class="mb-0">Trabajos Enviados</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-card text-center p-4" style="background: #e8f5e9; border-radius: 10px;">
                                    <h3 class="mb-2" style="color: #388e3c;">{{ $submissions->where('status', 'accepted')->count() }}</h3>
                                    <p class="mb-0">Trabajos Aceptados</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-card text-center p-4" style="background: #fff3e0; border-radius: 10px;">
                                    <h3 class="mb-2" style="color: #f57c00;">{{ $submissions->where('status', 'pending')->count() }}</h3>
                                    <p class="mb-0">En Revisión</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <div class="empty-state">
                                <i class="fas fa-file-plus" style="font-size: 80px; color: #e0e0e0; margin-bottom: 30px;"></i>
                                <h3 class="mb-3">Aún no has enviado ningún trabajo</h3>
                                <p class="mb-4 text-muted">Envía tu primer trabajo de investigación para el XXIV CONEIA 2025</p>
                                <a href="{{ route('envio.resumenes') }}" class="thm-btn" style="padding: 15px 40px;">
                                    <i class="fas fa-paper-plane"></i> Enviar Mi Primer Trabajo
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection