@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? 'Show Client' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $client->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $client->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $client->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $client->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $client->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Razon Social:</strong>
                            {{ $client->razon_social }}
                        </div>
                        <div class="form-group">
                            <strong>Datos complementario:</strong>
                            {{ $client->complementary_data }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $client->profile_photo_path }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
