<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <link href="vendor/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/jquery.ui.css">
    <link rel="stylesheet" href="{{asset('vendor/css/jquery.ui.css')}}">
    <link href="{{asset('resources/css/directory.css')}}" rel="stylesheet">
    <link href="{{asset('resources/admin1.css')}}" rel="stylesheet">

    <link href="{{ asset('resources/mystyles.css') }}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:100,300,300i,400');
        @import url(resources/css/directory.css);
        @import url(resources/admin1.css);
        @import url(resources/mystyles.css);
        .a-link{
            text-decoration:none;
            color:white;
        }
        
        body{
            font-family: Poppins;
        }
        
    </style>

    <title>Admin/ Edit Admin</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:210px;">Edit Member</span>
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
            <!-- @include('includes.messages') -->
            <div class="form__header--list">
                <p class="form__header--sub">
                    <a href="{{ url('manage-admin') }}"><img src="{{ asset('resources/images/right-arrow-forward.svg') }}" alt="" class="back__arrow"><span>Back</span></a>
                </p>
          
            </div>

            
            <div class="form__container" style=" width:70% ; margin: auto;">
                <div class="geo">

                    <form method="POST" action="{{ url('adminMemberUpdate/'.$admin_members->id) }}">
                        @method('PUT')
                        @csrf

                        <small class="text-danger" style="margin-left:10px;">@error('name') {{ $message }} @enderror</small>
                        <div class="data__field--1">
                            <input type="text" class="" id="name" name="name" placeholder="Full Name" value="{{ $admin_members->name }}" required autocomplete="name" autofocus>
                        </div>

                        <small class="text-danger" style=" ">@error('email') {{ $message }} @enderror</small>
                        <div class="data__field--1">
                            <input type="email" class="" id="email" name="email" placeholder="Email" value="{{ $admin_members->email}}" required autocomplete="email">
                        </div>

                        <small class="text-danger" style=" ">@error('role') {{ $message }} @enderror</small>
                        <div class="geo" style=" ">
                            <select name="role" id="role" class="form-control" style="width:94%; color:#000;">
                                <option value="3" {{ ($admin_members->role == 3 ? "selected" : "")}}>Editor</option>
                                <option value="2" {{ ($admin_members->role == 2 ? "selected" : "")}}>Administrator</option>
                            </select> 
                        </div>

                        <small class="text-danger" style=" ">@error('status') {{ $message }} @enderror</small>
                        <div class="geo" style=" margin-bottom: 30px;">
                            <select name="status" id="status" class="form-control" style="width:94%; color:#000;">
                                <option value="Active" {{ ($admin_members->status == 'Active' ? "selected" : "")}}>Active</option>
                                <option value="Inactive" {{ ($admin_members->status == 'Inactive' ? "selected" : "")}}>Inactive</option>
                            </select>                           
                        </div>

                        <div class="data__field--1">
                            <input type="password" class="" id="password" name="password" placeholder="Password" value="{{ $admin_members->password}}" hidden>
                            <input type="password" class="" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" value="{{ $admin_members->password}}" hidden>
                        </div> 
                           
                        <div class="save__button--container" style="margin-top:10px;">
                            <button class="button" id="submit__button"><span>Save</span></button>
                        </div>
                    </form>
                </div>

            </div>



        </div>


        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>


</body>
</html>

