@extends('toppage')

@section('contents')

  <div class="introduce">
    <h2>About</h2>
    <div>
      <div class="aboutContents">
        <div class="myImage">
          <img src="storage/{{ $user->image }}" alt="" class="aboutImage">
          <div class="aboutName">
            <h4>名前：</h4>
            <p>minori</p>
          </div>
        </div>
        <div class="aboutIntroduce">
          <h4>経歴</h4>
          <ul>
            @foreach($carrier as $carrier)
              <li>{{ $carrier->carrier }}</li>
            @endforeach
          </ul>

          <h4>自己紹介</h4>
          <p>{{ $user->introduce }}</p>

          <h4>趣味</h4>
          <ul>
            @foreach($hobbies as $hobby)
              <li>{{ $hobby->hobby }}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <ul class="mySkill">
        <div class="pointer1">
          <li>HTML/CSS</li>
          <p class="popup1 none">1year</p>
          <div>
            <p class="barRemain"> </p>
            <p class="bar1year"> </p>
          </div>
        </div>
        <div class="pointer2">
          <li>JavaScript(jQuery)</li>
          <p class="popup2 none">1year</p>
          <div>
            <p class="barRemain"> </p>
            <p class="bar1year"> </p>
          </div>
        </div>
        <div class="pointer3">
          <li>PHP(Laravel)</li>
          <p class="popup3 none">6months</p>
          <div>
            <p class="barRemain"> </p>
            <p class="bar6month"> </p>
          </div>
        </div>
        <div class="pointer4">
          <li>Java</li>
          <p class="popup4 none">3months</p>
          <div>
            <p class="barRemain"> </p>
            <p class="bar3month"> </p>
          </div>
        </div>
      </ul>
    </div>
    <div class="return">
      <a href="{{ route('top') }}">TOP</a>
    </div>
  </div>


@endsection
