<div class="modal fade" id="editUserModal-{{$user -> id}}" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">管理者情報修正 Id={{$user -> id}}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<div class="modal-body">
					<form method="post" action="/system_admin/user_edit" id="user_edit_form{{$user -> id}}">
					@csrf
					<div class="row justify-content-start">
						<div class="col-10">
							<div class="form-group mb-3">
								<label>Name</label>
								<input type="text" class="form-control" name="name" value='{{$user -> name}}'>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-start">
						<div class="col-10">
							<div class="form-group mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value='{{$user -> email}}'>
							</div>
						</div>
					</div>
					<div class="row justify-content-start">
						<div class="col-10">
							<div class="form-group mb-3">
								<label>Team</label>
								<select class="form-control select2 select2-hidden-accessible"  name="team_id" style="width: 100%;"
									data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    
									@if($user -> team_id)
									<option selected='selected' value='{{$user -> team_id}}'>{{$user -> userTeam -> name}}</option>
									@foreach($teams as $team)
									@continue($team ->id == $user -> team_id)
									<option value="{{$team -> id}}">{{$team -> name}}</option>
									@endforeach
									@else
									<option selected disabled hidden style='display: none' value=''></option>
									@foreach($teams as $team)
									<option value="{{$team -> id}}">{{$team -> name}}</option>
									@endforeach
									@endif
									
								</select>
							</div>
						</div>
					</div>
					<div class="row justify-content-start">
						<div class="form-group col-10">
							<label>Grade</label>
							<div class="form-check">
								<input type="hidden" value="0" name="admin_grade">
								@if($user -> admin_grade == true)
  								<input class="form-check-input" type="checkbox" value="1" id="" name="admin_grade" checked>
								@else
								<input class="form-check-input" type="checkbox" value="1" id="" name="admin_grade">
								@endif
  								<label class="form-check-label">System Administrator</label>
  							</div>
						</div>
						<div hidden class="form-group">
						<textarea name="id">{{$user -> id}}</textarea>
						</div>
</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-outline-secondary" form="user_edit_form{{$user -> id}}">編集</button>
				</div>
			</div>
		</div>
	</div>