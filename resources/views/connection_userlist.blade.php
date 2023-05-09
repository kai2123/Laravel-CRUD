@extends('layouts.connection_layout')

@section('content')
<div class="container userlist-border-padding">

  <div class="row userlist-background-color border border border-1">
@foreach ($users as $user)
    <div class="col-4 userlist-border-padding border border border-1" >
      <a href="{{ route('connection/mypage', ['id' => $user->id]) }}">
        <div class= "row">
          
            <div class = "col-4">
              <div class="post-img">
              @if ($user->profile_image === null)
              <img src="{{ asset('default.png') }}" alt="プロフィール画像" width="80" height="80">
              @else
              <img src="{{ Storage::url($user->profile_image) }}" alt="プロフィール画像" width="80" height="80">
              @endif
              </div>
            </div>
            
            <div class = "col">
              <div>
              <div>
                <h2>{{$user->name}}</h2>
                <p>{{ $user->email }}</p>
              </div>
              </div>
            </div>
        </div>
      </a>    
        
    </div>
@endforeach
  </div>
</div>
@endsection