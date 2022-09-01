@extends('layouts.app')



@section('content')
<div class="app-content content ">

  <div class="content-wrapper">

    <div class="content-body ">
      <!-- Description -->

      <!--/ Description -->
      <!-- CSS Classes -->
      <section id="css-classes" class="card">
        <div class="card-header">


          <div class="card-body">
            <div class="divider">
              <div class="divider-text "><i class='bx bx-user bx-md bx-border-circle'></i></div>
            </div>
            <div class="divider">
              <div class=" mb-1">
                <h5>Crear Usuario</h5>
              </div>
            </div>
            <form class="form" method="POST" action="{{ route('users.store') }}" role="form"
              enctype="multipart/form-data">
              @csrf

              @include('user.form')

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