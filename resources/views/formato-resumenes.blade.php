@extends('layouts.app')

@section('title', 'Formato de Resúmenes - CONEIA 2025')

@section('content')
<section class="page-header">
    <div class="w-100 pt-250 pb-120 position-relative" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <div class="page-header-inner text-center w-100">
                <h1 class="text-white mb-0">Formato de Resúmenes</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Inicio</a></li>
                        <li class="breadcrumb-item text-white">Trabajos</li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Formato de Resúmenes</li>
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
                <div class="col-lg-12">
                    <div class="format-content">
                        <h2 class="mb-4 text-center thm-clr">Formato Oficial para Presentación de Resúmenes</h2>
                        <p class="text-center mb-5">Los trabajos de investigación deberán seguir estrictamente el siguiente formato para ser considerados en el XXIV CONEIA 2025</p>
                        
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="format-box p-5 mb-5" style="background: #f8f9fa; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                                    <h3 class="mb-4 thm-clr">📝 Especificaciones Técnicas del Documento</h3>
                                    
                                    <div class="format-section mb-4">
                                        <h4 class="mb-3">📄 Formato del Documento</h4>
                                        <ul class="list-unstyled">
                                            <li>• <strong>Formato:</strong> Microsoft WORD (.docx)</li>
                                            <li>• <strong>Tamaño de papel:</strong> Carta (21,59 x 27,94 cm)</li>
                                            <li>• <strong>Márgenes:</strong> 2,5 cm en todos los lados</li>
                                            <li>• <strong>Fuente:</strong> Arial 11 pts para el cuerpo del texto</li>
                                            <li>• <strong>Interlineado:</strong> Simple</li>
                                            <li>• <strong>Alineación:</strong> Justificado, forma continua y sin espacios</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="format-section mb-4">
                                        <h4 class="mb-3">1. TÍTULO DEL TRABAJO</h4>
                                        <ul class="list-unstyled">
                                            <li>• <strong>Formato:</strong> Centrado, mayúsculas, negrita</li>
                                            <li>• <strong>Tamaño:</strong> Arial 14 pts</li>
                                            <li>• <strong>Extensión:</strong> Máximo 16 palabras</li>
                                            <li>• <strong>Contenido:</strong> Conciso con suficiente información del estudio</li>
                                            <li>• <strong>Evitar expresiones como:</strong> "análisis", "estudio detallado", "estudio preliminar"</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="format-section mb-4">
                                        <h4 class="mb-3">2. AUTORES E INSTITUCIONES</h4>
                                        <ul class="list-unstyled">
                                            <li>• <strong>Nombres:</strong> Centrados, separados del título por una línea</li>
                                            <li>• <strong>Formato:</strong> Negrita, Arial 12 pts</li>
                                            <li>• <strong>Datos institucionales:</strong> En cursiva debajo de los autores</li>
                                            <li>• <strong>Incluir:</strong> Nombre institución, dirección completa, teléfono, e-mail</li>
                                            <li>• <strong>Indicar:</strong> El autor que presentará el trabajo</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="format-section mb-4">
                                        <h4 class="mb-3">3. CUERPO DEL RESUMEN</h4>
                                        <ul class="list-unstyled">
                                            <li>• <strong>Límite estricto:</strong> Máximo 300 palabras</li>
                                            <li>• <strong>Formato:</strong> Arial 11 pts, interlineado simple, justificado</li>
                                            <li>• <strong>Forma:</strong> Continua y sin espacios adicionales</li>
                                            <li>• <strong>Estructura obligatoria:</strong></li>
                                            <li class="ml-3">- Introducción (incluyendo objetivos)</li>
                                            <li class="ml-3">- Métodos</li>
                                            <li class="ml-3">- Resultados más significativos (términos cuantitativos con significancia estadística)</li>
                                            <li class="ml-3">- Conclusiones con aporte científico claro</li>
                                            <li>• <strong>Prohibido:</strong> Gráficos, tablas, citas de referencias</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="format-section mb-4">
                                        <h4 class="mb-3">4. PALABRAS CLAVE (KEYWORDS)</h4>
                                        <ul class="list-unstyled">
                                            <li>• <strong>Cantidad:</strong> Exactamente 5 palabras clave</li>
                                            <li>• <strong>Orden:</strong> Alfabético</li>
                                            <li>• <strong>Requisito:</strong> Sin repetir las del título</li>
                                            <li>• <strong>Fuente recomendada:</strong> Tesauro AGROVOC (FAO) o RAE</li>
                                            <li>• <strong>Ubicación:</strong> Al final del texto</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="format-section mb-4">
                                        <h4 class="mb-3">5. EJE TEMÁTICO</h4>
                                        <ul class="list-unstyled">
                                            <li>• Indicar claramente el eje temático al que pertenece el trabajo:</li>
                                            <li class="ml-3">- Eje 1: Ingeniería e innovación en procesos alimentarios</li>
                                            <li class="ml-3">- Eje 2: Biotecnología y aprovechamiento de subproductos</li>
                                            <li class="ml-3">- Eje 3: Productos funcionales y valor agregado</li>
                                            <li class="ml-3">- Eje 4: Seguridad alimentaria e inocuidad</li>
                                            <li class="ml-3">- Eje 5: Biocombustible y energía</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="format-section mb-4">
                                        <h4 class="mb-3">5. ELEMENTOS ADICIONALES</h4>
                                        <ul class="list-unstyled">
                                            <li>• <strong>Abreviaturas:</strong> Escribir completo la primera vez, luego entre paréntesis</li>
                                            <li>• <strong>Marcas comerciales:</strong> Evitar mencionarlas</li>
                                            <li>• <strong>Agradecimientos:</strong> Opcional (empresas o instituciones financiadoras)</li>
                                            <li>• <strong>Área temática:</strong> Indicar al pie de página del documento</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="format-section mb-4">
                                        <h4 class="mb-3">🎯 Áreas Temáticas Disponibles</h4>
                                        <ul class="list-unstyled">
                                            <li>• Agroindustria no alimentaria</li>
                                            <li>• Alimentos funcionales</li>
                                            <li>• Biotecnología</li>
                                            <li>• Seguridad alimentaria</li>
                                            <li>• Tecnología postcosecha</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="download-section text-center mb-5">
                                    <h3 class="mb-4">📥 Descarga las Plantillas</h3>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="download-box p-4" style="background: white; border: 2px solid #667eea; border-radius: 10px;">
                                                <i class="fas fa-file-word" style="font-size: 48px; color: #667eea;"></i>
                                                <h5 class="mt-3 mb-3">Plantilla Word</h5>
                                                <p>Formato oficial editable para resúmenes</p>
                                                <a href="{{ asset('bases_concurso/Formato resumenes XXIV CONEIA 2025.docx') }}" class="thm-btn" download>
                                                    <i class="fas fa-download"></i> Descargar .DOCX
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="download-box p-4" style="background: white; border: 2px solid #dc3545; border-radius: 10px;">
                                                <i class="fas fa-file-pdf" style="font-size: 48px; color: #dc3545;"></i>
                                                <h5 class="mt-3 mb-3">Formato Oficial PDF</h5>
                                                <p>Especificaciones completas y ejemplo</p>
                                                <a href="{{ asset('bases_concurso/Formato resumenes XXIV CONEIA 2025.pdf') }}" class="thm-btn" style="background: #dc3545;" target="_blank">
                                                    <i class="fas fa-external-link-alt"></i> Ver PDF
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="contact-info text-center p-4" style="background: #e7f3ff; border-radius: 10px;">
                                    <h4 class="mb-3">¿Necesitas ayuda?</h4>
                                    <p class="mb-3">Si tienes dudas sobre el formato, contáctanos:</p>
                                    <div class="contact-details">
                                        <p class="mb-2"><i class="fas fa-envelope thm-clr"></i> cursos_iag@unamad.edu.pe</p>
                                        <p class="mb-0"><i class="fas fa-phone thm-clr"></i> Telf./Fax: (+51) 973693212</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection