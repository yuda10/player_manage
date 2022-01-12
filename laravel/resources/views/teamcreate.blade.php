<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>チーム登録画面/選手管理システム</title>
</head>
<body>
  
<h3>チーム登録</h3>

<!-- <form action="Create"  method="POST" > -->
<form action="/teams" method="POST" enctype="multipart/form-data" >
  @csrf  
       
    <!-- <input type="text" class="form-control" name="id" placeholder="id" maxlength="3" required><br> -->
    <input type="text" class="form-control" name="name" placeholder="チーム名" maxlength="50" required ><br>
    <input type="text" class="form-control" name="league" placeholder="所属リーグ" maxlength="10" required><br>
    <input type="text" class="form-control" name="manager_name" placeholder="代表者氏名" maxlength="50" required><br>
    <input type="phone" class="form-control" name="manager_phone" placeholder="代表者電話番号" maxlength="20" required><br>
    <input type="email" class="form-control" name="manager_email" placeholder="代表者メールアドレス" maxlength="254" required><br>
        
    <button class="w-100 btn btn-lg" type="submit">保存する</button>
    <button class="w-100 btn btn-lg" type="submit">キャンセル</button>
</form>

</body>
</html>

