@extends('layouts.app')


@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-4">
          <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Listado Sucursales</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">

            </div>
          </div>
        </div>
      </div>
      <div class="content-body mt-5">
        <!-- Description -->

        <!--/ Description -->
        <!-- CSS Classes -->
        <section id="css-classes" class="card">
          <div class="card-header">
            <h4 class="card-title">Suscursales</h4>
            <div class="float-right">
              <a href="{{ route('branches.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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


                      <th>Nombre</th>
                      <th>Dirección</th>
                      <th>Datos complementarios</th>


                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($brachs as $brach)
                      <tr>
                        <td>{{ $brach->id }}</td>

                        <td>{{ $brach->name }}</td>
                        <td>{{ $brach->address }}</td>
                        <td>{{ $brach->complementary_data }}</td>

                        <td>
                          <form action="{{ route('braches.destroy', $brach->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('braches.show', $brach->id) }}"><i
                                class="fa fa-fw fa-eye"></i> Mostrar datos</a>
                            <a class="btn btn-sm btn-success" href="{{ route('braches.edit', $brach->id) }}"><i
                                class="fa fa-fw fa-edit"></i> Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                              Borrar</button>
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
        <!--/ CSS Classes -->
        <!-- HTML Markup -->

        <!--/ HTML Markup -->

      </div>
    </div>
  </div>

@section('js')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>



  <script>
    $('#data_clients').DataTable();
  </script>
@endsection
@endsection
