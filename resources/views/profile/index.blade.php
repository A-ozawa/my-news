@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
               <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($profiles as $profile)
                 名前: {{ $profile->name }}<br>
                  性別:{{ $profile->gender }}<br>
                  趣味:{{ $profile->hobby }}<br>
                  自己紹介:{{ $profile->introduction }}<br>
                  <hr>
                @endforeach
               
            </div>
        </div>
    </div>
    </div>
@endsection