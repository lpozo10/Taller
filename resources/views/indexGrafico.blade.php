@extends('layouts.app')

@section('content')

  <div id="perf_div"></div>

  <?= $lava->render('ColumnChart', 'Finances', 'perf_div') ?>


@endsection