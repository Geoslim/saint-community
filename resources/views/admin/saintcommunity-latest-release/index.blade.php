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

    <title>Admin</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span style="margin-left:200px;">{{ strtoupper($latest_detail->title) }}</span>
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
                   <a href="{{ url('admin') }}"> <img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                </p>
                <p class="text__description">Edit {{ $latest_detail->title }}</p>
            </div>

            
            <div class="form__container" style="position:relative;">
                <div class="geo">

                   
                    <form method="POST" action="{{ url('updateDetials/'.$latest_detail->id) }}">
                        @csrf
                        @method('PUT') 
                        <p class="text__description">{{ $latest_detail->title }} </p>
                        <div class="data__field--1">
                            <input type="text" class="" id="title" name="title" placeholder="Latest Release" value="{{ $latest_detail->title }}">
                        </div>
                        <div class="data__field--1">
                                <input type="text" class="" id="subtitle" name="subtitle" placeholder="Subtitle" value="{{ $latest_detail->subtitle }}">
                        </div>
                        <div class="" style="margin:10px 30px; border-radius:10px;">

                            <textarea id="body" name="body" cols="" rows="10">{{ $latest_detail->body }}</textarea>
        
                        </div>                 
                        <div class="save__button--container" style="margin-top:0px;">

                            <button class="button" id="submit__button"><span>Save</span></button>
        
                        </div>
                    </form>
                <div class="geo ">
                    <p class="text__description">Cover Image</p>
                    <form method="POST" action="{{ url('updateCover/'.$latest_cover->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        <div class="col-md-5 featured__image" style="position:relative; left:0px; top:0px;">
                            <img src="storage/programs_image/{{ $latest_cover->cover_image }}" alt="" class="bg__image">
                            <p>Minimum upload cover image dimension: 400 x 400</p>
                            <input type="file" class="" id="cover_image" name="cover_image" >
                            @csrf
                            <div class="save__button--container" style="margin-top:0px;">
                                <button class="button" id="submit__button"><span>Save Cover</span></button>
                            </div>
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

