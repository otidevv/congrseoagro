@extends('layouts.app')

@section('title', 'Iniciar Sesión - CONEIA 2025')

@section('content')
<section class="page-header">
    <div class="w-100 pt-250 pb-120 position-relative" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <div class="page-header-inner text-center w-100">
                <h1 class="text-white mb-0">Iniciar Sesión</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Inicio</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Iniciar Sesión</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="w-100 pt-60 pb-60 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-form-container p-5" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="text-center mb-5">
                            <i class="fas fa-sign-in-alt" style="font-size: 48px; color: #667eea;"></i>
                            <h2 class="mt-3 mb-3">Bienvenido de nuevo</h2>
                            <p>Inicia sesión para enviar tus trabajos de investigación</p>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="mb-4">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                       id="password" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="thm-btn mb-4" style="padding: 15px 50px;">
                                    <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                                </button>
                                
                                <p class="mb-0">
                                    ¿No tienes una cuenta? 
                                    <a href="{{ route('register') }}" class="thm-clr">Regístrate aquí</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection