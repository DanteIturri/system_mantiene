<div class="form-body mt-1">
    <div class="row">
        <div class="col-md-6  col-12">
            <div class="form-label-group">
                <div class="position-relative has-icon-left">
                    {{ Form::select('roles[]', $roles, $userRole, ['class' => 'form-control ']) }}
                    <div class="form-control-position">
                        <i class='bx bx-id-card'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-label-group">
                <div class="position-relative has-icon-left">
                    <input type="text" name="rut" id="fname-icon" class="form-control" name="fname-icon"
                        placeholder="Rut" value="{{ old( 'rut' , $user->rut) }}">
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
                        placeholder="Nombre" value="{{ old( 'name' , $user->name) }}">
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
                        placeholder="Email" value="{{ old( 'email' , $user->email) }}">
                    <div class="form-control-position">
                        <i class='bx bx-envelope'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6  col-12">
            <div class="form-label-group">
                <div class="position-relative has-icon-left">
                    <input type="text" name="cel_phone" id="fname-icon" class="form-control" name="fname-icon"
                        placeholder="Telefono" value="{{ old( 'cel_phone' , $user->cel_phone) }}">
                    <div class="form-control-position">
                        <i class='bx bx-mobile-alt'></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-12 col-12">
            <p class=" pl-2 h5 text-muted"><i class='bx bx-list-plus bx-sm'></i> Permisos</p>

            <div class="form-label-group mt-1">
                @foreach ($permissions as $value)
                {{ Form::checkbox('permission[]', $value->id, (in_array($value->id, $userPermissions) ? true :
                in_array($value->id, $rolePermissions)) ? true : false, ['class' => 'name ml-1']) }}
                <span class="">{{ $value->name }}</span>
                @endforeach
            </div>
        </div>

        <div class="col-md-12 col-12 mt-0">

        </div>



        <div class="col-12 d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-primary mr-1 ">Guardar</button>

        </div>
    </div>
</div>