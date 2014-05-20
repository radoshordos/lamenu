@extends('adm.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Home
@stop

{{-- Content --}}
@section('content')
<h4>Informace o profilu:</h4>

@foreach ($tree2group2top as $tgt)
    {{ $tgt->id }}
@endforeach

<hr/>

@stop
