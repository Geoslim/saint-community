<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <link href="vendor/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/jquery.ui.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:100,300,300i,400');
        @import url(resources/css/directory.css);
        @import url(resources/admin1.css);
        @import url(resources/mystyles.css);

        .a-link{
            text-decoration:none;
            color:white;
        }
        .social_btn {
            width: 80px;
            height:40px;
        }
        .social_btn:active{
            background: #3a5;
        }
        body{
            font-family: Poppins;
        }
        
    </style>

    <title>Admin/Contact Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:200px;">Contact Scc</span>
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
                <p class="text__description" >Edit Contact Scc</p>
            </div>
                <div class="form__container" style="position:relative; padding-top:1px;">
                    <div class="geo">
    
                        <div class="featured__image" style="">
                            <p class="text__description" style="margin-left:5px;">Contact us Page Banner</p>
                            <img src="storage/contactBanner_image/{{$contact_banner->banner_image}}" alt="" class="bg__image" style="height: 300px; background-size: contain;border-radius:10px;">
                            <p>Minimum upload banner image dimension: 1000 x 700</p>
                            <form method="POST" action="{{url('updateContactBanner/'.$contact_banner->id)}}" enctype="multipart/form-data">
                                @method('PUT')
                                <input type="file" class="" id="banner_image" name="banner_image" style="width:93%;">
                                @csrf
                                <div class="save__button--container" style="margin-top:0px;">
                                    <button class="button" id="submit__button" style="margin-right:20px;"><span>Save Banner</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            <div class="form__container" style="position:relative; padding-top:20px;">
                <div class="geo">
                    
                        <form method="POST" action="{{url('updateContactBody/'.$contactScc->id)}}">
                            @method('PUT')
                            <p class="text__description" style="margin-left:30px;">Contact us Page Body </p>
                            <div class="data__field--1">

                                <input type="text" class="" id="title" name="title" placeholder="Saints Community Church" value="{{$contactScc->title}}">
                            </div>
                            <div class="" style="padding: 40px">

                                <textarea id="body" name="body" cols="" rows="10">{{$contactScc->body}}</textarea>
            
                            </div>
                            <div class="data__field--1" style="padding:0 10px 0 10px;">
                                <input type="text" class="" id="location_btn" name="location_btn_title" placeholder="LOCATE OUR BRANCHES" value="{{$contactScc->location_btn_title}}" style="width:50%;">
                            
                                <input type="text" class="" id="contact_btn" name="contact_btn_title" placeholder="SEND US A QUICK MESSAGE" value="{{$contactScc->location_btn_title}}" style="width:50%;margin-right:50px;">
                            </div>
                                @csrf
                            <div class="save__button--container" style="margin-top:0px;">

                                <button class="button" id="submit__button"><span>Save</span></button>
            
                            </div>
                        </form>
                   
                </div>
            </div>

            
            <div class="form__container" style="position:relative; padding-top:20px;">
                <div class="geo">
                    
                        <form method="POST" action="{{url('updateGoogleMap/'.$ContactGoogleMap->id)}}">
                                @csrf
                                @method('PUT')
                            <p class="text__description" style="margin-left:30px;">Contact us Google Map </p>
                            
                            <div class="data__field--1">
                                <input type="text" class="" id="google_map" name="google_map" placeholder="" value="{{$ContactGoogleMap->google_map_link}}">
                            
                            </div>
                            <div class="save__button--container" style="margin-top:0px;">

                                <button class="button" id="submit__button"><span>Save</span></button>
            
                            </div>
                        </form>
                   
                </div>

               

            </div>



        </div>


        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script>

    $('#body').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200
        });
</script>

</body>
</html>

