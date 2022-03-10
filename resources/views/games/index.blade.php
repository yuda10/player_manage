@extends('adminlte::page')

@section('content_header')
<h1>試合一覧</h1>
@stop

@section('content')
<!-- リーグ別カード -->
<div class="card card-default">
	<div class="card-header pr-4 mr-2 row">
		<p class="card-title col-md-10 d-flex align-items-center"><i class="fas fa-football-ball"></i><b>{{$league}}リーグ</b></p>
		@auth
			@if(Auth::user()->admin_grade)
				<!-- 試合追加モーダルボタン -->
				<button type="button" class="btn btn-outline-secondary btn-sm col-md-2" data-toggle="modal" data-target="#addGameModal">
					試合追加
				</button>
			@endif
		@endauth
	</div>
	<!-- 試合追加モーダルダイアログ -->
	@include('games.addmodal')

	<!-- 試合カード -->
	<div class="card-body">
		@foreach($games as $game)
		<div class="callout callout-warning row">
			<div class="col-md-10 d-flex">
				<a href="/game_members/{{$game -> id}}" class="text-decoration-none">
					<p>{{$game -> datetime -> format('Y-m-d')}}<span class="ml-1">{{$game -> datetime
							->format('H:i')}}K.O</span><span class="ml-1">{{$game -> ground}}</span></p>
					<div class="d-flex flex-row">
						<h4 class="mb-0 d-flex align-items-end">{{$game -> homeTeams -> name}} vs {{$game -> awayTeams
							-> name}}</h4>
						<div class="ml-3 d-flex align-items-end">補助:{{$game -> assistantTeams -> name}}</div>
					</div>
				</a>
			</div>
			@auth
				@if(Auth::user()->admin_grade)
					<div class="col-md-2 p-0 row">
						<!-- 試合情報修正モーダルボタン -->
						<button type="button" class="btn btn-outline-secondary btn-sm col align-self-center" data-toggle="modal" data-target="#editGameModal-{{$game->id}}">
							修正
						</button>
						<!-- 試合情報修正モーダルダイアログ -->
						@include('games.editmodal')
						<!-- 試合削除モーダルボタン -->
						<button type="button" class="btn btn-outline-secondary btn-sm col align-self-center ml-1" data-toggle="modal" data-target="#deleteGameModal-{{$game->id}}">
							削除
						</button>
						<!-- 試合削除モーダルダイアログ -->
						@include('games.deletemodal')
					</div>
				@endif
			@endauth
		</div>
		@endforeach
	</div>
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
