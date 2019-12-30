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

    <title>Admin</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">
                    <span style="margin-left:210px;">Site Pages</span>
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


                                <p><a href="{{url('home-scc')}}" class="home__page--link"><img src="resources/images/homepage_img.svg" alt="" class="homepage__img"></a></p>
                                <p class="home__menu--description"><a href="{{url('home-scc')}}" class="home__page--link">Home Page</a></p>

                            </div>
                            <div class="left__home--item">


                                <p><a href="{{ url('contact-scc') }}" class="home__page--link"><img src="resources/images/contactus_img.svg" alt="" class="homepage__img"></a></p>
                                <p class="home__menu--description"><a href="{{ url('contact-scc') }}" class="home__page--link">Contact Us</a></p>


                            </div>
                            <div class="left__home--item">


                                <p><a href="{{url('media-scc')}}" class="home__page--link"><img src="resources/images/media_img.svg" alt="" class="homepage__img"></a></p>
                                <p class="home__menu--description"><a href="{{url('media-scc')}}" class="home__page--link">Media</a></p>


                            </div>
                            <div class="left__home--item">


                                <p><a href="{{ url('footer-scc') }}" class="home__page--link"><img src="resources/images/footer_img.svg" alt="" class="homepage__img"></a></p>
                                <p class="home__menu--description"><a href="{{ url('footer-scc') }}" class="home__page--link">Footer</a></p>


                            </div>

                        </div>
                        <div class="right__home--menus">



                                <div class="right__home--item">


                                            <p><a href="{{ url('about-scc')}}"class="home__page--link"> <img src="resources/images/aboutscc.svg" alt="" class="homepage__img" id="aboutscc__img"></a></p>
                                <p class="home__menu--description"><a href="{{ url('about-scc')}}"class="home__page--link"> About SCC</a></p>


                                </div>
                                <div class="right__home--item">


                                            <p><a href="{{ url('events-scc') }}" class="home__page--link"><img src="resources/images/programs_img.svg" alt="" class="homepage__img"></a></p>
                                            <p class="home__menu--description"><a href="{{ url('events-scc') }}" class="home__page--link">Events</a></p>


                                </div>
                                <div class="right__home--item">


                                            <p><a href="{{url('partnership-scc')}}" class="home__page--link"><img src="resources/images/partnership_img.svg" alt="" class="homepage__img"></a></p>
                                            <p class="home__menu--description"><a href="{{url('partnership-scc')}}" class="home__page--link">Partnerships</a></p>


                                </div>
                                <div class="right__home--item ">


                                            <p><a href="{{url('locations-scc')}}" class="home__page--link"><img src="resources/images/menu_img.svg" alt="" class="homepage__img"></a></p>
                                            <p class="home__menu--description"><a href="{{url('locations-scc')}}" class="home__page--link">Locations</a></p>


                                </div>

                            </div>


                        </div>
            </div>

        </div>

</section>


</body>
</html>

