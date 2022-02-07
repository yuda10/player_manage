<div class="modal fade" id="addGameModal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">試合追加</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form method="post" action="/match_add" id="add_form">
					@csrf
					<div class="row justify-content-start">
						<div class="col-8">
							<div class="form-group mb-0">
								<label>ホーム</label>
								<select class="form-control select2 select2-hidden-accessible" name="home_team_id"
									style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
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
								<select class="form-control select2 select2-hidden-accessible mb-2" name="away_team_id"
									style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
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
								<select class="form-control select2 select2-hidden-accessible" name="assistant_team_id"
									style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
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
								<input type="text" class="form-control datetimepicker-input" name="datetime"
									autocomplete="off">
							</div>
						</div>
					</div>
					<div hidden class="form-group">
						<textarea name="league">{{$league}}</textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-outline-secondary" form="add_form">追加</button>
			</div>
		</div>
	</div>
</div>