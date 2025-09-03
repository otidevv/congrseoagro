@extends('layouts.app')

@section('title', 'Detalles del Trabajo - CONEIA 2025')

@section('content')
<section class="page-header">
    <div class="w-100 pt-250 pb-120 position-relative" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <div class="page-header-inner text-center w-100">
                <h1 class="text-white mb-0">Detalles del Trabajo</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('submissions.index') }}" class="text-white">Mis Trabajos</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Detalles</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="w-100 pt-60 pb-60 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="submission-details-card p-5 mb-4" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <!-- Encabezado -->
                        <div class="submission-header mb-4 pb-4" style="border-bottom: 2px solid #e9ecef;">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h2 class="mb-3">{{ $submission->title }}</h2>
                                    <div class="submission-meta">
                                        <span class="badge badge-info mr-2 mb-2">{{ $submission->thematic_axis_label }}</span>
                                        <span class="badge badge-secondary mr-2 mb-2">{{ $submission->presentation_type_label }}</span>
                                        <span class="badge 
                                            @if($submission->status === 'accepted') badge-success
                                            @elseif($submission->status === 'rejected') badge-danger
                                            @else badge-warning @endif mb-2">
                                            {{ $submission->status_label }}
                                        </span>
                                    </div>
                                </div>
                                <div class="status-icon text-center">
                                    @if($submission->status === 'accepted')
                                        <i class="fas fa-check-circle" style="font-size: 48px; color: #28a745;"></i>
                                    @elseif($submission->status === 'rejected')
                                        <i class="fas fa-times-circle" style="font-size: 48px; color: #dc3545;"></i>
                                    @else
                                        <i class="fas fa-clock" style="font-size: 48px; color: #ffc107;"></i>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Información del trabajo -->
                        <div class="work-info mb-4">
                            <h4 class="mb-3"><i class="fas fa-info-circle"></i> Información del Trabajo</h4>
                            
                            <div class="mb-3">
                                <h6>Resumen:</h6>
                                <p class="text-justify">{{ $submission->abstract }}</p>
                            </div>

                            <div class="mb-3">
                                <h6>Palabras Clave:</h6>
                                <p>{{ $submission->keywords }}</p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Fecha de Envío:</h6>
                                    <p><i class="fas fa-calendar"></i> {{ $submission->created_at->format('d/m/Y H:i') }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h6>Última Actualización:</h6>
                                    <p><i class="fas fa-sync-alt"></i> {{ $submission->updated_at->format('d/m/Y H:i') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Archivos enviados -->
                        <div class="files-section mb-4">
                            <h4 class="mb-3"><i class="fas fa-paperclip"></i> Archivos PDF Enviados</h4>
                            
                            <div class="files-list">
                                @if($submission->pdf_files && count($submission->pdf_files) > 0)
                                    @foreach($submission->pdf_files as $index => $file)
                                        <div class="file-item d-flex justify-content-between align-items-center p-3 mb-2" style="background: #f8f9fa; border-radius: 8px;">
                                            <div class="file-info">
                                                <i class="fas fa-file-pdf text-danger mr-2"></i>
                                                <div>
                                                    <strong>{{ $file['original_name'] ?? 'Archivo ' . ($index + 1) }}</strong>
                                                    <small class="text-muted d-block">
                                                        Tamaño: {{ number_format($file['size'] / 1024 / 1024, 2) }}MB
                                                        @if(isset($file['uploaded_at']))
                                                            | Subido: {{ date('d/m/Y H:i', strtotime($file['uploaded_at'])) }}
                                                        @endif
                                                    </small>
                                                </div>
                                            </div>
                                            <a href="{{ route('submissions.download', [$submission, $index]) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-download"></i> Descargar
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle"></i> No se encontraron archivos PDF para este trabajo.
                                    </div>
                                @endif
                            </div>
                            
                            @if($submission->pdf_files && count($submission->pdf_files) > 0)
                                <div class="files-summary mt-3 p-3" style="background: #e3f2fd; border-radius: 8px;">
                                    <strong>Resumen:</strong> {{ count($submission->pdf_files) }} archivo{{ count($submission->pdf_files) > 1 ? 's' : '' }} PDF 
                                    ({{ number_format(collect($submission->pdf_files)->sum('size') / 1024 / 1024, 2) }}MB total)
                                </div>
                            @endif
                        </div>

                        <!-- Comentarios de revisión -->
                        @if($submission->review_comments)
                            <div class="review-comments mb-4">
                                <h4 class="mb-3"><i class="fas fa-comment-alt"></i> Comentarios de Revisión</h4>
                                <div class="alert alert-info">
                                    <p class="mb-0">{{ $submission->review_comments }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Información del autor -->
                    <div class="author-info-card p-4 mb-4" style="background: #e3f2fd; border-radius: 15px;">
                        <h5 class="mb-3"><i class="fas fa-user"></i> Información del Autor</h5>
                        <p class="mb-2"><strong>Nombre:</strong> {{ $submission->user->name }}</p>
                        <p class="mb-2"><strong>Email:</strong> {{ $submission->user->email }}</p>
                        <p class="mb-2"><strong>Documento:</strong> {{ $submission->user->document_number }}</p>
                        <p class="mb-0"><strong>Universidad:</strong> {{ $submission->user->university }}</p>
                    </div>

                    <!-- Estado del trabajo -->
                    <div class="status-card p-4 mb-4" style="background: white; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                        <h5 class="mb-3"><i class="fas fa-tasks"></i> Estado del Trabajo</h5>
                        
                        <div class="status-timeline">
                            <div class="status-step {{ $submission->created_at ? 'completed' : '' }}">
                                <i class="fas fa-paper-plane"></i>
                                <span class="ml-2">Enviado</span>
                                @if($submission->created_at)
                                    <small class="text-muted d-block ml-4">{{ $submission->created_at->format('d/m/Y H:i') }}</small>
                                @endif
                            </div>
                            
                            <div class="status-step {{ $submission->status !== 'pending' ? 'completed' : 'pending' }}">
                                <i class="fas fa-search"></i>
                                <span class="ml-2">En Revisión</span>
                            </div>
                            
                            <div class="status-step {{ $submission->status === 'accepted' ? 'completed' : ($submission->status === 'rejected' ? 'rejected' : '') }}">
                                <i class="fas {{ $submission->status === 'accepted' ? 'fa-check' : ($submission->status === 'rejected' ? 'fa-times' : 'fa-clock') }}"></i>
                                <span class="ml-2">
                                    @if($submission->status === 'accepted')
                                        Aceptado
                                    @elseif($submission->status === 'rejected')
                                        Rechazado
                                    @else
                                        Pendiente
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Acciones -->
                    <div class="actions-card p-4" style="background: white; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                        <h5 class="mb-3"><i class="fas fa-cog"></i> Acciones</h5>
                        
                        <a href="{{ route('submissions.index') }}" class="btn btn-outline-primary btn-block mb-2">
                            <i class="fas fa-list"></i> Ver Todos Mis Trabajos
                        </a>
                        
                        <a href="{{ route('envio.resumenes') }}" class="btn btn-outline-success btn-block">
                            <i class="fas fa-plus"></i> Enviar Nuevo Trabajo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.status-step {
    padding: 10px 0;
    border-left: 2px solid #e9ecef;
    padding-left: 20px;
    margin-left: 10px;
    position: relative;
}

.status-step:before {
    content: '';
    position: absolute;
    left: -6px;
    top: 18px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #e9ecef;
}

.status-step.completed {
    border-left-color: #28a745;
    color: #28a745;
}

.status-step.completed:before {
    background: #28a745;
}

.status-step.pending {
    border-left-color: #ffc107;
    color: #ffc107;
}

.status-step.pending:before {
    background: #ffc107;
}

.status-step.rejected {
    border-left-color: #dc3545;
    color: #dc3545;
}

.status-step.rejected:before {
    background: #dc3545;
}
</style>
@endsection