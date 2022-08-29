<div class="box box-info padding-1">
  <div class="box-body">

    <div class=" mt-2">
      {{ Form::label('Nombre') }}
      {{ Form::text('name', $branch->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
      {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class=" mt-2">
      {{ Form::label('Direccion') }}
      {{ Form::text('address', $branch->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
      {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class=" mt-2">
      {{ Form::label('Datos Complentarios') }}
      {{ Form::text('complementary_data', $branch->complementary_data, ['class' => 'form-control' . ($errors->has('complementary_data') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
      {!! $errors->first('complementary_data', '<div class="invalid-feedback">:message</div>') !!}
    </div>

  </div>
  <div class="box-footer pt mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
