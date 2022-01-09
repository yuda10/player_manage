<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選手一覧画面/選手管理システム</title>
    <script type="text/javascript">
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
</head>

<body>

  <div style="background: #0bd;  font-size: 100%; padding: 20px;">
 
  <tr>
      {{$team->name}}
    </tr>
  
  </div>
  <a href="{{ url('create') }}"><input type="submit" value="選手登録"></a>
  
  <table border="1" width="auto">
    <tr>
      <!-- <th>状態</th> -->
      <th>ポジション</th>
      <th>ID</th>
      <th>名前</th>
      <th>生年月日</th>
      <th>電話番号</th>
      <th>メールアドレス</th>
      <th></th>
    </tr>

   @foreach($players as $player)
  <tr>
    <td>
      {{$player->position}}
    </td>
    <td>
      {{$player->id}}
    </td>
    <td>
      {{$player->name}}
    </td>
    <td>
      {{$player->birthday}}
    </td>
    <td>
      {{$player->phone}}
    </td>
    <td>
      {{$player->email}}
    </td>
    <td>
      <a href="{{ url('edit/'.$player->id) }}"><input type="submit" value="編集"></a>
      <!-- <input type="button" value="編集" onclick="openDialog()"> -->
    </td>
  </tr>
  @endforeach

</table>    
</body>
</html>