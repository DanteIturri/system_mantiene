@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
@endsection
@section('content')
<div class="app-content content mt-2 ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">

        <div class="content-body  mt-1">
            <section id="css-classes" class="card ">
                <div class="card-header">
                    <div class="float-left d-flex justify-content-center align-items-center mb-0">
                        <i class='bx bx-user-circle bx-lg'></i>
                        <h4 class="mb-0 mr-2 font-weight-bold">Listado de Clientes</h4>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('clients.create') }}" class="btn float-right" data-placement="left">
                            <i class='bx bxs-user-plus bx-md '></i>
                        </a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="card-text"></div>

                    <div class="table-responsive">
                        <table id="data_clients" class="table table-striped table-hover " style="width: 100%">
                            <thead class="thead">
                                <tr>
                                    <th>Id</th>

                                    <th>Rut</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Razon social</th>
                                    <th>Datos complementarios</th>
                                    <th>Imagen</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>

                                    <td>{{ $client->rut }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->phone_number }}</td>
                                    <td>{{ $client->razon_social }}</td>
                                    <td>{{ $client->complementary_data }}</td>
                                    <td>{{ $client->profile_photo_path }}</td>

                                    <td class="bx-fw">
                                        <form id="deleted" action="{{ route('clients.destroy', $client->id) }}"
                                            method="POST">
                                            <a class=" nav" href="{{ route('clients.show', $client->id) }}"><i
                                                    class='bx bxs-show bx-sm'></i>
                                            </a>
                                            <a class="nav" href="{{ route('clients.edit', $client->id) }}"><i
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
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script>
    $('#data_clients').DataTable({
      responsive:true,
      autoWidth:true,
      scrollY: true,
     
      "language": {
            "lengthMenu": "Mostrar _MENU_ campos por página",
            "zeroRecords": "No se encontró nada - lo siento",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ total resultados)",
            "search": "Buscar:",
            "paginate":{
                "next":"Siguiente",
                "previous":"Anterior",
            }
        }
    });
    ducument.getElementById("deleted").addEventListener("click", function(e) {
      event.preventDefault()
    });
</script>
@endsection
@endsection