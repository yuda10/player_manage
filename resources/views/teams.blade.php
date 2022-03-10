@extends('adminlte::page')

@section('content_header')

@stop
<!-- チーム一覧画面/選手管理システム -->
@section('content')
    
    <a href="{{ url('teamcreate') }}" class="btn btn-primary">チーム登録</a>
    
    <!-- <div class="card-body p-0">
              <table class="table">
                <thead>
                    <th>九州Aリーグ</th>
                </thead>
                <tbody>
                    <ul>
                    @foreach($teams1 as $team1)  
                    <td>
                    <a href="{{ url('players/'.$team1->id) }} ">
                    {{ $team1->name}} </a>
                    </td>
                    @endforeach
                    </ul>
                </tbody>    
                <table class="table">
                <thead>
                    <th>九州Bリーグ</th>
                </thead>
                <tbody>
                    <ul>
                    @foreach($teams2 as $team2)  
                    <td>
                    <a href="{{ url('players/'.$team2->id) }} ">
                    {{ $team2->name}} </a>
                    </td>
                    @endforeach
                    </ul>
                </tbody>    
                <table class="table">
                <thead>
                    <th>福岡Aリーグ</th>
                </thead>
                <tbody>
                    <ul>
                    @foreach($teams3 as $team3)  
                    <td>
                    <a href="{{ url('players/'.$team3->id) }} ">
                    {{ $team3->name}} </a>
                    </td>
                    @endforeach
                    </ul>
                </tbody>    
                <table class="table">
                <thead>
                    <th>福岡Bリーグ</th>
                </thead>
                <tbody>
                    <ul>
                    @foreach($teams4 as $team4)  
                    <td>
                    <a href="{{ url('players/'.$team4->id) }} ">
                    {{ $team4->name}} </a>
                    </td>
                    @endforeach
                    </ul>
                </tbody> 
             -->
                
    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-thumbs-up"></i></span>
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
        <span class="info-box-icon bg-info"><i class="far fa-thumbs-up"></i></span>
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
        <span class="info-box-icon bg-info"><i class="far fa-thumbs-up"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">福岡Aリーグ</span>
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
        <span class="info-box-icon bg-info"><i class="far fa-thumbs-up"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">福岡Bリーグ</span>
            <span class="info-box-text">
                @foreach($teams4 as $team4) 
                <a href="{{ url('players/'.$team4->id) }} ">
                {{ $team4->name}}</a>
                @endforeach
            </span>
            </div>
    <!-- /.info-box-content -->
    </div>                     
      
            
@stop
  


@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop