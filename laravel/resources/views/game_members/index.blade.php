@extends('adminlte::page')

@section('content_header')
@foreach($games as $game)
<h1>九州Aリーグ</h1>
<h1 class="text-center">{{$game -> homeTeams -> name}} vs {{$game -> awayTeams -> name}}</h1>
<h5 class="text-center">{{$game -> datetime -> format('Y-m-d')}} {{$game -> ground}} {{$game -> datetime -> format('H:i')}}K.O</h5>
<h6 class="text-center">補助チーム : {{$game -> assistantTeams -> name}}</h6>
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

