<div class="header_container">
    <div class="header_container__flex main_row">
        <div class="header__inner_container">
            <h3 class="header__text_name">{{strtoupper($headerbase->location)}}</h3>

            <p class="header__text_name header__text_name--small">{{strtoupper($headerbase->location_two)}}</p>
        </div>
        <div class="header__inner_container">
            <p class="header__service_text">
                {{$headerbase->sunday}}
            </p>
            <p class="header__service_text header__service_text--big">{{strtolower(date('g:iA',strtotime($headerbase->sunday_time_one)))}} {{strtolower(date('g:iA',strtotime($headerbase->sunday_time_two)))}}
            </p>
        </div>
        <div class="header__inner_container">
            <p class="header__service_text">
                {{$headerbase->mid_day}}
                <p class="header__service_text header__service_text--big">{{strtolower(date('g:iA',strtotime($headerbase->mid_day_time)))}}</p>
            </p>
        </div>
        <div class="header__inner_container">
            <a href="" class="home__btn">{{strtoupper($headerbase->direction)}}</a>
        </div>
    </div>

</div>
