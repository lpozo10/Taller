@extends('layouts.app')

@section('content')

<div id="perf_div"></div>
<?= $lava->render('ColumnChart', 'IMDB', 'perf_div') ?>
@endsection