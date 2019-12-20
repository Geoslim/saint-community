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

    <title>Admin/Media Section</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span style="margin-left:100px;">HOME PAGE MEDIA</span>

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
                    <a href="{{ url('home-scc') }}"><img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                </p>
                <p class="text__description">Living Word</p>
            </div>
            <div class="form__container" style="margin-bottom:-50px;">
                    <p class="text__description">Media Headings</p>
                    <form method="POST" action="{{ url('homeMediaHeadingUpdate/'.$media_heading->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="geo" style="padding:0px 100px;">
                            <input type="text" class="" id="media_heading" name="media_heading" placeholder="Download Teaching FREE" value="{{ $media_heading->media_heading }}">
                            <input type="text" class="" id="media_url_title" name="media_url_title" placeholder="www.livingwordmedia.org" value="{{ $media_heading->media_url_title }}">
                        
                        </div>
                        <div class="geo" style="padding:0px 100px;">
                            <input type="text" class="" id="media_url" name="media_url" placeholder="www.livingwordmedia.org" value="{{ $media_heading->media_url }}">
                        </div>
                        
                        <div class="save__button--container" style="margin-top:0px;">
                            <button class="button" id="submit__button"><span>Update</span></button>
                        </div>
                    </form>
                </div>
            <div class="form__container" style="margin-top:-30px;margin-bottom:50px; padding:50px 0;">
                 <div class="table__container" >
                        
                        <table class="table__container--main" >
    
                            <thead class="table__header">
    
                                <tr class="table__row" >
                                    <th class="table__section" >S/N</th>
                                    <th class="table__section">DATE UPDATED</th>
                                    <th class="table__section">MEDIA</th>
                                    <th class="table__section">ACTIONS</th>
                                </tr>
    
                            </thead>
                            @if (count($media_images) > 0 )
                                @foreach ($media_images as $media_image)
                                    <tr class="table__row">
                                        <td class="table__data">{{$media_image->id}}</td>
                                        <td class="table__data">{{$media_image->updated_at}}</td>
                                        <td class="table__data">{{ $media_image->media_image }}</td>
                                        <td class="table__data">
                                            <a
                                                href="{{ action('HomeFrontController@homeMediaEdit', ['media_image' => $media_image->id]) }}"
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
                    <a href="{{ url('home-scc-media-create')}}"><button class=" btn btn-sm btn-warning" style="text-align:center;"><span>Add Media</span></button></a>
                  
            </div>



        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

</body>
</html>

