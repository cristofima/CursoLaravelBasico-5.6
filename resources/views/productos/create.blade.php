@extends('layouts.app')
@section('title','Registrar producto')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <p><a href="{{url('productos')}}"><button class="btn btn-success">Regresar a Listado</button></a></p>
        </div>
    </div>
    @include('includes.mensajes')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar producto</div>
                <div class="panel-body">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {!! Form::open(['url' => 'productos','files'=>'true']) !!}
                       Nombre: <input type="text" name="nombreproducto" value="{{old('nombreproducto')}}"/><br/>
                        Stock: <input type="number" name="stockproducto" value="{{old('stockproducto')}}"/><br/>
                        Precio: <input type="number" step="0.01" name="precioproducto" value="{{old('precioproducto')}}"/><br/>
                        <input type="hidden" name="idusuario" value="{{Auth::user()->id}}"/><br/>
                        Código: <input type="text" name="codigoproducto" value="{{old('codigoproducto')}}"/><br/>
                        Imagen: <input type="file" name="imagen" value="{{old('imagen')}}"/><br/>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
