<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('resources/css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/mystyles.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico">
    <script language="javascript" type="text/javascript" src="https://equinox.shoutca.st/system/player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>Reset Password | Admin</title>
</head>

<body>
    
    <div class="admin__main__container">

        @include('includes.messages')
        <a href="{{ url('/') }}" class="admin__back_btn">
            back to main site
        </a>

        <div class="admin__login__section">

            <img src="{{ asset('resources/img/LOGO.png') }}" class="admin__logo" alt="saint logo">

            <h1 class="admin__login_header">
                Welcome  to  saints community church 
            </h1>

            <h5 class="admin__form_header">
                RESET YOUR PASSWORD
            </h5>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <form method="POST" action="{{ route('password.email') }}" class="admin__login_form">
                @csrf

                <input type="email" placeholder="Email Address" id="admin__mail" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              
                <input type="submit" id="admin__submit" value="Send Password Reset Link">

                <a href="" class="admin__forgotten">
                    @if (Route::has('login'))
                    <a class="btn btn-link admin__forgotten" href="{{ route('login') }}">
                        {{ __('Return to Login') }}
                    </a>
                @endif
            </a>

            </form>



        </div>

    </div>

</body>

</html>