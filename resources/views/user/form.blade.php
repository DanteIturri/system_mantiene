<div class="box box-info padding-1">
  <div class="box-body">

    <div class=" mt-2">
      {{ Form::label('Rut') }}
      {{ Form::text('rut', $user->rut, ['class' => 'form-control' . ($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
      {!! $errors->first('rut', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class=" mt-2">
      {{ Form::label('Nombre') }}
      {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
      {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class=" mt-2">
      {{ Form::label('email') }}
      {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
      {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class=" mt-2">
      {{ Form::label('Contraseña') }}
      {{ Form::text('password', $user->password = '', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
      {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class=" mt-2">
      {{ Form::label('confirmar Contraseña') }}
      {{ Form::text('confirm-password', $user->password = '', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
      {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class=" mt-2">
      {{ Form::label('Celular') }}
      {{ Form::text('cel_phone', $user->cel_phone, ['class' => 'form-control' . ($errors->has('cel_phone') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
      {!! $errors->first('cel_phone', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class=" mt-2">
      {{ Form::label('Rol') }}
      {{ Form::select('roles[]', $roles, [], ['class' => 'form-control select2 ', 'multiple' => 'multiple']) }}
    </div>
    <div class=" mt-2">
      @foreach ($permissions as $value)
        <label>{{ Form::checkbox('permissions[]', $value->id, false, ['class' => 'name']) }}
          {{ $value->name }}</label>
        <br />
      @endforeach
    </div>

    <div class=" mt-2">
      {{ Form::label('Imagen') }}
      {{ Form::text('profile_photo_path', $user->profile_photo_path, ['class' => 'form-control' . ($errors->has('profile_photo_path') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
      {!! $errors->first('profile_photo_path', '<div class="invalid-feedback">:message</div>') !!}
    </div>

  </div>
  <div class="box-footer pt mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
