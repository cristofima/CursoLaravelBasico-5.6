



@extends('layouts.app')
@section('title','Editar producto')
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
                <div class="panel-heading">Editar producto</div>
                <div class="panel-body">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {!! Form::open(['route' => ['productos.update', $prod->idproducto],'method' => 'PATCH']) !!}
                        <input type="text" name="nombreproducto" value="{{$prod->nombreproducto}}"/><br/>
                        <input type="number" name="stockproducto" value="{{$prod->stockproducto}}"/><br/>
                        <input type="number" step="0.01" name="precioproducto" value="{{$prod->precioproducto}}"/><br/>
                        <input type="hidden" name="idusuario" value="{{$prod->idusuario}}"/><br/>
                        <input type="hidden" name="idproducto" value="{{$prod->idproducto}}"/><br/>
                        <input type="text" name="codigoproducto" value="{{$prod->codigoproducto}}"/><br/>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
