@extends('layouts.app')
@section('title','Registrar producto')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <p><a href="{{url('productos')}}"><button class="btn btn-success">Regresar a Listado</button></a></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar producto</div>
                <div class="card-body">
                    {!! Form::open(['url' => 'productos','files'=>'true']) !!}
                    <input type="hidden" name="idusuario" value="{{Auth::user()->id}}"/>
                    <div class="form-group row">
                        <label for="nombreproducto" class="col-md-4 col-form-label text-md-right">Nombre</label>
                        <div class="col-md-6">
                            <input type="text"  class="form-control{{ $errors->has('nombreproducto') ? ' is-invalid' : '' }}" name="nombreproducto" id="nombreproducto" value="{{old('nombreproducto')}}">
                            @if ($errors->has('nombreproducto'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombreproducto') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stockproducto" class="col-md-4 col-form-label text-md-right">Stock</label>
                        <div class="col-md-6">
                            <input type="number"  class="form-control{{ $errors->has('stockproducto') ? ' is-invalid' : '' }}" name="stockproducto" id="stockproducto" value="{{old('stockproducto')}}">
                            @if ($errors->has('stockproducto'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('stockproducto') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="precioproducto" class="col-md-4 col-form-label text-md-right">Precio</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control{{ $errors->has('precioproducto') ? ' is-invalid' : '' }}" name="precioproducto" id="precioproducto" value="{{old('precioproducto')}}">
                            @if ($errors->has('precioproducto'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('precioproducto') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="codigoproducto" class="col-md-4 col-form-label text-md-right">Código</label>
                        <div class="col-md-6">
                            <input type="text"  class="form-control{{ $errors->has('codigoproducto') ? ' is-invalid' : '' }}" name="codigoproducto" id="codigoproducto" value="{{old('codigoproducto')}}">
                            @if ($errors->has('codigoproducto'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('codigoproducto') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="imagen" class="col-md-4 col-form-label text-md-right">Imagen</label>
                        <div class="col-md-6">
                            <input type="file"  class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" name="imagen" id="imagen">
                            @if ($errors->has('imagen'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('imagen') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
