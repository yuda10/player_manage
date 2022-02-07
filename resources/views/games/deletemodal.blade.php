<div class="modal fade" id="deleteGameModal-{{$game->id}}" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">試合削除</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<div class="modal-body">
					<form method="post" action="/match_delete" id="delete_form">
					@csrf
					<div hidden class="form-group">
						<textarea name="league">{{$league}}</textarea>
						<textarea name="id">{{$game->id}}</textarea>
					</div>
		
					<p>{{$game -> datetime -> format('Y-m-d')}}<span class="ml-1">{{$game -> datetime
							->format('H:i')}}K.O</span><span class="ml-1">{{$game -> ground}}</span></p>
					<h4>
						{{$game -> homeTeams -> name}} vs {{$game -> awayTeams
							-> name}}</h4>
						<p>補助:{{$game -> assistantTeams -> name}}
						</p>
					</form>
				</div>
				<div class="modal-footer">
				<p>本当に削除しますか？</p>
					<button type="submit" class="btn btn-outline-secondary" form="delete_form">削除</button>
				</div>
			</div>
		</div>
	</div>