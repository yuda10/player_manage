@extends('adminlte::page')

@section('content_header')

@stop
<!-- 選手一覧画面/選手管理システム -->
@section('content')
  <div style="font-size: 150%; padding: 20px;font-weight: bold;">
    <i class="fas fa-football-ball "></i>  
    <a>{{$team->league}}</a>
    <a>{{$team->name}}</a>
  </div>
  
  <a href="{{ url('create') }}" class="btn btn-primary" >選手登録</a>
  
  
  <table class="table table-striped table-hover">
    <thead>
      <tr >
        <th>ID</th>  
        <th>写真</th>
        <th>ポジション</th>        
        <th>名前</th>
        <th>生年月日</th>
        <th>電話番号</th>
        <th>メールアドレス</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($players as $player)
      <tr>
        <td>{{$player->id}}</td>  
        <td><img src="{{ asset($player->photo ? 'storage/profiles/'.$player->photo : 'storage/noimage.jpeg') }}" id="img" width="40" height="40" style="border-radius:50%" ></td>
        <td>{{$player->position}}</td>     
        <td>{{$player->name}}</td>
        <td>{{$player->birthday}}</td>
        <td>{{$player->phone}}</td>
        <td>{{$player->email}}</td>
        <td >
          <a href="{{ url('edit/'.$player->id) }}" class="btn btn-primary" >編集</a>
        </td>
      </tr>
    </tbody> 
    @endforeach

  </table>
@stop

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>

@stop

@section('js')
<script>
      function openUpdateDialog(id) {
        window.open(
          "https://www.google.com/" + id,
          "_blank",
          "memubar=0,width=800,height=800,top=100,left=100"
        );
      }
      function openCreateDialog() {
        window.open(
          "https://www.google.com/" + id,
          "_blank",
          "memubar=0,width=800,height=800,top=100,left=100"
        );
      }
</script>
@stop
