@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="{{ route('post') }}">投稿画面</a>
                    <a href="{{ route('contactlist') }}">お問い合わせ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
