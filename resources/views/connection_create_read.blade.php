@extends('layouts.connection_layout')

@section('content')
  <div class="connect-container border border border-1">
    <div class="row connect-row">
      <div class="col-4">
        <div sidebar_fixed>
          <div class = "connect-user-frame border border border-1">
            <div class = "connect-user-main border border border-1">
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
              <h2 class ="text-center">{{ Auth::user()->name }}</h2>
              <p class ="text-center">Posts({{ $user_posts_number }})</p>
              </div>
            </div>
            </div>
          </div>

          <div class = "connect-post-frame border border border-1">
            <h5 class = "connect-post-h5">Content</h5>
              <form action="{{ route('post.store') }}" method="post">
                @csrf 
                <textarea name="post_body" class="form-control connect-post-textarea" placeholder="いまどうしてる？"></textarea>
                <div class="mt-3 mb-3 text-center">
                <button class="btn btn-dark btn-lg" type="submit">Post</button>
                </div>
              </form>
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
            <!-- レコードは6レコード、それ以上はページネーション
                 記事内容は200文字以内、投稿者の名前は77文字以内-->
          
          </main>       
        </div>
      </div>
    </div>
  </div>
@endsection