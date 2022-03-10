@extends('adminlte::page')

@section('content_header')

  <div class="d-flex justify-content-between">
    <div>
    <h1>システム管理者専用</h1>
    </div>
  <div>
  <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal"
			data-target="#notificationModal">
			お知らせ編集
		</button>
    @include('users.notificationmodal')
  </div>
</div>


@stop 

@section('content')
<section class="content">
<div class="card">
<div class="card-header">
<h3 class="card-title">チーム管理者情報</h3>
</div>

<div class="card-body row">
<div style="position: relative; height: 100%; width: 100%;">
<div class="jsgrid-grid-header jsgrid-header-scrollbar">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Team</th>
      <th sdope="col">Grade</th>
      <th sdope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user -> id}}</th>
      <td>{{$user -> name}}</td>
      <td>{{$user -> email}}</td>
      @if($user -> team_id)
      <td>{{$user -> userTeam -> name}}</td>
      @else
      <td>NO Team</td>
      @endif
      @if($user -> admin_grade == true)
      <td>System Administrator</td>
      @else
      <td>Team admin</td>
      @endif
      <td>
      <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal"
			data-target="#editUserModal-{{$user -> id}}">
			編集
		</button>
      </td>
    </tr>
    @include('users.editmodal')
    @endforeach
  </tbody>
</table>
</div>

</div>

</section>
{{$i = \App\Models\User::count()}}
@stop 

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop 

@section('js')
<script>
   for (let i = 1; i < 6; i++) {
  const dt = document.getElementById('modify' + i);
$(function() {
		$(dt).daterangepicker({
			showDropdowns: true,
			singleDatePicker: true,
      autoUpdateInput: false,
			locale: {
				format: 'Y-MM-DD'
			},
		},
    function(date) {
                $(dt).val(date.format('Y-MM-DD'));
    }
    );
	});

  const del = document.getElementById('del' + i);
  const tex = document.getElementById('body' + i);

  del.onclick = function(){
    tex.value = '';
    dt.value = '';
};
   }
</script>
@stop 