@extends('auth.layout.authlayout')
<!-- login page start -->
@section('content')

<section class="row flexbox-container">
  <div class="col-xl-8 col-10">
    <div class="card bg-authentication mb-0">
      <div class="row m-0">
        <!-- register section left -->
        <div class="col-md-6 col-12 px-0">
          <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
            <div class="card-header pb-1">
              <div class="card-title">
                <h4 class="text-center mb-2">Registro</h4>
              </div>
            </div>
            <div class="text-center">
              <p> <small> Ingrese sus datos para registrarse y ser parte de nuestra gran comunidad</small>
              </p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('register') }}">

                <div class="form-group  mb-50">
                  <label for="inputfirstname4">Nombre</label>
                  <input name="name"type="text" class="form-control" id="inputfirstname4" placeholder="Nombre"
                    value="{{ old('name') }}">
                </div>

                <div class="form-group mb-50">
                  <label class="text-bold-600" for="exampleInputEmail1">Email
                  </label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address"
                    value="{{ old('email') }}">
                </div>
                <div class="form-group mb-2">
                  <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group mb-2">
                  <label class="text-bold-600" for="exampleInputPassword1">Confirmar Password</label>
                  <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary glow position-relative w-100">REGISTRARME<i id="icon-arrow"
                    class="bx bx-right-arrow-alt"></i></button>
              </form>
              <hr>
              <div class="text-center"><small class="mr-25">¿Ya tienes una Cuenta?</small><a
                  href="/login"><small>Ingresa aquí</small>
                </a></div>
            </div>
          </div>
        </div>
        <!-- image section right -->
        <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
          <img class="img-fluid" src="./app-assets/images/pages/register.png" alt="branding logo">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
{{-- @extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
              <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                  value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password')
                }}</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                  autocomplete="new-password">
              </div>
            </div>

            <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection --}}