@extends('layouts.admin')

@section('title', 'Francisco Milano / Test')


@section('contenido')

<div class="row">
    <div class="col-md-12">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <!--Contenido-->
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                         
                                    <h3 class="box-title">EJERCICIO 1</h3>
                                </div>
                                La subcadena "{{ $subcadena }}" se repite {{$c}} veces en la cadena "{{$cadena}}"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection