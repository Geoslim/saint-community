<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"rel="stylesheet">
    <link href="vendor/css/animate.css" rel="stylesheet">
    {{-- <link href="{{ asset('resources/mystyles.css') }}" rel="stylesheet"> --}}
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
        .social_btn {
            width: 100px;
            height:40px;
            background-color: dimgrey;
            color: aliceblue;
           
        }
        .social_active {
            background-color: darkgoldenrod;
            color: white;
            outline-color: white;
           
        }
        .highlight {
            background-color: #fff2ac;
            background-image: linear-gradient(to right, #ffe359 0%, #fff2ac 100%);
        }

        body{
            font-family: Poppins;
        }
    </style>

    <title>Admin/Social Media</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:210px;">Social Media</span>
                    <span style="position:relative; right:-700px;">{{ Auth::user()->name }} | {{ (Auth::user()->role ==3 ? "Editor" : "Administrator") }}</span>


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
                        <a href="{{ url('admin') }}"> <img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                     </p>
                        <h2 class="form__header--sub">
                            Make Changes to your Social Media Handles
                        </h2>
                        <p class="text__description"></p>
                    </div>

                    <div class="form__container">
                        <div class="geo" style="position:relative;">
                            <form method="POST" action="{{route('social-media.update', ['socialmedia'=>$socialmedia])}}">
                                @method('PUT')
                                <div class="data__field--1 row" style="" id="twitterinput">
                                    <p style="margin-left:60px; margin-top:10px;" class="col-md-12" >https://twitter.com/<span class="highlight">{{$socialmedia->twitter}}</span></p>
                                    <input type="text" class="" name="twitter" placeholder="" value="{{$socialmedia->twitter}}">
                                </div> 
                                <div class="data__field--1 row" style="display:none;" id="google-playinput">
                                    <p style="margin-left:60px; margin-top:10px;" class="col-md-12" >https://play.google.com/store/apps/details?id=<span class="highlight">{{$socialmedia->play_store}}</span></p>
                                    <input type="text" class="" name="play_store" placeholder="" value="{{$socialmedia->play_store}}">
                                </div>
                                <div class="data__field--1 row" style="display:none;" id="facebookinput">
                                    <p style="margin-left:60px; margin-top:10px;" class="col-md-12">https://facebook.com/<span class="highlight">{{$socialmedia->facebook}}</span></p>
                                    <input type="text" class="" name="facebook" placeholder="" value="{{$socialmedia->facebook}}">
                                </div>
                                <div class="data__field--1 row" style="display:none;" id="youtubeinput">
                                    <p style="margin-left:60px; margin-top:10px;" class="col-md-12" >https://www.youtube.com/channel/<span class="highlight">{{$socialmedia->youtube}}</span></p>
                                    <input type="text" class="" name="youtube" placeholder="" value="{{$socialmedia->youtube}}">
                                </div>
                                <div class="data__field--1 row" style="display:none;" id="instagraminput">
                                    <p style="margin-left:60px; margin-top:10px;" class="col-md-12" >https://instagram.com/<span class="highlight">{{$socialmedia->instagram}}</span></p>
                                    <input type="text" class="" name="instagram" placeholder="" value="{{$socialmedia->instagram}}">
                                </div>
                                @csrf
                                <button type="submit" class="btn btn-danger" style="margin:100px 0 0 30px;">Save</button>
                            </form>

                            <div class="data__field--1" style="margin:0 10px; position:absolute; bottom:100px;">
                                <button class="btn social_btn social_active" style="margin:5px;" id="twitterbtn">Twitter</button>
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
        $("#twitterbtn").addClass('social_active');
        $("#google-playbtn").removeClass('social_active');
        $("#facebookbtn").removeClass('social_active');
        $("#youtubebtn").removeClass('social_active');
        $("#instagrambtn").removeClass('social_active');
    });

    $("#google-playbtn").click(function(){
        $("#google-playinput").show();
        $("#twitterinput").hide();
        $("#facebookinput").hide();
        $("#youtubeinput").hide();
        $("#instagraminput").hide();
        $("#google-playbtn").addClass('social_active');
        $("#twitterbtn").removeClass('social_active');
        $("#facebookbtn").removeClass('social_active');
        $("#youtubebtn").removeClass('social_active');
        $("#instagrambtn").removeClass('social_active');
    });

    $("#facebookbtn").click(function(){
        $("#facebookinput").show();
        $("#twitterinput").hide();
        $("#google-playinput").hide();
        $("#youtubeinput").hide();
        $("#instagraminput").hide();
        $("#facebookbtn").addClass('social_active');
        $("#twitterbtn").removeClass('social_active');
        $("#google-playbtn").removeClass('social_active');
        $("#youtubebtn").removeClass('social_active');
        $("#instagrambtn").removeClass('social_active');
    });

    $("#youtubebtn").click(function(){
        $("#youtubeinput").show();
        $("#twitterinput").hide();
        $("#google-playinput").hide();
        $("#facebookinput").hide();
        $("#instagraminput").hide();
        $("#youtubebtn").addClass('social_active');
        $("#twitterbtn").removeClass('social_active');
        $("#google-playbtn").removeClass('social_active');
        $("#facebookbtn").removeClass('social_active');
        $("#instagrambtn").removeClass('social_active');
    });

    $("#instagrambtn").click(function(){
        $("#instagraminput").show();
        $("#twitterinput").hide();
        $("#google-playinput").hide();
        $("#facebookinput").hide();
        $("#youtubeinput").hide();
        $("#instagrambtn").addClass('social_active');
        $("#twitterbtn").removeClass('social_active');
        $("#google-playbtn").removeClass('social_active');
        $("#facebookbtn").removeClass('social_active');
        $("#youtubebtn").removeClass('social_active');
    });
});

</script>
</body>
</html>

