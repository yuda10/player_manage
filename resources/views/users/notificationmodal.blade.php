<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">お知らせ編集</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<div class="modal-body">
					<form method="post" action="/system_admin/notification" id="notification_form">
					@csrf
					@if(!\App\Models\Notification::count())
						@for($i = 1; $i < 6; $i++)
						<div class="form-group">
						<div class="input-group date row" data-target-input="nearest">
						<input type="text" class="form-control datetimepicker-input col-3" name="modified_date_{{$i}}" id="modify{{$i}}" 
									autocomplete="off">
									</div>
									<div class="row mb-2">
									<textarea class="form-control col-10" name="body_{{$i}}" id="body{{$i}}" rows="3" placeholder="お知らせ"></textarea>
									<button type="button" class="btn btn-secondary btn-sm col-2" id="del{{$i}}">削除</button>
									</div>
						
					</div>
						@endfor
					@else
						@foreach($notifications as $notification)
						<div class="form-group">
						<div class="input-group date row" data-target-input="nearest">
							@if($notification -> modified_date)
								<input type="text" class="form-control datetimepicker-input col-3" name="modified_date_{{$notification -> id}}" id="modify{{$notification -> id}}" 
									autocomplete="off" value="{{$notification -> modified_date ->format('Y-m-d')}}">
							@else
							<input type="text" class="form-control datetimepicker-input col-3" name="modified_date_{{$notification -> id}}" id="modify{{$notification -> id}}" 
									autocomplete="off" value="{{$notification -> modified_date}}">
							@endif
									</div>
									<div class="row mb-2">
									<textarea class="form-control col-10" name="body_{{$notification -> id}}" id="body{{$notification -> id}}" rows="3" placeholder="お知らせ">{{$notification -> body}}</textarea>
									<button type="button" class="btn btn-secondary btn-sm col-2" id="del{{$notification -> id}}">削除</button>
									</div>
									<div hidden class="form-group">
						<textarea name="id">{{$notification -> id}}</textarea>
						</div>
						</div>
						@endforeach
					@endif
				</form>
				</div>
				{{ \App\Models\Notification::count() }}
				
				<div class="modal-footer">
					<button type="submit" class="btn btn-outline-secondary" form="notification_form">編集</button>
				</div>
			</div>
		</div>
	</div>