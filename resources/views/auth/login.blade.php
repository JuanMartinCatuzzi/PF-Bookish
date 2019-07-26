@extends('layouts.app')

@section('content')
                    <div class="titulo-container">
                      <h1 class="seccion-titulo">Iniciar Sesión</h1>
                      <img src="/img/fondo-enc-register-09.jpg" class="fondo-titulo">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-container">
                            <label for="email" class="form-label">{{ __('E-Mail') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-container">
                            <label for="password" class="form-label">{{ __('Contraseña') }}</label>


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-input" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="input-container">

                                <div class="input-container">
                                    <input class="form-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                        </div>

                        <div class="input-container">
                                <button type="submit" class="boton-enviar form-input">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
@endsection
