<div class="home_branches main_row">
    <img src="resources/images/MAP.svg" alt="" class="home_branches__top_img">
    <h3 class="home_branches__title">{{ strtoupper($branch_section_details->branch_heading) }}</h3>

    <div class="home_branches__flex_container">
            @foreach ($branches as $branch)
        <div class="home_branches__flex_item">
            <div class="home_branches__name_container">
                <img src="resources/images/MAP_HANDLE.svg" alt="" class="home_branches__location_img">
                <h3 class="home_branches__name">{{strtoupper($branch->location)}}</h3>
            </div>
            <p class="home_branches__text">{{$branch->address}}</p>
        </div>
        @endforeach
        {{--  <div class="home_branches__flex_item">
            <div class="home_branches__name_container">
                <img src="resources/images/MAP_HANDLE.svg" class="home_branches__location_img" alt="">
                <h3 class="home_branches__name">IBADAN</h3>
            </div>
            <p class="home_branches__text">Ground Floor, Green House (Amigos Guest House), Fadeyi Street, (Opposite Libra Kitchen), Agbowo, UI, Ibadan</p>
        </div>
        <div class="home_branches__flex_item">
            <div class="home_branches__name_container">
                <img src="resources/images/MAP_HANDLE.svg" class="home_branches__location_img" alt="">
                <h3 class="home_branches__name">ABUJA</h3>
            </div>
            <p class="home_branches__text">Floris Garden, Alfayyum Street, Off Abidjan Street, Wuse Zone 3, Abuja, FCT</p>
        </div>  --}}

        <div class="home_branches__flex_item">
            <a style="width: 100%;" href="location.html" class="home__btn home__btn--red_stroked home__btn--red_smaller">
                    {{ $branch_section_details->branch_btn}}
            </a>
        </div>
    </div>
</div>