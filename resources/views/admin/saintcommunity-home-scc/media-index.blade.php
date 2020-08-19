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

<title>Admin/Home Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:200px;">Home</span>
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
                    <a href="{{ url('home-scc') }}"><img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                </p>
                <p class="text__description">Living Word</p>
            </div>
            <div class="form__container" style="margin-bottom:-50px; padding-top:20px;">
                    <p class="text__description" style="margin-left: 30px">Media Headings</p>
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
                                            <a href="{{ action('HomeFrontController@homeMediaEdit', ['media_image' => $media_image->id]) }}" alt="Edit" title="Edit" style="color: #000; text-decoration: none;">
                                             Edit
                                            </a>
                                            
                                            @can('admin-only', auth()->user())
                                            |
                                            
                                            <form action="{{action('HomeFrontController@mediaDestroy', ['media_image' => $media_image->id])}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{url('/delete-admin/'.$media_image->id)}}" onclick="return confirm('Are you sure you want to delete media ?')">
                                                    <button type="submit" class="" title="Delete" value="DELETE" style="border: 0; padding: 0; cursor: pointer; background:transparent;">Delete</button>
                                                </a>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                           @endif

                        </table>
                        
    
                    </div>
                    @can('admin-only', auth()->user())
                    <a href="{{ url('home-scc-media-create') }}" style="text-decoration:none;">
                        
                        <div class="save__button--container" style="margin-top:0px;">
                           <button class="button" id="submit__button"><span>Add Media</span></button>
                       </div>
                   </a>
                    {{-- <a href="{{ url('home-scc-media-create')}}"><button class=" " style="text-align:center;"><span>Add Media</span></button></a> --}}
                    @endcan
            </div>



        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

</body>
</html>

