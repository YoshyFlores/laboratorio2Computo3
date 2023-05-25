@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Categoria
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-3">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header" style="background-color:lightblue;">
                        <span class="card-title">{{ __('Update') }} Categoria</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categorias.update', $categoria->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('categoria.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
