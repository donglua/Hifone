@extends('layouts.default')

@section('title')
{{ trans('hifone.pms.add') }}_@parent
@stop

@section('content')

<div class="pm_create">

  <div class="col-md-9 main-col">
    <div class="panel panel-default corner-radius">
    <div class="panel-heading">
	
		@include('pms.partials.nav')
	
	</div>
    <div class="panel-body">
		<ul class="list-group">
  @foreach ($pms as $index => $pm)
   <li class="list-group-item" >

      <a href="{!! route('pm.show', [$pm->id]) !!}">
        {!! str_limit($pm->meta->body, '100') !!}
      </a>

      <span class="meta">
        <a href="" title="">
		{{ $pm->user->username }}
        </a>
        <span> • </span>
        <span class="timeago">{!! $pm->created_at !!}</span>
      </span>
  </li>
  @endforeach
</ul>

		<div class="pull-right add-padding-vertically">
	        {{ $pms->render() }}
	    </div>
	</div>
	</div>
	</div>


	<div class="col-md-3 side-bar">

    <div class="panel panel-default">
    <div class="panel-body">
      <a href="/pm/create" class="btn btn-success btn-block">新建 Pm</a>
    </div>
    <div class="panel-footer"><a href="/pm?tab=inbox">查看我的收件箱</a></div>
    </div>

  </div>
</div>

@stop
