@extends('toppage')

@section('contents')

<div class="body">
  <div class="article">
    <div>
      <img src="storage/{{ $user->background }}" alt="トップ写真" class="topPic">
    </div>
    <div class="introduce">
      <h2>About</h2>
      <div class="introduceContents">
        <img src="storage/{{ $user->image }}" alt="プロフィール写真" class="profileImage">
        <div class="introduceText">
          <p>NAME: <strong>{{ $user->name }}</strong></p>
          <p>{{ $user->introduce }}</p>
          <a href="{{ route('about') }}">more...</a>
        </div>
      </div>
    </div>
    <div class="work">
      <h2>Works</h2>
      <div class="workContents">
        <div class="modalList">
          @foreach($images as $index => $image)
            <div class="functionWrap">
              <div class="workList workList{{$index}}">
                <div class="workTitle">
                  <h4>{{ $image->title }}</h4>
                  <p>{{ $image->description }}</p>
                  <p class="languagueTitle">使用言語：</p>
                  @foreach($image->languague as $langs)
                    <small class="languagueList">{{ $langs->languague }}</small>
                  @endforeach
                  <div class="functionLink">
                    <p class="functionBtn" data-target="function{{$index}}">機能一覧</p>
                    <div class="functionModal none" id="function{{$index}}">
                      <h4>機能一覧</h4>
                      <div class="functionContents">
                        <p class="functionClose">×</p>
                      @foreach($image->functions as $index => $function)
                        <p class="functionName">{{ $index + 1 }}：{{ $function->name }}</p>
                      @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="imageList">
                  @foreach($image->postdetails as $index => $detail)
                    <img src="storage/{{ $detail->image }}" alt="作品の画像{{$index}}" class="workDetailImage">
                  @endforeach
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="moreLink">
          <a href="{{ route('work') }}">more...</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
