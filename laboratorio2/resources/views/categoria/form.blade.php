<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre Categoria') }}
            {{ Form::text('nombreCategoria', $categoria->nombreCategoria, ['class' => 'form-control' . ($errors->has('nombreCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecategoria']) }}
            {!! $errors->first('nombreCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>


        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $categoria->descripcion, ['class' => 'form-control', 'style' => 'height: 100px' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br/> 
    <br/>
    <br/>
    <div class="box-footer mt20" >
        <button type="submit "  class="btn btn-outline-info">{{ __('Submit') }}</button>
    </div>
</div>

<style>
    div {
    top: 5%;
    left: 157%;}

button{
    position: absolute;
    top: 80%;
    left: 30%;
}
    
</style>