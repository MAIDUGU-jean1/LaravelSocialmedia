
<html lang="en" class="no-js">

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
                                        <img src="{{ asset('images/users/user-4.jpg') }}" class="menu-user-img ml-1" alt="Menu Image">
                                    </div>
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
                                    <a class="dropdown-item logout-btn" href="#">
                                        <img src="{{ asset('images/icons/navbar/logout.png') }}" alt="Navbar icon"> Log Out</a>
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
                                        <textarea class="form-control" id="postForm" rows="2" placeholder="What's on your mind, Arthur?"></textarea>
                                    </div>
                                    <div class="row post-form-group">
                                        <div class="col-md-9">
                                                <img src="{{ asset('images/icons/theme/post-image.png') }}" alt="post form icon"> <span>Photo/Video</span>
                                            <input type="file">
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
                                <!-- Post Header (User Info) -->
                                <div class="media text-muted pt-3">
                                    <img src="{{ asset($post->user->profile_picture ?? 'images/default-user.jpg') }}"
                                         alt="User profile"
                                         class="mr-3 post-user-image">
                                    <div class="media-body pb-3 mb-0 small lh-125">
                                        <div class="d-flex justify-content-between align-items-center w-100">
                                            <a href="#" class="text-gray-dark post-user-name">
                                                {{ $post->user->firstname }} {{ $post->user->lastname }}
                                            </a>
                                        </div>
                                        <span class="d-block">{{ $post->created_at->diffForHumans() }} <i class='bx bx-globe ml-3'></i></span>
                                    </div>
                                </div>

                                <!-- Post Content -->
                                <div class="mt-3">
                                    <p>{{ $post->content }}</p>
                                </div>

                                <!-- Post Image (If Exists) -->
                                @if ($post->image)
                                    <div class="d-block mt-3">
                                        <img src="{{ asset('storage/' . $post->image) }}" class="post-content" alt="Post image">
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach



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

    <!-- Chat Popup -->
<!--
    <div class="chat-popup shadow" id="hide-in-mobile">
        <div class="row chat-window col-xs-5 col-md-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="top-bar shadow-sm d-flex align-items-center">
                        <div class="col-md-6 col-xs-6">
                            <a href="profile.html">
                                <img src="assets/images/users/user-2.jpg" class="mr-2 chatbox-user-img" alt="Chat user image">
                                <span class="panel-title">Karen Minas</span>
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 d-flex align-items-center justify-content-between">
                            <a href="#">
                                <img src="assets/images/icons/messenger/video-call.png" class="chatbox-call" alt="Chatbox contact types">
                            </a>
                            <a href="#" data-toggle="modal" data-target="#callModal">
                                <img src="assets/images/icons/messenger/call.png" class="chatbox-call" alt="Chatbox contact types">
                            </a>
                            <a href="javascript:void(0)"><i id="minimize-chat-window" class="bx bx-minus icon_minim"></i></a>
                            <a href="javascript:void(0)" id="close-chatbox"><i class="bx bx-x"></i></a>
                        </div>
                    </div>
                    <div id="messagebody" class="msg_container_base">
                        <div class="row msg_container base_sent">
                            <div class="col-md-10 col-xs-10">
                                <div class="messages message-reply bg-primary shadow-sm">
                                    <p>Are you going to the party on Saturday?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row msg_container base_receive">
                            <div class="col-md-10 col-xs-10">
                                <div class="messages message-receive shadow-sm">
                                    <p>I was thinking about it. Are you?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row msg_container base_receive">
                            <div class="col-xs-10 col-md-10">
                                <div class="messages message-receive shadow-sm">
                                    <p>Really? Well, what time does it start?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row msg_container base_sent">
                            <div class="col-xs-10 col-md-10">
                                <div class="messages message-reply bg-primary shadow-sm">
                                    <p>It starts at 8:00 pm, and I really think you should go.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row msg_container base_receive">
                            <div class="col-xs-10 col-md-10">
                                <div class="messages message-receive shadow-sm">
                                    <p>Well, who else is going to be there?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row msg_container base_sent">
                            <div class="col-md-10 col-xs-10">
                                <div class="messages message-reply bg-primary shadow-sm">
                                    <p>Everybody from school.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer chat-inputs">
                        <div class="col-md-12 message-box">
                            <input type="text" class="w-100 search-input type-message" placeholder="Type a message..." />
                            <div class="chat-tools">
                                <a href="#" class="chatbox-tools">
                                    <img src="assets/images/icons/theme/post-image.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                                <a href="#" class="chatbox-tools">
                                    <img src="assets/images/icons/messenger/gif.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                                <a href="#" class="chatbox-tools">
                                    <img src="assets/images/icons/messenger/smile.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                                <a href="#" class="chatbox-tools">
                                    <img src="assets/images/icons/messenger/console.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                                <a href="#" class="chatbox-tools">
                                    <img src="assets/images/icons/messenger/attach-file.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                                <a href="#" class="chatbox-tools">
                                    <img src="assets/images/icons/messenger/photo-camera.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- END Chat Popup -->

    <!-- Call modal -->
    <div id="callModal" class="modal fade call-modal" tabindex="-1" role="dialog" aria-labelledby="callModalLabel" aria-hidden="true">
        <div class="modal-dialog call-modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <div class="call-status">
                        <h1 id="callModalLabel" class="modal-title mr-3">Connected</h1>
                        <span class="online-status bg-success"></span>
                    </div>
                    <div class="modal-options d-flex align-items-center">
                        <button type="button" class="btn btn-quick-link" id="minimize-call-window">
                            <i class='bx bx-minus'></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row h-100">
                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                            <div class="call-user text-center">
                                <div class="call-user-img-anim">
                                    <img src="{{ asset('images/users/user-1.jpg') }}" class="call-user-img" alt="Call user image">
                                </div>
                                <p class="call-user-name">Name Surename</p>
                                <p class="text-muted call-time">05:28</p>
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-4 d-flex align-items-center justify-content-between call-btn-list">
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Disable microphone"><i class='bx bxs-microphone'></i></a>
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Enable camera"><i class='bx bxs-video-off'></i></a>
                            <a href="#" class="btn call-btn drop-call" data-toggle="tooltip" data-placement="top" data-title="End call" data-dismiss="modal" aria-label="Close"><i class='bx bxs-phone'></i></a>
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Share Screen"><i class='bx bx-laptop'></i></a>
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Dark mode"><i class='bx bx-moon'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END call modal -->

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