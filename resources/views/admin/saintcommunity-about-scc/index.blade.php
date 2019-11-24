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
        @import url(resources/animate.css);
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
    </style>

    <title>Admin/Media Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span>About SCC</span>

                </p>
                @include('includes.messages')

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

            <div class="form__header--list">
                <p class="form__header--sub">
                    {{-- <img src="images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span> --}}
                </p>
                <p class="text__description">Edit About Us</p>
            </div>


            <div class="form__container" style="position:relative;">
                <div class="geo">

                    <div class="data__field--1">

                        <input type="text" class="" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="data__field--1">

                        <textarea id="body" class="textarea__box" rows="4" cols="50"></textarea>

                    </div>

                </div>

                <div class="geo ">
                    <div class="col-md-6">
                        <input type="text" class="" id="about_btn_title" name="about_btn_title" placeholder="About Button Title">
                    </div>
                    <div class="col-md-6">
                            <input type="text" class="" id="contact_btn_title" name="contact_btn_title" placeholder="Contact Button Title">
                        </div>
                    <div class="col-md-5 featured__image" style="position:absolute; right:0; top:130px;">
                        <img src="resources/images/bg.jpg" alt="" class="bg__image">
                        <button class="add__photo"><span>ADD PHOTO</span></button>
                    </div>
                </div>

                <div class="save__button--container" style="margin-top:400px;"">

                    <button id="submit__button"><span>Save Changes</span></button>

                </div>

            </div>



        </div>


        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

<script>

$(document).ready(function(){

$('#body').summernote();
});

</script>
</body>
</html>

