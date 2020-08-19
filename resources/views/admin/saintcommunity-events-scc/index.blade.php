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

    <title>Admin/Event Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:200px;">Events</span>
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
            <div class="form__header--list">
                <p class="form__header--sub">
                    <a href="{{ url('admin-pages') }}"> <img src="resources/images/right-arrow-forward.svg" alt="" class="back__arrow"><span>Back</span></a>
                </p>
            </div>
            <div class="form__container" style="margin-top:-30px;margin-bottom:50px; padding:50px 0;">
                <div class="table__container" >
                       
                       <table class="table__container--main" >
   
                           <thead class="table__header">
   
                               <tr class="table__row" >
                                   <th class="table__section" >S/N</th>
                                   <th class="table__section">SECTION</th>
                                   <th class="table__section">ACTIONS</th>
                               </tr>
   
                           </thead>
                           <tbody>
                                <tr class="table__row">
                                    <td class="table__data">1</td>
                                    <td class="table__data">Event Body</td>
                                    <td class="table__data">
                                        <a href="{{ url('events-body') }}" alt="Edit" title="Edit" style="color: #000; text-decoration: none;">
                                            Edit
                                        </a>  
                                    </td>
                                </tr>
                                <tr class="table__row">
                                    <td class="table__data">2</td>
                                    <td class="table__data">Upcoming Events/Programs</td>
                                    <td class="table__data">
                                        <a href="{{ url('upcoming-events') }}" alt="Edit" title="Edit" style="color: #000; text-decoration: none;">
                                            Edit
                                        </a>  
                                    </td>
                                </tr>
                           </tbody>
                       </table>
                       
   
                   </div>
                  
           </div>
        
            </div>

        </div>

</section>


</body>
</html>

