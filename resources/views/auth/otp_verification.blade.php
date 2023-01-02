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
                <div class="card-body">
                    {{-- @if (session('success'))
                    <div class="alert alert-success" role="alert"> {{session('success')}} 
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger" role="alert"> {{session('error')}} 
                    </div>
                    @endif --}}

                    <form method="POST" action="{{ route('verifyotp') }}">
                        @csrf
                    
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('token') is-invalid @enderror" name="token" required autocomplete="token" autofocus placeholder="Enter OTP">

                                @error('token')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                
            </form>
        </div>

    </div>

</body>
</html>