@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach( $errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $conductor->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Conductor']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $conductor->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido conductor']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Recorrido') }}
            {{ Form::select('id_recorrido',$recorridos, $conductor->id_recorrido, ['class' => 'form-control' . ($errors->has('id_recorrido') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del recorrido ']) }}
            {!! $errors->first('id_recorrido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Url foto') }}
            {{ Form::text('foto', $conductor->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Url Foto']) }}
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Foto') }}
            <br>

        <div class="col-md-16">
            <input id="foto" name="foto" type="file" placeholder="Imagen de la conductor" class="form-control" >
        </div>
        </div>
        @if(isset($conductor->foto))
        <img width="100" src="{{ asset('storage').'/'.$conductor->foto }}" alt="">
        @endif
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>
