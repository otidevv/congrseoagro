@extends('layouts.app')

@section('title', 'Hospedajes - CONEIA 2025 Unamad')

@section('styles')
<style>
    .hospedaje-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    
    .hospedaje-hero-wrap {
        position: relative;
        overflow: hidden;
        min-height: 400px;
    }
    
    .hospedaje-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        margin-bottom: 30px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hospedaje-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .hospedaje-header {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        padding: 20px;
        text-align: center;
    }
    
    .hospedaje-header.categoria-premium {
        background: linear-gradient(135deg, #ffd700 0%, #ffb347 100%);
    }
    
    .hospedaje-header.categoria-estandar {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    
    .hospedaje-header.categoria-economico {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    }
    
    .hospedaje-body {
        padding: 25px;
    }
    
    .precio-badge {
        background: #ff6b6b;
        color: white;
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: bold;
        display: inline-block;
        margin-bottom: 15px;
    }
    
    .servicio-item {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
    }
    
    .servicio-item i {
        color: #ff6b6b;
        margin-right: 10px;
        width: 20px;
    }
    
    .contacto-info {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 10px;
        margin-top: 20px;
    }
    
    .mapa-container {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        margin-top: 50px;
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hospedaje-hero">
    <div class="w-100 position-relative">
        <div class="hospedaje-hero-wrap pt-140 pb-40 position-relative w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="mb-4">🏨 Hospedajes en Puerto Maldonado</h1>
                        <p class="lead mb-3">Guía completa de alojamientos para el XXIV CONEIA 2025</p>
                        <p class="mb-0">Encuentra el hospedaje perfecto para tu estadía durante el congreso</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hospedajes Section -->
<section>
    <div class="w-100 pt-40 pb-80 position-relative">
        <div class="container">
        <div class="row">
            <!-- Categoría Premium -->
            <div class="col-12 mb-5">
                <h2 class="text-center mb-4" style="color: #ffd700;">
                    <i class="fas fa-crown"></i> Categoría Premium
                </h2>
                <div class="row">
                    <!-- Hotel Wasai Puerto Maldonado -->
                    <div class="col-lg-6 col-md-12">
                        <div class="hospedaje-card">
                            <div class="hospedaje-header categoria-premium">
                                <h4 class="mb-0">Hotel Wasai Puerto Maldonado</h4>
                                <span class="d-block mt-2">⭐⭐⭐⭐⭐ Premium</span>
                            </div>
                            <div class="hospedaje-body">
                                <div class="precio-badge" style="background: #ffd700;">
                                    S/. 280 - S/. 350 por noche
                                </div>
                                
                                <h5 class="mb-3">Servicios incluidos:</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="servicio-item">
                                            <i class="fas fa-wifi"></i>
                                            <span>WiFi gratuito</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-car"></i>
                                            <span>Estacionamiento</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-swimming-pool"></i>
                                            <span>Piscina</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-dumbbell"></i>
                                            <span>Gimnasio</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="servicio-item">
                                            <i class="fas fa-utensils"></i>
                                            <span>Restaurante</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-cocktail"></i>
                                            <span>Bar</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-concierge-bell"></i>
                                            <span>Room service</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-spa"></i>
                                            <span>Spa</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="contacto-info">
                                    <h6><i class="fas fa-map-marker-alt"></i> Ubicación:</h6>
                                    <p class="mb-2">Jr. Billinghurst 351, Puerto Maldonado</p>
                                    <a href="https://maps.app.goo.gl/QjiFpaGxjR4XH5xZ9" target="_blank" class="btn btn-outline-primary btn-sm mb-3">
                                        <i class="fas fa-map-marked-alt"></i> Ver en Google Maps
                                    </a>
                                    <h6><i class="fas fa-phone"></i> Contacto:</h6>
                                    <p class="mb-2">📞 (082) 573-964 / (082) 571-064</p>
                                    <p class="mb-0">📧 reservas@wasai.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hotel Don Carlos -->
                    <div class="col-lg-6 col-md-12">
                        <div class="hospedaje-card">
                            <div class="hospedaje-header categoria-premium">
                                <h4 class="mb-0">Hotel Don Carlos</h4>
                                <span class="d-block mt-2">⭐⭐⭐⭐ Premium</span>
                            </div>
                            <div class="hospedaje-body">
                                <div class="precio-badge" style="background: #ffd700;">
                                    S/. 200 - S/. 280 por noche
                                </div>
                                
                                <h5 class="mb-3">Servicios incluidos:</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="servicio-item">
                                            <i class="fas fa-wifi"></i>
                                            <span>WiFi gratuito</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-car"></i>
                                            <span>Estacionamiento</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-swimming-pool"></i>
                                            <span>Piscina</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-utensils"></i>
                                            <span>Restaurante</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="servicio-item">
                                            <i class="fas fa-cocktail"></i>
                                            <span>Bar</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-wind"></i>
                                            <span>Aire acondicionado</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-tv"></i>
                                            <span>TV por cable</span>
                                        </div>
                                        <div class="servicio-item">
                                            <i class="fas fa-shield-alt"></i>
                                            <span>Seguridad 24h</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="contacto-info">
                                    <h6><i class="fas fa-map-marker-alt"></i> Ubicación:</h6>
                                    <p class="mb-2">Av. León Velarde 1271, Puerto Maldonado</p>
                                    <a href="https://www.google.com/maps/search/Hotel+Don+Carlos+León+Velarde+1271+Puerto+Maldonado" target="_blank" class="btn btn-outline-primary btn-sm mb-3">
                                        <i class="fas fa-map-marked-alt"></i> Ver en Google Maps
                                    </a>
                                    <h6><i class="fas fa-phone"></i> Contacto:</h6>
                                    <p class="mb-2">📞 (082) 571-029</p>
                                    <p class="mb-0">📧 reservas@hoteldoncarlos.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categoría Estándar -->
            <div class="col-12 mb-5">
                <h2 class="text-center mb-4" style="color: #4facfe;">
                    <i class="fas fa-hotel"></i> Categoría Estándar
                </h2>
                <div class="row">
                    <!-- Hotel según PDF oficial -->
                    <div class="col-lg-4 col-md-6">
                        <div class="hospedaje-card">
                            <div class="hospedaje-header categoria-estandar">
                                <h4 class="mb-0">Hotel Anaconda</h4>
                                <span class="d-block mt-2">⭐⭐⭐ Estándar</span>
                            </div>
                            <div class="hospedaje-body">
                                <div class="precio-badge" style="background: #4facfe;">
                                    S/. 120 - S/. 180 por noche
                                </div>
                                
                                <h6 class="mb-3">Servicios:</h6>
                                <div class="servicio-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi gratuito</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-car"></i>
                                    <span>Estacionamiento</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-utensils"></i>
                                    <span>Restaurante</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-wind"></i>
                                    <span>Aire acondicionado</span>
                                </div>
                                
                                <div class="contacto-info">
                                    <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Av. León Velarde 431</p>
                                    <a href="https://www.google.com/maps/search/Hotel+Anaconda+León+Velarde+431+Puerto+Maldonado" target="_blank" class="btn btn-outline-primary btn-sm mb-2">
                                        <i class="fas fa-map-marked-alt"></i> Ver en Google Maps
                                    </a>
                                    <p class="mb-0"><i class="fas fa-phone"></i> (082) 571-134</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hotel Wilson -->
                    <div class="col-lg-4 col-md-6">
                        <div class="hospedaje-card">
                            <div class="hospedaje-header categoria-estandar">
                                <h4 class="mb-0">Hotel Wilson</h4>
                                <span class="d-block mt-2">⭐⭐⭐ Estándar</span>
                            </div>
                            <div class="hospedaje-body">
                                <div class="precio-badge" style="background: #4facfe;">
                                    S/. 100 - S/. 150 por noche
                                </div>
                                
                                <h6 class="mb-3">Servicios:</h6>
                                <div class="servicio-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi gratuito</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-car"></i>
                                    <span>Estacionamiento</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-wind"></i>
                                    <span>Aire acondicionado</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-tv"></i>
                                    <span>TV por cable</span>
                                </div>
                                
                                <div class="contacto-info">
                                    <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Jr. González Vigil 396</p>
                                    <a href="https://www.google.com/maps/search/Hotel+Wilson+Jr+González+Vigil+396+Puerto+Maldonado" target="_blank" class="btn btn-outline-primary btn-sm mb-2">
                                        <i class="fas fa-map-marked-alt"></i> Ver en Google Maps
                                    </a>
                                    <p class="mb-0"><i class="fas fa-phone"></i> (082) 571-035</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hospedaje Royal Inn -->
                    <div class="col-lg-4 col-md-6">
                        <div class="hospedaje-card">
                            <div class="hospedaje-header categoria-estandar">
                                <h4 class="mb-0">Hospedaje Royal Inn</h4>
                                <span class="d-block mt-2">⭐⭐⭐ Estándar</span>
                            </div>
                            <div class="hospedaje-body">
                                <div class="precio-badge" style="background: #4facfe;">
                                    S/. 90 - S/. 140 por noche
                                </div>
                                
                                <h6 class="mb-3">Servicios:</h6>
                                <div class="servicio-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi gratuito</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-wind"></i>
                                    <span>Aire acondicionado</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-tv"></i>
                                    <span>TV por cable</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Seguridad 24h</span>
                                </div>
                                
                                <div class="contacto-info">
                                    <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Av. 26 de Diciembre</p>
                                    <a href="https://www.google.com/maps/search/Hospedaje+Royal+Inn+Av+26+de+Diciembre+Puerto+Maldonado" target="_blank" class="btn btn-outline-primary btn-sm mb-2">
                                        <i class="fas fa-map-marked-alt"></i> Ver en Google Maps
                                    </a>
                                    <p class="mb-0"><i class="fas fa-phone"></i> (082) 572-145</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categoría Económica -->
            <div class="col-12 mb-5">
                <h2 class="text-center mb-4" style="color: #43e97b;">
                    <i class="fas fa-bed"></i> Categoría Económica
                </h2>
                <div class="row">
                    <!-- Hostal Español -->
                    <div class="col-lg-3 col-md-6">
                        <div class="hospedaje-card">
                            <div class="hospedaje-header categoria-economico">
                                <h5 class="mb-0">Hostal Español</h5>
                                <span class="d-block mt-2">⭐⭐ Económico</span>
                            </div>
                            <div class="hospedaje-body">
                                <div class="precio-badge" style="background: #43e97b;">
                                    S/. 50 - S/. 80 por noche
                                </div>
                                
                                <div class="servicio-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-fan"></i>
                                    <span>Ventilador</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-shower"></i>
                                    <span>Baño privado</span>
                                </div>
                                
                                <div class="contacto-info">
                                    <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Jr. Piura 355</p>
                                    <a href="https://www.google.com/maps/search/Hostal+Español+Jr+Piura+355+Puerto+Maldonado" target="_blank" class="btn btn-outline-success btn-sm mb-2">
                                        <i class="fas fa-map-marked-alt"></i> Ver en Google Maps
                                    </a>
                                    <p class="mb-0"><i class="fas fa-phone"></i> (082) 571-063</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hostal Rey Port -->
                    <div class="col-lg-3 col-md-6">
                        <div class="hospedaje-card">
                            <div class="hospedaje-header categoria-economico">
                                <h5 class="mb-0">Hostal Rey Port</h5>
                                <span class="d-block mt-2">⭐⭐ Económico</span>
                            </div>
                            <div class="hospedaje-body">
                                <div class="precio-badge" style="background: #43e97b;">
                                    S/. 45 - S/. 70 por noche
                                </div>
                                
                                <div class="servicio-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-fan"></i>
                                    <span>Ventilador</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-tv"></i>
                                    <span>TV</span>
                                </div>
                                
                                <div class="contacto-info">
                                    <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Jr. León Velarde 457</p>
                                    <a href="https://www.google.com/maps/search/Hostal+Rey+Port+Jr+León+Velarde+457+Puerto+Maldonado" target="_blank" class="btn btn-outline-success btn-sm mb-2">
                                        <i class="fas fa-map-marked-alt"></i> Ver en Google Maps
                                    </a>
                                    <p class="mb-0"><i class="fas fa-phone"></i> (082) 571-177</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hospedaje Oasis -->
                    <div class="col-lg-3 col-md-6">
                        <div class="hospedaje-card">
                            <div class="hospedaje-header categoria-economico">
                                <h5 class="mb-0">Hospedaje Oasis</h5>
                                <span class="d-block mt-2">⭐⭐ Económico</span>
                            </div>
                            <div class="hospedaje-body">
                                <div class="precio-badge" style="background: #43e97b;">
                                    S/. 40 - S/. 65 por noche
                                </div>
                                
                                <div class="servicio-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi básico</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-shower"></i>
                                    <span>Baño compartido</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-fan"></i>
                                    <span>Ventilador</span>
                                </div>
                                
                                <div class="contacto-info">
                                    <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Jr. Arequipa 380</p>
                                    <a href="https://www.google.com/maps/search/Hospedaje+Oasis+Jr+Arequipa+380+Puerto+Maldonado" target="_blank" class="btn btn-outline-success btn-sm mb-2">
                                        <i class="fas fa-map-marked-alt"></i> Ver en Google Maps
                                    </a>
                                    <p class="mb-0"><i class="fas fa-phone"></i> (082) 572-090</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hostal Moderno -->
                    <div class="col-lg-3 col-md-6">
                        <div class="hospedaje-card">
                            <div class="hospedaje-header categoria-economico">
                                <h5 class="mb-0">Hostal Moderno</h5>
                                <span class="d-block mt-2">⭐⭐ Económico</span>
                            </div>
                            <div class="hospedaje-body">
                                <div class="precio-badge" style="background: #43e97b;">
                                    S/. 35 - S/. 60 por noche
                                </div>
                                
                                <div class="servicio-item">
                                    <i class="fas fa-fan"></i>
                                    <span>Ventilador</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-shower"></i>
                                    <span>Baño privado</span>
                                </div>
                                <div class="servicio-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Seguridad</span>
                                </div>
                                
                                <div class="contacto-info">
                                    <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Jr. Puno 267</p>
                                    <a href="https://www.google.com/maps/search/Hostal+Moderno+Jr+Puno+267+Puerto+Maldonado" target="_blank" class="btn btn-outline-success btn-sm mb-2">
                                        <i class="fas fa-map-marked-alt"></i> Ver en Google Maps
                                    </a>
                                    <p class="mb-0"><i class="fas fa-phone"></i> (082) 571-091</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Información adicional -->
        <div class="row">
            <div class="col-12">
                <div class="mapa-container">
                    <h3 class="mb-4"><i class="fas fa-map-marked-alt thm-clr"></i> Ubicación de Hospedajes en Puerto Maldonado</h3>
                    <p class="mb-4">Todos los hospedajes listados se encuentran estratégicamente ubicados en el centro de Puerto Maldonado, con fácil acceso a la Universidad Nacional Amazónica de Madre de Dios (UNAMAD).</p>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info-item text-center mb-3">
                                <i class="fas fa-map-marker-alt thm-clr fa-2x mb-3"></i>
                                <h5>Distancia promedio a UNAMAD</h5>
                                <p class="mb-0">5 - 15 minutos en taxi/mototaxi</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-item text-center mb-3">
                                <i class="fas fa-plane thm-clr fa-2x mb-3"></i>
                                <h5>Aeropuerto Padre Aldamiz</h5>
                                <p class="mb-0">10 - 20 minutos del centro</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-item text-center mb-3">
                                <i class="fas fa-utensils thm-clr fa-2x mb-3"></i>
                                <h5>Restaurantes cercanos</h5>
                                <p class="mb-0">Variedad gastronómica a pocos minutos</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="alert alert-info mt-4">
                        <h5><i class="fas fa-info-circle"></i> Recomendaciones importantes:</h5>
                        <ul class="mb-0 text-left">
                            <li>Se recomienda reservar con anticipación durante las fechas del congreso (10-14 de noviembre)</li>
                            <li>Los precios pueden variar según temporada y disponibilidad</li>
                            <li>Confirmar servicios incluidos al momento de la reserva</li>
                            <li>Solicitar comprobante de pago para gastos de hospedaje</li>
                        </ul>
                    </div>
                    
                    <a class="thm-btn" href="{{ asset('bases_concurso/GUÍA DE HOSPEDAJES_PUERTO MALDONADO_XXIV CONEIA MADRE DE DIOS.pdf') }}" download>
                        <i class="fas fa-download"></i> Descargar Guía Completa de Hospedajes
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection