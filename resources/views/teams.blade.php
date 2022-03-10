@extends('adminlte::page')

@section('content_header')
<h1>チーム一覧</h1>
@stop

@section('content')

<div class="card card-default">
<div class="card-header pr-4 mr-2 row">
<p class="card-title col-md-10 d-flex align-items-center"><i class="fas fa-football-ball"></i><b>九州リーグ</b></p>
</div>
    @auth
        @if(Auth::user()->admin_grade)
            <a href="{{ url('teamcreate') }}" class="btn btn-primary">チーム登録</a>
        @endif
    @endauth
    <div class="info-box mt-3">
        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">九州Aリーグ</span>
            <span class="info-box-text">
                @foreach($teams1 as $team1) 
                <a href="{{ url('players/'.$team1->id) }} ">
                {{ $team1->name}}</a>
                @endforeach
            </span>
            </div>
    <!-- /.info-box-content -->
    </div>

    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">九州Bリーグ</span>
            <span class="info-box-text">
                @foreach($teams2 as $team2) 
                <a href="{{ url('players/'.$team2->id) }} ">
                {{ $team2->name}}</a>
                @endforeach
            </span>
            </div>
    <!-- /.info-box-content -->
    </div>
                
    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">福岡県Aリーグ</span>
            <span class="info-box-text">
                @foreach($teams3 as $team3) 
                <a href="{{ url('players/'.$team3->id) }} ">
                {{ $team3->name}}</a>
                @endforeach
            </span>
            </div>
    <!-- /.info-box-content -->
    </div>
                 
    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">福岡県Bリーグ</span>
            <span class="info-box-text">
                @foreach($teams4 as $team4) 
                <a href="{{ url('players/'.$team4->id) }} ">
                {{ $team4->name}}</a>
                @endforeach
            </span>
            </div>
    <!-- /.info-box-content -->
    </div>  
    </div>  

@stop

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop

@section('js')

@stop