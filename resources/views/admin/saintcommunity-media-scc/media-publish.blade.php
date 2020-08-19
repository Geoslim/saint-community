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
                    <a href="{{ url('media-scc') }}"><img src="{{ asset('resources/images/right-arrow-forward.svg') }}" alt="" class="back__arrow"><span>Back</span></a>
                </p>
                <p class="text__description"> Media Publish</p>
            </div>
            <div class="form__container">
               
                <div class="table__container">
                        
                        <table class="table__container--main">
    
                            <thead class="table__header">
    
                                <tr class="table__row">
                                    <th class="table__section">S/N</th>
                                    <th class="table__section">DATE UPDATED</th>
                                    <th class="table__section">BOOK TITLE</th>
                                    <th class="table__section">ACTIONS</th>
                                </tr>
    
                            </thead>
                            @if (count($media_publishs) > 0 )
                            <?php $i = 0; ?>
                                @foreach ($media_publishs as $media_publish)
                                <?php $i++; ?>
                                    <tr class="table__row">
                                        <td class="table__data">{{$i}}</td>
                                        <td class="table__data">{{$media_publish->updated_at}}</td>
                                        <td class="table__data">{{$media_publish->title}}</td>
                                        <td class="table__data">
                                            <a href="{{ action('MediaController@editPublish', ['media_publish' => $media_publish->id]) }}" alt="Edit" title="Edit" style="color: #000; text-decoration: none;">
                                                Edit
                                            </a>
                                            @can('admin-only', auth()->user())
                                            |
                                             
                                            <form action="{{action('MediaController@destroy', ['media_publish' => $media_publish->id])}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{url('/media-publish/'.$media_publish->id)}}" onclick="return confirm('Are you sure you want to delete published media ?')">
                                                    <button type="submit" class="" title="Delete" value="DELETE" style="border: 0; padding: 0; cursor: pointer; background:transparent;">Delete</button>
                                                </a>
                                            </form>
                                            @endcan
                                    </tr>
                                @endforeach
                           @endif

                        </table>
                        
    
                    </div>
                    @can('admin-only', auth()->user())
                    <a href="{{ url('create-publish') }}">
                        <div class="save__button--container" style="margin-top:0px;">
                            <button class="button" id="submit__button"><span>Publish</span></button>
                        </div>
                        </a>
                @endcan 
            </div>



        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>


</body>
</html>

