@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    <section class="content-header">
          <h1>
            Gráficos
            <small>Preview</small>
          </h1>
         
        </section>
        <div class="box box-success">    
            <div class="box-header with-border">
                <h3 class="box-title">Estadísticas</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-4">
                <form role="form">
                  <div class="form-group">
                    <label>Periodo</label>
                    {!!Form::select('number', [1, 2, 3], null, ['class' => 'field']) !!}
                    </div>
                    </form>
                  </div><!-- /.form-group -->
                  </div><!-- /.col -->
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Escenario</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div><!-- /.form-group -->
                  
                </div><!-- /.col -->
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Variable</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Precipitación</option>
                      <option>Temperatura mínima</option>
                      <option>Temperatura máaxima</option>
                      <option>Radiación UV</option>
            
                    </select>
                  </div><!-- /.form-group -->
                  
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            
              <div id="perf_div" class="chart">
              </div>
          
            
        </div>
    </div>
</div>


  <?= $lava->render('ColumnChart', 'variable', 'perf_div')
   ?>
 
@endsection