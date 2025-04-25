
<html lang="en" class="no-js">
<?php
 use Carbon\Carbon;
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/images/logo-16x16.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perrin - Social Network</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}" rel="stylesheet">
    <script src="{{ asset('js/load.js') }} " type="text/javascript"></script>
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js" type="text/javascript"></script>

    <style>
        .newsfeed-right-side-content {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
}
.profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
.post-content {
    width: 100%; 
    height: 600px;
    object-fit: cover;
    border-radius: 10px;
}

    </style>

</head>


<body class="newsfeed">
    <div class="container-fluid" id="wrapper">
        <div class="row newsfeed-size">
            <div class="col-md-12 newsfeed-right-side">
                <nav id="navbar-main" class="navbar navbar-expand-lg shadow-sm sticky-top">
                    <div class="w-100 justify-content-md-center">
                        <ul class="nav navbar-nav enable-mobile px-2">
                            <li class="nav-item">
                                <button type="button" class="btn nav-link p-0"><img src="{{ asset('images/icons/theme/post-image.png') }}" class="f-nav-icon" alt="Quick make post"></button>
                            </li>
                            <li class="nav-item w-100 py-2">
                                <form class="d-inline form-inline w-100 px-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control search-input" placeholder="Search for people, companies, events and more..." aria-label="Search" aria-describedby="search-addon">
                                        <div class="input-group-append">
                                            <button class="btn search-button" type="button"><i class='bx bx-search'></i></button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li class="nav-item">
                                <a href="messages.html" class="nav-link nav-icon nav-links message-drop drop-w-tooltip" data-placement="bottom" data-title="Messages">
                                    <img src="{{ asset('images/icons/navbar/message.png') }}" class="message-dropdown f-nav-icon" alt="navbar icon">
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-5 flex-row" id="main_menu">
                            <a class="navbar-brand nav-item mr-lg-5" href="index.html"><img src="{{ asset('images/logo-64x64.jpeg') }}" width="40" height="40" class="mr-3" alt="Logo"></a>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <form class="w-30 mx-2 my-auto d-inline form-inline mr-5 dropdown search-form">
                                <div class="input-group" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="searchDropdown">
                                    <input type="text" class="form-control search-input w-75" placeholder="Search for people, companies, events and more..." aria-label="Search" aria-describedby="search-addon">
                                    <div class="input-group-append">
                                        <button class="btn search-button" type="button"><i class='bx bx-search'></i></button>
                                    </div>
                                </div>
                                    <ul class="dropdown-menu notify-drop nav-drop shadow-sm" aria-labelledby="searchDropdown">
                                        <div class="notify-drop-title">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6 fs-8">Search Results <span class="badge badge-pill badge-primary ml-2">29</span></div>
                                            </div>
                                        </div>
                                        <!-- notify content -->

                                    </ul>
                            </form>
                            <li class="nav-item s-nav">
                                <a href="profile.html" class="nav-link nav-links">
                                    <div class="menu-user-image">
                                    {{-- <img src="{{ asset('storage/' . Auth::user()?->profile_picture) }}" alt="Profile" class="profile-img" alt="Menu Image"> --}}
                                    <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/default_profile.jpeg') }}" alt="Profile"  class="profile-img" alt="Menu Image">
                                    {{-- <div> <h1>welcome {{ Auth::user()->firstname }}</h1></div> --}}
                                </a>
                            </li>
                            <li class="nav-item s-nav nav-icon dropdown">
                                <a href="settings.html" data-toggle="dropdown" data-placement="bottom" data-title="Settings" class="nav-link settings-link rm-drop-mobile drop-w-tooltip" id="settings-dropdown"><img src="{{ asset('images/icons/navbar/settings.png') }}" class="nav-settings" alt="navbar icon"></a>
                                <div class="dropdown-menu dropdown-menu-right settings-dropdown shadow-sm" aria-labelledby="settings-dropdown">
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('images/icons/navbar/help.png') }}" alt="Navbar icon"> Help Center</a>
                                    <a class="dropdown-item d-flex align-items-center dark-mode" onClick="event.stopPropagation();" href="#">
                                        <img src="{{ asset('images/icons/navbar/moon.png') }}" alt="Navbar icon"> Dark Mode
                                        <button type="button" class="btn btn-lg btn-toggle ml-auto" data-toggle="button" aria-pressed="false" autocomplete="off">
                                            <div class="handle"></div>
                                        </button>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('images/icons/navbar/gear-1.png') }}" alt="Navbar icon"> Settings</a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <img src="{{ asset('images/icons/navbar/logout.png') }}" alt="Navbar icon"> Logout
                                        </button>
                                    </form>
                                </div>
                            </li>
                            <button type="button" class="btn nav-link" id="menu-toggle"><img src="{{ asset('images/icons/theme/navs.png') }}" alt="Navbar navs"></button>
                        </ul>

                    </div>

                </nav>
                <div class="row newsfeed-right-side-content mt-3">

                    <div class="col-md-6 second-section" id="page-content-wrapper">
                        <div class="mb-3">
                            <div class="btn-group d-flex">
                                <a href="index.html" class="btn btn-quick-links mr-3 ql-active">
                                    <img src="{{ asset('images/icons/theme/speech.png') }}" class="mr-2" alt="quick links icon">
                                    <span class="fs-8">Speech</span>
                                </a>

                                <a href="watch.html" class="btn btn-quick-links">
                                    <img src="{{ asset('images/icons/theme/watch.png') }}" class="mr-2" alt="quick links icon">
                                    <span class="fs-8">Watch</span>
                                </a>
                            </div>
                        </div>
                      <form  action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <ul class="list-unstyled" style="margin-bottom: 0;">
                            <li class="media post-form w-shadow">
                                <div class="media-body">
                                    <div class="form-group post-input">
                                        <textarea class="form-control" name="content" id="postForm" rows="2" placeholder="What's on your mind?"></textarea>
                                    </div>
                                    <div class="row post-form-group">
                                        <div class="col-md-9">
                                                <img src="{{ asset('images/icons/theme/post-image.png') }}" alt="post form icon"> <span>Photo/Video</span>
                                            <input type="file" name="file">
                                            <button type="button" class="btn btn-link post-form-btn btn-sm">
                                                <img src="{{ asset('images/icons/theme/tag-friend.png') }}" alt="post form icon"> <span>Tag Friends</span>
                                            </button>
                                            <button type="button" class="btn btn-link post-form-btn btn-sm">
                                                <img src="{{ asset('images/icons/theme/check-in.png') }}" alt="post form icon"> <span>Check In</span>
                                            </button>
                                        </div>
                                        <div class="col-md-3 text-right">
                                            <button type="submit" class="btn btn-primary btn-sm">Publish</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                      </form>

                        <!-- Posts -->
                        @foreach ($posts as $post)
                        <div class="posts-section mb-5">
                            <div class="post border-bottom p-3 bg-white w-shadow">
                                <?php
                                           
                                $created_at = Carbon::now()->diffForHumans();
                            ?>
                                <div class="media text-muted pt-3">
                                    {{-- <img src="{{ $post->user->profile_picture ? asset('storage/' . $post->user->profile_picture) : asset('images/default_profile.jpeg') }}" alt="Profile" 
                                    class="profile-img me-2"> --}}
                                    <img src="{{ $post->user->profile_picture ? asset('storage/' . $post->user->profile_picture) : asset('images/default_profile.jpeg') }}" alt="Profile" 
                                    class="profile-img me-2">
                                    <div class="media-body pb-3 mb-0 small lh-125">
                                        <div class="d-flex justify-content-between align-items-center w-100">
                                            <a href="#" class="text-gray-dark post-user-name">
                                                {{ $post->user->firstname }} {{ $post->user->lastname }}<br>
                                            </a>
                                        </div>
                                    
                                        <span> {{$post->user->name }}</span>
                                        
                                     </div>
                                </div>

                               
                                <div class="mt-3" style="text-align: left; gap:20px;">
                                    <p>{{ $post->content }}</p>
                                </div>

                             
                                @if ($post->file)
                                    <div class="d-block mt-3">
                                       <img src="{{ asset('storage/' . $post->file) }}" class="post-content" alt="Post image">
                                    </div>
                                @endif
                                
                                <div style="display: flex">
                                    
                                        <div class="argon-reaction">
                                            <span class="like-btn">
                                                <a href="javascript:void(0)" class="post-card-buttons like-button" id="reactions" data-post-id="{{ $post->id }}"><i class='bx bxs-like mr-2'></i>
                                                    <span id="like-count-{{ $post->id }}">{{ $post->likes()->count() }}</span>
                                                </a>
                                                <ul class="reactions-box dropdown-shadow">
                                                    <li class="reaction reaction-like" data-reaction="Like"></li>
                                                    <li class="reaction reaction-love" data-reaction="Love"></li>
                                                    <li class="reaction reaction-haha" data-reaction="HaHa"></li>
                                                    <li class="reaction reaction-wow" data-reaction="Wow"></li>
                                                    <li class="reaction reaction-sad" data-reaction="Sad"></li>
                                                    <li class="reaction reaction-angry" data-reaction="Angry"></li>
                                                </ul>
                                            </span>
                                        </div>
                                    
                                    
                                    <div class="mb-3">
                                        <span class="comment-btn">
                                            {{-- <a href="javascript:void(0)" class="post-card-buttons show-comments" data-post-id="{{ $post->id }}">
                                                <i class='bx bx-message-rounded mr-2'></i> 
                                                <span id="comment-count-{{ $post->id }}">{{ $post->comments_count }}</span>
                                            </a> --}}
                                         
                                            <button class="btn btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#commentSection{{ $post->id }}">
                                                💬 Comment
                                            </button>

                                        </span>
                                    </div>
                       
                                    <!-- Collapsible Comment Section -->
<div class="collapse mt-3" id="commentSection{{ $post->id }}">
    <div class="card card-body">
        <!-- Existing Comments -->
        @forelse($post->comments as $comment)
            <div class="mb-2 p-2 border rounded">
                <strong>{{ $comment->user->name }}</strong>
                <p>{{ $comment->body }}</p>
                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
            </div>
        @empty
            <p class="text-muted">No comments yet.</p>
        @endforelse

        <!-- Comment Form -->
        @auth
        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-3">
            @csrf
            <div class="form-group mb-2">
                <textarea name="body" class="form-control" rows="3" placeholder="Write your comment..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Post Comment</button>
        </form>
        @else
            <p><a href="{{ route('login') }}">Log in</a> to leave a comment.</p>
        @endauth
    </div>
</div>

                                    <!-- Comment Modal -->
    <div class="modal fade" id="commentModal{{ $post->id }}" tabindex="-1" aria-labelledby="commentModalLabel{{ $post->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title" id="commentModalLabel{{ $post->id }}">Comments for: {{ Str::limit($post->title, 40) }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body">
          <!-- Existing Comments -->
          @forelse($post->comments as $comment)
              <div class="mb-2 p-2 border rounded">
                  <strong>{{ $comment->user->name }}</strong>
                  <p>{{ $comment->body }}</p>
                  <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
              </div>
          @empty
              <p class="text-muted">No comments yet.</p>
          @endforelse
  
          <!-- Comment Form -->
          @auth
          <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-3">
              @csrf
              <div class="form-group mb-2">
                  <textarea name="body" class="form-control" rows="3" placeholder="Write your comment..." required></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-sm">Post Comment</button>
          </form>
          @else
              <p><a href="{{ route('login') }}">Log in</a> to leave a comment.</p>
          @endauth
  
        </div>
      </div>
    </div>
  </div>
  
    
                                                                
                                    
                                </div>
                            </div>
                        @endforeach
                                </div>
                                



                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="postModal" aria-labelledby="postModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body post-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-7 post-content">
                                <img src="https://scontent.fevn1-2.fna.fbcdn.net/v/t1.0-9/56161887_588993861570433_2896723195090436096_n.jpg?_nc_cat=103&_nc_eui2=AeFI0UuTq3uUF_TLEbnZwM-qSRtgOu0HE2JPwW6b4hIki73-2OWYhc7L1MPsYl9cYy-w122CCak-Fxj0TE1a-kjsd-KXzh5QsuvxbW_mg9qqtg&_nc_ht=scontent.fevn1-2.fna&oh=ea44bffa38f368f98f0553c5cef8e455&oe=5D050B05" alt="post-image">
                            </div>
                            <div class="col-md-5 pr-3">
                                <div class="media text-muted pr-3 pt-3">
                                    <img src="assets/images/users/user-1.jpg" alt="user image" class="mr-3 post-modal-user-img">
                                    <div class="media-body">
                                        <div class="d-flex justify-content-between align-items-center w-100 post-modal-top-user fs-9">
                                            <a href="#" class="text-gray-dark">John Michael</a>
                                            <div class="dropdown">
                                                <a href="#" class="postMoreSettings" role="button" data-toggle="dropdown" id="postOptions" aria-haspopup="true" aria-expanded="false">
                                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left postDropdownMenu">
                                                    <a href="#" class="dropdown-item" aria-describedby="savePost">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <i class='bx bx-bookmark-plus postOptionIcon'></i>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <span class="postOptionTitle">Save post</span>
                                                                <small id="savePost" class="form-text text-muted">Add this to your saved items</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="d-block fs-8">3 hours ago <i class='bx bx-globe ml-3'></i></span>
                                    </div>
                                </div>
                                <div class="mt-3 post-modal-caption fs-9">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatem veritatis harum, tenetur, quibusdam voluptatum, incidunt saepe minus maiores ea atque sequi illo veniam sint quaerat corporis totam et. Culpa?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".like-button").on("click", function() {
                var postId = $(this).data("post-id");
                var likeBtn = $(this);
                var likeCount = $("#like-count-" + postId);
    
                $.ajax({
                    url: "/posts/" + postId + "/like",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.liked) {
                            likeBtn.html("<i class='bx bxs-like mr-2'></i> " + response.likes_count);
                        } else {
                            likeBtn.html("<i class='bx bx-like mr-2'></i> " + response.likes_count);
                        }
                    }
                });
            });
        });
    </script>
        
    

    <!-- Core -->
    <script src="{{ asset('js/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Optional -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript">
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/components/components.js') }}"></script>
</body>
</html>