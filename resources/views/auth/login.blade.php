<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/images/logo-16x16.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Argon - Social Network</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@1.9.2/css/boxicons.min.css' rel='stylesheet'>

<style>
    .logo {  
    width: 100px;
    height: auto; 
    overflow: hidden; 
}  

.logo img {  
    width: 100%; 
    height: auto;  
}  
</style>

    <!-- Styles -->
    <link href="{{ asset('css/forms.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
</head>

<body>
    <div class="row ht-100v flex-row-reverse no-gutters">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="signup-form">
                <div class="auth-logo text-center mb-5">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('images/logo-64x64.jpeg') }}" class="logo" alt="Logo">
                        </div>
                        <div class="col-md-10">
                            <p>Perrin Social Network</p>
                            <span>Mini social Media  System</span>
                        </div>
                    </div>
                </div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <p style="color: red;">{{ $message }}</p>
                                
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            @error('password')
                                <p style="color: red;">{{ $message }}</p>
                                
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <a href="forgot-password.html">Forgot password?</a>
                        </div>
                        <div class="col-md-6">
                            <label class="custom-control material-checkbox">
                                <input type="checkbox" class="material-control-input">
                                <span class="material-control-indicator"></span>
                                <span class="material-control-description">Remember Me</span>
                            </label>
                        </div>
                        @if (session('error'))
                            <div class="col-md-12">
                                <p style="color: red;">{{ session('error') }}</p>
                            </div>
                            
                        @endif
                        @if (session('success'))
                            <div class="col-md-12">
                                <p style="color: green;">{{ session('message') }}</p>
                            </div>
                            
                        @endif
                        <div class="col-md-6 text-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary sign-up">Sign In</button>
                            </div>
                        </div>
                        <div class="col-md-12 text-center mt-5">
                            <span class="go-login">Not yet a member? <a href="{{ route('register.form') }}">Sign Up</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 auth-bg-image d-flex justify-content-center align-items-center">
            <div class="auth-left-content mt-5 mb-5 text-center">
                <div class="weather-small text-white">
                    <p class="current-weather"><i class='bx bx-sun'></i> <span>14&deg;</span></p>
                    <p class="weather-city">Jean Perrin</p>
                </div>
                <div class="text-white mt-5 mb-5">
                    <h2 class="create-account mb-3">Welcome Back</h2>
                    <p>Thank you for joining. Updates and new features are released daily.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->


    <script src="assets/js/app.js"></script>
    <script src="{{ asset('js/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Optional -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
