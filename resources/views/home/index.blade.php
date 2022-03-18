@extends('adminlte::page')

@section('content_header')

@stop
<!-- ホーム画面/選手管理システム -->
@section('content')

<!-- <a href="{{ url('teamcreate') }}" class="btn btn-primary">ログイン</a> -->

<div class="card card-row card-secondary mt-3">

    <div class="card-header pr-4 mr-2">

        <h3 class="card-title"><i class="fas fa-football-ball"></i> お知らせ</h3>
    </div>
    @if($notifications->isEmpty())
    <div class="card-body">
        <p>現在、お知らせはありません</p>
        </div>
        @else
        <div class="card-body">
        @foreach($notifications as $notification)
            <div class="card card-light card-outline">
                <div class="card-header">
                    <h5 class="card-title">{{$notification -> modified_date -> format('Y-m-d')}}</h5>
                    <div class="card-tools">
                        <a href="#" class="btn btn-tool">
                            <i class="fas fa-pen"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <p>{{$notification -> body}}</p>
                </div>
            </div>
            @endforeach
            </div>
            @endif
    </div>
    @stop

    @section('css')
    <link rel=”stylesheet” href=”/css/admin_custom.css”>
    @stop