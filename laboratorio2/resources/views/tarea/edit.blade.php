@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Tarea
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-3 ">

                @includeif('partials.errors')

                <div class="card card-default ">
                    <div class="card-header" style="background-color:lightblue;">
                        <span class="card-title">{{ __('Update') }} Tarea</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tareas.update', $tarea->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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
    div{
    top: 5%;
    left: 157%;
}

</style>
