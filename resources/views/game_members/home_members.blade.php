<div class="card card-default">
  <div class="card-header pr-4 mr-2 row">
    <p class="card-title col-md-10 d-flex align-items-center">
      <b>{{$game -> homeTeams -> name}}</b>
    </p>
    <button type="submit" class="btn btn-outline-secondary btn-sm col-md-2" form="member_form">
      選手登録
    </button>
  </div>
  <div class="card-body">
    <form method="post" action="/home_members_add" id="member_form">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            @for($i = 1; $i < 16; $i++) <label>No.{{$i}}</label>
              <div class="row d-flex align-items-center">
                <div class="col-md-2" id="member_img{{$i}}">
                  <img src="{{asset('storage/noimage.jpeg')}}" class="rounded-circle img-fluid border border-light"
                    style="aspect-ratio: 1/1" alt="写真">
                </div>
                <div class="col-md-10">
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                    
                  data-select2-id="1" tabindex="-1" aria-hidden="true" id="member_select{{$i}}" name="home_{{$i}}">

                    <option selected disabled hidden style='display: none' value=''></option>
                    @if(!$game_members->isEmpty())
                      @foreach($home_players as $player)
                      @if ($game_members[0]["home_" . $i] == $player->id)
                      <option value="{{$player->id}}" selected>{{$player -> name}}</option>
                      @else
                      <option value="{{$player->id}}">{{$player -> name}}</option>
                      @endif
                      @endforeach
                    @else
                      @foreach($home_players as $player)
                      <option value="{{$player->id}}">{{$player -> name}}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
              </div>
              @endfor

          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            @for($i = 16; $i < 24; $i++) <label>No.{{$i}}</label>
              <div class="row d-flex align-items-center">
                <div class="col-md-2" id="member_img{{$i}}">
                  <img src="{{asset('storage/noimage.jpeg')}}" class="rounded-circle img-fluid border border-light"
                    style="aspect-ratio: 1/1" alt="写真">
                </div>
                <div class="col-md-10">
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                    data-select2-id="1" tabindex="-1" aria-hidden="true" id="member_select{{$i}}" name="home_{{$i}}">

                    <option selected disabled hidden style='display: none' value=''></option>
                    @if(!$game_members->isEmpty())
                      @foreach($home_players as $player)
                      @if ($game_members[0]["home_" . $i] == $player->id)
                      <option value="{{$player->id}}" selected>{{$player -> name}}</option>
                      @else
                      <option value="{{$player->id}}">{{$player -> name}}</option>
                      @endif
                      @endforeach
                    @else
                      @foreach($home_players as $player)
                      <option value="{{$player->id}}">{{$player -> name}}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
              </div>
              @endfor
              <div hidden class="form-group">
                <textarea name="game_id">{{$game->id}}</textarea>
              </div>
          </div>
        </div>
      </div>
    </form>

    <!-- /.form-group -->
  </div>
  <!-- /.col -->
</div>