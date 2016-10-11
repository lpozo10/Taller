<aside class="control-sidebar control-sidebar-light">
	<!-- Create the tabs -->
	<div id="side_ir_a" style="display:none;">

		<div class="modal-header">
			<button onclick="ocultar()" type="button" class="close" data-toggle="control-sidebar"aria-label="Close"><span aria-hidden="true">×</span></button>
			<h4 class="modal-title">Ir a</h4>
		</div>
	</div>	
	<div id="side_seleccionar" style="display:none;">

		<div class="modal-header">
			<button onclick="ocultar()"type="button" class="close" data-toggle="control-sidebar"aria-label="Close"><span aria-hidden="true">×</span></button>
			<h4 class="modal-title">Seleccionar</h4>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">	
			<div class="form-group">
                                                    
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
                                            </div>
			<hr></hr>	
			<p></p>

			<div class="col-md-12 col-md-offset-5">					
					<button type="button" data-toggle="control-dibujo" class="btn btn-default" title="Eliminar"><i class="fa fa-trash"></i></button>
			</div>
		</div>	
	</div>			
	<div id="side_descargar" style="display:none;">

		<div class="modal-header">
			<button onclick="ocultar()" type="button" class="close" data-toggle="control-sidebar"aria-label="Close"><span aria-hidden="true">×</span></button>
			<h4 class="modal-title">Descargar</h4>
		</div>
	</div>
	<div id="side_fecha" style="display:none;">

		<div class="modal-header">
			<button  onclick="ocultar()"type="button" class="close" data-toggle="control-sidebar"aria-label="Close"><span aria-hidden="true">×</span></button>
			<h4 class="modal-title">Fecha</h4>
		</div>
<div class="row">
			<div class="col-md-8 col-md-offset-2">	
			<div class="form-group">
                                                <label>Año:</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control pull-right" id="datepicker" placeholder="Año">
                                                </div><!-- /.input group -->
                                            </div>
                                            <div class="form-group">
                                                <label>Mes:</label>
                                                <select class="form-control select2" id="month">
                                                    <option value="1">Enero</option>
                                                    <option value="2">Febrero</option>            
                                                </select>
                                            </div>
                                            <button class="btn btn-block btn-primary btn-xs" onclick="#">Generar Mapa</button>
                                            </div>
                                             </div>
	</div>
</aside><!-- /.control-sidebar -->
