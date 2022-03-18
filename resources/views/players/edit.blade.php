@extends('adminlte::page')

@section('content_header')

@stop
<!-- 編集画面/選手管理システム -->
@section('content')

<div id="msgarea" class="form-group">
<div class="container">
  <h5>選手情報編集</h5>
  <p>ID:{{$player->id}}</p>

  <img src="{{ asset($player->photo ? 'storage/profiles/' . $player->photo : 'storage/noimage.jpeg') }}" alt="画像プレビュー" class="rounded-circle border border-light" id="img" height="200" style="aspect-ratio: 1/1" >
@if($player->photo)
  <!-- <a href="{{ url('edit/profile_delete/'.$player->id) }}" class="btn btn-sm btn-secondary" >削除</a> -->
  <button type="button" class="btn btn-secondary btn-sm col-2" id="imgdel">削除</button>
@endif 
  <form method="POST" action="/edit/{{$player->id}}" enctype="multipart/form-data">
  
@csrf  
    <!-- ファイル選択ボタン  -->
    <input type="file" name="example" accept="image/jpeg, image/png" id="file_image"><br>
    <input type="hidden" name='team_id' value='{{$player->team_id}}'><br>
    <input type="hidden" name='img_name' id="img_name" value='{{$player->photo}}'><br>
    <input type="hidden" name='id' value='{{$player->id}}'><br>

    <input type="text" class="form-control" name=position value="{{$player->position}}"><br>
    <input type="text" class="form-control" name=name value="{{$player->name}}"><br>
    <input type="text" class="form-control" name=birthday value="{{$player->birthday}}"><br>
    <input type="phone" class="form-control" name=phone value="{{$player->phone}}"><br>
    <input type="email" class="form-control" name="email" value="{{$player->email}}"><br>

    <div class="text-center">
    <button class="btn btn-primary btn-lg w-25 mt-2" type="submit">保存する</button>
    </div>
  </form>
  
  <div class="text-center">
  <a href="/players/{{$player->team_id}}" class="w-25 btn btn-danger btn-lg mt-2" >キャンセル</a> 
  </div>
  </div>
</div>

<script>
  document.getElementById('file_image').addEventListener('change', function (e) {
    // 1枚だけ表示する
    var file = e.target.files[0];

    // ファイルのブラウザ上でのURLを取得する
    var blobUrl = window.URL.createObjectURL(file);

    // img要素に表示
    var img = document.getElementById('img');
    const img_name = document.getElementById('img_name');
    img.src = blobUrl;
    img_name.value = blobUrl;
  });

  const imgdel = document.getElementById('imgdel');
  const img_name = document.getElementById('img_name');
  var img = document.getElementById('img');
  imgdel.onclick = function(){
    img.src = "{{asset('storage/noimage.jpeg')}}";
    img_name.value = "";
};
</script>
@stop



@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop
