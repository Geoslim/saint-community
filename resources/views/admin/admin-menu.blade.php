<div class="left__menu--item">
    <img src="{{ asset('resources/images/LOGO.svg') }}" alt="" class="left__bar--image">
</div>
<div class="left__menu--item">
    <img src="{{ asset('resources/images/home-page (1).svg') }}" alt="" class="left__menu--icon">
    <span><a href="{{url('/admin')}}" class="a-link">Dashboard</a></span>
</div>
<div class="left__menu--item">
    <img src="{{ asset('resources/images/church.svg') }}" alt="" class="left__menu--icon">
    <span><a href="{{url('/')}}" class="a-link">Back To Main Site</a></span>
</div>
<div class="left__menu--item">
     <span> 
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" style="text-decoration:none; color:#fff;">
        <img src="{{ asset('resources/images/logout.svg') }}" alt="" class="left__menu--icon">
        {{ __('Log Out') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>
    </span>
</div>