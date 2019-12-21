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

    <title>Admin/Upcoming Programs</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:200px;">Upcoming Programs Section</span>
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
                            <a href="{{ url('upcoming-events') }}"><img src="{{ asset('resources/images/right-arrow-forward.svg') }}" alt="" class="back__arrow"><span>Back</span></a>
                        </p>
                        <p class="text__description">Add Upcoming Event/Program</p>
                    </div>
                    <div class="form__container">
                    
                        <form method="POST" action="{{action('EventController@updateUpcoming', $upcoming_events->id)}}">
                                @csrf
                                @method('PUT')
                            <div class="geo" style="padding:10px 100px;">
                                <input type="text" class="" id="title" name="title" placeholder="Event Title" value="{{ $upcoming_events->title }}">
                                <input type="text" class="" id="event_date" name="event_date" placeholder="Event Date " value="{{ $upcoming_events->event_date }}">
                            </div>
                            
                            <div class="save__button--container" style="margin-top:0px;">
                                <button class="button" id="submit__button"><span>Update</span></button>
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

