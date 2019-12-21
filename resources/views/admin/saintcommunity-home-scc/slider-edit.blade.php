<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/css/jquery.ui.css')}}">
    <link href="{{asset('resources/css/directory.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin1.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <style>
        .a-link{
            text-decoration:none;
            color:white;
        }
       
        body{
            font-family: Poppins;
        }
        
    </style>

<title>Admin/Home Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:200px;">Home</span>
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
                            <a href="{{ url('home-scc-slider') }}"><img src="{{ asset('resources/images/right-arrow-forward.svg') }}" alt="" class="back__arrow"><span>Back</span></a>
                        </p>
                        <p class="text__description">Change Slide</p>
                    </div>
                    <div class="form__container">
                            <img src="{{ asset('storage/slider_images/'.$slider_images->slider_image) }}" alt="" class="bg__image" style="height: 550px; background-position: 0% 0%; background-size: cover;position: relative;">
                        <form method="POST" action="{{ url('homeSliderUpdate/'.$slider_images->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="geo" style="padding:10px 100px;">
                                <input type="file" class="" id="slider_image" name="slider_image">
                              
                            </div>
                            
                            <div class="save__button--container" style="margin-top:0px;">
                                <button class="button" id="submit__button"><span>Save</span></button>
                            </div>
                        </form>
                    </div>
                </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>


</body>
</html>

