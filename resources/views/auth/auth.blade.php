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
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true" style="color: black;">Registrasi</label>
                
                    <input id="name" type="text" class="form-control @error('nama') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="Nama Lengkap" required autocomplete="name" autofocus>
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                @enderror
                
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Daftar') }}
                        </button>
                
            </form>
        </div>

        

        <div class="login">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Login</label>
                <input type="text" name="text" placeholder="Email" required="">
                <input type="text" name="password" placeholder="Password" required="">
                <button>Login</button>
                <a class="btn btn-link" href="{{ route('otp.login') }}">
                    {{ __('Login With OTP.') }}
                </a>
            </form> 
        </div>

    </div>

</body>
</html>