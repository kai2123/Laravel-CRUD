<!DOCTYPE html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC}" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link rel="stylesheet" media="all" th:href="@{/css/ress.min.css}"/>
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}"/>



</head>
<body class = "pink">
<div class="bg-light sticky-top">
@auth
<div class="container bg-light">
      <div class="row">
        <div class="col-12">
          <div class = "top-header">
            <header class = "top-header">
              <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-padding-bottom-top top-header">
                <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="35" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                </svg>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                
                  <div class="collapse navbar-collapse row justify-content-center navbar-padding-bottom-top margin top-header" id="navbarSupportedContent">
                    <div class="col"></div>
                    <div class="col-4">
                    <ul class="navbar-nav mr-auto top-header">
                      
                        <a class="nav-link hover-pink text-center top-header a-padding" href="{{ route('connection/welcome') }}">Home<span class="sr-only"></span></a>
                      </li>
                    
                    
                      <li class="nav-item top-header li-padding">
                        <a class="nav-link hover-pink text-center top-header a-padding" href="#">About</a>
                      </li>  
                    
                    
                      <li class="nav-item top-header li-padding">
                        <a class="nav-link hover-pink text-center top-header a-padding" href="{{ route('connection/createread') }}">Post</a>
                      </li>
                    
              
                      <li class="nav-item top-header li-padding">
                        <a class="nav-link hover-pink text-center top-header a-padding" href="{{ route('connection/userlist') }}#">UserList</a>
                      </li>

                      <li class="nav-item dropdown top-header li-padding">
	                      <a class="nav-link dropdown-toggle hover-pink top-header text-center a-padding" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		                    Accont
  	                    </a>
		                    <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink ">
        	                <li><a class="dropdown-item nav-link hover-pink text-center top-header a-padding" href="{{ route('connection/mypage', ['id' => auth()->user()->id]) }}">MyPage</a></li>
                          <li><a class="dropdown-item nav-link hover-pink text-center top-header a-padding" href="{{ route('profile.edit') }}">Profile</a></li>
                          <li class="nav-item top-header li-padding">
                            <form method="POST" action="{{ route('logout') }}" >
                            @csrf

                              <a href="route('logout')"class="nav-link hover-pink text-center top-header a-padding"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                                {{ __('LogOut') }}
                              </a>
                            </form>
                          </li>
                        </ul>
                      </li>
                      <!--<li class="nav-item top-header li-padding">
                        <a class="nav-link hover-pink text-center top-header a-padding" href="#">スキル</a>
                      </li>-->
                      

                    </ul>
                    </div>
                  </div>
                
              </nav>
            </header>
          </div>

        </div>
      </div>
</div>

@else
<div class="container bg-light">
      <div class="row">
        <div class="col-12">
          <div class = "top-header">
            <header class = "top-header">
              <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-padding-bottom-top top-header">
                <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="35" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                </svg>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                
                  <div class="collapse navbar-collapse row justify-content-center navbar-padding-bottom-top margin top-header" id="navbarSupportedContent">
                    <div class="col"></div>
                    <div class="col-4">
                    <ul class="navbar-nav mr-auto top-header">
                      
                        <a class="nav-link hover-pink text-center top-header a-padding" href="{{ route('connection/welcome') }}">Home<span class="sr-only"></span></a>
                      </li>
                    
                    
                      <li class="nav-item top-header li-padding">
                        <a class="nav-link hover-pink text-center top-header a-padding" href="#">About</a>
                      </li>  
                    
                    
                      <li class="nav-item top-header li-padding">
                        <a class="nav-link hover-pink text-center top-header a-padding" href="{{ route('register') }}">Sign in</a>
                      </li>
                    
                      <li class="nav-item top-header li-padding">
                        <a class="nav-link hover-pink text-center top-header a-padding" href="{{ route('login') }}">Log in</a>
                      </li>
                    
                    
                      
                    </ul>
                    </div>
                  </div>
                
              </nav>
            </header>
          </div>

        </div>
      </div>
</div>
@endauth
</div>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>