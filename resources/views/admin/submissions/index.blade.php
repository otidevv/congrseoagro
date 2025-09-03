@extends('admin.layout')

@section('title', 'Gestión de Trabajos')
@section('page-title', 'Gestión de Trabajos de Investigación')

@section('content')
<div class="content-card p-4 mb-4">
    <div class="row">
        <div class="col-lg-8">
            <form method="GET" class="d-flex gap-3">
                <div class="flex-fill">
                    <input type="text" name="search" class="form-control" 
                           placeholder="Buscar por título, resumen, autor o email..." 
                           value="{{ request('search') }}">
                </div>
                <div style="width: 200px;">
                    <select name="status" class="form-select">
                        <option value="">Todos los estados</option>
                        <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pendientes</option>
                        <option value="accepted" {{ request('status') === 'accepted' ? 'selected' : '' }}>Aceptados</option>
                        <option value="rejected" {{ request('status') === 'rejected' ? 'selected' : '' }}>Rechazados</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i> Buscar
                </button>
                @if(request('search') || request('status'))
                    <a href="{{ route('admin.submissions') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-times"></i> Limpiar
                    </a>
                @endif
            </form>
        </div>
        <div class="col-lg-4 text-end">
            <div class="btn-group">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left"></i> Dashboard
                </a>
            </div>
        </div>
    </div>
</div>

<div class="content-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5><i class="fas fa-list me-2"></i>Lista de Trabajos ({{ $submissions->total() }})</h5>
        <div class="text-muted">
            Mostrando {{ $submissions->firstItem() ?? 0 }}-{{ $submissions->lastItem() ?? 0 }} de {{ $submissions->total() }}
        </div>
    </div>
    
    @if($submissions->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Título y Autor</th>
                        <th>Universidad</th>
                        <th>Estado</th>
                        <th>Archivos</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $submission)
                        <tr>
                            <td>
                                <div>
                                    <strong class="d-block">{{ Str::limit($submission->title, 60) }}</strong>
                                    <small class="text-muted">
                                        <i class="fas fa-user me-1"></i>{{ $submission->user->name }}
                                        <br><i class="fas fa-envelope me-1"></i>{{ $submission->user->email }}
                                    </small>
                                </div>
                            </td>
                            <td>
                                <small>{{ $submission->user->university }}</small>
                            </td>
                            <td>
                                <span class="badge 
                                    @if($submission->status === 'accepted') bg-success
                                    @elseif($submission->status === 'rejected') bg-danger
                                    @else bg-warning @endif">
                                    {{ $submission->status_label }}
                                </span>
                                @if($submission->review_comments)
                                    <br><small class="text-muted">
                                        <i class="fas fa-comment-dots"></i> Con comentarios
                                    </small>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-info">
                                    <i class="fas fa-file-pdf"></i> {{ $submission->pdf_files_count }} PDF{{ $submission->pdf_files_count > 1 ? 's' : '' }}
                                </span>
                            </td>
                            <td>
                                <small>
                                    {{ $submission->created_at->format('d/m/Y') }}<br>
                                    {{ $submission->created_at->format('H:i') }}
                                </small>
                            </td>
                            <td>
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
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Paginación -->
        <div class="d-flex justify-content-center mt-4">
            {{ $submissions->withQueryString()->links() }}
        </div>
    @else
        <div class="text-center py-5 text-muted">
            <i class="fas fa-inbox fa-4x mb-3"></i>
            <h5>No se encontraron trabajos</h5>
            <p>
                @if(request('search') || request('status'))
                    No hay trabajos que coincidan con los criterios de búsqueda.
                @else
                    Aún no se han enviado trabajos de investigación.
                @endif
            </p>
            @if(request('search') || request('status'))
                <a href="{{ route('admin.submissions') }}" class="btn btn-primary">
                    Ver Todos los Trabajos
                </a>
            @endif
        </div>
    @endif
</div>

<!-- Estadísticas rápidas -->
<div class="row mt-4">
    <div class="col-md-3">
        <div class="stats-card p-3 text-center">
            <h4 class="text-warning">{{ $submissions->where('status', 'pending')->count() }}</h4>
            <small class="text-muted">Pendientes en esta página</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card p-3 text-center">
            <h4 class="text-success">{{ $submissions->where('status', 'accepted')->count() }}</h4>
            <small class="text-muted">Aceptados en esta página</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card p-3 text-center">
            <h4 class="text-danger">{{ $submissions->where('status', 'rejected')->count() }}</h4>
            <small class="text-muted">Rechazados en esta página</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card p-3 text-center">
            <h4 class="text-info">{{ $submissions->sum('pdf_files_count') }}</h4>
            <small class="text-muted">Total PDFs en esta página</small>
        </div>
    </div>
</div>
@endsection