<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <link href="vendor/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/jquery.ui.css">
    <link rel="stylesheet" href="{{asset('vendor/css/jquery.ui.css')}}">
    <link href="{{asset('resources/css/directory.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin1.css')}}" rel="stylesheet">

    <link href="{{ asset('resources/mystyles.css') }}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:100,300,300i,400');
        @import url(resources/css/directory.css);
        @import url(resources/admin1.css);
        @import url(resources/mystyles.css);
        .a-link{
            text-decoration:none;
            color:white;
        }
        
        body{
            font-family: Poppins;
        }
        
    </style>

    <title>Admin/ Edit Admin</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:210px;">Edit Admin Member</span>
                    <span style="position:relative; right:-700px;">Howdy, {{ Auth::user()->name }} | {{ (Auth::user()->role ==3 ? "Editor" : "Administrator") }}</span>


                </p>
                

        </div>

</div>



<section class="container">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__menu--container">

                @include('admin.admin-menu')

            </div>

        </div>

        <div class="center__Container">
            @include('includes.messages')
            <div class="form__header--list">
                <p class="form__header--sub">
                    <a href="{{ url('admin') }}"><img src="{{ asset('resources/images/right-arrow-forward.svg') }}" alt="" class="back__arrow"><span>Back</span></a>
                </p>
          
            </div>

            
            <div class="form__container" style="position:relative;">
                <div class="geo">

                    <form method="POST" action="">
                        @csrf
                        <div class="data__field--1">
                            <input type="text" class="" id="name" name="name" placeholder="Full Name" value="{{ $admin_members->name }}" required autocomplete="name" autofocus>
                            <input type="email" class="" id="email" name="email" placeholder="Email" value="{{ $admin_members->email}}" required autocomplete="email">
                        </div>
                        <div class="data__field--1" style=" padding:30px;">
                            <select name="role" id="role" class="form-control" style="width:90%;">
                                <option value="editor">Editor</option>
                                <option value="administrator">Administrator</option>
                            </select>                           
                        </div>
                        <div class="data__field--1">
                            <input type="password" class="" id="password" name="password" placeholder="Password" required autocomplete="new-password">
                            <input type="password" class="" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        </div> 
                           
                            <div class="save__button--container" style="margin-top:0px;">
                                <button class="button" id="submit__button"><span>Save</span></button>
                            </div>
                    </form>
                </div>

            </div>



        </div>


        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>


</body>
</html>
