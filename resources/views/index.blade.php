@extends('layouts.app')

@section('content')


<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><strong>Mapa</strong></h3>
    </div><!-- /.box-header -->
    <div class="box-body no-padding">
        <div class="row">
            <div class="col-md-12 ">
                <div class="pad">
                    <div id="toolbar" style="display: none;">
                    </div>
                    <div class="col-md-10">
                        <div id="map" class="map"></div>                                        
                    </div>
                    <div class="col-md-2">
                        <p class="text-center">
                            <strong>Generación de Mapa</strong>
                            <div class="form-group">
                                <label>Año:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker"placeholder="Año"  />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->                                           
                            <button class="btn btn-block btn-primary btn-xs" onclick="#">Generar Mapa</button>
                            <p></p>
                            <div class="form-group">
                                <p class="text-center"> 
                                    <strong>Selección </strong>
                                </p>    
                                <label>Tipo Geometria: &nbsp;</label>
                                <select class="form-control select2" id="type">
                                    <option value="None">Ninguno</option>
                                    <option value="Point">Punto</option>
                                    <option value="LineString">Linea</option>
                                    <option value="Polygon">Poligono</option>
                                    <option value="Circle">Circulo</option>
                                    <option value="Square">Cuadrado</option>
                                    <option value="Box">Caja</option>

                                </select>
                            </div>
                        </p>
                    </div><!--div col 2-->
                </div>
            </div>
        </div>                            
    </div><!-- /.box-body -->
</div><!-- /.row -->
@endsection