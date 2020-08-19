<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/css/jquery.ui.css')}}">
    <link href="{{asset('resources/css/directory.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin1.css')}}" rel="stylesheet">
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

    <title>Admin/Location Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">
                    <span style="margin-left:210px;">Locations Scc</span>
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
                    <a href="{{ url('locations-scc-body') }}"> <img src="{{ asset('resources/images/right-arrow-forward.svg') }}" alt="" class="back__arrow"><span>Back</span></a>
                 </p>
                
            </div>
              
            
            <div class="form__container" style="position:relative; padding-top:20px; width:60%; margin:auto;">
                <div class="geo">
                    
                        <form method="POST" action="{{ url('locationUpdate/'.$location->id) }}">
                            @method('PUT')
                            <p class="text__description" style="margin-left:30px;">Location: </p>
                            <div class="data__field--1">

                                <input type="text" class="" id="location_title" name="location_title" placeholder="Location Title" value="{{ $location->location_title }}" >
                            </div>
                            <div class="" style="">

                                <textarea id="address" name="address" cols="3" rows="1" style="" >{{ $location->address }}</textarea>
            
                            </div>
                            <div class="data__field--1">
                                <input type="text" class="" id="location_btn" name="contact_name" placeholder="Contact Name" value="{{ $location->contact_name }}">
                            
                            </div>
                            <div class="data__field--1">
                            
                                <input type="text" class="" id="contact_btn" name="contact_phone" placeholder="Contact Phone" value="{{ $location->contact_phone }}">
                            </div>
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


</body>
</html>

