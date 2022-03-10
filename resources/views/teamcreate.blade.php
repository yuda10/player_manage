@extends('adminlte::page')

@section('content_header')
<h1>チーム登録</h1>
@stop 

@section('content')

<!-- <form action="Create"  method="POST" > -->
<form action="/teams" method="POST">
  @csrf  
       
    <!-- <input type="text" class="form-control" name="id" placeholder="id" maxlength="3" required><br> -->
    <input type="text" class="form-control" name="name" placeholder="チーム名" maxlength="50" required ><br>
    <input type="text" class="form-control" name="league" placeholder="所属リーグ" maxlength="10" required><br>
    <input type="text" class="form-control" name="manager_name" placeholder="代表者氏名" maxlength="50" required><br>
    <input type="phone" class="form-control" name="manager_phone" placeholder="代表者電話番号" maxlength="20" required><br>
    <input type="email" class="form-control" name="manager_email" placeholder="代表者メールアドレス" maxlength="254" required><br>
        
    <button class="w-100 btn btn-lg" type="submit">保存する</button>
    
</form>
<!-- <button class="w-100 btn btn-lg" type="submit">キャンセル</button> -->
    <a href="/teams">{{ __('一覧へ戻る') }}</a>
</body>

@stop 

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop 

@section('js')

@stop 