@extends('layouts.app')

@section('template_title')
    Tarea
@endsection

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-3">
                <form action="{{ route('tareas.index') }}" method="POST">
                    @csrf
                    <div class="form-group text-center">
                        <label for="filtroCategoria">Filtrar por categoría:</label>
                        <select id="filtroCategoria" name="filtroCategoria" class="form-control">
                            <option value="">Todas</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}" {{ old('filtroCategoria') == $categoria->id ? 'selected' : '' }}>
                                    {{ $categoria->nombreCategoria }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2"></div>
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </form>
            </div>

            <div class="col-sm-3">
                <form action="{{ route('tareas.index') }}" method="POST">
                    @csrf
                    <div class="form-group text-center">
                        <label for="filtroCompletado">Filtrar según completada/incompleta</label>
                        <select id="filtroCompletado" name="filtroCompletado" class="form-control">
                            <option value="">Todos</option>
                            <option value="1" {{ old('filtroCompletado') == '1' ? 'selected' : '' }}>
                                Completadas
                            </option>
                            <option value="0" {{ old('filtroCompletado') == '0' ? 'selected' : '' }}>
                                Incompletas
                            </option>
                        </select>
                    </div>
                    <div class="mb-2"></div>
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </form>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Tareas ordenadas por fecha de vencimiento') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('tareas.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Fecha Vencimiento</th>
                                        <th>Categoria</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tareas as $tarea)
                                        @if ((old('filtroCompletado') === null || $tarea->completado == old('filtroCompletado')) &&
                                            (old('filtroCategoria') === null || $tarea->categoria->id == old('filtroCategoria')))
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $tarea->nombre }}</td>
                                                <td>{{ $tarea->descripcion }}</td>
                                                <td>{{ $tarea->fechaVencimiento }}</td>
                                                <td>{{ $tarea->categoria->nombreCategoria }}</td>
                                                <td>
                                                    @if ($tarea->completado == 1)
                                                        {{ 'Completada' }}
                                                    @else
                                                        {{ 'Incompleta' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary" href="{{ route('tareas.show', $tarea->id) }}">
                                                            <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                                        </a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('tareas.edit', $tarea->id) }}">
                                                            <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tareas->links() !!}
            </div>
        </div>
    </div>
@endsection

<style>
    .forma{
        left: 100%;

    }



</style>