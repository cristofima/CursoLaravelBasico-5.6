@extends('layouts.app')
@section('title','Productos')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <p><a href="{{url('productos/create')}}"><button class="btn btn-success">Nuevo</button></a></p>
        </div>
    </div>
    @include('includes.mensajes')
    @include('productos.delete')
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
                                        <th scope="col">Código</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                               @foreach ($productos as $prod)
                                <tr>
                                    <td>{{$prod->nombreproducto}}</td>
                                    <td>{{$prod->stockproducto}}</td>
                                    <td>{{$prod->precioproducto}}</td>
                                    <td>{{$prod->codigoproducto}}</td>
                                    <td>
                                        @if($prod->imagen!=null)
                                        <img src="data:{{$prod->mimetype}};base64,{{stream_get_contents($prod->imagen)}}" alt="Imagen" style="max-width: 75px;max-height: 75px;"/>
                                        @else
                                            {{'No hay imagen'}}
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('productos.edit',$prod->idproducto)}}">Editar</a>
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete" 
                                        data-name="{{$prod->nombreproducto}}"
                                        data-action="{{route('productos.destroy',$prod->idproducto)}}">Eliminar</a>
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
<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#modalDelete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var action = button.data('action');
            var name = button.data('name');
            var modal = $(this);
            modal.find(".modal-content #txtEliminar").text("¿Está seguro de eliminar el producto " + name + "?");
            modal.find(".modal-content form").attr('action', action);
        });
    });
</script>
@endsection
