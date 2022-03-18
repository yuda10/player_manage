@extends('adminlte::page')

@section('content_header')
 
@stop
  <!-- 登録画面/選手管理システム</title> -->
@section('content')
  
    @if(isset($team_name))
    <h4 style="text-align:center">{{$team_name}}</h4>
    <h5>選手登録</h5>
    @else
    <h5>選手登録</h5>
    @endif

    <form action="/player" method="POST" enctype="multipart/form-data" >
    @csrf 
    <img src="{{asset('storage/noimage.jpeg')}}" alt="画像プレビュー" id="preview" class="rounded-circle border border-light" style="aspect-ratio: 1/1" height="200">
    
    <!-- <img src="storage/profiles/icon.png" id="img" width="100" height="100"> -->
    
    <ion-icon name="person-outline"></ion-icon>
    <input type="file" name="example" accept="image/jpeg, image/png" onchange="previewFile()">

    @if(isset($team_id))
    <input type="hidden" name="team_id" value="{{$team_id}}"><br>
    @else
    <input type="number" class="form-control" name="team_id" placeholder="team_id" maxlength="3" required><br>
    @endif
    <input type="text" class="form-control" name="position" placeholder="ポジション" maxlength="6" required><br>
    <input type="text" class="form-control" name="name" placeholder="名前" maxlength="50" required><br>
    <input type="text" class="form-control" name="birthday" placeholder="生年月日" maxlength="10" required><br>
    <input type="phone" class="form-control" name="phone" placeholder="電話番号" maxlength="20" required><br>
    <input type="email" class="form-control" name="email" placeholder="メールアドレス" maxlength="254" required><br>
      
      <button class="w-100 btn btn-lg" type="submit">保存する</button>
        
</form>
      <!-- <button class="w-100 btn btn-lg" type="submit">キャンセル</button> -->
      <!-- もし＄team_idに値があったら38行目を表示、もしなければ<a href="/teams">{{ __('一覧へ戻る') }}</a> -->
      @if (isset($team_id))
      <a href="/players/{{$team_id}}"><button class="w-100 btn btn-lg">キャンセル</button></a>
      @else
      <a href="/teams"><button class="w-100 btn btn-lg">キャンセル</button></a>
      @endif
@stop

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop

@section('js')
<script>
function previewFile() {
  const preview = document.getElementById('preview')
  const file = document.querySelector('input[type=file]').files[0];
  const reader = new FileReader();

  reader.addEventListener("load", function () {
    // 画像ファイルを base64 文字列に変換
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}
</script>
@stop
