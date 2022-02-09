<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>編集画面/選手管理システム</title>
</head>

<body>

  <h1>選手情報編集</h1>
  <p>ID:{{$player->id}}</p>
  <img src="{{ asset('storage/profiles/'.$player->photo) }}" id="img">
  <form method="POST" action="/edit/{{$player->id}}" enctype="multipart/form-data">
    @csrf

    <input type="file" name="example" accept="image/jpeg, image/png"><br>

    <input type="hidden" name='id' value='{{$player->id}}'><br>
    <div><input type="text" name=position value="{{$player->position}}"></div>
    <div><input type="text" name=name value="{{$player->name}}"></div>
    <div><input type="text" name=birthday value="{{$player->birthday}}"></div>
    <div><input type="text" name=phone value="{{$player->phone}}"></div>
    <div><input type="text" name="email" value="{{$player->email}}"></div>

    <button type="submit">保存する</button>
    <button type="submit">キャンセル</button>
  </form>


    </body>
</html>
