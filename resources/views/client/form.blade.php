<div class="form-body mt-1">
    <div class="row">

        <div class="col-md-6 col-12">
            <div class="form-label-group">
                <div class="position-relative has-icon-left">
                    <input type="text" name="rut" id="fname-icon" class="form-control" name="fname-icon"
                        placeholder="Rut" value="{{ old( 'rut' , $client->rut) }}">
                    <div class="form-control-position">
                        <i class='bx bx-id-card'></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-12">
            <div class="form-label-group">
                <div class="position-relative has-icon-left">
                    <input type="text" name="name" id="fname-icon" class="form-control" name="fname-icon"
                        placeholder="Nombre" value="{{ old( 'name' , $client->name) }}">
                    <div class="form-control-position">
                        <i class="bx bx-user"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-label-group">
                <div class="position-relative has-icon-left">
                    <input type="text" name="email" id="fname-icon" class="form-control" name="fname-icon"
                        placeholder="Email" value="{{ old( 'email' , $client->email) }}">
                    <div class="form-control-position">
                        <i class='bx bx-envelope'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6  col-12">
            <div class="form-label-group">
                <div class="position-relative has-icon-left">
                    <input type="text" name="phone_number" id="fname-icon" class="form-control" name="fname-icon"
                        placeholder="Telefono" value="{{ old( 'phone_number' , $client->phone_number) }}">
                    <div class="form-control-position">
                        <i class='bx bx-mobile-alt'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6  col-12">
            <div class="form-label-group">
                <div class="position-relative has-icon-left">
                    <input type="text" name="razon_social" id="fname-icon" class="form-control" name="fname-icon"
                        placeholder="Razón social" value="{{ old( 'razon_social' , $client->razon_social) }}">
                    <div class="form-control-position">
                        <i class='bx bx-briefcase-alt-2'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6  col-12">
            <div class="form-label-group">
                <div class="position-relative has-icon-left">
                    <textarea class="form-control" name="" id="" cols="20" rows="4"
                        placeholder="Datos complementarios"></textarea>
                    <div class="form-control-position">
                        <i class='bx bx-comment-dots'></i>
                    </div>
                </div>
            </div>
        </div>




        <div class="col-md-12 col-12 mt-0">

        </div>



        <div class="col-12 d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-primary mr-1 ">Guardar</button>

        </div>
    </div>
</div>
{{-- <div class="box box-info padding-1">
    <div class="box-body">



        <div class=" mt-2">
            {{ Form::label('razon_social') }}
            {{ Form::text('razon_social', $client->razon_social, ['class' => 'form-control' .
            ($errors->has('razon_social') ? ' is-invalid' : ''), 'placeholder' => 'Razon Social']) }}
            {!! $errors->first('razon_social', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" mt-2">
            {{ Form::label('Datos Complentarios') }}
            {{ Form::text('complementary_data', $client->complementary_data, ['class' => 'form-control' .
            ($errors->has('complementary_data') ? ' is-invalid' : ''), 'placeholder' => 'Complementary Data']) }}
            {!! $errors->first('complementary_data', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer pt mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div> --}}