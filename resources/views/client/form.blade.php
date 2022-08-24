<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class=" mt-2">
            {{ Form::label('Rut') }}
            {{ Form::text('rut', $client->rut, ['class' => 'form-control' . ($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" mt-2">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $client->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" mt-2">
            {{ Form::label('Apellido') }}
            {{ Form::text('last_name', $client->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" mt-2">
            {{ Form::label('email') }}
            {{ Form::text('email', $client->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" mt-2">
            {{ Form::label('Telefono') }}
            {{ Form::text('phone_number', $client->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" mt-2">
            {{ Form::label('razon_social') }}
            {{ Form::text('razon_social', $client->razon_social, ['class' => 'form-control' . ($errors->has('razon_social') ? ' is-invalid' : ''), 'placeholder' => 'Razon Social']) }}
            {!! $errors->first('razon_social', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" mt-2">
            {{ Form::label('Datos Complentarios') }}
            {{ Form::text('complementary_data', $client->complementary_data, ['class' => 'form-control' . ($errors->has('complementary_data') ? ' is-invalid' : ''), 'placeholder' => 'Complementary Data']) }}
            {!! $errors->first('complementary_data', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" mt-2">
            {{ Form::label('Imagen') }}
            {{ Form::text('profile_photo_path', $client->profile_photo_path, ['class' => 'form-control' . ($errors->has('profile_photo_path') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('profile_photo_path', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer pt mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>