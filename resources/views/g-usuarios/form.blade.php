
<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Nombre') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('name', $gUser->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Mail') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('email', $gUser->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('password') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('password', '', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>       
        
        <div class="form-group" style="float: left; width: 100%; margin-bottom: 10px;">
            <div style="float: left; width: 10%; margin-top: 3px;">
            <span style="float: left; min-width: 150px;">
            {{ Form::label('Reingrese password') }}
            </div>
            <div style="float: left; width: 90%;">
            {{ Form::text('password2', '', ['class' => 'form-control' . ($errors->has('password2') ? ' is-invalid' : ''), 'placeholder' => 'password2']) }}
            {!! $errors->first('password2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div> 

    </div>

    <div class="box-footer mt20" style="width: 100%; float: left;">
        <br/>
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</div>