@extends('admin.layout')

@section('title', 'Perfil de Usuario')
@section('page-title', 'Perfil de ' . $user->name)

@section('content')
<div class="row">
    <div class="col-lg-4">
        <!-- Información del usuario -->
        <div class="content-card p-4 mb-4">
            <div class="text-center mb-4">
                <div class="user-avatar mb-3">
                    <i class="fas fa-user-circle fa-5x text-primary"></i>
                </div>
                <h4 class="mb-1">{{ $user->name }}</h4>
                <p class="text-muted">{{ $user->email }}</p>
            </div>
            
            <div class="user-details">
                <div class="row mb-2">
                    <div class="col-5"><strong>Documento:</strong></div>
                    <div class="col-7"><code>{{ $user->document_number }}</code></div>
                </div>
                
                <div class="row mb-2">
                    <div class="col-5"><strong>Universidad:</strong></div>
                    <div class="col-7">{{ $user->university }}</div>
                </div>
                
                <div class="row mb-2">
                    <div class="col-5"><strong>Registrado:</strong></div>
                    <div class="col-7">
                        {{ $user->created_at->format('d/m/Y H:i') }}<br>
                        <small class="text-muted">{{ $user->created_at->diffForHumans() }}</small>
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col-5"><strong>Trabajos:</strong></div>
                    <div class="col-7">
                        <span class="badge bg-primary">{{ $user->submissions->count() }} trabajo{{ $user->submissions->count() != 1 ? 's' : '' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Estadísticas del usuario -->
        <div class="content-card p-4 mb-4">
            <h5 class="mb-3"><i class="fas fa-chart-bar"></i> Estadísticas</h5>
            
            <div class="stats-list">
                <div class="d-flex justify-content-between mb-2">
                    <span>Trabajos Pendientes:</span>
                    <span class="badge bg-warning">{{ $user->submissions->where('status', 'pending')->count() }}</span>
                </div>
                
                <div class="d-flex justify-content-between mb-2">
                    <span>Trabajos Aceptados:</span>
                    <span class="badge bg-success">{{ $user->submissions->where('status', 'accepted')->count() }}</span>
                </div>
                
                <div class="d-flex justify-content-between mb-2">
                    <span>Trabajos Rechazados:</span>
                    <span class="badge bg-danger">{{ $user->submissions->where('status', 'rejected')->count() }}</span>
                </div>
                
                <hr>
                
                <div class="d-flex justify-content-between">
                    <span>Total de PDFs:</span>
                    <span class="badge bg-info">
                        {{ $user->submissions->sum(function($submission) {
                            return is_array($submission->pdf_files) ? count($submission->pdf_files) : 0;
                        }) }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Acciones -->
        <div class="content-card p-4">
            <h5 class="mb-3"><i class="fas fa-cog"></i> Acciones</h5>
            
            <div class="d-grid gap-2">
                <a href="mailto:{{ $user->email }}" class="btn btn-outline-primary">
                    <i class="fas fa-envelope"></i> Enviar Email
                </a>
                
                @if($user->submissions->count() > 0)
                    <a href="{{ route('admin.submissions') }}?search={{ urlencode($user->email) }}" 
                       class="btn btn-outline-info">
                        <i class="fas fa-file-alt"></i> Ver Todos sus Trabajos
                    </a>
                @endif
                
                <hr>
                
                <a href="{{ route('admin.users') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left"></i> Volver a Usuarios
                </a>
                
                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary">
                    <i class="fas fa-tachometer-alt"></i> Ir al Dashboard
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <!-- Trabajos del usuario -->
        <div class="content-card p-4">
            <h5 class="mb-4">
                <i class="fas fa-file-alt me-2"></i>
                Trabajos de Investigación ({{ $user->submissions->count() }})
            </h5>
            
            @if($user->submissions->count() > 0)
                @foreach($user->submissions as $submission)
                    <div class="submission-item mb-3 p-3" style="border: 1px solid #e9ecef; border-radius: 8px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="flex-grow-1">
                                <h6 class="mb-2">
                                    <a href="{{ route('admin.submissions.show', $submission) }}" 
                                       class="text-decoration-none">
                                        {{ $submission->title }}
                                    </a>
                                </h6>
                                
                                <p class="text-muted mb-2">{{ Str::limit($submission->abstract, 200) }}</p>
                                
                                <div class="submission-meta">
                                    <span class="badge 
                                        @if($submission->status === 'accepted') bg-success
                                        @elseif($submission->status === 'rejected') bg-danger
                                        @else bg-warning @endif me-2">
                                        {{ $submission->status_label }}
                                    </span>
                                    
                                    <span class="badge bg-info me-2">
                                        <i class="fas fa-file-pdf"></i> {{ $submission->pdf_files_count }} PDF{{ $submission->pdf_files_count > 1 ? 's' : '' }}
                                    </span>
                                    
                                    <small class="text-muted">
                                        <i class="fas fa-calendar"></i> {{ $submission->created_at->format('d/m/Y H:i') }}
                                    </small>
                                </div>
                                
                                @if($submission->review_comments)
                                    <div class="alert alert-info mt-2 mb-0">
                                        <strong>Comentarios:</strong> {{ $submission->review_comments }}
                                    </div>
                                @endif
                            </div>
                            
                            <div class="ms-3">
                                <div class="btn-group-vertical btn-group-sm">
                                    <a href="{{ route('admin.submissions.show', $submission) }}" 
                                       class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    
                                    @if($submission->pdf_files && count($submission->pdf_files) > 0)
                                        <div class="dropdown">
                                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" 
                                                    type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-download"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                @foreach($submission->pdf_files as $index => $file)
                                                    <li>
                                                        <a class="dropdown-item" 
                                                           href="{{ route('admin.submissions.download', [$submission, $index]) }}">
                                                            <i class="fas fa-file-pdf me-1"></i>
                                                            {{ Str::limit($file['original_name'] ?? 'Archivo ' . ($index + 1), 30) }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center py-5 text-muted">
                    <i class="fas fa-inbox fa-3x mb-3"></i>
                    <h6>Sin trabajos enviados</h6>
                    <p>Este usuario aún no ha enviado ningún trabajo de investigación.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection