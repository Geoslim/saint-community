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

    <title>Admin/Upcoming Events</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span style="margin-left:100px;">UPCOMING EVENTS/PROGRAMS SECTION</span>

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
                    <a href="{{ url('events-scc') }}"><img src="{{ asset('resources/images/right-arrow-forward.svg') }}" alt="" class="back__arrow"><span>Back</span></a>
                </p>
                <p class="text__description">Update Upcoming Events/Programs</p>
            </div>
            <div class="form__container">
                    
                    <form method="POST" action="{{action('EventController@updateUpcomingHeading', $upcoming_heading->id)}}">
                            @csrf
                            @method('PUT')
                        <div class="geo" style="padding:10px 100px;">
                            <input type="text" class="" id="heading" name="heading" placeholder="Programs for 2020 " value="{{ $upcoming_heading->heading }}">
                        </div>
                        
                        <div class="save__button--container" style="margin-top:0px;">
                            <button class="button" id="submit__button"><span>Update</span></button>
                        </div>
                    </form>
                </div>
            <div class="form__container" style="margin-bottom:50px;">

                    <div class="table__container">
                        
                        <table class="table__container--main">
    
                            <thead class="table__header">
    
                                <tr class="table__row">
                                    <th class="table__section">S/N</th>
                                    <th class="table__section">DATE UPDATED</th>
                                    <th class="table__section">TITLE</th>
                                    <th class="table__section">ACTIONS</th>
                                </tr>
    
                            </thead>
                            @if (count($upcoming_events) > 0 )
                            <?php $i = 0; ?>
                                @foreach ($upcoming_events as $upcoming_event)
                                <?php $i++; ?>
                                    <tr class="table__row">
                                        <td class="table__data">{{ $i }}</td>
                                        <td class="table__data">{{$upcoming_event->updated_at}}</td>
                                        <td class="table__data">{{ $upcoming_event->title }}</td>
                                        <td class="table__data">
                                            <a
                                                href="{{ action('EventController@editUpcoming', ['upcoming_event' => $upcoming_event->id]) }}"
                                                alt="Edit"
                                                title="Edit">
                                              EDIT
                                            </a>|DELETE
                                        </td>
                                    </tr>
                                @endforeach
                           @endif

                        </table>
                        
    
                    </div>
                    <a href="{{ url('create-upcoming') }}"><button class=" btn btn-sm btn-warning" style="text-align:center; margin-left:50px; margin-top:50px;"><span>Add Events</span></button></a>
                
            </div>



        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>


</script>
</body>
</html>

