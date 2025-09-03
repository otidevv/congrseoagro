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
    <div class="w-100 pt-60 pb-60 position-relative">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success text-center mb-4">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4 text-center thm-clr">Sistema de Envío de Trabajos de Investigación</h2>
                    <p class="text-center mb-5">Bienvenido {{ Auth::user()->name }}. Completa el formulario para enviar tu trabajo al XXIV CONEIA 2025</p>
                    
                    <div class="row">
                        <!-- Información del usuario -->
                        <div class="col-lg-4 mb-4">
                            <div class="user-info-card p-4" style="background: #e3f2fd; border-radius: 15px; height: fit-content;">
                                <h4 class="mb-3"><i class="fas fa-user"></i> Tu Información</h4>
                                <p class="mb-2"><strong>Nombre:</strong> {{ Auth::user()->name }}</p>
                                <p class="mb-2"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                                <p class="mb-2"><strong>Documento:</strong> {{ Auth::user()->document_number }}</p>
                                <p class="mb-0"><strong>Universidad:</strong> {{ Auth::user()->university }}</p>
                            </div>
                        </div>
                        
                        <!-- Formulario de envío -->
                        <div class="col-lg-8">
                            <div class="submission-form-container p-5" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                                <div class="text-center mb-4">
                                    <i class="fas fa-upload" style="font-size: 48px; color: #667eea;"></i>
                                    <h3 class="mt-3 mb-3">Enviar Trabajo de Investigación</h3>
                                </div>

                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <form action="{{ route('submissions.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="row">
                                        <!-- Información básica -->
                                        <div class="col-12 mb-4">
                                            <h5 class="mb-3"><i class="fas fa-info-circle"></i> Información del Trabajo</h5>
                                            
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Título del Trabajo *</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                                       id="title" name="title" value="{{ old('title') }}" 
                                                       placeholder="Ingresa el título de tu trabajo de investigación" required>
                                                <small class="form-text text-muted">Título claro y descriptivo del trabajo</small>
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="abstract" class="form-label">Resumen del Trabajo *</label>
                                                <textarea class="form-control @error('abstract') is-invalid @enderror" 
                                                          id="abstract" name="abstract" rows="8" 
                                                          placeholder="Describe tu trabajo de investigación, incluyendo objetivos, metodología, resultados principales y conclusiones..." 
                                                          required>{{ old('abstract') }}</textarea>
                                                <div class="d-flex justify-content-between">
                                                    <small class="form-text text-muted">Resumen completo del trabajo de investigación</small>
                                                    <small class="form-text text-muted"><span id="charCount">0</span>/2000 caracteres</small>
                                                </div>
                                                @error('abstract')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Archivos PDF -->
                                        <div class="col-12 mb-4">
                                            <h5 class="mb-3"><i class="fas fa-file-pdf"></i> Archivos PDF</h5>
                                            <p class="text-muted mb-3">Sube todos los archivos PDF relacionados con tu trabajo (máximo 5 archivos, 10MB cada uno)</p>
                                            
                                            <div class="upload-area p-4 mb-3" style="border: 2px dashed #667eea; border-radius: 10px; background: #f8f9ff;">
                                                <div class="text-center mb-3">
                                                    <i class="fas fa-cloud-upload-alt" style="font-size: 48px; color: #667eea;"></i>
                                                    <h6 class="mt-2 mb-2">Arrastra y suelta tus archivos PDF aquí</h6>
                                                    <p class="text-muted">o haz clic para seleccionarlos</p>
                                                </div>
                                                
                                                <input type="file" class="form-control @error('pdf_files') is-invalid @enderror @error('pdf_files.*') is-invalid @enderror" 
                                                       id="pdf_files" name="pdf_files[]" accept=".pdf" multiple required 
                                                       style="opacity: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
                                                
                                                <div id="filesList" class="files-preview mt-3"></div>
                                            </div>
                                            
                                            <small class="form-text text-muted">
                                                <i class="fas fa-info-circle"></i> 
                                                Puedes subir entre 1 y 5 archivos PDF. Cada archivo no debe exceder 10MB. 
                                                Ejemplos: resumen, trabajo completo, anexos, figuras, etc.
                                            </small>
                                            
                                            @error('pdf_files')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                            @error('pdf_files.*')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="thm-btn mr-3" style="padding: 15px 40px;">
                                            <i class="fas fa-paper-plane"></i> Enviar Trabajo
                                        </button>
                                        <a href="{{ route('submissions.index') }}" class="thm-btn" style="background: #6c757d;">
                                            <i class="fas fa-list"></i> Ver Mis Trabajos
                                        </a>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
// Manejo de múltiples archivos PDF
document.addEventListener('DOMContentLoaded', function() {
    const abstractTextarea = document.getElementById('abstract');
    const charCount = document.getElementById('charCount');
    const fileInput = document.getElementById('pdf_files');
    const uploadArea = document.querySelector('.upload-area');
    const filesList = document.getElementById('filesList');
    
    // Contador de caracteres para el resumen
    if (abstractTextarea && charCount) {
        abstractTextarea.addEventListener('input', function() {
            const currentLength = this.value.length;
            charCount.textContent = currentLength;
            
            if (currentLength > 2000) {
                charCount.style.color = '#dc3545';
                this.style.borderColor = '#dc3545';
            } else if (currentLength > 1800) {
                charCount.style.color = '#ffc107';
                this.style.borderColor = '#ffc107';
            } else {
                charCount.style.color = '#28a745';
                this.style.borderColor = '#ced4da';
            }
        });
        
        // Inicializar contador
        const initialLength = abstractTextarea.value.length;
        charCount.textContent = initialLength;
    }
    
    // Manejo de archivos PDF múltiples
    if (fileInput && uploadArea && filesList) {
        // Drag and drop
        uploadArea.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.style.borderColor = '#667eea';
            this.style.backgroundColor = '#e8f0fe';
        });
        
        uploadArea.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.style.borderColor = '#667eea';
            this.style.backgroundColor = '#f8f9ff';
        });
        
        uploadArea.addEventListener('drop', function(e) {
            e.preventDefault();
            this.style.borderColor = '#667eea';
            this.style.backgroundColor = '#f8f9ff';
            
            const files = Array.from(e.dataTransfer.files).filter(file => file.type === 'application/pdf');
            if (files.length > 0) {
                handleFiles(files);
            }
        });
        
        // Cambio en input de archivos
        fileInput.addEventListener('change', function() {
            const files = Array.from(this.files);
            handleFiles(files);
        });
        
        function handleFiles(files) {
            // Validar número máximo de archivos
            if (files.length > 5) {
                alert('Máximo 5 archivos PDF permitidos');
                return;
            }
            
            // Validar que todos sean PDF
            const nonPdfFiles = files.filter(file => file.type !== 'application/pdf');
            if (nonPdfFiles.length > 0) {
                alert('Solo se permiten archivos PDF');
                return;
            }
            
            // Validar tamaño de archivos
            const oversizedFiles = files.filter(file => file.size > 10 * 1024 * 1024);
            if (oversizedFiles.length > 0) {
                alert('Cada archivo no debe exceder 10MB');
                return;
            }
            
            displayFiles(files);
        }
        
        function displayFiles(files) {
            filesList.innerHTML = '';
            
            if (files.length === 0) return;
            
            const filesContainer = document.createElement('div');
            filesContainer.className = 'files-container';
            
            files.forEach((file, index) => {
                const fileItem = document.createElement('div');
                fileItem.className = 'file-item d-flex justify-content-between align-items-center p-3 mb-2';
                fileItem.style.cssText = 'background: white; border: 1px solid #e9ecef; border-radius: 8px;';
                
                fileItem.innerHTML = `
                    <div class="file-info">
                        <i class="fas fa-file-pdf text-danger mr-2"></i>
                        <strong>${file.name}</strong>
                        <small class="text-muted ml-2">(${formatFileSize(file.size)})</small>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeFile(${index})">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                
                filesContainer.appendChild(fileItem);
            });
            
            filesList.appendChild(filesContainer);
            
            // Mostrar resumen
            const summary = document.createElement('div');
            summary.className = 'files-summary mt-3 p-2';
            summary.style.cssText = 'background: #e8f5e9; border-radius: 5px; font-size: 0.9rem;';
            summary.innerHTML = `
                <i class="fas fa-check-circle text-success"></i> 
                <strong>${files.length}</strong> archivo${files.length > 1 ? 's' : ''} seleccionado${files.length > 1 ? 's' : ''} 
                (${formatFileSize(files.reduce((total, file) => total + file.size, 0))})
            `;
            
            filesList.appendChild(summary);
        }
        
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }
        
        // Función global para remover archivos
        window.removeFile = function(index) {
            const dt = new DataTransfer();
            const files = Array.from(fileInput.files);
            
            files.forEach((file, i) => {
                if (i !== index) {
                    dt.items.add(file);
                }
            });
            
            fileInput.files = dt.files;
            displayFiles(Array.from(dt.files));
        };
    }
});
</script>
@endsection