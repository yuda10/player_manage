<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録画面/選手管理システム</title>
</head>
<body>
  
  <!-- <div style=" font-size: 100%; padding: 20px;">
    <tr>{{--$team->league--}}</tr>
    <tr>{{--$team->name--}}</tr>
  </div> -->

        @if(isset($team_name))
        <h2>{{$team_name}}</h2>
        <h3>選手登録</h3>
        @else
        <h3>選手登録</h3>
        @endif

<!-- <form action="Create"  method="POST" > -->
<form action="/player" method="POST" enctype="multipart/form-data" >

  @csrf

        <img src="storage/profiles/icon.png" id="img"><br>
        <input type="file" name="example" accept="image/jpeg, image/png"><br>
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
        <a href="/players/{{$team_id}}">{{ __('一覧へ戻る') }}</a>
        @else
        <a href="/teams">{{ __('一覧へ戻る') }}</a>
        @endif
  

</body>
</html>

