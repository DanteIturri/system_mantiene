@extends('layouts.app')



@section('content')
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-12 mb-2 ">
          <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">2 Columns</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
              <ol class="breadcrumb p-0 mb-0 pl-1">
                <li class="breadcrumb-item"><a href="sk-layout-2-columns.html"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Starter Kit</a>
                </li>
                <li class="breadcrumb-item active">2 Columns
                </li>
              </ol>
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
            <h4 class="card-title">CSS Classes</h4>
            <div class="float-right">
              <a href="{{ route('branches.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                {{ __('Crear Nuevo') }}
              </a>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('branches.store') }}" role="form" enctype="multipart/form-data">
              @csrf

              @include('branch.form')

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
