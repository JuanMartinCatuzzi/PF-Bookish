@extends('layouts.app')
@section('content')

                    <div class="titulo-container">
                      <h1 class="seccion-titulo">REGISTRO</h1>
                      <img src="/img/fondo-enc-register-09.jpg" class="fondo-titulo">
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="formulario">
                        @csrf
                        <div class="input-container">

                            <label for="name" class="form-label">Nombre</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror form-input" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                        <div class="input-container">
                            <label for="surname" class="form-label">{{ __('Apellido') }}</label>
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror form-input" name="surname" value="{{ old('surname') }}"  autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-container">
                            <label for="email" class="form-label">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-input" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-container">
                            <label for="password" class="firm-label">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-input" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-container">
                            <label for="password-confirm" class="form-label">{{ __('Repetir Contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control form-input" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="input-container">
                            <label for="bDate" class="form-label">{{ __('Fecha de Nacimiento') }}</label>
                                <input id="bDate" type="date" class="form-control @error('bDate') is-invalid @enderror form-input" name="bDate"  required>
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-container">
                          <label for="province">Provincia:</label>
                          <select class="form-input" name="province">
                            <option value="Seleccionar" selected>Seleccionar</option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="input-container">
                          <label for="city">Ciudad:</label>
                          <input type="text" class="form-control form-input" name="city" value="{{ old('city') }}"  autocomplete="city" autofocus>
                        </div>
                        <div class="input-container">
                          <label for="street">Calle:</label>
                          <input type="text" class="form-control form-input" name="street" value="{{ old('street') }}"  autocomplete="street" autofocus>
                        </div>
                        <div class="input-container">
                          <label for="number">Altura:</label>
                          <input type="number" class="form-control form-input" name="number" value="{{ old('number') }}"  autocomplete="number" autofocus>
                        </div>
                        <div class="input-container">
                            <label for="occupation" class="form-label">{{ __('Ocupación') }}</label>
                                <select class="form-input" name="occupation">
                                  <option value="Seleccionar" selected>Seleccionar</option>
                                  <option value="Estudiante">Estudiante</option>
                                  <option value="Empleado">Empleada/o</option>
                                  <option value="Desmpleado">Desmpleada/o</option>
                                  <option value="Autonomo">Autónoma/o</option>
                                  <option value="Jubilado">Jubilada/o</option>
                                </select>
                        </div>

                        <div class="input-container">
                                <button type="submit" class="boton-enviar form-input">
                                    ENVIAR
                                </button>
                        </div>
                    </form>
                    <div class="input-container">
                      <hr>
                    </div>
                    <div class="registrarse-con-container">
                      <label class="form-label label-registrarse-con">O REGISTRARSE CON:</label>
                      <div class="botones-container">
                        <button type="button" class="boton-enviar boton-registrarse-con">FACEBOOK</button>
                        <button type="button" class="boton-enviar boton-registrarse-con">GOOGLE</button>
                      </div>
                    </div>
@endsection
