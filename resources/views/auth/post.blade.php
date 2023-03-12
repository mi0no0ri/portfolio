@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <h2 class="panel-heading">Post</h2>
        <div class="panel-body">
          <form action="{{ route('create') }}" method="post">
            {{ csrf_field() }}
            <div class="adminPostWrap">
              @foreach($errors->all() as $error)
                <p class="error">{{ $error }}</p>
              @endforeach
              <div class="adminPostList">
                <label for="photo" class="adminPostItem">トップ画像</label>
                <input type="file" name="photo" id="photo">
              </div>
              <div class="adminPostList">
                <label for="title" class="adminPostItem">タイトル</label>
                <input type="text" name="title" id="title">
              </div>
              <div class="adminPostList">
                <label for="description" class="adminPostItem">説明</label>
                <input type="textarea" name="description" id="description">
              </div>
              <div class="adminPostList">
                <label for="subImage1" class="adminPostItem">サブ画像1</label>
                <input type="file" name="postdetail[0][postdetail]" id="subImage1">
              </div>
              <div class="adminPostList">
                <label for="subImage2" class="adminPostItem">サブ画像2</label>
                <input type="file" name="postdetail[1][postdetail]" id="subImage2">
              </div>
              <div class="adminPostList">
                <label for="subImage3" class="adminPostItem">サブ画像3</label>
                <input type="file" name="postdetail[2][postdetail]" id="subImage3">
              </div>
              <div  class="adminPostList">
                <label class="adminPostItem">使用言語</label>
                <div class="adminPostLang">
                  <label for="html"><input type="checkbox" name="languague[0][languague]" value="html" id="html">HTML</label>
                  <label for="css"><input type="checkbox" name="languague[1][languague]" value="css" id="css">CSS</label>
                  <label for="javascript"><input type="checkbox" name="languague[2][languague]" value="javascript" id="javascript">JavaScript</label>
                  <label for="jquery"><input type="checkbox" name="languague[3][languague]" value="jquery" id="jquery">jQuery</label>
                  <label for="php"><input type="checkbox" name="languague[4][languague]" value="php" id="php">PHP</label>
                  <label for="laravel"><input type="checkbox" name="languague[5][languague]" value="laravel" id="laravel">Laravel</label>
                  <label for="java"><input type="checkbox" name="languague[6][languague]" value="java" id="java">Java</label>
                  <label for="spring"><input type="checkbox" name="languague[7][languague]" value="spring" id="spring">Spring boot</label>
                </div>
              </div>
              <div class="adminPostBtn">
                <input type="submit" value="登録">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
