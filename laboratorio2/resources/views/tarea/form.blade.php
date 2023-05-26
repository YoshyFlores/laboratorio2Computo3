<div class="box box-info padding-1" >
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tarea->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::textarea('descripcion', $tarea->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''),'style' => 'height: 100px', 'placeholder' => 'Descripción']) }}
           
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
       
       
        </div>
        <br>

        <div class="form-group">
            {{ Form::label('fecha de Vencimiento') }}
            {{ Form::date('fechaVencimiento', isset($tarea->fechaVencimiento) ? (is_string($tarea->fechaVencimiento) ? $tarea->fechaVencimiento : $tarea->fechaVencimiento->format('Y-m-d')) : null, ['min' => now()->format('Y-m-d'), 'class' => 'form-control' . ($errors->has('fechaVencimiento') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fechaVencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <br>
        <div class="form-group">
            {{ Form::label('categoría') }}
           
            {{ Form::select('categoria_id', ['' => 'Selecciona una categoría'] + $categorias->pluck('nombreCategoria', 'id')->toArray(), $tarea->categoria_id, ['class' => 'form-select' . ($errors->has('categoria_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
    
        </div>
        <br>
        @if(Route::currentRouteName() == 'tareas.edit')
            <div class="form-group">
                {{ Form::label('completado') }}
                {{ Form::checkbox('completado', 1, $tarea->completado, ['class' => 'form-check-input']) }}
            </div>
        @endif

    </div> 
    <br>
    <br>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-info">{{ __('Submit') }}</button>
    </div>
</div>

<style>
        button{
        position: absolute;
        top: 90%;
        left: 30%;
    }
</style>
