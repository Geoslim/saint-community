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

    <title>Admin/Branch Section</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:224px;"> Branches Section</span>
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
                    <a href="{{ url('admin') }}"><img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                </p>
                <p class="text__description">Branches Details</p>
            </div>
            <div class="form__container" style="margin-bottom:-50px;">
                <form method="POST" action="{{ action('BranchesController@updateDetails',$branch_section_details->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="geo" style="padding:10px 100px;">
                        <input type="text" class="" id="branch_heading" name="branch_heading" placeholder="Visit any of our Churches" value="{{ $branch_section_details->branch_heading }}">
                    </div>
                    <div class="geo" style="padding:10px 100px;">
                        <input type="text" class="" id="branch_btn" name="branch_btn" placeholder="Click Here For More Locations" value="{{ $branch_section_details->branch_btn }}">
                    </div>
                    
                    <div class="save__button--container" style="margin-top:0px;">
                        <button class="button" id="submit__button"><span>Update</span></button>
                    </div>
                </form>
            </div>
            <div class="form__header--list">
                   
                    <p class="text__description">Branches</p>
                </div>
            <div class="form__container" style="margin-top:-30px;margin-bottom:50px; padding:50px 0;">
                 <div class="table__container" >
                        
                        <table class="table__container--main" >
    
                            <thead class="table__header">
    
                                <tr class="table__row" >
                                    <th class="table__section" >S/N</th>
                                    <th class="table__section">DATE UPDATED</th>
                                    <th class="table__section">LOCATIONS</th>
                                    <th class="table__section">ACTIONS</th>
                                </tr>
    
                            </thead>
                            @if (count($branches) > 0 )
                            <?php $i = 0; ?>
                                @foreach ($branches as $branch)
                                <?php $i++; ?>
                                    <tr class="table__row">
                                        <td class="table__data">{{ $i }}</td>
                                        <td class="table__data">{{$branch->updated_at}}</td>
                                        <td class="table__data">{{$branch->location}}</td>
                                        <td class="table__data">
                                            <a href="{{ action('BranchesController@edit', ['branch' => $branch->id]) }}" alt="Edit" title="Edit">
                                                <button class="btn btn-sm">Edit</button>
                                            </a>
                                            @can('admin-only', auth()->user())
                                            |
                                            
                                            <form action="{{action('BranchesController@destroy', ['branch' => $branch->id])}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm" title="Delete" value="DELETE">Delete</button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                           @endif

                        </table>
                        
    
                    </div>
                    @can('admin-only', auth()->user())
                    <a href="{{ action('BranchesController@create') }}"><button class=" btn btn-sm btn-warning" style="text-align:center;"><span>Add Branch</span></button></a>
                    @endcan
            </div>



        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

</body>
</html>

