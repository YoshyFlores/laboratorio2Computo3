@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Tarea
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-3">

                @includeif('partials.errors')

                <div class="card card-default" >
                    <div class="card-header" style="background-color:lightblue;">
                        <span class="card-title">{{ __('Create') }} Tarea</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tareas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tarea.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    div {
    top: 5%;
    left: 157%;
    }

</style>
