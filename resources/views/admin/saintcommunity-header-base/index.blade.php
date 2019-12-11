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

    <title>Admin/ Header Base</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span>WEBSITE HEADER BASE</span>

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
                <p class="form__header--sub">
                    {{-- <img src="images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span> --}}
                </p>
                <p class="text__description">Edit Header Base</p>
            </div>

            
            <div class="form__container" style="position:relative;">
                <div class="geo">

                    <form method="POST" action="{{url('update/'.$headerbase->id)}}">
                        @method('PUT')
                        
                        <div class="data__field--1">
                            <input type="text" class="" id="location" name="location" placeholder="Yaba" value="{{$headerbase->location}}">
                            <input type="text" class="" id="location_two" name="location_two" placeholder="Church" value="{{$headerbase->location_two}}">
                        </div>
                        
                            <input type="text" class="" id="sunday" name="sunday" placeholder="Sunday Services" value="{{$headerbase->sunday}}">
                            
                        <div class="data__field--1">
                            <input type="time" class="" id="sunday_time_one" name="sunday_time_one" placeholder="7:30am" value="{{$headerbase->sunday_time_one}}">
                            <input type="time" class="" id="sunday_time_two" name="sunday_time_two" placeholder="10:30am" value="{{$headerbase->sunday_time_two}}">
                        </div>
                            <input type="text" class="" id="mid_day" name="mid_day" placeholder="Wednesday Services" value="{{$headerbase->mid_day}}">
                            
                            <input type="time" class="" id="mid_day_time" name="mid_day_time" placeholder="6:00pm" value="{{$headerbase->mid_day_time}}">
                        
                        <input type="text" class="" id="direction" name="direction" placeholder="Get Direction" value="{{$headerbase->direction}}" style="width:93.9%;">
                            
                        @csrf
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

