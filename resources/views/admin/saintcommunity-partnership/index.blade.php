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

    <title>Admin/Partnership Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:210px;">Partnership</span>
                    <span style="position:relative; right:-700px;">Howdy, {{ Auth::user()->name }} | {{ (Auth::user()->role ==3 ? "Editor" : "Administrator") }}</span>


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
                <p class="form__header--sub">
                </p>
                <p class="text__description">Edit Partnership Page</p>
            </div>
                <div class="form__container" style="position:relative;">
                    <div class="geo">
    
                        <div class="featured__image" style="">
                            <p class="text__description">Partnership Page Banner</p>
                            <img src="storage/partnershipBanner_image/{{$partnership_banner->banner_image}}" alt="" class="bg__image" style="height: 550px; background-position: 0% 0%; background-size: cover;position: relative;">
                            
                            <form method="POST" action="{{url('updatePartnershipBanner/'.$partnership_banner->id)}}" enctype="multipart/form-data">
                                @method('PUT')
                                <input type="file" class="" id="banner_image" name="banner_image" >
                                @csrf
                                <div class="save__button--container" style="margin-top:0px;">
                                    <button class="button" id="submit__button"><span>Save Banner</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            <div class="form__container" style="position:relative; ">
                <div class="geo">
                    
                        <form method="POST" action="{{url('updatePartnershipBody/'.$partnership_body->id)}}">
                            @method('PUT')
                            <p class="text__description">Partnership Page Body </p>
                            <div class="data__field--1">

                                <input type="text" class="" id="title" name="title" placeholder="" value="{{$partnership_body->title}}">
                            </div>

                            <div class="" style="margin:10px 30px; border-radius:10px;">

                                <textarea id="body" name="body" cols="" rows="10">{{$partnership_body->body}}</textarea>
            
                            </div>
                            <div class="data__field--1">

                                <input type="text" class="" id="pay-btn" name="pay_btn_title" placeholder="" value="{{$partnership_body->pay_btn_title}}">
                            </div>
                                @csrf
                            <div class="save__button--container" style="margin-top:0px;">

                                <button class="button" id="submit__button"><span>Save</span></button>
            
                            </div>
                        </form>
                   
                </div>
            </div>

            
            <div class="form__container" style="position:relative; padding:20px;">
                <div class="geo">
                    
                        <form method="POST" action="{{url('updatePartnershipCoverImage/'.$partnership_cover_image->id)}}" enctype="multipart/form-data">
                            @method('PUT')
                            <p class="text__description">Partnership Cover Image </p>
                            <div class="col-md-5 featured__image" style="position:relative; left:0px; top:0px;">
                                <img src="storage/partnershipCover_image/{{$partnership_cover_image->cover_image}}" alt="" class="bg__image">
                                <input type="file" class="" id="cover_image" name="cover_image" >
                                    @csrf
                                <div class="save__button--container" style="margin-top:0px;">
                                    <button class="button" id="submit__button"><span>Save Cover</span></button>
                                </div>
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

