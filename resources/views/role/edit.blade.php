@extends('layouts.app')



@section('content')
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-12 mb-2 ">
          <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Editar Rol</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">

            </div>
          </div>
        </div>
      </div>
      <div class="content-body ">
        <!-- Description -->

        <!--/ Description -->
        <!-- CSS Classes -->
        <section id="css-classes" class="card">
          <div class="card-header">
            <h4 class="card-title">Editar Rol</h4>
            <div class="float-right">
              <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                {{ __('Editar Nuevo') }}
              </a>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('roles.update', $role->id) }}" role="form"
              enctype="multipart/form-data">
              {{ method_field('PATCH') }}
              @csrf

              @include('role.form')

            </form>
          </div>
        </section>
        <!--/ CSS Classes -->
        <!-- HTML Markup -->

        <!--/ HTML Markup -->

      </div>
    </div>
  </div>
@endsection
