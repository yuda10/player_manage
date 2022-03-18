@extends('adminlte::page')

@section('content_header')
<h1>チーム一覧</h1>
@stop

@section('content')

<div class="card card-default">
<div class="card-header pr-4 mr-2 row">
<p class="card-title col-10 d-flex align-items-center"><i class="fas fa-football-ball"></i><b>九州リーグ</b></p>
    @auth
        @if(Auth::user()->admin_grade)
        <a href="{{ url('teamcreate') }}" class="btn btn-outline-secondary col-2">チーム登録</a>
        @endif
    @endauth
</div>
    
    <div class="info-box mt-3">
        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">九州Aリーグ</span>
            <div class="info-box-text d-flex flex-row ml-2">
                @foreach($teams1 as $team1) 
                <div class="card mr-2 pb-0">
                    @if(Auth::user() -> team_id == $team1 -> id || Auth::user()->admin_grade)
                <a href="{{ url('players/'.$team1->id) }}" class="my-1">{{ $team1->name}}</a>
                    @else
                    <p class="my-1">{{$team1 -> name}}</p>
                    @endif
                </div>
                @endforeach
</div>
            </div>
    <!-- /.info-box-content -->
    </div>

    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">九州Bリーグ</span>
            <div class="info-box-text d-flex flex-row ml-2">
                @foreach($teams2 as $team2) 
                <div class="card mr-2 pb-0">
                    @if(Auth::user() -> team_id == $team2 -> id || Auth::user()->admin_grade)
                <a href="{{ url('players/'.$team2->id) }}" class="my-1">{{ $team2->name}}</a>
                    @else
                    <p class="my-1">{{$team2 -> name}}</p>
                    @endif
                </div>
                @endforeach
</div>
            </div>
    <!-- /.info-box-content -->
    </div>
                
    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">九州Bリーグ</span>
            <div class="info-box-text d-flex flex-row ml-2">
                @foreach($teams3 as $team3) 
                <div class="card mr-2 pb-0">
                    @if(Auth::user() -> team_id == $team3 -> id || Auth::user()->admin_grade)
                <a href="{{ url('players/'.$team3->id) }}" class="my-1">{{ $team3->name}}</a>
                    @else
                    <p class="my-1">{{$team3 -> name}}</p>
                    @endif
                </div>
                @endforeach
</div>
            </div>
    <!-- /.info-box-content -->
    </div>
                 
    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">九州Bリーグ</span>
            <div class="info-box-text d-flex flex-row ml-2">
                @foreach($teams4 as $team4) 
                <div class="card mr-2 pb-0">
                    @if(Auth::user() -> team_id == $team4 -> id || Auth::user()->admin_grade)
                <a href="{{ url('players/'.$team4->id) }}" class="my-1">{{ $team4->name}}</a>
                    @else
                    <p class="my-1">{{$team4 -> name}}</p>
                    @endif
                </div>
                @endforeach
</div>
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