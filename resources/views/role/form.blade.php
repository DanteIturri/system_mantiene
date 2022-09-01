<div class="box box-info padding-1">
  <div class="box-body">


    <div class="row">
      <div class="col-3 mt-2">
        {{ Form::label('Nombre') }}
        {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
        'placeholder' => 'Nombre']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
      </div>

      <div class=" col-9  mt-2">
        <span class="ml-1">{{ Form::label('Permisos')}}</span><br>
        @foreach ($permissions as $value)

        <label class="ml-1 ">{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false,
          ['class' => 'name bx-fw']) }}
          {{ $value->name }}</label>

        @endforeach
      </div>

    </div>

  </div>
  <div class="box-footer d-flex justify-content-end pt mt-3">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</div>