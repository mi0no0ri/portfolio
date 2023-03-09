@extends('toppage')

@section('contents')

  <div class="workWrap work">
    <h2>Works</h2>
    <div class="modalList">
      @foreach($images as $index => $image)
      @if($image->count() >= 6)
      <img src="storage/{{ $image->photo }}" alt="作品のトップ画像{{$index}}" class="workImg" data-target="modal{{$index}}">

        <div class="modal none" id="modal{{$index}}">
          <div class="modalWrap">
            <div class="modalContent">
              <p class="modalClose">×</p>
              <div>
                <p class="modalTitle">{{ $image->title }}</p>
                <p>{{ $image->description }}</p>
                @foreach($image->languague as $langs)
                  <small class="languagueList">{{ $langs->languague }}</small>
                @endforeach
              </div>
              <div class="workImages">
              @foreach($image->postdetails as $index => $detail)
                <img src="storage/{{ $detail->image }}" alt="作品の画像{{$index}}" class="workDetailImage">
              @endforeach
              </div>
            </div>
          </div>
        </div>
        @else
        <div>
          <div class="functionWrap">
            <div class="workList workList{{$index}}">
              <div class="workTitle">
                <h4>{{ $image->title }}</h4>
                <p>{{ $image->description }}</p>
                <p class="languagueTitle">使用言語：</p>
                @foreach($image->languague as $langs)
                  <small class="languagueList">{{ $langs->languague }}</small>
                @endforeach
              </div>
              <div class="imageList">
                @foreach($image->postdetails as $index => $detail)
                  <img src="storage/{{ $detail->image }}" alt="作品の画像{{$index}}" class="workDetailImage">
                @endforeach
              </div>
            </div>
          </div>
        </div>
        @endif
      @endforeach
    </div>
    <div class="return">
      <a href="{{ route('top') }}">TOP</a>
    </div>
  </div>

@endsection
