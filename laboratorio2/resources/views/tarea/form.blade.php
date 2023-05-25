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
            {{ Form::textarea('descripcion', $tarea->descripcion, ['class' => 'form-control', 'style' => 'height: 100px' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

        <div class="form-group">
            {{ Form::label('fecha de Vencimiento') }}
            {{ Form::text('fechaVencimiento', $tarea->fechaVencimiento, ['class' => 'form-control' . ($errors->has('fechaVencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Vencimiento']) }}
            {!! $errors->first('fechaVencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('categoría') }}
           
            {{ Form::select('categoria_id', ['' => 'Selecciona una categoría'] + $categorias->pluck('nombreCategoria', 'id')->toArray(), $tarea->categoria_id, ['class' => 'form-select' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una categoría']) }}


    
        </div>

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
