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

    <title>Password Reset | Saint Community</title>
</head>

<body>
    
    <div class="admin__main__container">
        <a href="{{ url('/') }}" class="admin__back_btn">
            back to main site
        </a>

        <div class="admin__login__section">

            <img src="{{ asset('resources/img/LOGO.png') }}" class="admin__logo" alt="saint logo">

            <h1 class="admin__login_header">
                Saints community church 
            </h1>

            <h5 class="admin__form_header">
                Change Your Password
            </h5>
            @include('includes.messages')
                <form method="POST" action="{{ route('password.update') }}" class="admin__login_form">
                    @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <input type="email" class="@error('email') is-invalid @enderror" name="email"  id="admin__mail" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                <input type="password" placeholder="Password" name="password" id="admin__password" class="@error('password') is-invalid @enderror" required autocomplete="new-password">
                <input type="password" placeholder="Confirm Password" name="password_confirmation" id="admin__password" required autocomplete="new-password" >
                <input type="submit" id="admin__submit" value="RESET PASSWORD">
                
            </form>



        </div>

    </div>

</body>

</html>