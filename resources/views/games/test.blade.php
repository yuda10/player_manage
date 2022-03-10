@extends('adminlte::page')

@section('content_header')
<h1>試合一覧</h1>
@stop

@section('content')

@auth
<p>ログインユーザー</p>
@endauth

@guest
<p>ゲスト</p>
@endguest

@stop
@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop

@section('js')

@stop
