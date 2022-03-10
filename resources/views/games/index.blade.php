@extends('adminlte::page')

@section('content_header')
<h1>試合一覧</h1>
@stop

@section('content')
<div class="card card-default">
	<div class="card-header row">
		<p class="card-title col-md-10 d-flex align-items-center">
			<i class="fas fa-football-ball"></i>
			<b>{{$league}}リーグ</b>
		</p>
		<button type="button" class="btn btn-outline-secondary btn-sm col-md-2" data-toggle="modal"
			data-target="#addGameModal">
			試合追加
		</button>
	</div>
	<!-- モーダルダイアログ -->
	@include('games.addmodal')
	<!-- <div class="modal fade" id="addGameModal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">試合追加</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<div class="modal-body">
					<form method="post" action="/match_register" id="add_form">
					@csrf
					<div class="row justify-content-start">
						<div class="col-8">
							<div class="form-group mb-0">
								<label>ホーム</label>
								<select class="form-control select2 select2-hidden-accessible" name="home_team_id" style="width: 100%;"
									data-select2-id="1" tabindex="-1" aria-hidden="true">
									<option selected disabled hidden style='display: none' value=''></option>
									@foreach($teams as $team)
									<option value="{{$team -> id}}">{{$team -> name}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-1 text-center">VS</div>
					</div>
					<div class="row justify-content-end">
						<div class="col-8">
							<div class="form-group text-right">
								<select class="form-control select2 select2-hidden-accessible mb-2" name="away_team_id" style="width: 100%;"
									data-select2-id="1" tabindex="-1" aria-hidden="true">
									<option selected disabled hidden style='display: none' value=''></option>
									@foreach($teams as $team)
									<option value="{{$team -> id}}">{{$team -> name}}</option>
									@endforeach
								</select>
								<label>アウェイ</label>
							</div>
						</div>
					</div>
					<div class="row justify-content-start">
						<div class="col-10">
							<div class="form-group mb-3">
								<label>補助チーム:</label>
								<select class="form-control select2 select2-hidden-accessible"  name="assistant_team_id" style="width: 100%;"
									data-select2-id="1" tabindex="-1" aria-hidden="true">
									<option selected disabled hidden style='display: none' value=''></option>
									@foreach($teams as $team)
									<option value="{{$team -> id}}">{{$team -> name}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="row justify-content-start">
						<div class="form-group col-10">
							<label>場所:</label>
							<input type="text" class="form-control" name="ground" placeholder="">
						</div>
					</div>
					<div class="row justify-content-start">
						<div class="form-group col-10">
							<label>日時:</label>
							<div class="input-group date" data-target-input="nearest">
								<input type="text" class="form-control datetimepicker-input" name="datetime" autocomplete="off">
							</div>
						</div>
					</div>
					<div hidden class="form-group">
						<textarea name="league">{{$league}}</textarea>
					</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" form="add_form">追加</button>
				</div>
			</div>
		</div>
	</div> -->
	<!-- /.card-header -->
	<div class="card-body">
		@foreach($games as $game)
		<div class="callout callout-warning row">
			<div class="col-md-11 d-flex">
			<a href="/game_members/{{$game -> id}}" class="text-decoration-none">
				<p>{{$game -> datetime -> format('Y-m-d')}} {{$game -> ground}} {{$game -> datetime ->
					format('H:i')}}K.O</p>
				<h4>{{$game -> homeTeams -> name}} vs {{$game -> awayTeams -> name}}</h4>
			</a>
			</div>
			<div class="col-md-1 row">
			<button type="button" class="btn btn-outline-secondary btn-sm col align-self-center " data-toggle="modal"
			data-target="#editGameModal">
			修正
		</button>
		</div>
		@include('games.editmodal')
		</div>
		@endforeach
	</div>


	<!-- /.card-body -->
</div>
@stop

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop

@section('js')
<script>
$(function() {
  $('input[name="datetime"]').daterangepicker({
	showDropdowns: true,
	singleDatePicker: true,
    timePicker: true,
	timePicker24Hour: true,
    locale: {
      format: 'Y-MM-DD HH:mm'
    }
  });
});
</script>
@stop

<!-- {{print_r($teams)}} -->