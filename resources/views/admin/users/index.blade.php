@extends('admin.layout')

@section('title', 'Gestión de Usuarios')
@section('page-title', 'Usuarios Registrados')

@section('content')
<div class="content-card p-4 mb-4">
    <div class="row">
        <div class="col-lg-8">
            <form method="GET" class="d-flex gap-3">
                <div class="flex-fill">
                    <input type="text" name="search" class="form-control" 
                           placeholder="Buscar por nombre, email, universidad o documento..." 
                           value="{{ request('search') }}">
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i> Buscar
                </button>
                @if(request('search'))
                    <a href="{{ route('admin.users') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-times"></i> Limpiar
                    </a>
                @endif
            </form>
        </div>
        <div class="col-lg-4 text-end">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left"></i> Dashboard
            </a>
        </div>
    </div>
</div>

<div class="content-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5><i class="fas fa-users me-2"></i>Lista de Usuarios ({{ $users->total() }})</h5>
        <div class="text-muted">
            Mostrando {{ $users->firstItem() ?? 0 }}-{{ $users->lastItem() ?? 0 }} de {{ $users->total() }}
        </div>
    </div>
    
    @if($users->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Usuario</th>
                        <th>Universidad</th>
                        <th>Documento</th>
                        <th>Trabajos</th>
                        <th>Registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <div>
                                    <strong class="d-block">{{ $user->name }}</strong>
                                    <small class="text-muted">
                                        <i class="fas fa-envelope me-1"></i>{{ $user->email }}
                                    </small>
                                </div>
                            </td>
                            <td>
                                <span class="text-wrap">{{ $user->university }}</span>
                            </td>
                            <td>
                                <code>{{ $user->document_number }}</code>
                            </td>
                            <td>
                                <span class="badge bg-primary">
                                    {{ $user->submissions_count }} trabajo{{ $user->submissions_count != 1 ? 's' : '' }}
                                </span>
                            </td>
                            <td>
                                <small>
                                    {{ $user->created_at->format('d/m/Y') }}<br>
                                    <span class="text-muted">{{ $user->created_at->diffForHumans() }}</span>
                                </small>
                            </td>
                            <td>
                                <div class="btn-group-vertical btn-group-sm">
                                    <a href="{{ route('admin.users.show', $user) }}" 
                                       class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-eye"></i> Ver
                                    </a>
                                    
                                    @if($user->submissions_count > 0)
                                        <a href="{{ route('admin.submissions') }}?search={{ urlencode($user->email) }}" 
                                           class="btn btn-outline-info btn-sm">
                                            <i class="fas fa-file-alt"></i> Trabajos
                                        </a>
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
            {{ $users->withQueryString()->links() }}
        </div>
    @else
        <div class="text-center py-5 text-muted">
            <i class="fas fa-users-slash fa-4x mb-3"></i>
            <h5>No se encontraron usuarios</h5>
            <p>
                @if(request('search'))
                    No hay usuarios que coincidan con los criterios de búsqueda.
                @else
                    Aún no se han registrado usuarios.
                @endif
            </p>
            @if(request('search'))
                <a href="{{ route('admin.users') }}" class="btn btn-primary">
                    Ver Todos los Usuarios
                </a>
            @endif
        </div>
    @endif
</div>

<!-- Estadísticas rápidas -->
<div class="row mt-4">
    <div class="col-md-3">
        <div class="stats-card p-3 text-center">
            <h4 class="text-primary">{{ $users->count() }}</h4>
            <small class="text-muted">Usuarios en esta página</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card p-3 text-center">
            <h4 class="text-success">{{ $users->where('submissions_count', '>', 0)->count() }}</h4>
            <small class="text-muted">Con trabajos enviados</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card p-3 text-center">
            <h4 class="text-info">{{ $users->sum('submissions_count') }}</h4>
            <small class="text-muted">Total trabajos</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card p-3 text-center">
            <h4 class="text-warning">{{ $users->where('submissions_count', 0)->count() }}</h4>
            <small class="text-muted">Sin trabajos aún</small>
        </div>
    </div>
</div>
@endsection