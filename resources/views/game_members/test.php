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
      
            @if(isset($game_members))
            <p>aaaaaaaaa</p>
            @else
              <p>メンバー追加されていません</p>
            @endif
          
          </div>
        


    <span>誕生月</span>
    <select name="month" id="selectMonth">
      <option value="">-</option>
      <option value="1">1月</option>
      <option value="2">2月</option>
      <option value="3">3月</option>
      <option value="4">4月</option>
      <option value="5">5月</option>
      <option value="6">6月</option>
      <option value="7">7月</option>
      <option value="8">8月</option>
      <option value="9">9月</option>
      <option value="10">10月</option>
      <option value="11">11月</option>
      <option value="12">12月</option>
    </select>  