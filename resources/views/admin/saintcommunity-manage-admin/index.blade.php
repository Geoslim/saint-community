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

    <title>Admin/Manage Admins</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span style="margin-left:100px;">WEBSITE ADMINISTRATORS</span>

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
                   
                    <p class="text__description">USERS</p>
                </div>
            <div class="form__container" style="margin-top:-30px;margin-bottom:50px; padding:50px 0;">
                 <div class="table__container" >
                        
                        <table class="table__container--main" >
    
                            <thead class="table__header">
    
                                <tr class="table__row" >
                                    <th class="table__section" >S/N</th>
                                    <th class="table__section">DATE UPDATED</th>
                                    <th class="table__section">USERS</th>
                                    <th class="table__section">ROLES</th>
                                    <th class="table__section">ACTIONS</th>
                                </tr>
    
                            </thead>
                            @if (count($admin_members) > 0 )
                            <?php $i = 0; ?>
                                @foreach ($admin_members as $admin_member)
                                <?php $i++; ?>
                                    <tr class="table__row">
                                        <td class="table__data">{{ $i }}</td>
                                        <td class="table__data">{{$admin_member->updated_at}}</td>
                                        <td class="table__data">{{$admin_member->name}}</td>
                                        <td class="table__data">{{$admin_member->role}}</td>
                                        <td class="table__data">
                                            <a
                                                href="{{ action('AdminMemberController@adminMemberEdit', ['admin_member' => $admin_member->id]) }}"
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
                    <a href="{{ url('add-admin') }}"><button class=" btn btn-sm btn-warning" style="text-align:center;"><span>Add Admin</span></button></a>
                    {{-- {{ action('BranchesController@create') }} --}}
            </div>



        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

</body>
</html>

