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
                <p class="text__description">Home Sliders</p>
            </div>
            <div class="form__container" style="margin-bottom:-50px;">
                    <p class="text__description">Slider Headings</p>
                    <form method="POST" action="{{ url('homeSliderHeadingUpdate/'.$slider_heading->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="geo" style="padding:0px 100px;">
                            <input type="text" class="" id="slide_heading" name="slide_heading" placeholder="SAINT COMMUNITY CHURCH, MAKING YOUR LIFE COUNT . . ." value="{{ $slider_heading->slide_heading }}">
                        </div>
                        <div class="geo" style="padding:0px 100px;">
                            <input type="text" class="" id="slide_subtitle" name="slide_subtitle" placeholder="Heralding the Lordship of the Word, Demonstrating the Influence of the Spirit " value="{{ $slider_heading->slide_subtitle }}">
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
                                    <th class="table__section">SLIDERS</th>
                                    <th class="table__section">ACTIONS</th>
                                </tr>
    
                            </thead>
                            @if (count($slider_images) > 0 )
                                @foreach ($slider_images as $slider_image)
                                    <tr class="table__row">
                                        <td class="table__data">{{$slider_image->id}}</td>
                                        <td class="table__data">{{$slider_image->updated_at}}</td>
                                        <td class="table__data">{{ $slider_image->slider_image }}</td>
                                        <td class="table__data">
                                            <a href="{{ action('HomeFrontController@homeSliderEdit', ['slider_image' => $slider_image->id]) }}" alt="Edit" title="Edit">
                                                <button class="btn btn-sm">Edit</button>
                                            </a>
                                          
                                            @can('admin-only', auth()->user())
                                            |
                                            
                                            <form action="{{action('HomeFrontController@sliderDestroy', ['slider_image' => $slider_image->id])}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm" title="Delete" value="DELETE"
                                                onclick="confirm('Click OK to Confirm Deletion');">Delete</button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                           @endif

                        </table>
                        
    
                    </div>
                    @can('admin-only', auth()->user())
                    <a href="{{ url('home-scc-slider-create')}}"><button class=" btn btn-sm btn-warning" style="text-align:center;"><span>Add Slider</span></button></a>
                    @endcan
            </div>



        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

</body>
</html>

