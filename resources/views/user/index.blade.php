@extends('layouts.app')


@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-4">
          <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Lista de Usuarios</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
            </div>
          </div>
        </div>
      </div>
      <div class="content-body mt-5">
        <section id="css-classes" class="card">
          <div class="card-header">
            <h4 class="card-title">Usuarios</h4>
            <div class="float-right">
              <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                {{ __('Crear Nuevo') }}
              </a>
            </div>
          </div>
          <div class="card-body">
            <div class="card-text">

              <div class="table-responsive">
                <table id="data_clients" class="table table-striped table-hover">
                  <thead class="thead">
                    <tr>
                      <th>Id</th>

                      <th>Rut</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Telefono</th>
                      <th>Rol</th>
                      <th>Mi imagen</th>

                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>

                        <td>{{ $user->rut }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->cel_phone }}</td>
                        <td>
                          @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $roleName)
                              {{ $roleName }}
                            @endforeach
                          @endif
                        </td>
                        <td>{{ $user->profile_photo_path }}</td>

                        <td class="bx-fw">
                          <form id="deleted" action="{{ route('users.destroy', $user->id) }}" method="POST">
                            <a class=" nav" href="{{ route('users.show', $user->id) }}"><i
                                class='bx bxs-show bx-sm'></i>
                            </a>
                            <a class="nav" href="{{ route('users.edit', $user->id) }}"><i
                                class=' bx bxs-edit-alt bx-sm'></i></a>
                            @csrf
                            @method('DELETE')
                            <a onclick="this.closest('form').submit();return false;" class=" nav "><i
                                class=' bx bxs-trash-alt bx-sm'></i></a>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
@section('js')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $('#data_clients').DataTable();
    ducument.getElementById("deleted").addEventListener("click", function(e) {
      event.preventDefault()
    });
  </script>
@endsection
@endsection
