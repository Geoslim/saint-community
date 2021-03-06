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

    <title>Admin/Event Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:200px;">Events Scc</span>
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
                    <a href="{{ url('events-scc') }}"> <img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                </p>
                <p class="text__description">Edit Event Page</p>
            </div>

            
            <div class="form__container" >
                <div class="geo" style="padding-top:10px;">

                    <div class="featured__image" style="">
                        <p class="text__description" style="margin-left:5px;">Event Page Banner</p>
                       
                        <img src="storage/eventBanner_image/{{ $event_banner->banner_image }}" alt="" class="bg__image" style="height: 300px; background-size: contain;border-radius:10px;">
                        <p>Minimum upload banner image dimension: 1000 x 700</p>
                        <form method="POST" action="{{ url('updateEventBanner/'.$event_banner->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="file" class="" id="banner_image" name="banner_image" style="width:93%;">
                            
                            <div class="save__button--container" style="margin-top:0px;">
                                <button class="button" id="submit__button" style="margin-right:20px;"><span>Save Banner</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="form__container" >
                <div class="geo" style="padding-top:20px;">
                    <form method="POST" action="{{ url('updateEventBody/'.$event_body->id) }} ">
                            @csrf
                        @method('PUT') 
                        <p class="text__description" style="margin-left:35px;">Event Page Body </p>
                        <div class="data__field--1">

                            <input type="text" class="" id="title" name="title" placeholder="Title" value="{{ $event_body->title }}">
                        </div>
                        <div class="" style="margin:10px 30px; border-radius:10px;">

                            <textarea id="body" name="body" cols="" rows="10">{{ $event_body->body }}</textarea>
        
                        </div>
                        <div class="data__field--1" style="width:30%; text-align:left;">
                            <input type="date" class="" id="event_date" name="event_date" placeholder=" " value="{{ $event_body->event_date }}" style="width:300px; float:left;">
                        </div>
                       
                        <div class="save__button--container" style="margin-top:0px;">

                            <button class="button" id="submit__button"><span>Save Page Body</span></button>
        
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form__container" >
                        <div class="geo" style="padding:20px 20px 0 20px;">
                            <p class="text__description" style="margin-left:35px;">Event Cover Image</p>
                            <form method="POST" action="{{ url('updateEventCover/'.$event_cover->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class=" featured__image" style="position:relative; left:0px; top:0px;">
                                    <img src="storage/eventCover_image/{{ $event_cover->cover_image }}" alt="" class="" width="650px" height="250px">
                                    <p>Minimum upload cover image dimension: 400 x 300</p>
                                    <input type="file" class="" id="cover_image" name="cover_image" style="width:90%;">
                                    
                                    <div class="save__button--container" style="margin-top:0px;">
                                        <button class="button" id="submit__button"><span>Save Cover</span></button>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__container">
                        <div class="geo" style="padding:20px 20px 0 20px;">
                            <p class="text__description" style="">Upcoming Section Background Image</p>
                            <img src="storage/eventBg_image/{{ $event_bg->bg_image }}" alt="" class="bg__image" style="height: 350px; background-position: 0% 0%; background-size: cover;">
                            <p>Minimum upload background image dimension: 1000 x 700</p>
                            <form method="POST" action="{{ url('updateEventBg/'.$event_bg->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class=" featured__image" style="position:relative; left:0px; top:0px;">
                                    
                                    <input type="file" class="" id="bg_image" name="bg_image" style="width:90%;">
                                    
                                    <div class="save__button--container" style="margin-top:0px;">
                                        <button class="button" id="submit__button" style="width:200px;"><span>Save Background</span></button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script>
    $('#body').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200
      });
</script>

</body>
</html>

