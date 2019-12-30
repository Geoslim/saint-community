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
                <p class="text__description">Update Publish</p>
            </div>
            <div class="form__container">
                @can('admin-only', auth()->user())
                    <a href="{{ url('create-publish') }}"><button class=" btn btn-sm btn-warning" style="text-align:center; margin-left:50px; margin-top:50px;"><span>Add Publish</span></button></a>
                @endcan 
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
                                            <a href="{{ action('MediaController@editPublish', ['media_publish' => $media_publish->id]) }}" alt="Edit" title="Edit">
                                                <button class="btn btn-sm">Edit</button>
                                            </a>
                                            @can('admin-only', auth()->user())
                                            |
                                            
                                            <form action="{{action('MediaController@destroy', ['media_publish' => $media_publish->id])}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm" title="Delete" value="DELETE"
                                                onclick="confirm('Click OK to Confirm Deletion');">Delete</button>
                                            </form>
                                            @endcan
                                    </tr>
                                @endforeach
                           @endif

                        </table>
                        
    
                    </div>

            </div>



        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>


</body>
</html>

