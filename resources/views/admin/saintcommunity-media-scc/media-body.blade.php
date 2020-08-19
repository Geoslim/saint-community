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

    <title>Admin/Media Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">
                    <span style="margin-left:210px;">Media</span>
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
                    <a href="{{ url('media-scc') }}"> <img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                </p>
                <p class="text__description">Edit Media Page</p>
            </div>

            
            <div class="form__container" style="padding-top:1px;">
                <div class="geo">
 
                    <div class="featured__image" style="">
                        <p class="text__description" style="margin-left:5px;">Media Page Banner</p>
                       
                        <img src="storage/MeidaBanner_image/{{ $media_banner->banner_image }}" alt="" class="bg__image" style="height: 300px; background-size: contain;border-radius:10px;">
                        <p>Minimum upload banner image dimension: 1000 x 700</p>
                        {{-- <button class="add__photo button"><span>ADD PHOTO</span></button> --}}
                        <form method="POST" action="{{ url('updateMediaBanner/'.$media_banner->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            <input type="file" class="" id="banner_image" name="banner_image" style="width:93%;">
                            @csrf
                            <div class="save__button--container" style="margin-top:0px;">
                                <button class="button" id="submit__button" style="margin-right:20px;"><span>Save Banner</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="form__container" style="position:relative; padding-top:20px;">
                <div class="geo">

                    <form method="POST" action=" {{ url('updateMediaBody/'.$media_body->id) }}">
                            @csrf
                        @method('PUT') 
                        <p class="text__description" style="margin-left:30px;">Media Page Body </p>
                        <div class="data__field--1">

                            <input type="text" class="" id="title" name="title" placeholder="Title" value="{{ $media_body->title }}">
                        </div>
                        <div class="data__field--1">

                            <textarea id="body" name="body" cols="1" rows="5" style="">{{ $media_body->body }}</textarea>
        
                        </div>
                        <div class="data__field--1" style="padding:0 10px 0 10px;">
                            <input type="text" class="" id="" name="contact" placeholder="Contact Info" value="{{ $media_body->contact_info }}" style="width:50%;">
                            <input type="text" class="" id="" name="mobile" placeholder="Mobile Number" value="{{ $media_body->phone }}"  style="width:50%;margin-right:50px;">
                        </div>
                        <div class="data__field--1" style="padding:0 10px 0 10px;">
                            <input type="text" class="" id="" name="email" placeholder="Email" value="{{ $media_body->email }}" style="width:50%;">
                            <input type="text" class="" id="" name="website" placeholder="Website" value="{{ $media_body->url }}" style="width:50%;margin-right:50px;">
                        </div>
                        <div class="data__field--1">
                            <input type="text" class="" id="" name="address" placeholder="Address" value="{{ $media_body->address }}">
                        </div>
                        <div class="save__button--container" style="margin-top:0px;">

                            <button class="button" id="submit__button"><span>Save Page Body</span></button>
        
                        </div>
                    </form>

                </div>
            </div>
            <div class="form__container" style="position:relative; padding-top:20px;">
                <p class="text__description" style="padding-left:20px;">Media Body Cover Image</p>
                <div class="geo" style="width:80%; margin:auto;">
                    
                    <form method="POST" action="{{ url('updateMediaCover/'.$media_cover->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class=" featured__image" style="position:relative; left:0px; top:0px;">
                            <img src="storage/mediaCover_image/{{ $media_cover->cover_image }}" alt="" class="" width="250px" height="150px">
                            <p>Minimum upload cover image dimension: 400 x 300</p>
                            <input type="file" class="" id="cover_image" name="cover_image" >
                            
                            <div class="save__button--container" style="margin-top:0px;">
                                <button class="button" id="submit__button"><span>Save Cover</span></button>
                            </div>
                            {{--  <button class="add__photo button"><span>ADD PHOTO</span></button>  --}}
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>


</body>
</html>

