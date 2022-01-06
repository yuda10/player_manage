@extends('adminlte::page')

@section('content_header')
@foreach($games as $game)
<h1>{{$game -> name}} vs {{$game -> away_team_id}}</h1>
<h5>{{$game -> ground}}</h5>
<h5>{{$game->datetime->format('m月d日H時i分')}} K.O</h5>
<h5>{{$game -> assistant_team_id}}</h5>
@endforeach
@stop

@section('content')
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">コンサドーレ札幌</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          @for($i = 1; $i < 16; $i++) <label>No.{{$i}}</label>
            <!-- TODO アイコン写真 -->
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1"
              tabindex="-1" aria-hidden="true">
              <option selected disabled hidden style='display: none' value=''></option>
              @foreach($players as $player)
              <option>{{$player -> name}}</option>
              @endforeach
            </select>
            @endfor
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="form-group">
          @for($i = 16; $i < 24; $i++) <label>No.{{$i}}</label>
            <!-- TODO アイコン写真 -->
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1"
              tabindex="-1" aria-hidden="true">
              <option selected disabled hidden style='display: none' value=''></option>
              @foreach($players as $player)
              <option>{{$player -> name}}</option>
              @endforeach
            </select>
            @endfor
        </div>
      </div>
      <!-- /.form-group -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<div class="card-footer">
  Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
  the plugin.
</div>
@stop

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop

@section('js')
<script>
  console.log('Hi');
</script>
@stop