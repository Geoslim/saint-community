<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"rel="stylesheet">

    <link href="vendor/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/jquery.ui.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:100,300,300i,400');
        @import url(resources/css/directory.css);
        @import url(resources/admin1.css);
        @import url(resources/mystyles.css);
        @import url(resources/animate.css);
        .a-link{
            text-decoration:none;
            color:white;

        }
        .social_btn_tw {
            width: 80px;
            height:40px;
            background-image: url('resources/images/twitter_backend.png') ;
        }
        body{
            font-family: Poppins;
        }
    </style>

    <title>Admin/Media Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span>Social Media</span>

                </p>
                @include('includes.messages')

        </div>

</div>



<section class="container">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__menu--container">

                <div class="left__menu--item">
                    <img src="resources/images/LOGO.svg" alt="" class="left__bar--image">
                </div>
                <div class="left__menu--item">
                    <img src="resources/images/home-page (1).svg" alt="" class="left__menu--icon">
                    <span><a href="{{url('/admin')}}" class="a-link">Dashboard</a></span>
                </div>
                <div class="left__menu--item">
                    <img src="resources/images/church.svg" alt="" class="left__menu--icon">
                    <span><a href="{{url('/')}}" class="a-link">Back To Main Site</a></span>
                </div>
                <div class="left__menu--item">
                    <img src="resources/images/logout.svg" alt="" class="left__menu--icon">
                    <span>Log Out</span>
                </div>

            </div>

        </div>

        <div class="center__Container">
                <div class="form__header--list">
                        <h2 class="form__header--sub">
                            Make Changes to your Social Media Handles
                        </h2>
                        <p class="text__description"></p>
                    </div>

                    <div class="form__container">
                        <div class="geo" style="position:relative;">
                            <form method="POST" action="{{route('social-media.update', ['socialmedia'=>$socialmedia])}}">
                                @method('PUT')
                                <div class="data__field--1" style="" id="twitterinput">
                                <input type="text" class="" name="twitter" placeholder="" value="{{$socialmedia->twitter}}">
                                </div>
                                <div class="data__field--1" style="display:none;" id="google-playinput">
                                    <input type="text" class="" name="play_store" placeholder="" value="{{$socialmedia->play_store}}">
                                </div>
                                <div class="data__field--1" style="display:none;" id="facebookinput">
                                    <input type="text" class="" name="facebook" placeholder="" value="{{$socialmedia->facebook}}">
                                </div>
                                <div class="data__field--1" style="display:none;" id="youtubeinput">
                                    <input type="text" class="" name="youtube" placeholder="" value="{{$socialmedia->youtube}}">
                                </div>
                                <div class="data__field--1" style="display:none;" id="instagraminput">
                                    <input type="text" class="" name="instagram" placeholder="" value="{{$socialmedia->instagram}}">
                                </div>
                                @csrf
                                <button type="submit" class="btn btn-danger" style="margin:100px 0 0 30px;">Save</button>
                            </form>

                            <div class="data__field--1" style="margin:0 10px; position:absolute; bottom:100px;">
                                <button class="btn social_btn_tw" style="margin:5px;" id="twitterbtn">Twitter</button>
                                <button class="btn social_btn" style="margin:5px;" id="google-playbtn">PlayStore</button>
                                <button class="btn social_btn" style="margin:5px;" id="facebookbtn">Facebook</button>
                                <button class="btn social_btn" style="margin:5px;" id="youtubebtn">Youtube</button>
                                <button class="btn social_btn" style="margin:5px;" id="instagrambtn">Instagram</button>
                            </div>

                        </div>


                    </div>

                </div>


        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

<script>

$(document).ready(function(){


    $("#twitterbtn").click(function(){
        $("#twitterinput").show();
        $("#google-playinput").hide();
        $("#facebookinput").hide();
        $("#youtubeinput").hide();
        $("#instagraminput").hide();
    });

    $("#google-playbtn").click(function(){
        $("#google-playinput").show();
        $("#twitterinput").hide();
        $("#facebookinput").hide();
        $("#youtubeinput").hide();
        $("#instagraminput").hide();
    });

    $("#facebookbtn").click(function(){
        $("#facebookinput").show();
        $("#twitterinput").hide();
        $("#google-playinput").hide();
        $("#youtubeinput").hide();
        $("#instagraminput").hide();
    });

    $("#youtubebtn").click(function(){
        $("#youtubeinput").show();
        $("#twitterinput").hide();
        $("#google-playinput").hide();
        $("#facebookinput").hide();
        $("#instagraminput").hide();
    });

    $("#instagrambtn").click(function(){
        $("#instagraminput").show();
        $("#twitterinput").hide();
        $("#google-playinput").hide();
        $("#facebookinput").hide();
        $("#youtubeinput").hide();
    });
});

</script>
</body>
</html>

