<div class="form-body mt-1">
  <div class="row">

    <div class="col-md-6 col-12">
      <div class="form-label-group">
        <div class="position-relative has-icon-left">
          <input type="text" name="name" id="fname-icon" class="form-control" name="fname-icon" placeholder="Nombre"
            value="{{ old( 'name' , $branch->name) }}">
          <div class="form-control-position">
            <i class='bx bx-building'></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="form-label-group">
        <div class="position-relative has-icon-left">
          <input type="text" name="address" id="fname-icon" class="form-control" name="fname-icon"
            placeholder="Dirección" value="{{ old( 'address' , $branch->address) }}">
          <div class="form-control-position">
            <i class='bx bx-right-arrow-circle'></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="form-label-group">
        <div class="position-relative has-icon-left">
          <textarea class="form-control" name="complementary_data" id="" cols="20" rows="4"
            placeholder="Datos complementarios"></textarea>
          <div class="form-control-position">
            <i class='bx bx-comment-dots'></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12"></div>

    <div class="col-12 d-flex justify-content-end mt-4">
      <button type="submit" class="btn btn-primary mr-1 ">Guardar</button>

    </div>
  </div>
</div>
{{-- <div class="box box-info padding-1">
  <div class="box-body">

    <div class=" mt-2">
      {{ Form::label('Nombre') }}
      {{ Form::text('name', $branch->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
      'placeholder' => 'Nombre']) }}
      {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class=" mt-2">
      {{ Form::label('Direccion') }}
      {{ Form::text('address', $branch->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' :
      ''), 'placeholder' => 'Direccion']) }}
      {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class=" mt-2">
      {{ Form::label('Datos Complentarios') }}
      {{ Form::text('complementary_data', $branch->complementary_data, ['class' => 'form-control' .
      ($errors->has('complementary_data') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
      {!! $errors->first('complementary_data', '<div class="invalid-feedback">:message</div>') !!}
    </div>

  </div>
  <div class="box-footer pt mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div> --}}