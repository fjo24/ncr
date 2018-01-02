@extends('layouts.admin')

@section('title', 'Francisco Milano / Test')


@section('contenido')
{!! Form::open(['route' => 'tablon.store']) !!}
<div class="row">
    <div class="col-md-8 col-md-offset-2">
            <!-- /.box-header -->

            <div class="panel panel-default">
                <div class="row fondo-resumen">
                        <!--Contenido-->
                        <div class="col-md-12">
                            <div class="panel-heading">
                                <div class="box-header">
                                	<center>
                                    	<h3 class="box-title" style="font-family: Comic Sans, serif; font-size:26pt; color:#9fcb39;">
Resumen del monto recibido</h3>
                                    </center>
                                </div>
                            </div>
                            <div class="panel-body fondo-caja">
	                            <div class="col-md-12">
	                                <div class="col-md-8">
	                                    <div class="col-md-6">
	                                        <div class="form-group">
												<table >
													<tr>
													  <td align="center" valign="middle"><strong>Cantidad</strong></center></td>
													  <td align="center" valign="middle"><strong>Valor</strong></td>
													  <td align="center" valign="middle"><strong>Pesos</strong></td>
													</tr>
													 
													<tr align="center" valign="middle" style="font-family: cursive, serif; font-size:18pt; color:#fbfcf9;">
													  <td>0</td>
													  <td><img alt="User Image" src="{{ asset ('AdminLTE/dist/img/2p.png') }}"></td>
													  <td>0</td>
													</tr>
													 
													<tr align="center" valign="middle" style="font-family: cursive, serif; font-size:18pt; color:#fbfcf9;">
													  <td>5</td>
													  <td><img alt="User Image" src="{{ asset ('AdminLTE/dist/img/5p.png') }}"></td>
													  <td>25</td>
													</tr>
													 
													<tr align="center" valign="middle" style="font-family: cursive, serif; font-size:18pt; color:#fbfcf9;">
													  <td>10</td>
													  <td><img alt="User Image" src="{{ asset ('AdminLTE/dist/img/10p.png') }}"></td>
													  <td>100</td>
													</tr>

													<tr align="center" valign="middle" style="font-family: cursive, serif; font-size:18pt; color:#fbfcf9;">
													  <td>20</td>
													  <td><img alt="User Image" src="{{ asset ('AdminLTE/dist/img/20p.png') }}"></td>
													  <td>400</td>
													</tr>
												</table>
											</div>
	                                	</div>
	                                	<div class="col-md-6">
	                                        <div class="form-group">
												<table>
													<tr>
													  <td align="center" valign="middle"><strong>Cantidad</strong></td>
													  <td align="center" valign="middle"><strong>Valor</strong></td>
													  <td align="center" valign="middle"><strong>Pesos</strong></td>
													</tr>
													 
													<tr align="center" valign="middle" style="font-family: cursive, serif; font-size:18pt; color:#fbfcf9;">
													  <td align="center" valign="middle">100</td>
													  <td align="center" valign="middle"><img alt="User Image" src="{{ asset ('AdminLTE/dist/img/50p.png') }}"></td>
													  <td align="center" valign="middle">5.000</td>
													</tr>
													 
													<tr align="center" valign="middle" style="font-family: cursive, serif; font-size:18pt; color:#fbfcf9;">
													  <td align="center" valign="middle">200</td>
													  <td align="center" valign="middle"><img alt="User Image" src="{{ asset ('AdminLTE/dist/img/100p.png') }}"></td>
													  <td align="center" valign="middle">20.000</td>
													</tr>
													 
													<tr align="center" valign="middle" style="font-family: cursive, serif; font-size:18pt; color:#fbfcf9;">
													  <td align="center" valign="middle">50</td>
													  <td align="center" valign="middle"><img alt="User Image" src="{{ asset ('AdminLTE/dist/img/200p.png') }}"></td>
													  <td align="center" valign="middle">10.000</td>
													</tr>

													<tr align="center" valign="middle" style="font-family: cursive, serif; font-size:18pt; color:#fbfcf9;">
													  <td align="center" valign="middle">100</td>
													  <td align="center" valign="middle"><img alt="User Image" src="{{ asset ('AdminLTE/dist/img/500p.png') }}"></td>
													  <td align="center" valign="middle">50.000</td>
													</tr>
												</table>
											</div>
	                                	</div>
	                                </div>
	                                	<div class="col-md-4">
	                                        <div class="form-group">
	                                        	<br>
	                                            {!! Form::label('CANTIDAD TOTAL', 'CANTIDAD TOTAL') !!}
	                                            <input class="input" value="$328" color:"#a0c527" style="width:175px;height:35px;background-image: url('c/laragon/www/ncr/public/AdminLTE/dist/img/input.png');font-size:15pt; font-family:cursive;text-align:center;color:#a0c527; border-radius: 10px;">
	                                            {!! Form::label('MONTO TOTAL', 'MONTO TOTAL') !!}
	                                            <input type="Text" value="$53.564" placeholder="" style="width:175px;height:35px;background-image: url('c/laragon/www/ncr/public/AdminLTE/dist/img/input.png');font-size:15pt; font-family:cursive;text-align:center;color:#a0c527; border-radius: 10px;">
	                                        </div>
	                                	</div>
	                                </div>
	                                
	                            <center>
	                                <div class="col-md-6"> 
	                                        <div class="form-group">
	                                            <input type="submit" value="Agregar mas billetes!" style="width:305px;height:45px;background-color: #9fcb39;font-size:15pt; font-family:Verdana;text-align:center;color:#ffffff; border-radius: 40px;">
	                                        </div>
	                                </div>	
	                            </center>
	                            <center>
	                                <div class="col-md-6"> 
	                                        <div class="form-group">
	                                        	<input type="submit" value="Aceptar" style="width:305px;height:45px;background-color: #9fcb39;font-size:15pt; font-family:Verdana;text-align:center;color:#ffffff; border-radius: 40px;">
	                                        </div>
	                                </div>
	                       		</center>	
	                    </div>         
                	</div>
        	</div>
    </div>
</div>
    {!! Form::close() !!}
@endsection