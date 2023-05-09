@extends('layouts.connection_layout')

@section('content')
<div class="connect-container border border border-1">
    <div class="row connect-row">
      <div class="col-4">
        <div sidebar_fixed>
          <div class = "connect-mypage-frame border border border-1">
            <div class = "connect-mypage-frame-part border border border-1">
              <div class="mypage-post-img ">
                <!--<img src="./images/me.png" width="300" height="300">-->
                <div>
                <form method="POST" action="{{ route( 'post.update')}}" enctype="multipart/form-data">
                    @csrf
                    <label class = "profile-image">
                      @if ($user->profile_image === null)
                      <img src="{{ asset('default.png') }}" alt="プロフィール画像" width="300" height="300" class = "border border border-1">
                      @else
                      <img src="{{ Storage::url($user->profile_image) }}" alt="プロフィール画像" width="300" height="300" class = "border border border-1">
                      @endif
                      <div class="row">
                      <div class="col choose-file-padding-left">
                      <span class="btn btn-dark">
                        Choose File
                        <input type="file" name="img_path" style="display:none" />
                      </span>
                      </div>
                      <div class="col post-padding-left">
                      <span >
                      <input class="btn btn-dark" type="submit" value = "Post" />
                      </span>
                      </div>
                      </div>

                    </label>
                </form>
                </div>
                
              </div>

              <div class = "test">
                
                <h2 class ="text-center">{{ $user->name }}</h2>
                <p class ="text-center">{{ $user->email }}</p>
                <p class ="text-center">Posts({{ $user_posts_number }})</p>
              </div>
          
              
            </div>
            <div class = "connect-mypage-frame-part-under border border border-1">

            </div>
          </div>

        </div>
      </div>
      <div class="col">
        <div class = "connect-user-list border border border-1">
          <main class="container">
          @foreach ($posts as $post)
            <article class="post-item">
              <div class="row" >
              <div class="col-1">
              <div class="post-img">
              @if ($user->profile_image === null)
                      <img src="{{ asset('default.png') }}" alt="プロフィール画像" width="80" height="80">
                      @else
                      <img src="{{ Storage::url($user->profile_image) }}" alt="プロフィール画像" width="80" height="80">
              @endif
              </div>
              </div>
              <div class="col">
              <div class="post-user-name">{{ Auth::user()->name }}</div>
              <div class="post-body">{{ $post->post_body }}</div>
              </div>
              </div>
              
            </article>
          @endforeach
          {{ $posts->links() }}
        
          </main>       
          
        </div>
        
      </div>
      
    </div>
    
  </div>
@endsection