@extends('adminlte::page')

@section('content_header')
@foreach($games as $game)
<h1>九州Aリーグ</h1>
<h1 class="text-center">{{$game -> homeTeams -> name}} vs {{$game -> awayTeams -> name}}</h1>
<h5 class="text-center">{{$game -> datetime -> format('Y-m-d')}} {{$game -> ground}} {{$game -> datetime ->format('H:i')}}K.O</h5>
<h6 class="text-center">補助チーム : {{$game -> assistantTeams -> name}}</h6>
@endforeach
@stop

@section('content')

<!-- TODO if文で分岐 'game_members.game_members' か 'game_members.home_members' か 'game_members.away_members'-->
@if($date->gte($date1->addHour()))
@include('game_members.home_members')
@else
@include('game_members.game_members')
@endif


<!-- /.row -->
<div class="card-footer">
  Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
  the plugin.
</div>
@stop

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop

@section('js')
<script>
  for (let i = 1; i < 24; i++) {
    const member_select = document.getElementById('member_select' + i);
    var member_id = member_select.value;
    if (member_id) {
      var request = $.ajax({
        type: 'GET',
        url: '/game_members/img/' + member_id,
        // cashe: false, ←コメントアウトで非同期通信
        dataType: 'json',
        timeout: 3000
      });
      // 成功時
      request.done(function(data) {
        $('#member_img' + i).children('img').attr('src', '/image/profile_img/' + data);
      });

      // 失敗時
      request.fail(function() {
        alert("通信に失敗しました");
      });
    } else {
      ;
    };
  };

  for (let i = 1; i < 24; i++) {
    const member_select = document.getElementById('member_select' + i);
    // Ajax通信開始
    member_select.onchange = function() {
      var member_id = member_select.value;
      var request = $.ajax({
        type: 'GET',
        url: '/game_members/img/' + member_id,
        // cashe: false, ←コメントアウトで非同期通信
        dataType: 'json',
        timeout: 3000
      });
      // 成功時
      request.done(function(data) {
        $('#member_img' + i).children('img').attr('src', '/image/profile_img/' + data);
      });

      // 失敗時
      request.fail(function() {
        alert("通信に失敗しました");
      });

    };
  };
</script>
@stop