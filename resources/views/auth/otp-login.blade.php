<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/signup.css" type="text/css">
    <title>Auth</title>
</head>


<body>
    
    <div class="main">

        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
            <form action="">
                <label for="chk" aria-hidden="true" style="color: black;">Verifikasi Akun </label>
                @if (session('error'))
                <div class="alert alert-danger" role="alert"> {{session('error')}} 
                </div>
                @endif

                <form method="POST" action="{{ route('otp.generate') }}">
                    @csrf

                    <div class="row mb-3">
                       
                     <input id="email_user" type="text" class="form-control @error('email_user') is-invalid @enderror" name="email_user" value="{{ old('email_user') }}" required autocomplete="email_user" autofocus placeholder="Enter Your Registered Mobile Number">

                            @error('email_user')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                
            </form>
        </div>

    </div>

</body>
</html>