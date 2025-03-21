<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png"   href="{{ asset('images/logo-16x16.png') }}" />
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
                            <span>Mini Social Media System</span>
                        </div>  
                    </div>
                </div>
                <form action="{{ route('register') }}" method="POST" class="pt-5" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name" value="{{ old('firstname') }}">
                            </div>
                            @error('firstname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}">
                            </div>
                            @error('lastname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}">
                            </div>
                            @error('phone_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="date" class="form-control" name="date" placeholder="date">
                            </div>
                            @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control"name="password_confirmation" id="confirm-password" placeholder="Confirm Password">
                            </div>
                            @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" class="form-control" name="profile_picture" placeholder="Profile Picture">
                            </div>
                            @error('profile_picture')
                                <div class="alert alert-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <p class="agree-privacy">By clicking the Sign Up button below you agreed to our privacy policy and terms of use of our website.</p>
                        </div>
                        <div class="col-md-8">
                            <span class="go-login">Already have an account ? <a href="{{ route('login.form') }}">Sign In</a></span>
                        </div>
                        <div class="col-md-4 text-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary sign-up">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 auth-bg-image d-flex justify-content-center align-items-center">
            <div class="auth-left-content mt-5 mb-5 text-center">
                <div class="weather-small text-white">
                    <p class="current-weather"> <i class='bx bx-sun'></i> <span>14&deg;</span></p>
                    <p class="weather-city">Jean Perrin</p>
                </div>
                <div class="text-white mt-5 mb-5">
                    <h2 class="create-account mb-3">Create Account</h2>
                    <p>Enter your personal details and start journey with us.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Core -->
    <script src="{{ asset('js/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Optional -->
    <script src="{{ asset('js/app.js') }}"></script>
</body></html>
