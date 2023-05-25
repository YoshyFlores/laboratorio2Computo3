@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? "{{ __('Show') Categoria" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header" style="background-color:lightblue;">
                        <div class="float-right">
                            <span class="card-title">{{ __('Show') }} Categoria</span>
                        </div>
                        <br/>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm float-right"  data-placement="left" href="{{ route('categorias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrecategoria:</strong>
                            {{ $categoria->nombreCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $categoria->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    div {
    top: 5%;
    left: 157%;}

</style>