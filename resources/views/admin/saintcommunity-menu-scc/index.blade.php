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

    <title>Admin/Menu Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span style="margin-left:100px;">WEBSITE Navigation Menu</span>

                </p>
                

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
                @include('includes.messages')
            <div class="form__header--list">
                <p class="form__header--sub">
                    <a href="{{ url('admin') }}"> <img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                 </p>
                <p class="text__description">Edit Navigation Menu Titles</p>
            </div>

            <div class="form__container" style="position:relative; padding:20px;">
                    <div class="geo">
                        <p class="text__description">Website Logo </p>
                        <img src="storage/menuLogo_image/{{ $menu_logo->logo }}" alt="" class="bg__image">
                        <form method="POST" action="{{ url('updateMenuLogo/'.$menu_logo->id) }}" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT')
                            <div class="col-md-5 featured__image" style="position:relative; left:0px; top:0px;">
                                
                                <input type="file" class="" id="logo" name="logo" >
                                    
                                <div class="save__button--container" style="margin-top:0px;">
                                    <button class="button" id="submit__button"><span>Save Logo</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
    
                   
    
                </div>
            <div class="form__container" style="position:relative; padding:0 70px;">
                <div class="geo">
                    {{--  {{ url('update/'.$headerbase->id) }}  --}}
                    <form method="POST" action="{{ url('updateMenu/'.$menu->id) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="geo" style="">
                            <label for="home">Home</label><br>
                            <input type="text" class="" id="home" name="home" placeholder="" value="{{ $menu->home }}" style="width:30%; margin-left:;">                    
                        </div>
                        <div class="geo">
                            <label for="about">About SCC Page</label><br>
                            <input type="text" class="" id="about" name="about_us" placeholder="" value="{{ $menu->about_us }}" style="width:30%; ">                   
                        </div>
                        <div class="geo">
                            <label for="locations">Locations</label><br>
                            <input type="text" class="" id="locations" name="locations" placeholder="" value="{{ $menu->locations }}" style="width:30%;">   
                        </div>
                        <div class="geo">
                            <label for="media">Media</label><br>
                            <input type="text" class="" id="media" name="media" placeholder="" value="{{ $menu->media }}" style="width:30%; ">   
                        </div>
                        <div class="geo">
                            <label for="partnership">Partnership Page</label><br>
                            <input type="text" class="" id="partnership" name="partnership" placeholder="" value="{{ $menu->partnership }}" style="width:30%;">   
                        </div>
                        <div class="geo">
                            <label for="events">Events Page</label><br>
                            <input type="text" class="" id="events" name="events" placeholder="" value="{{ $menu->events }}" style="width:30%;">   
                        </div>
                        <div class="geo">
                            <label for="contact">Contact Page</label><br>
                            <input type="text" class="" id="contact" name="contact" placeholder="" value="{{ $menu->contact }}" style="width:30%; ">   
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

