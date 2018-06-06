



@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <p><a href="{{url('productos/create')}}"><button class="btn btn-success">Nuevo</button></a></p>
        </div>
    </div>
    @if ($message = Session::get('mensaje'))
    <div class="row">
        <div class="alert alert-success">
            <p>
                <strong>{{ $message }}</strong>
            </p>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Productos</div>
                <div class="panel-body">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table  class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                               @foreach ($productos as $prod)
                                <tr>
                                    <td>{{$prod->nombreproducto}}</td>
                                    <td>{{$prod->stockproducto}}</td>
                                    <td>{{$prod->precioproducto}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('productos.edit',$prod->idproducto)}}">Editar</a>
                                        <a class="btn btn-danger" href="{{route('productos.destroy',$prod->idproducto)}}">Eliminar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        {{$productos->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
