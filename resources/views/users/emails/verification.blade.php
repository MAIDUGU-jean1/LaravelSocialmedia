<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Verification</title>
</head>
<body>
    <p>Hello, {{ $user->firstname . ' ' . $user->lastname }}</p>
    <p>Thank you for registering. Your verification code is: <strong>{{ $verificationCode }}</strong></p>
    <p>This code will expire in 10 minutes.</p>
    <img src="{{ asset('storage/'  . $user->profile_picture) }}" alt="Profile Picture" width="100">
</body>
</html>
