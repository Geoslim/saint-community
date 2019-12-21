<div class="home_social_wrapper main_row">
    <h3 class="home_social__title">Follow Us Online</h3>
    <div class="home_flex_container">
        <!-- <div class="home_social__link_container">
            <a href="" class="home_social__link">
                <img src="resources/images/liveonlineradio.png" class="home_social__img" alt="">
                <br>
                <span class="home_social__link_text">Listen to Bible messages on the go</span>
            </a>
        </div> -->
        <div class="home_social__link_container">
            <a href="{{ url('https://mobile.twitter.com/'.$socialmedia->twitter)}}" target="_blank" class="home_social__link">
                <img src="resources/images/twitter_logo.png" height="60px" class="home_social__img" alt="">
            </a>
        </div> 
        <div class="home_social__link_container">
            <a href=" {{ $socialmedia->play_store }}" target="_blank" class="home_social__link">
                <img src="resources/images/GOOGLE_PLAY.png" class="home_social__img" alt="">
            </a>
        </div>
        <div class="home_social__link_container">
            <a href="{{ url('https://web.facebook.com/'.$socialmedia->facebook)}}" class="home_social__link" target="_blank">
                <img src="resources/images/follow_facebook(1).png" class="home_social__img" alt="">
            </a>
        </div>
        <div class="home_social__link_container">
            <a href="{{ url('https://www.youtube.com/channel/'.$socialmedia->youtube)}}" target="_blank" class="home_social__link">
                <img src="resources/images/YouTube.png" class="home_social__img" alt="">
            </a>
        </div>
        <div class="home_social__link_container">
            <a href="{{ url('https://www.instagram.com/'.$socialmedia->instagram)}}" target="_blank" class="home_social__link">
                <img src="resources/images/ed5f88b72acf82eded800133bdf7dea7b10175f8.png" class="home_social__img" alt="">
            </a>
        </div>

    </div>
</div>



  