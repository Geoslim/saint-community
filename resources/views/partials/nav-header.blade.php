<nav class="nav">
    <span class="menu_icon">
        <img src="resources/images/menu.svg" alt="">
    </span>
    <div class="nav__inner_container main_row">
        <a href="{{url('/')}}" class="nav__logo">
            <img src="storage/menuLogo_image/{{ $menu_logo->logo }}" alt="">
        </a>
        <div class="nav__menu">
            <a href="{{ url('/') }}" class="nav__link">{{ strtoupper($menu->home)}}</a> 
            <a href="{{ url('/about-us/') }}" class="nav__link">{{ strtoupper($menu->about_us)}}</a>
            <a href="{{ url('/location/') }}" class="nav__link">{{ strtoupper($menu->locations)}}</a>
            <a href="{{ url('/media/') }}" class="nav__link">{{ strtoupper($menu->media)}}</a>
            <a href="{{ url('/partnership/') }}" class="nav__link">{{ strtoupper($menu->partnership)}}</a>
            <a href="{{ url('/event/') }}" class="nav__link">{{ strtoupper($menu->events)}}</a>
            <a href="{{ url('/contact-us/') }}" class="nav__link">{{ strtoupper($menu->contact)}}</a>
        </div>
    </div>
</nav>
