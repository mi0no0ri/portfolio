@extends('toppage')

@section('contents')

  <div class="contact">
    <h2>Contact</h2>
    <form class="contactForm" method="post" action="{{ route('contact.create') }}">
      {{ csrf_field() }}
      <div class="contactWrap">
        @foreach($errors->all() as $error)
          <p class="error">{{ $error }}</p>
        @endforeach
        <div class="contactContents">
          <label for="name">お名前</label>
          <input type="text" id="name" name="name" class="contactInput">
        </div>
        <div class="contactContents">
          <label for="email">メールアドレス</label>
          <input type="text" id="email" name="email" class="contactInput">
        </div>
        <div class="contactContents">
          <label for="title">件名</label>
          <input type="text" id="title" name="title" class="contactInput">
        </div>
        <div class="contactContents">
          <label for="contact">お問い合わせ</label>
          <input type="textarea" id="contact" name="contact" class="contactTextbox">
        </div>
      </div>
      <div class="submitBtn">
        <input type="submit" value="送信">
      </div>
    </form>
    <div class="return">
      <a href="{{ route('top') }}">TOP</a>
    </div>
  </div>

@endsection
