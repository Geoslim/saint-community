<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"

        rel="stylesheet">
    <link href="vendor/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/jquery.ui.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:100,300,300i,400');
        @import url(resources/css/directory.css);
        @import url(resources/admin1.css);
        .a-link{
            text-decoration:none;
            color:white;

        }
    </style>

    <title>Admin/Media Page</title>
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
            <div class="home__menu--container">
                    <div class="left__home--menus">

                            
                            
                            <div class="left__home--item">


                                <p><a href="{{ url('media-body') }}" class="home__page--link"><img src="resources/images/footer_img.svg" alt="" class="homepage__img"></a></p>
                                <p class="home__menu--description"><a href="{{ url('media-body') }}" class="home__page--link">Media Body</a></p>


                            </div>

                        </div>
                        <div class="right__home--menus">

                                <div class="left__home--item">


                                        <p><a href="{{ url('media-publish') }}" class="home__page--link"><img src="resources/images/media_img.svg" alt="" class="homepage__img"></a></p>
                                        <p class="home__menu--description"><a href="{{ url('media-publish') }}" class="home__page--link">Media Publish</a></p>
        
        
                                    </div>
                               
                                

                            </div>


                        </div>
            </div>

        </div>

</section>


</body>
</html>

