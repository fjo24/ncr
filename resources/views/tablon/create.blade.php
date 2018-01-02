@extends('layouts.admin')

@section('title', 'Francisco Milano / Test')


@section('contenido')
    {!! Form::open(['route' => 'tablon.store']) !!}
<div class="row">
    <div class="col-md-6 col-md-offset-3">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <!--Contenido-->
                        <div class="col-md-12">
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">EJERCICIO 1</h3>
                                </div>
                                <div class="box box-body">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('a1', 'A[1]') !!}
                                            {!! Form::text('a1', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('b1', 'B[1]') !!}
                                            {!! Form::text('b1', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('a2', 'A[2]') !!}
                                            {!! Form::text('a2', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('b2', 'B[2]') !!}
                                            {!! Form::text('b2', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('a3', 'A[3]') !!}
                                            {!! Form::text('a3', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('b3', 'B[3]') !!}
                                            {!! Form::text('b3', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('a4', 'A[4]') !!}
                                            {!! Form::text('a4', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('b4', 'B[4]') !!}
                                            {!! Form::text('b4', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                </div>
                                <div class="col-md-6">

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                            {!! Form::label('Clavo 1', 'clavo1') !!}
                                            {!! Form::text('clavo1', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <BR><BR>
                                        <div class="form-group">
                                        <div class="col-md-12">
                                        <div class="col-md-6">
                                            {!! Form::label('Clavo 2', 'clavo2') !!}
                                            {!! Form::text('clavo2', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                        </div>
                                        </div>
                                        <BR>
                                        <BR>
                                        <div class="form-group">
                                        <div class="col-md-12">
                                        <div class="col-md-6">
                                            {!! Form::label('Clavo 3', 'clavo3') !!}
                                            {!! Form::text('clavo3', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                        </div>
                                        </div>
                                        <BR><BR>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <div class="col-md-12">
                                        <div class="col-md-6">
                                            {!! Form::label('Clavo 4', 'clavo4') !!}
                                            {!! Form::text('clavo4', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                        </div>
                                        </div>
                                        <BR><BR>
                                        <div class="form-group">
                                        <div class="col-md-12">
                                        <div class="col-md-6">
                                            {!! Form::label('Clavo 5', 'clavo5') !!}
                                            
                                            {!! Form::text('clavo5', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        </div>
                                        </div>
                                        </div>
                                </div>
                                <BR><BR>
                                <div class="col-md-12">
                                <div class="for text-center">
                                    {!! Form::submit('ACEPTAR', ['class'=> 'btn btn-primary btn-sm']) !!}
                                </div>
                                </div>
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