@extends('adminlte::page')

@section('content_header')

@stop
<!-- ホーム画面/選手管理システム -->
@section('content')
    
<!-- <a href="{{ url('teamcreate') }}" class="btn btn-primary">ログイン</a> -->
    
<div class="card card-row card-secondary mt-3">

<div class="card-header pr-4 mr-2">
 
<h3 class="card-title"><i class="fas fa-football-ball"></i> お知らせ</h3>
</div>
<div class="card-body">
@if(!\App\Models\Notification::count())
<p>お知らせはありません</p>
@else
<div class="card card-light card-outline">
<div class="card-header">
@foreach($notifications as $notification)
<h5 class="card-title">{{$notification -> modified_date -> format('Y-m-d')}}</h5>
@endforeach
<div class="card-tools">
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
<div class="card-body">
@foreach($notifications as $notification)
<p>{{$notification -> body}}</p>
@endforeach
</div>
</div>
@endif
</div>
</div>

@stop

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop

