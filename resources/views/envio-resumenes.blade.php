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
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4 text-center thm-clr">Sistema de Envío de Trabajos de Investigación</h2>
                    <p class="text-center mb-5">Sigue los pasos detallados para enviar tu trabajo de investigación al XXIV CONEIA 2025</p>
                    
                    <div class="row">
                        <!-- Etapas del proceso -->
                        <div class="col-lg-12 mb-5">
                            <div class="timeline-section">
                                <h3 class="text-center mb-4">📅 Cronograma de Envío</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="timeline-box p-4" style="background: #e8f5e9; border-radius: 10px; border-left: 4px solid #4caf50;">
                                            <h4 style="color: #4caf50;"><i class="fas fa-calendar-check"></i> ETAPA I - Resúmenes</h4>
                                            <p class="mb-2"><strong>Apertura:</strong> 1 de julio de 2025</p>
                                            <p class="mb-2"><strong>Cierre:</strong> 15 de septiembre de 2025</p>
                                            <p class="mb-2"><strong>Costo:</strong> GRATUITO</p>
                                            <p class="mb-0"><strong>Notificación:</strong> 30 de septiembre de 2025</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="timeline-box p-4" style="background: #fff3e0; border-radius: 10px; border-left: 4px solid #ff9800;">
                                            <h4 style="color: #ff9800;"><i class="fas fa-file-alt"></i> ETAPA II - Trabajo Completo</h4>
                                            <p class="mb-2"><strong>Apertura:</strong> 1 de octubre de 2025</p>
                                            <p class="mb-2"><strong>Cierre:</strong> 15 de octubre de 2025</p>
                                            <p class="mb-2"><strong>Costo:</strong> Comunicación oral: S/. 50 | Póster: S/. 40</p>
                                            <p class="mb-0"><strong>Notificación:</strong> 25 de octubre de 2025</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Instrucciones de envío -->
                        <div class="col-lg-8 mx-auto">
                            <div class="submission-steps mb-5">
                                <h3 class="text-center mb-4">📧 Instrucciones para el Envío</h3>
                                
                                <div class="step-box p-4 mb-4" style="background: white; border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                                    <div class="step-header d-flex align-items-center mb-3">
                                        <div class="step-number" style="background: #667eea; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                            <strong>1</strong>
                                        </div>
                                        <h4 class="mb-0">Prepara tu documentación</h4>
                                    </div>
                                    <ul class="list-unstyled ml-5">
                                        <li>✓ Resumen en formato PDF (máx. 300 palabras)</li>
                                        <li>✓ Carta de originalidad firmada</li>
                                        <li>✓ Constancia de matrícula de todos los autores</li>
                                        <li>✓ DNI escaneado del autor principal</li>
                                        <li>✓ CTI Vitae y ORCID ID activos</li>
                                    </ul>
                                </div>
                                
                                <div class="step-box p-4 mb-4" style="background: white; border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                                    <div class="step-header d-flex align-items-center mb-3">
                                        <div class="step-number" style="background: #667eea; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                            <strong>2</strong>
                                        </div>
                                        <h4 class="mb-0">Formato del asunto del correo</h4>
                                    </div>
                                    <div class="ml-5">
                                        <p class="mb-2">Usa el siguiente formato según tu categoría:</p>
                                        <div class="format-examples p-3" style="background: #f8f9fa; border-radius: 5px;">
                                            <p class="mb-1"><code>ORAL_NOMBRE_UNIVERSIDAD_EJE#</code></p>
                                            <p class="mb-1"><code>POSTER_NOMBRE_UNIVERSIDAD_EJE#</code></p>
                                            <p class="mb-1">Ejemplo: <code>ORAL_JUAN_PEREZ_UNAMAD_EJE1</code></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="step-box p-4 mb-4" style="background: white; border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                                    <div class="step-header d-flex align-items-center mb-3">
                                        <div class="step-number" style="background: #667eea; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                            <strong>3</strong>
                                        </div>
                                        <h4 class="mb-0">Envía tu trabajo</h4>
                                    </div>
                                    <div class="ml-5">
                                        <div class="email-send-box text-center p-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 10px;">
                                            <i class="fas fa-envelope" style="font-size: 48px; color: white;"></i>
                                            <h5 class="text-white mt-3 mb-3">Correo oficial para envío:</h5>
                                            <div class="email-display p-3" style="background: white; border-radius: 5px;">
                                                <h4 class="thm-clr mb-0">cursos_iag@unamad.edu.pe</h4>
                                            </div>
                                            <p class="text-white mt-3 mb-0">Recibirás confirmación en 48 horas</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="step-box p-4 mb-4" style="background: white; border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                                    <div class="step-header d-flex align-items-center mb-3">
                                        <div class="step-number" style="background: #667eea; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                            <strong>4</strong>
                                        </div>
                                        <h4 class="mb-0">Realiza el pago (Solo ETAPA II)</h4>
                                    </div>
                                    <div class="ml-5">
                                        <p class="mb-3">Una vez aceptado tu resumen, realiza el pago según tu modalidad:</p>
                                        <div class="payment-info p-3" style="background: #f8f9fa; border-radius: 5px;">
                                            <h6 class="mb-3">💳 Cuenta para depósito:</h6>
                                            <p class="mb-2"><strong>Titular:</strong> Lila Ruby Isuiza Pérez</p>
                                            <p class="mb-2"><strong>Yape:</strong> +51 962618961</p>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="price-tag text-center p-2" style="background: white; border: 2px solid #667eea; border-radius: 5px;">
                                                        <p class="mb-0"><strong>Comunicación Oral</strong></p>
                                                        <h5 class="thm-clr mb-0">S/. 50</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="price-tag text-center p-2" style="background: white; border: 2px solid #667eea; border-radius: 5px;">
                                                        <p class="mb-0"><strong>Póster</strong></p>
                                                        <h5 class="thm-clr mb-0">S/. 40</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Requisitos importantes -->
                            <div class="requirements-section mb-5">
                                <h3 class="text-center mb-4">⚠️ Requisitos Importantes</h3>
                                <div class="requirements-box p-4" style="background: #ffebee; border-radius: 10px; border: 1px solid #ffcdd2;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="mb-3"><i class="fas fa-check-circle" style="color: #4caf50;"></i> Requisitos Obligatorios</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-2">• Máximo 3 estudiantes por trabajo</li>
                                                <li class="mb-2">• 1 docente asesor con grado de maestro/doctor</li>
                                                <li class="mb-2">• Trabajos de los últimos 5 años</li>
                                                <li class="mb-2">• Plagio menor al 20% (verificado con Turnitin)</li>
                                                <li class="mb-2">• CTI Vitae actualizado</li>
                                                <li>• ORCID ID activo</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="mb-3"><i class="fas fa-times-circle" style="color: #f44336;"></i> Causales de Rechazo</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-2">• Formato incorrecto del resumen</li>
                                                <li class="mb-2">• Documentación incompleta</li>
                                                <li class="mb-2">• Plagio superior al 20%</li>
                                                <li class="mb-2">• Envío fuera de fecha</li>
                                                <li class="mb-2">• Trabajo presentado en otros eventos</li>
                                                <li>• Falta de pago (ETAPA II)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Categorías de participación -->
                            <div class="categories-section mb-5">
                                <h3 class="text-center mb-4">🎯 Modalidades de Presentación</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="category-card p-4" style="background: white; border: 2px solid #667eea; border-radius: 10px; height: 100%;">
                                            <div class="text-center mb-3">
                                                <i class="fas fa-microphone" style="font-size: 48px; color: #667eea;"></i>
                                            </div>
                                            <h4 class="text-center mb-3">Comunicación Oral</h4>
                                            <ul class="list-unstyled">
                                                <li class="mb-2">• 20 minutos de exposición</li>
                                                <li class="mb-2">• 5 minutos para preguntas</li>
                                                <li class="mb-2">• Presentación en PowerPoint</li>
                                                <li class="mb-2">• Máximo 20 diapositivas</li>
                                                <li class="mb-2">• Costo: S/. 50</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="category-card p-4" style="background: white; border: 2px solid #667eea; border-radius: 10px; height: 100%;">
                                            <div class="text-center mb-3">
                                                <i class="fas fa-image" style="font-size: 48px; color: #667eea;"></i>
                                            </div>
                                            <h4 class="text-center mb-3">Póster Científico</h4>
                                            <ul class="list-unstyled">
                                                <li class="mb-2">• 10 minutos de exposición</li>
                                                <li class="mb-2">• 5 minutos para preguntas</li>
                                                <li class="mb-2">• Formato: 90cm x 120cm</li>
                                                <li class="mb-2">• Impresión a cargo del autor</li>
                                                <li class="mb-2">• Costo: S/. 40</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- FAQ Section -->
                            <div class="faq-section">
                                <h3 class="text-center mb-4">❓ Preguntas Frecuentes</h3>
                                <div class="accordion" id="faqAccordion">
                                    <div class="card mb-3">
                                        <div class="card-header" id="faq1">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1">
                                                    ¿Puedo enviar más de un trabajo?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse1" class="collapse" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                Sí, cada universidad puede enviar máximo 2 trabajos por categoría (oral y póster).
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card mb-3">
                                        <div class="card-header" id="faq2">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2">
                                                    ¿Qué pasa si mi resumen es rechazado?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse2" class="collapse" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                Recibirás retroalimentación sobre los aspectos a mejorar y podrás volver a enviar antes de la fecha límite.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card mb-3">
                                        <div class="card-header" id="faq3">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse3">
                                                    ¿Cuándo debo realizar el pago?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse3" class="collapse" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                El pago se realiza únicamente en la ETAPA II, después de que tu resumen haya sido aceptado.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Contacto -->
                            <div class="contact-support text-center mt-5 p-4" style="background: #e3f2fd; border-radius: 10px;">
                                <h4 class="mb-3">¿Necesitas ayuda con el envío?</h4>
                                <p class="mb-3">Nuestro equipo está disponible para resolver tus dudas</p>
                                <div class="contact-buttons">
                                    <a href="https://wa.me/51962618961" class="thm-btn mr-3" target="_blank">
                                        <i class="fab fa-whatsapp"></i> WhatsApp
                                    </a>
                                    <a href="mailto:cursos_iag@unamad.edu.pe" class="thm-btn">
                                        <i class="fas fa-envelope"></i> Email
                                    </a>
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