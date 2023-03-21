@extends('adminlte::page')

@section('template_title')
    {{ $conductor->name ?? 'Show Conductor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Conductor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('conductores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $conductor->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $conductor->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $conductor->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Id Recorrido:</strong>
                            {{ $conductor->id_recorrido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
