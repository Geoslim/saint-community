<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <link href="vendor/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/jquery.ui.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:100,300,300i,400');
        @import url(resources/css/directory.css);
        @import url(resources/admin1.css);
        @import url(resources/mystyles.css);
        .a-link{
            text-decoration:none;
            color:white;
        }
        .social_btn {
            width: 80px;
            height:40px;
        }
        .social_btn:active{
            background: #3a5;
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
                   <a href="{{ url('home-scc') }}"> <img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                </p>
                <p class="text__description">Edit Home Broadcast Section</p>
            </div>

            <div class="row" style="">
              
                <div class="col-md-5">
                    <div class="form__container" style="position:relative;">

                        <div class="geo">
                            <form method="POST" action="{{ url('homeBroadcastVideoUpdate/'.$home_online_video->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') 
                                <p class="text__description" style="text-align:center;">VIDEO </p>
                                <video class="video_of_the_week" controls style="width:100%;">
                                    <source src="storage/home_online_videos/{{ $home_online_video->online_video }}" type="video/mp4"> Your browser does not support the video tag.
                                </video>
                                <div class="data__field--1">
                                    <input type="text" class="" id="title" name="title" placeholder="VIDEO OF THE WEEK" value="{{ $home_online_video->title }}">
                                </div>
                                <div class="data__field--1">
                                        <input type="file" class="" id="online_video" name="online_video">
                                </div>       
                                <div class="save__button--container" style="margin-top:0px;">
        
                                    <button class="button" id="submit__button"><span>Save</span></button>
                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form__container" style="position:relative;">
                        <div class="geo">
                            <form method="POST" action="{{ url('homeBroadcastTelecastUpdate/'.$home_telecast_url->id) }}" >
                                @csrf
                                @method('PUT')

                                <p class="text__description" style="text-align:center;"> {{ $home_telecast_url->title }}</p>
                                <iframe width="460" height="100%" src="{{ $home_telecast_url->video_url }}" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                                <div class="data__field--1">
                                    <input type="text" class="" id="title" name="title" placeholder="TELECAST " value="{{ $home_telecast_url->title }}">
                                </div>  
                                
                                <div class="data__field--1">
                                    <input type="text" class="" id="video_url" name="video_url" placeholder="http://" value="{{ $home_telecast_url->video_url }}">
                                </div>  

                                <div class="save__button--container" style="margin-top:0px;">
                                    <button class="button" id="submit__button"><span>Save</span></button>
                                </div>

                            </form>
                        </div>
                    </div> 
                </div> 


                <div class="col-md-5">
                    <div class="form__container" style="position:relative;">
                        <div class="geo">
                            <form method="POST" action="{{ url('homeBroadcastOnlineRadioUpdate/'.$home_online_radio->id) }}">
                                @csrf
                                @method('PUT')

                                <p class="text__description" style="text-align:center;"> {{ $home_online_radio->title }}</p>
                                <iframe style="border:none;" src="{{ $home_online_radio->online_radio_url }}"></iframe>
                    
                                <div class="data__field--1">
                                    <input type="text" class="" id="title" name="title" placeholder="ONLINE RADIO " value="{{ $home_online_radio->title }}">
                                </div>  
                                
                                <div class="data__field--1">
                                    <input type="text" class="" id="online_radio_url" name="online_radio_url" placeholder="http://" value="{{ $home_online_radio->online_radio_url }}">
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

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>


</body>
</html>

