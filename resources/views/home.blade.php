@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>試合一覧</h1>
@stop

@section('content')
<div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bullhorn"></i>
                  九州Aリーグ
                </h3>
                <!-- TODO 試合追加ボタンを追加 -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="callout callout-danger">
                  <!-- TODO データベースから試合情報取得して表示-->
                
                    <h5>1月11日12:00 コンサドーレ札幌 vs ベガルタ仙台</h5>

                </div>
                <div class="callout callout-info">
                  <h5>1月11日13:00 鹿島アントラーズ vs 浦和レッズ</h5>

                </div>
                <div class="callout callout-warning">
                  <h5>1月11日14:00 柏レイソル vs FC東京</h5>

                </div>
                <div class="callout callout-success">
                  <h5>I am a success callout!</h5>

                  <p>This is a green callout.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
@stop

@section('css')
<link rel=”stylesheet” href=”/css/admin_custom.css”>
@stop

@section('js')
<script> console.log('Hi'); </script>
@stop