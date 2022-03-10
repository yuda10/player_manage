@extends('adminlte::page')

@section('content_header')

@stop
<!-- ホーム画面/選手管理システム -->
@section('content')
    
<!-- <a href="{{ url('teamcreate') }}" class="btn btn-primary">ログイン</a> -->
    
<div class="card card-row card-secondary">

<div class="card-header">
 
<h3 class="card-title">
<i class="fas fa-football-ball"></i> 
お知らせ　ババーン　
</h3>
</div>
<div class="card-body">


<div class="card card-light card-outline">
<div class="card-header">
<h5 class="card-title">3月9日</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
<div class="card-body">
<p>
ロシアが欧州最大の原子力発電所を攻撃！
</p>
</div>
</div>
</div>
</div>

@stop

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop

