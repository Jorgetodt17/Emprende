@extends('layouts.frontend')

@section('content')
        <section>
 
            <link href= "{{ asset('css\login.css') }}" rel="stylesheet" />
          
            <!--<section style="padding-top: 150px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card text-white bg-dark card-header"> {{ __('Login') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Recuerdame') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Ingresar') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('¿Olvidaste tu contraseña?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            
            -->
        <div class="container-fluid">
            <div class="container">
            <div class="row no-gutter">
                <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center justify-content-center py-5">
                    <div class="container logconteiner">
                    <div class="row ">
                        <div class="col">
                        <h2 class="login-heading offset-1 col-md-9  ">  <div> {{ __('Login') }}</div></h2>
                                            <div >
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf

                                                    <div class="form-label-group row">
                                               
                                                        <label for="email" class="offset-1 col-md-9" >{{ __('Email') }}</label>

                                                        <div class="offset-1 col-md-9 ">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-label-group row">
                                                 
                                                        <label for="password" class="offset-1 col-md-9" >{{ __('Contraseña') }}</label>

                                                        <div class="offset-1 col-md-9">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <br>
                                                
                                                    <div class="form-label-group row">
                                                        <div class="  offset-1 col-md-9">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                <label class="form-check-label" for="remember">
                                                                    {{ __('Recuerdame') }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-label-group row mb-0">
                                                        <div class="offset-1 col-md-9" >
                                                            <button type="submit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">
                                                                {{ __('Ingresar') }}
                                                            </button>

                                                            @if (Route::has('password.request'))
                                                            <div class="text-center">
                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    {{ __('¿Olvidaste tu contraseña?') }}
                                                                </a>
                                                            </div>
                                                            @endif
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
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
@endsection