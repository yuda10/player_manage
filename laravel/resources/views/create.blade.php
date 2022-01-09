<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録画面/選手管理システム</title>
</head>
<body>
  
<h1>選手登録</h1>

<!-- <form action="Create"  method="POST" > -->
<form action="/player" method="POST" enctype="multipart/form-data >

  @csrf

        <img src="storage/profiles/icon.png" id="img"><br>
        <input type="file" name="example" accept="image/jpeg, image/png"><br>
        
        <input type="text" class="form-control" name="team_id" placeholder="team_id" maxlength="3" required><br>
        <input type="text" class="form-control" name="position" placeholder="ポジション" maxlength="6" required><br>
        <input type="text" class="form-control" name="name" placeholder="名前" maxlength="50" required><br>
        <input type="text" class="form-control" name="birthday" placeholder="生年月日" maxlength="10" required><br>
        <input type="phone" class="form-control" name="phone" placeholder="電話番号" maxlength="20" required><br>
        <input type="email" class="form-control" name="email" placeholder="メールアドレス" maxlength="254" required><br>
        
        <button class="w-100 btn btn-lg" type="submit">保存する</button>
        <button class="w-100 btn btn-lg" type="submit">キャンセル</button>
</form>

<!-- <a href="{{-- route('players')--}}">{{ __('一覧へ戻る') }}</a> -->

</body>
</html>

