<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選手管理システム</title>
</head>
<body>
<div style="background: #f0e68c; border: #f0e68c solid 2px; font-size: 100%; padding: 20px;">モンテディオ山形</div>
<table border="1" width="200">
    <tr>
      <!-- <th>状態</th> -->
      <th>ID</th>
      <th>名前</th>
      <th>チーム名</th>
    </tr>

    @foreach($players as $player)
<tr>
    <td>
        {{$player->jrfu_id}}
    </td>
    <td>
      {{$player->name}}
    </td>
    <td>
      {{\App\Models\Team::find($player->team_id)->name}}
    </td>
</tr>
@endforeach

    
  </table>    
</body>
</html>