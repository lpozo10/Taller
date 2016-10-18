@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-success">    
      <div class="box-header with-border">
        <h3 class="box-title">Estadísticas</h3>
      </div>
      <div class="box-body">
       <form role="form">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Periodo</label>
                {!!Form::select('Periodo', array_pluck($periodo, 'year_init', 'id', 'year_end'), null, ['class' => 'form-control']) !!}
              </div>
          </div><!-- /.form-group -->
         
          <div class="col-md-4">
              <div class="form-group">
                <label>Escenario</label>
                {!!Form::select('Escenario', array_pluck($scenario, 'name', 'id'), null, ['class' => 'form-control']) !!}
              </div>
          </div><!-- /.form-group -->

          <div class="col-md-4">
              <div class="form-group">
                <label>Variable</label>
                {!!Form::select('Variable', array_pluck($variable, 'name', 'id'), null, ['class' => 'form-control']) !!}
              </div>
          </div><!-- /.form-group -->
          </div>
       </form>
       <div id="perf_div" class="chart"></div>
       
      </div>
    </div>

  </div>
</div>

<?= $lava->render('BarChart', 'variable', 'perf_div')
?>

@endsection