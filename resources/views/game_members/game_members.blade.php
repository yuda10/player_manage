<div class="card card-default">
<div class="card-header pr-4 mr-2 row">
    <p class="card-title col-md-6 d-flex align-items-center">
      <b>ホーム:{{$game -> homeTeams -> name}}</b>
    </p>
    <p class="card-title col-md-6 d-flex align-items-center">
      <b>アウェイ:{{$game -> awayTeams -> name}}</b>
    </p>
  </div>
  
  <div class="card-body">
  @if(!$game_members->isEmpty())
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            @for($i = 1; $i < 24; $i++) 
            <label>No.{{$i}}</label>
            <a style="cursor: pointer;" data-toggle="modal" data-target="#home-img-modal{{$i}}">
              <div class="row d-flex align-items-center">
                <div class="col-md-2">
                @if($game_members[0]["home_" . $i])
                    @foreach($home_players as $player)
                    @if($game_members[0]["home_" . $i] == $player->id)
                    <img src="{{asset('storage/profiles/'.$player->photo)}}" class="rounded-circle img-fluid border border-light" style="aspect-ratio: 1/1" alt="写真">
                    <!-- ホームメンバーのプロフィール写真モーダル -->
                    @include('game_members.home_img_modal')
                    @endif
                    @endforeach
                  @else
                  <img src="{{asset('storage/noimage.jpeg')}}" class="rounded-circle img-fluid border border-light" style="aspect-ratio: 1/1" alt="写真">
                  @endif
                  
                </div>
                <div class="col-md-10">
                  @if($game_members[0]["home_" . $i])
                    @foreach($home_players as $player)
                    @if ($game_members[0]["home_" . $i] == $player->id)
                    <h4 value="{{$player->id}}" class="m-0">{{$player -> name}}</h4>
                    @endif
                    @endforeach
                  @else
                  <p>なし</p>
                  @endif
                  
                </div>
              </div>
              </a>
              @endfor
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            @for($i = 1; $i < 24; $i++) 
            <label>No.{{$i}}</label>
            <a style="cursor: pointer;" data-toggle="modal" data-target="#away-img-modal{{$i}}">
              <div class="row d-flex align-items-center">
                <div class="col-md-2">
                  @if($game_members[0]["away_" . $i])
                    @foreach($away_players as $player)
                    @if($game_members[0]["away_" . $i] == $player->id)
                    <img src="{{asset('storage/profiles/'.$player->photo)}}" class="rounded-circle img-fluid border border-light" style="aspect-ratio: 1/1" alt="写真">
                    <!-- アウェイメンバーのプロフィール写真モーダル -->
                    @include('game_members.away_img_modal')
                    @endif
                    @endforeach
                  @else
                  <img src="{{asset('storage/noimage.jpeg')}}" class="rounded-circle img-fluid border border-light" style="aspect-ratio: 1/1" alt="写真">
                  @endif
                  
                </div>
                <div class="col-md-10">
                  @if($game_members[0]["away_" . $i])
                    @foreach($away_players as $player)
                    @if ($game_members[0]["away_" . $i] == $player->id)
                    <h4 value="{{$player->id}}" class="m-0">{{$player -> name}}</h4>
                    @endif
                    @endforeach
                  @else
                  <p>なし</p>
                  @endif
                  
                </div>
              </div>
              </a>
              @endfor
              <div hidden class="form-group">
                <textarea name="game_id">{{$game->id}}</textarea>
              </div>
          </div>
        </div>
      </div>
  @else
  <p>まだ登録されていません。試合開始の1時間前からご覧いただけます</p>
  @endif
  </div>
  <!-- /.col -->
</div>
