@extends('layouts.frontend')

@section('content')

<link href= "{{ asset('css\login.css') }}" rel="stylesheet" />
     <section >

     <div class="container">
                <div class="row no-gutter">
                    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-register"></div>
                    <div class="col">
                    <div class="login d-flex align-items-center py-5">
                        <div class="container logconteiner">
                        <div class="row">
                            <div class="offset-1 col-md-10">
                                <h3>{{ __('Registrar nuevo usuario') }}</h3>
                                <br>
                            </div >
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <label for="name" class="offset-1 col-md-10">{{ __('Nombre') }}</label>
                                <div class="form-label-group row">
                                    
                                    

                                    <div class="offset-1 col-md-10">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <label for="email" class="offset-1 col-md-9">{{ __('Email') }}</label>
                                <div class="form-label-group row">
                                 

                                    <div class="offset-1 col-md-10">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <label for="password" class="offset-1 col-md-10 col-form-label ">{{ __('Contraseña') }}</label>
                                <div class="form-label-group row">
                                   

                                    <div class="offset-1 col-md-10">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <label for="password-confirm" class="offset-1 col-md-9 ">{{ __('Confirmar contraseña') }}</label>
                                <div class="form-label-group row">
                                

                                    <div class="offset-1 col-md-10">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-label-group row">
                                    <div class="offset-1 col-md-10">
                                        <div class="text-center form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                            <label class="form-check-label" for="remember">
                                                {{ __('He leído y acepto los términos y condiciones') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="offset-1 col-md-10">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">
                                            {{ __('Registrarse') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>



            <!--  <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="">
                        <div class="login-heading offset-1 col-md-9">{{ __('Registrar nuevo usuario') }}</div>

                        <div >
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-label-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-label-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-label-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-label-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-label-group row">
                                    <div class="offset-1 col-md-9">
                                        <div class="text-center form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                            <label class="form-check-label" for="remember">
                                                {{ __('He leído y acepto los términos y condiciones') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrarse') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>-->




    </section>
@endsection
