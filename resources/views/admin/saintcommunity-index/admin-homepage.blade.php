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

                        <span style="margin-left:200px;">Admin Dashboard</span>
                        <span style="position:relative; right:-799px;">Howdy, {{ Auth::user()->name }}
                        </span>
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
                    <span> 
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Log Out') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    </span>
                </div>

            </div>

        </div>

        <div class="center__Container">
            <div class="home__menu--container">
                    <div class="left__home--menus">

                            <div class="left__home--item">


                                <p><a href="{{url('admin-pages')}}" class="home__page--link"><img src="resources/images/homepage_img.svg" alt="" class="homepage__img"></a></p>
                                <p class="home__menu--description"><a href="{{url('admin-pages')}}" class="home__page--link">Pages</a></p>

                            </div>
                            <div class="left__home--item">


                                <p><a href="{{ url('latest-release') }}" class="home__page--link"><img src="resources/images/contactus_img.svg" alt="" class="homepage__img"></a></p>
                                <p class="home__menu--description"><a href="{{ url('latest-release') }}" class="home__page--link">Latest Release</a></p>


                            </div>
                            <div class="left__home--item">


                                <p><a href="{{url('menu-scc')}}" class="home__page--link"><img src="resources/images/menu_img.svg" alt="" class="homepage__img"></a></p>
                                            <p class="home__menu--description"><a href="{{url('menu-scc')}}" class="home__page--link">Menu</a></p>



                            </div>
                            <div class="left__home--item">


                                <p><a href="{{url('/social-media/')}}" class="home__page--link"><img src="resources/images/footer_img.svg" alt="" class="homepage__img"></a></p>
                                <p class="home__menu--description"><a href="{{url('/social-media/')}}" class="home__page--link">Social Media</a></p>


                            </div>
                            <div class="left__home--item">


                                <p><a href="{{url('/header-base/')}}" class="home__page--link"><img src="resources/images/headline.svg" alt="" class="homepage__img" height="120px"></a></p>
                                <p class="home__menu--description"><a href="{{ url('header-base/') }}" class="home__page--link">Header Base</a></p>


                            </div>
                        </div>
                        <div class="right__home--menus">



                                <div class="right__home--item">


                                            <p><a href="{{ url('add-admin') }}" class="home__page--link"><img src="resources/images/aboutscc.svg" alt="" class="homepage__img" id="aboutscc__img"></a></p>
                                            <p class="home__menu--description"><a href="{{ url('add-admin') }}" class="home__page--link">Add Admin</a></p>


                                </div>
                                <div class="right__home--item">


                                            <p><a href="{{ url('manage-admin') }}" class="home__page--link"><img src="resources/images/programs_img.svg" alt="" class="homepage__img"></a></p>
                                            <p class="home__menu--description"><a href="{{ url('manage-admin') }}" class="home__page--link">View All Admins</a></p>


                                </div>
                                <div class="right__home--item">


                                            <p><a href="" class="home__page--link"><img src="resources/images/partnership_img.svg" alt="" class="homepage__img"></a></p>
                                            <p class="home__menu--description"><a href="" class="home__page--link">Send Mails To Admin</a></p>


                                </div>
                                <div class="right__home--item ">


                                            <p><a href="" class="home__page--link"><img src="resources/images/menu_img.svg" alt="" class="homepage__img"></a></p>
                                            <p class="home__menu--description"><a href="" class="home__page--link">Contact KJK</a></p>


                                </div>
                                <div class="right__home--item ">


                                    <p><a href="{{ url('branches/') }}" class="home__page--link"><img src="resources/images/branches.svg" alt="" class="homepage__img" height="120px"></a></p>
                                    <p class="home__menu--description"><a href="{{ url('branches/') }}" class="home__page--link">Branches</a></p>


                        </div>

                            </div>


                        </div>
            </div>

        </div>

</section>


</body>
</html>

