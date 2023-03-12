@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2 class="panel-heading">Contact List</h2>
                  <div class="panel-body">
                    @if($contacts->count() > 0)
                    <table>
                      <tr>
                        <th class="contactList">お名前</th>
                        <th class="contactList">email</th>
                        <th class="contactList">タイトル</th>
                        <th>内容</th>
                      </tr>
                      @foreach($contacts as $contact)
                      <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->title }}</td>
                        <td>{{ $contact->contact }}</td>
                      </tr>
                      @endforeach
                    </table>
                    @else
                      <p>お問い合わせはありません</p>
                    @endif
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
