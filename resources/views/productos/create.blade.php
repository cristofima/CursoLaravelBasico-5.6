



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
                    <form method="POST" action="{{ url('productos') }}">
                        @csrf
                        <input type="text" name="nombreproducto" value="{{old('nombreproducto')}}"/>
                        <input type="number" name="stockproducto" value="{{old('stockproducto')}}"/>
                        <input type="number" step="0.01" name="precioproducto" value="{{old('precioproducto')}}"/>
                        <input type="hidden" name="idusuario" value="{{Auth::user()->id}}"/>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
