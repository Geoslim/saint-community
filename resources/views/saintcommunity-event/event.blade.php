<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="resources/css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico">
    <script language="javascript" type="text/javascript" src="https://equinox.shoutca.st/system/player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>Events</title>
</head>

<body>

    <header class="header_hero header_hero--program" style=" height: 550px;
    background: linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, .8)), url(storage/eventBanner_image/{{ $event_banner->banner_image }});
    background-position: 0% 0%;
    background-size: cover;
    position: relative;">
            @include('partials.nav-header')
     

        @include('partials.header-base')

        
        
    </header>


    <section>

        <div class="main_row">
            <div class="program__main">

                <div class="program__img_container">
                    <img src="storage/eventCover_image/{{ $event_cover->cover_image }}" alt="">
                </div>

                <div class="program__main_text_container">
                    <div class="program__main_inner_txt_container">
                        <h3 class="program_main__title">
                            <img src="resources/images/tent.svg" width="24px" alt="">
                            {{ $event_body->title }}
                        </h3>

                        <div class="program_main_inner_content_container">
                            {!!$event_body->body  !!}
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <section>
        <div class="main_row program_event_outer_cont">
            <div class="program__time_container">
                <div class="program__time">
                    <div class="program__time_content">
                        <div class="program_red_strip">
                        </div>
                        <h1 class="time__txt time__txt--days">
                            00
                        </h1>
                    </div>
                    <h4 class="program__time_footer">
                        DAYS
                    </h4>
                </div>
                <div class="program__time">
                    <div class="program__time_content">
                        <div class="program_red_strip">
                        </div>
                        <h1 class="time__txt time__txt--hours">
                            00
                        </h1>
                    </div>
                    <h4 class="program__time_footer">
                        HOURS
                    </h4>
                </div>
                <div class="program__time">
                    <div class="program__time_content">
                        <div class="program_red_strip">
                        </div>
                        <h1 class="time__txt time__txt--minutes">
                            00
                        </h1>
                    </div>
                    <h4 class="program__time_footer">
                        MINUTES
                    </h4>
                </div>
                <div class="program__time">
                    <div class="program__time_content">
                        <div class="program_red_strip">
                        </div>
                        <h1 class="time__txt time__txt--seconds">
                            00
                        </h1>
                    </div>
                    <h4 class="program__time_footer">
                        SECONDS
                    </h4>
                </div>

            </div>
        </div>

        <div class="shadow_box">
            <img src="resources/images/shadow.jpg" alt="" class="shadow_img_box">
        </div>
    </section>

    <section class="home__programs_section home__programs_section--program" style="position: relative;
    padding: 10px 0;
    background: url(storage/eventBg_image/{{ $event_bg->bg_image }});
    background-position: center;
    background-size: cover;
    padding: 5% 0;">
           
    
            <div class="home_programs_container">
                
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
               
            </div>
    
    
    
    </section>

    <section class="home__branch_section">

        @include('partials.branches')
    
    </section>

    <section class="home_social_link__section">

          @include('partials.socials')
    
    
        </section>

    

        <footer class="home__footer">

            @include('partials.footer')
        
            </footer>
        

    <div class="nav_menu__resp">
            <nav class="resp_menu">
                    <div class="resp_menu__logo">
                            <img src="resources/images/LOGO.png" alt="">
                        </div>
                <img src="resources/images/close_btn.svg" class="menu__close" width="18px" alt="">
                <a href="index.html" class="resp_menu__link">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        width="20px" height="20px" viewBox="0 0 460.298 460.297" style="enable-background:new 0 0 460.298 460.297;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path d="M230.149,120.939L65.986,256.274c0,0.191-0.048,0.472-0.144,0.855c-0.094,0.38-0.144,0.656-0.144,0.852v137.041    c0,4.948,1.809,9.236,5.426,12.847c3.616,3.613,7.898,5.431,12.847,5.431h109.63V303.664h73.097v109.64h109.629    c4.948,0,9.236-1.814,12.847-5.435c3.617-3.607,5.432-7.898,5.432-12.847V257.981c0-0.76-0.104-1.334-0.288-1.707L230.149,120.939    z"
                                        data-original="#000000" class="active-path" data-old_color="#F4F4F4" fill="#ffffff" />
                                    <path d="M457.122,225.438L394.6,173.476V56.989c0-2.663-0.856-4.853-2.574-6.567c-1.704-1.712-3.894-2.568-6.563-2.568h-54.816    c-2.666,0-4.855,0.856-6.57,2.568c-1.711,1.714-2.566,3.905-2.566,6.567v55.673l-69.662-58.245    c-6.084-4.949-13.318-7.423-21.694-7.423c-8.375,0-15.608,2.474-21.698,7.423L3.172,225.438c-1.903,1.52-2.946,3.566-3.14,6.136    c-0.193,2.568,0.472,4.811,1.997,6.713l17.701,21.128c1.525,1.712,3.521,2.759,5.996,3.142c2.285,0.192,4.57-0.476,6.855-1.998    L230.149,95.817l197.57,164.741c1.526,1.328,3.521,1.991,5.996,1.991h0.858c2.471-0.376,4.463-1.43,5.996-3.138l17.703-21.125    c1.522-1.906,2.189-4.145,1.991-6.716C460.068,229.007,459.021,226.961,457.122,225.438z"
                                        data-original="#000000" class="active-path" data-old_color="#F4F4F4" fill="#ffffff" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    Home
                </a>
                <a href="about-us.html" class="resp_menu__link">
                    <?xml version="1.0"?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 502.643 502.643" style="enable-background:new 0 0 502.643 502.643;" xml:space="preserve" width="20px"
                        height="20px">
                        <g>
                            <g>
                                <g>
                                    <path d="M251.256,237.591c37.166,0,67.042-30.048,67.042-66.977c0.043-37.037-29.876-66.999-67.042-66.999    c-36.908,0-66.869,29.962-66.869,66.999C184.387,207.587,214.349,237.591,251.256,237.591z"
                                        data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                    <path d="M305.032,248.506H197.653c-19.198,0-34.923,17.602-34.923,39.194v107.854c0,1.186,0.604,2.243,0.669,3.473h175.823    c0.129-1.229,0.626-2.286,0.626-3.473V287.7C339.912,266.108,324.187,248.506,305.032,248.506z"
                                        data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                    <path d="M431.588,269.559c29.832,0,53.754-24.008,53.754-53.668s-23.922-53.711-53.754-53.711    c-29.617,0-53.582,24.051-53.582,53.711C377.942,245.53,401.972,269.559,431.588,269.559z"
                                        data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                    <path d="M474.708,278.317h-86.046c-15.445,0-28.064,14.107-28.064,31.472v86.413c0,0.928,0.453,1.812,0.518,2.826h141.03    c0.065-1.014,0.496-1.898,0.496-2.826v-86.413C502.707,292.424,490.11,278.317,474.708,278.317z"
                                        data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                    <path d="M71.011,269.559c29.789,0,53.733-24.008,53.733-53.668S100.8,162.18,71.011,162.18c-29.638,0-53.603,24.051-53.603,53.711    S41.373,269.559,71.011,269.559L71.011,269.559z"
                                        data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                    <path d="M114.109,278.317H27.977C12.576,278.317,0,292.424,0,309.789v86.413c0,0.928,0.453,1.812,0.539,2.826h141.03    c0.065-1.014,0.475-1.898,0.475-2.826v-86.413C142.087,292.424,129.489,278.317,114.109,278.317z"
                                        data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    About SCC</a>
                <a href="location.html" class="resp_menu__link">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        width="20px" height="20px" viewBox="0 0 430.114 430.114" style="enable-background:new 0 0 430.114 430.114;"
                        xml:space="preserve" class="">
                        <g>
                            <g>
                                <path id="Facebook_Places" d="M356.208,107.051c-1.531-5.738-4.64-11.852-6.94-17.205C321.746,23.704,261.611,0,213.055,0   C148.054,0,76.463,43.586,66.905,133.427v18.355c0,0.766,0.264,7.647,0.639,11.089c5.358,42.816,39.143,88.32,64.375,131.136   c27.146,45.873,55.314,90.999,83.221,136.106c17.208-29.436,34.354-59.259,51.17-87.933c4.583-8.415,9.903-16.825,14.491-24.857   c3.058-5.348,8.9-10.696,11.569-15.672c27.145-49.699,70.838-99.782,70.838-149.104v-20.262   C363.209,126.938,356.581,108.204,356.208,107.051z M214.245,199.193c-19.107,0-40.021-9.554-50.344-35.939   c-1.538-4.2-1.414-12.617-1.414-13.388v-11.852c0-33.636,28.56-48.932,53.406-48.932c30.588,0,54.245,24.472,54.245,55.06   C270.138,174.729,244.833,199.193,214.245,199.193z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                            </g>
                        </g>
                    </svg>
    
                    Locations
                </a>
                <a href="media.html" class="resp_menu__link">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 41.999 41.999" width="20px" height="20px" style="enable-background:new 0 0 41.999 41.999;" xml:space="preserve"
                        width="512px" height="512px">
                        <g>
                            <path d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z"
                                data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                        </g>
                    </svg>
                    Media
                </a>
                <a href="patnership.html" class="resp_menu__link">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="20px" height="20px">
                        <g>
                            <g>
                                <g>
                                    <path d="M123.733,130.133c-17.067-17.067-89.6-21.333-113.067-23.467c-2.133,0-4.267,0-6.4,2.133C2.133,110.933,0,115.2,0,117.333    v192C0,315.733,4.267,320,10.667,320h64c4.267,0,8.533-2.133,10.667-6.4c0-6.4,38.4-119.467,42.667-174.933    C128,136.533,128,132.267,123.733,130.133z"
                                        data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M352,181.333c-21.333-6.4-40.533-14.933-57.6-21.333c-38.4-17.067-55.467-8.533-89.6,25.6    c-14.933,14.933-25.6,36.267-23.467,44.8c0,2.133,0,2.133,4.267,4.267c10.667,4.267,25.6,6.4,40.533-17.067    c2.133-2.133,4.267-4.267,8.533-4.267c6.4,0,8.533-2.133,14.933-4.267c4.267-2.133,8.533-4.267,14.933-6.4    c2.133,0,2.133,0,4.267,0c2.133,0,6.4,2.133,8.533,2.133C288,215.467,307.2,230.4,326.4,247.467    c29.867,23.467,59.733,49.067,74.667,68.267h2.133C388.267,273.067,362.667,200.533,352,181.333z"
                                        data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M501.333,128c-83.2,0-130.133,21.333-132.267,21.333c-2.133,2.133-4.267,4.267-6.4,6.4c0,2.133,0,6.4,2.133,8.533    c12.8,21.333,55.467,138.667,61.867,168.533c2.133,4.267,6.4,8.533,10.667,8.533h64c6.4,0,10.667-4.267,10.667-10.667v-192    C512,132.267,507.733,128,501.333,128z"
                                        data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M386.133,337.067c-8.533-19.2-44.8-46.933-76.8-72.533C292.267,249.6,275.2,236.8,262.4,226.133    c-2.133,2.133-6.4,2.133-6.4,4.267c-6.4,2.133-8.533,4.267-17.067,4.267C221.867,256,200.533,264.533,177.067,256    c-10.667-2.133-17.067-10.667-19.2-19.2c-4.267-21.333,14.933-51.2,29.867-66.133h-42.667c-8.533,42.667-23.467,98.133-34.133,128    c8.533,8.533,17.067,19.2,23.467,23.467c40.533,34.133,87.467,68.267,96,74.667c6.4,4.267,19.2,8.533,25.6,8.533    c2.133,0,4.267,0,6.4,0L228.267,371.2c-4.267-4.267-4.267-10.667,0-14.933s10.667-4.267,14.933,0l42.667,42.667    c4.267,4.267,8.533,2.133,12.8,2.133c6.4-2.133,8.533-6.4,10.667-12.8L260.267,339.2c-4.267-4.267-4.267-10.667,0-14.933    s10.667-4.267,14.933,0l53.333,53.333c2.133,2.133,10.667,2.133,17.067,0c2.133-2.133,6.4-4.267,8.533-8.533L294.4,309.333    c-4.267-4.267-4.267-10.667,0-14.933s10.667-4.267,14.933,0l61.867,61.867c4.267,2.133,8.533,0,12.8-2.133    C386.133,352,390.4,345.6,386.133,337.067z"
                                        data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                                </g>
                            </g>
                        </g>
                    </svg>
    
                    Partnership
                </a>
                <a href="program.html" class="resp_menu__link resp_menu__link--active">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve" width="20px"
                        height="20px">
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <path d="M362.667,42.667h-21.333V0h-42.667v42.667H128V0H85.333v42.667H64c-23.573,0-42.453,19.093-42.453,42.667L21.333,384     c0,23.573,19.093,42.667,42.667,42.667h298.667c23.573,0,42.667-19.093,42.667-42.667V85.333     C405.333,61.76,386.24,42.667,362.667,42.667z M362.667,384H64V149.333h298.667V384z"
                                            data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                                        <polygon points="309.973,214.613 287.36,192 183.253,296.107 138.027,250.88 115.413,273.493 183.253,341.333    " data-original="#000000"
                                            class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    Events
                </a>
                <a href="contact.html" class="resp_menu__link">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 511.882 511.882" style="enable-background:new 0 0 511.882 511.882;" xml:space="preserve" width="20px"
                        height="20px">
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <path d="M389.898,430.449l-86.29-57.527c-3.86-2.548-9.03-1.709-11.886,1.929l-25.125,32.302     c-8.143,10.612-22.839,13.641-34.514,7.113l-4.645-2.551c-16.759-9.143-37.623-20.517-79.04-61.934     c-41.417-41.417-52.8-62.281-61.934-79.049l-2.56-4.645c-6.527-11.672-3.498-26.366,7.113-34.505l32.293-25.134     c3.642-2.854,4.482-8.026,1.929-11.886l-57.518-86.299c-2.616-3.916-7.843-5.094-11.886-2.679l-36.105,21.65     c-7.746,4.521-13.443,11.863-15.899,20.489c-11.858,43.182-1.883,118.793,112.96,233.646s190.437,124.846,233.655,112.978     c8.628-2.459,15.969-8.159,20.489-15.909l21.641-36.105C394.997,438.293,393.818,433.063,389.898,430.449z"
                                            data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                                        <path d="M510.425,15.156c-0.946-0.946-2.234-1.471-3.572-1.456H123.767c-1.338-0.015-2.626,0.51-3.572,1.456     c-0.946,0.946-1.471,2.234-1.456,3.572V151.83l21.723,32.585c7.835,11.838,5.26,27.708-5.915,36.462l-32.265,25.134     c-3.454,2.62-4.458,7.38-2.359,11.173l2.633,4.8c8.395,15.966,18.635,30.892,30.51,44.471h373.787     c2.743,0.02,4.988-2.176,5.029-4.919V18.728C511.897,17.39,511.372,16.102,510.425,15.156z M250.661,181.434v-0.046     l-93.659,100.343c-3.444,3.694-9.23,3.896-12.923,0.453c-3.694-3.444-3.896-9.23-0.453-12.923l93.659-100.297     c3.444-3.694,9.23-3.896,12.923-0.453C253.902,171.955,254.105,177.741,250.661,181.434z M315.31,174.23     c-6.589,0.03-13.009-2.088-18.286-6.034L144.211,52.319c-4.024-3.065-4.802-8.812-1.737-12.837     c3.065-4.024,8.812-4.802,12.837-1.737l152.75,115.877c4.323,3.141,10.177,3.141,14.501,0L475.356,37.745     c4.024-3.052,9.761-2.264,12.814,1.76s2.264,9.761-1.76,12.814L333.596,168.196C328.319,172.142,321.9,174.26,315.31,174.23z      M487.123,282.18c-1.773,1.656-4.132,2.539-6.557,2.455c-2.425-0.084-4.717-1.128-6.371-2.903l-93.65-100.343     c-3.182-3.729-2.856-9.304,0.737-12.637c3.594-3.334,9.177-3.24,12.657,0.212l93.632,100.297     C491.013,272.952,490.813,278.735,487.123,282.18z"
                                            data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
    
                    Contact Us
                </a>
            </nav>
    </div>

    <div class="scroll_to_top">
            <img src="resources/images/to_top.svg" width="18px"alt="">
        </div>
        <?php 
            $date_of_event = $event_body->event_date; 
        ?>
        <script src="resources/js/scroll.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
        <script src="resources/js/nav.js"></script>
    <script src="resources/js/program.js"></script>
    <script>
        
            
let eventDate = "<?php echo $date_of_event; ?>";
let countDownDate = new Date(eventDate).getTime();





let timeout = 1000;

let distance;

let x = setInterval(() => {
    let now = new Date().getTime();

    distance = countDownDate - now;

    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))


    document.querySelector(".time__txt--days").innerHTML = days.twoDigits();
    document.querySelector(".time__txt--hours").innerHTML = hours.twoDigits();
    document.querySelector(".time__txt--minutes").innerHTML = minutes.twoDigits();
    document.querySelector(".time__txt--seconds").innerHTML = seconds.twoDigits();

}, timeout);

if (distance < 0) {
    clearInterval(x);
    document.querySelector(".time__txt--days").innerHTML = 0;
    document.querySelector(".time__txt--hours").innerHTML = 0;
    document.querySelector(".time__txt--minutes").innerHTML = 0;
    document.querySelector(".time__txt--seconds").innerHTML = 0;

}


Number.prototype.twoDigits = function () {
    let n = this;
    return (n.toString().length == 2) ? n : "0" + n;
}
    </script>

</body>