<footer class="home__footer">

    <div class="home_footer__container main_row">
        <ul class="home_footer_list_container">
            <li>
                <a href="" class="home_footer_link home_footer_link--title">GET TO KNOW US</a>
            </li>
            <li>
                <a class="home_footer_link" href="{{ url('/') }}">{{ $menu->home}}</a>
            </li>
            <li>
                <a class="home_footer_link" href="{{ url('/media/') }}">{{ $menu->media}}</a>
            </li> 
            <li>
                <a class="home_footer_link" href="{{ url('/location/') }}">{{ $menu->locations}}</a>
            </li>
            <li>
                <a class="home_footer_link" href="{{ url('/partnership/') }}">{{ $menu->partnership}}</a>
            </li>
            <li>
                <a class="home_footer_link" href="{{ url('/event/') }}">{{ $menu->events}}</a>
            </li>
            <li>
                <a class="home_footer_link" href="{{ url('/about-us/') }}">{{ $menu->about_us}}</a>
            </li>
        </ul>
        <ul class="home_footer_list_container">
            <li>
                <a href="patnership.html" class="home_footer_link home_footer_link--title">{{ $footer_partner->title }}</a>
            </li>
            <li class="home_footer_link home_footer_link--spaced">
               {!! $footer_partner->body !!}
            </li>

            <li class="home_footer_link">
                <a href="" class="home__btn home__btn--red_filled home__btn--pay_footer">
                    {{ $footer_partner->pay_btn }}
                </a>
            </li>

        </ul>

        <ul class="home_footer_list_container">
            <li>
                <a href="" class="home_footer_link home_footer_link--title">DOWNLOAD</a>
            </li>
            <li>
                <a class="home_footer_link" href="">Get The Andriod app </a>
            </li>
            <li class="home__flex_list">
                <img src="resources/images/playstore2.png" alt="">
                <a class="home_footer_link home_footer_link--bold" href="https://play.google.com/store/apps/details?id=org.livingwordmedia.saintcommunityc"
                    target="_blank">
                    <strong>Available On Playstore</strong>
                </a>
            </li>
        </ul>

        <ul class="home_footer_list_container">
            <li>
                <a href="#" class="home_footer_link home_footer_link--title">SUBSCRIPTION</a>
            </li>
            <li class="home_footer_link">Click Below To Suscribe
                <br>To Our Newsletter</li>
            <li class="home_footer_link home_footer">
                <input type="text" placeholder="Enter Your Email" class="footer__input">
                <input type="submit" class="footer__input_submit" value="SUSCRIBE">
                <div class="home_footer__social_link_container">
                    <span>Follow Us On:</span>
                    <a href="{{ url('https://web.facebook.com/'.$socialmedia->facebook)}}" target="_blank">
                        <img class="home_social__icons" src="resources/images/FACEBOOK_ROUND.svg" alt="">
                    </a>
                    <a href=""{{ url('https://www.instagram.com/'.$socialmedia->instagram)}}" target="_blank">
                        <img class="home_social__icons" src="resources/images/INSTA_ROUND.svg" alt="">
                    </a>
                    <a href="{{ url('https://mobile.twitter.com/'.$socialmedia->twitter)}}" target="_blank">
                        <img class="home_social__icons" src="resources/images/TWITTER_ROUND.svg" alt="">
                    </a>
                    <a href="{{ url('https://www.youtube.com/channel/'.$socialmedia->youtube)}}" target="_blank">
                        <img class="home_social__icons" src="resources/images/YOUTUBE_ROUND.svg" alt="">
                    </a>
                </div>
            </li>
        </ul>

    </div>



</footer>