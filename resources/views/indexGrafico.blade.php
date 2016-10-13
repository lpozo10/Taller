@extends('layouts.app')

@section('content')


  <div id="perf_div"></div>

  <?= $lava->render('ColumnChart', 'Precipitaciones', 'perf_div') ?>
  <?= $months->name ?>


@endsection