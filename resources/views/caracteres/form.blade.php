@extends('layouts.admin')

@section('title', 'Francisco Milano / Test')


@section('contenido')
{!! Form::open(['route' => 'rcaracteres']) !!}
<div class="row">
    <div class="col-md-6 col-md-offset-3">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <!--Contenido-->
                        <div class="col-md-12">
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Cadena de caracteres</h3>
                                </div>
                                
                                <div class="col-md-12">
                                        <div class="form-group">
                                            {!! Form::label('Introduzca cadena de caracteres', 'cadena') !!}
                                            {!! Form::text('cadena', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Introduzca subcadena de caracteres', 'subcadena') !!}
                                            {!! Form::text('subcadena', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                </div>
                                <div class="for text-center">
                                    {!! Form::submit('REGISTRAR', ['class'=> 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
    {!! Form::close() !!}
@endsection