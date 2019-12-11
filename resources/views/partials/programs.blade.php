<div class="home_programs_container main_row">
            

        <div class="home_programs__item home_programs__item--img">
            <img class="home_programs__img" src="storage/programs_image/{{ $latest_cover->cover_image }}" alt="">
        </div>


        <div class="home_programs__item">
            <h3 class="home_programs__title">{{ $latest_detail->title }}</h3>
            <h4 class="home_programs__title home_programs__title--small">{{ $latest_detail->subtitle }}</h4>
            <p class="home-programs__text home-programs--sized">
                    {{ $latest_detail->body }}
            </p>
        </div>

        <div class="home_programs__item">
            <h3 class="home_programs__title home_programs__title--longer">{{ $upcoming_heading->heading }}</h3>
            <div class="home_programs__flex_list_container">
                <div class="home_programs__flex_list_items_container">
                    <h4 class="home_programs__title home_programs__title--small home_programs__title--bold">EVENTS</h4>
                    <ul class="home_programs__flex_list_inner_container">
                        
                        @foreach ($upcoming_events as $upcoming_event)
                            <li class="home-programs__text home-programs__text--list">{{ $upcoming_event->title }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="home_programs__flex_list_items_container">
                    <h4 class="home_programs__title home_programs__title--small home_programs__title--bold">DATES</h4>
                    <ul class="home_programs__flex_list_inner_container home_programs__flex_list_inner_container--remove-width">
                        @foreach ($upcoming_events as $upcoming_event)
                            <li class="home-programs__text home-programs__text--list">{{ $upcoming_event->event_date }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>