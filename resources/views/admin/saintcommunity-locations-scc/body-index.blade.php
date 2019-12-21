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

    <title>Admin/Location Section</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:210px;">Locations Scc</span>
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
                    <a href="{{ url('locations-scc') }}"><img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                </p>
            </div>
            
           
            <div class="form__container" style="margin-top:-30px;margin-bottom:50px; padding:50px 0;">
                 <div class="table__container" >
                        
                        <table class="table__container--main" >
    
                            <thead class="table__header">
    
                                <tr class="table__row" >
                                    <th class="table__section" >S/N</th>
                                    <th class="table__section">DATE UPDATED</th>
                                    <th class="table__section">LOCATION</th>
                                    <th class="table__section">ACTIONS</th>
                                </tr>
    
                            </thead>
                            @if (count($locations) > 0 )
                            <?php $i = 0; ?>
                                @foreach ($locations as $location)
                                <?php $i++; ?>
                                    <tr class="table__row">
                                        <td class="table__data">{{$i}}</td>
                                        <td class="table__data">{{$location->updated_at}}</td>
                                        <td class="table__data">{{$location->location_title}}</td>
                                        <td class="table__data">
                                            <a href="{{ action('LocationsController@locationEdit', ['location' => $location->id]) }}" alt="Edit" title="Edit">
                                                <button class="btn btn-sm">Edit</button>
                                            </a> 
                                            @can('admin-only', auth()->user())
                                            |
                                            
                                            <form action="{{action('LocationsController@destroy', ['location' => $location->id])}}" method="POST">
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
                    <a href="{{ action('LocationsController@locationCreate') }}"><button class=" btn btn-sm btn-warning" style="text-align:center;"><span>Add Location</span></button></a>
                    @endcan
            </div>



        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

</body>
</html>

