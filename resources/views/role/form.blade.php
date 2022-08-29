<div class="box box-info padding-1">
  <div class="box-body">


    <div class=" mt-2">
      {{ Form::label('Nombre') }}
      {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
      {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class=" mt-2">
      @foreach ($permissions as $value)
        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
          {{ $value->name }}</label>
        <br />
      @endforeach
    </div>


  </div>
  <div class="box-footer pt mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
