@extends('admin.layout')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard - Resumen General')

@section('content')
<div class="row mb-4">
    <!-- Estadísticas principales -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stats-card p-4 text-center">
            <div class="mb-3">
                <i class="fas fa-file-alt" style="font-size: 48px; color: #667eea;"></i>
            </div>
            <h3 class="mb-1">{{ $stats['total_submissions'] }}</h3>
            <p class="text-muted mb-0">Total Trabajos</p>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stats-card p-4 text-center">
            <div class="mb-3">
                <i class="fas fa-clock" style="font-size: 48px; color: #ffc107;"></i>
            </div>
            <h3 class="mb-1">{{ $stats['pending_submissions'] }}</h3>
            <p class="text-muted mb-0">Pendientes</p>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stats-card p-4 text-center">
            <div class="mb-3">
                <i class="fas fa-check-circle" style="font-size: 48px; color: #28a745;"></i>
            </div>
            <h3 class="mb-1">{{ $stats['accepted_submissions'] }}</h3>
            <p class="text-muted mb-0">Aceptados</p>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stats-card p-4 text-center">
            <div class="mb-3">
                <i class="fas fa-times-circle" style="font-size: 48px; color: #dc3545;"></i>
            </div>
            <h3 class="mb-1">{{ $stats['rejected_submissions'] }}</h3>
            <p class="text-muted mb-0">Rechazados</p>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="stats-card p-4 text-center">
            <div class="mb-3">
                <i class="fas fa-users" style="font-size: 48px; color: #17a2b8;"></i>
            </div>
            <h3 class="mb-1">{{ $stats['total_users'] }}</h3>
            <p class="text-muted mb-0">Usuarios Registrados</p>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="stats-card p-4 text-center">
            <div class="mb-3">
                <i class="fas fa-file-pdf" style="font-size: 48px; color: #dc3545;"></i>
            </div>
            <h3 class="mb-1">{{ $stats['total_pdf_files'] }}</h3>
            <p class="text-muted mb-0">Archivos PDF</p>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="stats-card p-4 text-center">
            <div class="mb-3">
                <i class="fas fa-percentage" style="font-size: 48px; color: #6f42c1;"></i>
            </div>
            <h3 class="mb-1">{{ $stats['total_submissions'] > 0 ? round(($stats['accepted_submissions'] / $stats['total_submissions']) * 100, 1) : 0 }}%</h3>
            <p class="text-muted mb-0">Tasa de Aprobación</p>
        </div>
    </div>
</div>

<div class="row">
    <!-- Trabajos recientes -->
    <div class="col-lg-8 mb-4">
        <div class="content-card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5><i class="fas fa-history me-2"></i>Trabajos Recientes</h5>
                <a href="{{ route('admin.submissions') }}" class="btn btn-sm btn-outline-primary">
                    Ver Todos <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
            
            @if($recent_submissions->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>Estado</th>
                                <th>Fecha</th>
                                <th>Archivos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_submissions as $submission)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.submissions.show', $submission) }}" class="text-decoration-none">
                                            {{ Str::limit($submission->title, 50) }}
                                        </a>
                                    </td>
                                    <td>{{ $submission->user->name }}</td>
                                    <td>
                                        <span class="badge 
                                            @if($submission->status === 'accepted') bg-success
                                            @elseif($submission->status === 'rejected') bg-danger
                                            @else bg-warning @endif">
                                            {{ $submission->status_label }}
                                        </span>
                                    </td>
                                    <td>{{ $submission->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <span class="badge bg-info">
                                            {{ $submission->pdf_files_count }} PDF{{ $submission->pdf_files_count > 1 ? 's' : '' }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-4 text-muted">
                    <i class="fas fa-inbox fa-3x mb-3"></i>
                    <p>No hay trabajos enviados aún</p>
                </div>
            @endif
        </div>
    </div>
    
    <!-- Acciones rápidas -->
    <div class="col-lg-4 mb-4">
        <div class="content-card p-4">
            <h5 class="mb-4"><i class="fas fa-bolt me-2"></i>Acciones Rápidas</h5>
            
            <div class="d-grid gap-3">
                <a href="{{ route('admin.submissions') }}?status=pending" class="btn btn-warning">
                    <i class="fas fa-clock me-2"></i>
                    Revisar Pendientes
                    <span class="badge bg-light text-warning ms-2">{{ $stats['pending_submissions'] }}</span>
                </a>
                
                <a href="{{ route('admin.submissions') }}" class="btn btn-primary">
                    <i class="fas fa-list me-2"></i>
                    Gestionar Trabajos
                </a>
                
                <a href="{{ route('admin.users') }}" class="btn btn-info">
                    <i class="fas fa-users me-2"></i>
                    Ver Usuarios
                </a>
                
                <hr>
                
                <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-eye me-2"></i>
                    Ver Sitio Web
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Gráfico de estado de trabajos -->
<div class="row">
    <div class="col-12">
        <div class="content-card p-4">
            <h5 class="mb-4"><i class="fas fa-chart-pie me-2"></i>Estado de los Trabajos</h5>
            
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <div class="progress mb-2" style="height: 20px;">
                        <div class="progress-bar bg-warning" role="progressbar" 
                             style="width: {{ $stats['total_submissions'] > 0 ? ($stats['pending_submissions'] / $stats['total_submissions']) * 100 : 0 }}%">
                        </div>
                    </div>
                    <strong>Pendientes</strong><br>
                    <span class="text-muted">{{ $stats['pending_submissions'] }} de {{ $stats['total_submissions'] }}</span>
                </div>
                
                <div class="col-md-4 mb-3">
                    <div class="progress mb-2" style="height: 20px;">
                        <div class="progress-bar bg-success" role="progressbar" 
                             style="width: {{ $stats['total_submissions'] > 0 ? ($stats['accepted_submissions'] / $stats['total_submissions']) * 100 : 0 }}%">
                        </div>
                    </div>
                    <strong>Aceptados</strong><br>
                    <span class="text-muted">{{ $stats['accepted_submissions'] }} de {{ $stats['total_submissions'] }}</span>
                </div>
                
                <div class="col-md-4 mb-3">
                    <div class="progress mb-2" style="height: 20px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                             style="width: {{ $stats['total_submissions'] > 0 ? ($stats['rejected_submissions'] / $stats['total_submissions']) * 100 : 0 }}%">
                        </div>
                    </div>
                    <strong>Rechazados</strong><br>
                    <span class="text-muted">{{ $stats['rejected_submissions'] }} de {{ $stats['total_submissions'] }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection