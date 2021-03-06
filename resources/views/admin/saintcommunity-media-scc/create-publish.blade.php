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

    <title>Admin/Media Publish Section</title>
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
                        <a href="{{ url('media-publish') }}"><img src="{{ asset('resources/images/right-arrow-forward.svg') }}" alt="" class="back__arrow"><span>Back</span></a>
                    </p>
                    <p class="text__description">Create a New Publish</p>
                </div>
                <div class="form__container">
                        {{--  {{action('MenuController@storePublish')}}  --}}
                    <div class="geo">
                    <form method="POST" action="{{ action('MediaController@storePublish') }}" enctype="multipart/form-data">
                        @csrf
                            <input type="text" class="" id="title" name="title" placeholder="Title" value="">
                            <textarea id="details" name="details" cols="" rows="10"></textarea>
                            <input type="file" class="" id="cover_image" name="cover" >
                            <p>Minimum upload cover image dimension: 200 x 200</p>
                        </div>
                        <div class="save__button--container" style="margin-top:0px;">
                            <button class="button" id="submit__button"><span>Save</span></button>
                        </div>
                    </form>
                    
                </div>
                </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>


</body>
</html>

