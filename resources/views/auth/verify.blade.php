<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/images/logo-16x16.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Argon - Social Network</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">  
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
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    
                @endif
                <div class="container">
                    <h2>Email Verification</h2>
                    
                   @error('email')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  
                       
                 
                    @if(session('message'))
                        <p style="color: green;">{{ session('message') }}</p>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('verify') }}" class="mb-3">  
                        @csrf  
                        <div class="mb-3">  
                            <p>{{ old('email') }}</p>
                            <input type="hidden" name="email" id="email" value="{{ old('email') }}" >  
                        </div>                         
                        
                            <label for="verification_code" class="form-label">Verification Code:</label>  
                            <input type="text" name="verification_code" required class="form-control">  
                        </div>  
                    
                        <button type="submit" class="btn btn-primary">Verify</button>  
                    </form>  
                    
                    <form method="POST" action="{{ route('resend.verification') }}">  
                        @csrf  

                        {{-- onkeyup='saveValue(this)';  --}}
                        <input type="hidden" name="email" id="email" value="{{ old('email') }}" >
                        <button type="submit" class="btn btn-secondary mt-2">Resend Verification Code</button>  
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
                    <p>Thank you for the request. Make sure to verify before Login.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->

    {{-- <script src=" {{ asset('js/jquery/verifyEmail.js') }}"> </script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Optional -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
