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

    <title>Admin/Branch Section</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span style="margin-left:100px;">UPCOMING PROGRAMS SECTION</span>

                </p>
                @include('includes.messages')

        </div>

</div>



<section class="container">

    <div class="mainContainer">

        <div class="left__bar">

                <div class="left__menu--container">

                        <div class="left__menu--item">
                            <img src="{{asset('resources/images/LOGO.svg')}}" alt="" class="left__bar--image">
                        </div>
                        <div class="left__menu--item">
                            <img src="{{asset('resources/images/home-page (1).svg')}}" alt="" class="left__menu--icon">
                            <span><a href="{{url('/admin')}}" class="a-link">Dashboard</a></span>
                        </div>
                        <div class="left__menu--item">
                            <img src="{{asset('resources/images/church.svg')}}" alt="" class="left__menu--icon">
                            <span><a href="{{url('/')}}" class="a-link">Back To Main Site</a></span>
                        </div>
                        <div class="left__menu--item">
                            <img src="{{asset('resources/images/logout.svg')}}" alt="" class="left__menu--icon">
                            <span>Log Out</span>
                        </div>
        
                    </div>

        </div>

        <div class="center__Container">
                <div class="form__header--list">
                        <p class="form__header--sub">
                            <a href="{{ url('upcoming-events') }}"><img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                        </p>
                        <p class="text__description">Add Upcoming Event/Program</p>
                    </div>
                    <div class="form__container">
                    
                        <form method="POST" action="{{action('EventController@storeUpcoming')}}">
                                @csrf
                            <div class="geo" style="padding:10px 100px;">
                                <input type="text" class="" id="title" name="title" placeholder="Event Title" value="">
                                <input type="text" class="" id="event_date" name="event_date" placeholder="Event Date " value="">
                            </div>
                            
                            <div class="save__button--container" style="margin-top:0px;">
                                <button class="button" id="submit__button"><span>Add</span></button>
                            </div>
                        </form>
                    </div>
                </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>


</script>
</body>
</html>

