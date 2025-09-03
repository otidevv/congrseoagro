@extends('admin.layout')

@section('title', 'Detalles del Trabajo')
@section('page-title', 'Gestionar Trabajo de Investigación')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <!-- Información del trabajo -->
        <div class="content-card p-4 mb-4">
            <div class="d-flex justify-content-between align-items-start mb-4">
                <div>
                    <h4 class="mb-3">{{ $submission->title }}</h4>
                    <div class="submission-meta">
                        <span class="badge 
                            @if($submission->status === 'accepted') bg-success
                            @elseif($submission->status === 'rejected') bg-danger
                            @else bg-warning @endif fs-6">
                            {{ $submission->status_label }}
                        </span>
                        <span class="badge bg-info fs-6 ms-2">
                            <i class="fas fa-file-pdf"></i> {{ $submission->pdf_files_count }} PDF{{ $submission->pdf_files_count > 1 ? 's' : '' }}
                        </span>
                    </div>
                </div>
                <div class="text-center">
                    @if($submission->status === 'accepted')
                        <i class="fas fa-check-circle fa-3x text-success"></i>
                    @elseif($submission->status === 'rejected')
                        <i class="fas fa-times-circle fa-3x text-danger"></i>
                    @else
                        <i class="fas fa-clock fa-3x text-warning"></i>
                    @endif
                </div>
            </div>

            <div class="mb-4">
                <h6>Resumen del Trabajo:</h6>
                <p class="text-justify">{{ $submission->abstract }}</p>
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

        <!-- Archivos PDF -->
        <div class="content-card p-4 mb-4">
            <h5 class="mb-3"><i class="fas fa-paperclip"></i> Archivos PDF Enviados</h5>
            
            @if($submission->pdf_files && count($submission->pdf_files) > 0)
                <div class="row">
                    @foreach($submission->pdf_files as $index => $file)
                        <div class="col-md-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <div class="text-center mb-3">
                                        <i class="fas fa-file-pdf fa-3x text-danger"></i>
                                    </div>
                                    <h6 class="card-title text-center">{{ $file['original_name'] ?? 'Archivo ' . ($index + 1) }}</h6>
                                    <div class="text-center mb-3">
                                        <small class="text-muted">
                                            <strong>Tamaño:</strong> {{ number_format($file['size'] / 1024 / 1024, 2) }}MB<br>
                                            @if(isset($file['uploaded_at']))
                                                <strong>Subido:</strong> {{ date('d/m/Y H:i', strtotime($file['uploaded_at'])) }}
                                            @endif
                                        </small>
                                    </div>
                                    <div class="mt-auto">
                                        <a href="{{ route('admin.submissions.download', [$submission, $index]) }}" 
                                           class="btn btn-primary w-100">
                                            <i class="fas fa-download"></i> Descargar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="alert alert-info mt-3">
                    <strong>Resumen:</strong> {{ count($submission->pdf_files) }} archivo{{ count($submission->pdf_files) > 1 ? 's' : '' }} PDF 
                    ({{ number_format(collect($submission->pdf_files)->sum('size') / 1024 / 1024, 2) }}MB total)
                </div>
            @else
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle"></i> No se encontraron archivos PDF para este trabajo.
                </div>
            @endif
        </div>

        <!-- Comentarios de revisión -->
        @if($submission->review_comments)
            <div class="content-card p-4 mb-4">
                <h5 class="mb-3"><i class="fas fa-comment-alt"></i> Comentarios de Revisión</h5>
                <div class="alert alert-info">
                    <p class="mb-0">{{ $submission->review_comments }}</p>
                </div>
            </div>
        @endif
    </div>

    <!-- Sidebar -->
    <div class="col-lg-4">
        <!-- Información del autor -->
        <div class="content-card p-4 mb-4">
            <h5 class="mb-3"><i class="fas fa-user"></i> Información del Autor</h5>
            <div class="author-details">
                <p class="mb-2"><strong>Nombre:</strong> {{ $submission->user->name }}</p>
                <p class="mb-2"><strong>Email:</strong> 
                    <a href="mailto:{{ $submission->user->email }}">{{ $submission->user->email }}</a>
                </p>
                <p class="mb-2"><strong>Documento:</strong> {{ $submission->user->document_number }}</p>
                <p class="mb-2"><strong>Universidad:</strong> {{ $submission->user->university }}</p>
                <p class="mb-0">
                    <strong>Registrado:</strong> {{ $submission->user->created_at->format('d/m/Y') }}
                </p>
            </div>
            
            <hr>
            
            <div class="text-center">
                <a href="{{ route('admin.users.show', $submission->user) }}" class="btn btn-outline-primary">
                    <i class="fas fa-user-circle"></i> Ver Perfil Completo
                </a>
            </div>
        </div>

        <!-- Panel de gestión -->
        <div class="content-card p-4 mb-4">
            <h5 class="mb-3"><i class="fas fa-cog"></i> Gestión del Trabajo</h5>
            
            <form method="POST" action="{{ route('admin.submissions.update-status', $submission) }}">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="status" class="form-label">Estado del Trabajo</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="pending" {{ $submission->status === 'pending' ? 'selected' : '' }}>
                            Pendiente de Revisión
                        </option>
                        <option value="accepted" {{ $submission->status === 'accepted' ? 'selected' : '' }}>
                            Aceptado
                        </option>
                        <option value="rejected" {{ $submission->status === 'rejected' ? 'selected' : '' }}>
                            Rechazado
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="review_comments" class="form-label">Comentarios de Revisión</label>
                    <textarea name="review_comments" id="review_comments" class="form-control" rows="4" 
                              placeholder="Añade comentarios sobre la revisión del trabajo...">{{ $submission->review_comments }}</textarea>
                    <small class="form-text text-muted">Opcional - Máximo 1000 caracteres</small>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-save"></i> Actualizar Estado
                </button>
            </form>
        </div>

        <!-- Acciones peligrosas -->
        <div class="content-card p-4 mb-4">
            <h5 class="mb-3 text-danger"><i class="fas fa-exclamation-triangle"></i> Zona Peligrosa</h5>
            
            <p class="text-muted small">Esta acción no se puede deshacer.</p>
            
            <form method="POST" action="{{ route('admin.submissions.delete', $submission) }}" 
                  onsubmit="return confirm('¿Estás seguro de que quieres eliminar este trabajo? Esta acción no se puede deshacer.')">
                @csrf
                @method('DELETE')
                
                <button type="submit" class="btn btn-danger w-100">
                    <i class="fas fa-trash"></i> Eliminar Trabajo
                </button>
            </form>
        </div>

        <!-- Acciones de navegación -->
        <div class="content-card p-4">
            <h5 class="mb-3"><i class="fas fa-navigation"></i> Navegación</h5>
            
            <div class="d-grid gap-2">
                <a href="{{ route('admin.submissions') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left"></i> Volver a la Lista
                </a>
                
                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary">
                    <i class="fas fa-tachometer-alt"></i> Ir al Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const statusSelect = document.getElementById('status');
    const commentsTextarea = document.getElementById('review_comments');
    
    statusSelect.addEventListener('change', function() {
        if (this.value === 'rejected') {
            commentsTextarea.setAttribute('required', true);
            commentsTextarea.placeholder = 'Por favor, explica las razones del rechazo...';
        } else {
            commentsTextarea.removeAttribute('required');
            commentsTextarea.placeholder = 'Añade comentarios sobre la revisión del trabajo...';
        }
    });
    
    // Contador de caracteres
    commentsTextarea.addEventListener('input', function() {
        const maxLength = 1000;
        const currentLength = this.value.length;
        
        // Crear o actualizar contador
        let counter = document.getElementById('char-counter');
        if (!counter) {
            counter = document.createElement('small');
            counter.id = 'char-counter';
            counter.className = 'form-text';
            this.parentNode.appendChild(counter);
        }
        
        counter.textContent = `${currentLength}/${maxLength} caracteres`;
        
        if (currentLength > maxLength) {
            counter.className = 'form-text text-danger';
        } else if (currentLength > maxLength * 0.8) {
            counter.className = 'form-text text-warning';
        } else {
            counter.className = 'form-text text-muted';
        }
    });
});
</script>
@endsection