<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../Views/css/style.css"> -->
    <title>チーム一覧画面/選手管理システム</title>
</head>
<body>
    <a href="{{ url('teamcreate') }}"><input type="submit" value="チーム登録"></a>
  
    <div style="border: #0bd solid 3px; border-radius:15px; font-size: 100%; padding: 10px;width: 600px;margin: 10px;">
        <h6>九州Aリーグ </h6><br>
            @foreach($teams1 as $team1) 
            <a href="{{ url('players/'.$team1->id) }} ">
                {{ $team1->name}};
            </a>
            @endforeach
    </div>
    <div style="border: #0bd solid 3px; border-radius:15px; font-size: 100%; padding: 10px;width: 600px;margin: 10px;">
        <h6>九州Bリーグ</h6><br>
            @foreach($teams2 as $team2) 
            <a href="{{ url('players/'.$team2->id) }} ">
                {{ $team2->name}};
            </a>
            @endforeach
    </div>
    <div style="border: #0bd solid 3px; border-radius:15px; font-size: 100%; padding: 10px;width: 600px;margin: 10px;">
        <h6>福岡Aリーグ</h6><br>
            @foreach($teams3 as $team3) 
            <a href="{{ url('players/'.$team3->id) }} ">
                {{ $team3->name}};
            </a>
            @endforeach
    </div>
    <div style="border: #0bd solid 3px; border-radius:15px; font-size: 100%; padding: 10px;width: 600px;margin: 10px;">
        <h6>福岡Bリーグ</h6><br>
            <ul>
                @foreach($teams4 as $team4)
                <li><a href="{{ url('players/'.$team4->id) }} ">
                    {{ $team4->name}};
                </a></li>
                @endforeach
            </ul>
    </div>
</body>
</html>