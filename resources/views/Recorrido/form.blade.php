<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre Ruta') }}
            {{ Form::text('nombre_ruta', $recorrido->nombre_ruta, ['class' => 'form-control' . ($errors->has('nombre_ruta') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la Ruta']) }}
            {!! $errors->first('nombre_ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero Ruta') }}
            {{ Form::number('numero_ruta', $recorrido->numero_ruta, ['class' => 'form-control' . ($errors->has('numero_ruta') ? ' is-invalid' : ''), 'placeholder' => 'Numero de la Ruta']) }}
            {!! $errors->first('numero_ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('URL My maps') }}
            {{ Form::text('url_recorrido', $recorrido->url_recorrido, ['class' => 'form-control' . ($errors->has('url_recorrido') ? ' is-invalid' : ''), 'placeholder' => 'Url My maps']) }}
            {!! $errors->first('url_recorrido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre de la Empresa') }}
            {{ Form::select('id_empresa',$empresa, $recorrido->id_empresa, ['class' => 'form-control' . ($errors->has('id_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la Empresa']) }}
            {!! $errors->first('id_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Horario') }}
            {{ Form::select('id_horario',$horarios, $recorrido->id_horario, ['class' => 'form-control' . ($errors->has('id_horario') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Horario']) }}
            {!! $errors->first('id_horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('URL imagen_recorrido') }}
            {{ Form::text('imagen_recorrido', $recorrido->imagen_recorrido, ['class' => 'form-control' . ($errors->has('imagen_recorrido') ? ' is-invalid' : ''), 'placeholder' => 'Url Imagen del recorrido']) }}
            {!! $errors->first('imagen_recorrido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen del Recorrido') }}
            <br>
            @if(isset($empresa->imagen_recorrido))
        <img width="100" src="{{ asset('storage').'/'.$empresa->imagen_recorrido }}" alt="">
        @endif
            {!! $errors->first('imagen_recorrido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <div class="col-md-16">
                <input id="imagen_recorrido" name="imagen_recorrido" type="file" placeholder="Imagen del recorrido" class="form-control" >
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>
