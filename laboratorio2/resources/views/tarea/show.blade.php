@extends('layouts.app')

@section('template_title')
    {{ $tarea->name ?? "{{ __('Show') Tarea" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tarea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tareas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tarea->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tarea->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fechavencimiento:</strong>
                            {{ $tarea->fechaVencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $tarea->categoria_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
