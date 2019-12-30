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

    <title>Admin/Footer</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                    <span style="margin-left:250px;">Footer Section</span>
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
                <p class="text__description">Edit Footer Section</p>
            </div>

            <div class="row" style="">
                <div class="col-md-5">
                    <div class="form__container" style="position:relative;">
                        <div class="geo">
                            <form method="POST" action="{{ url('updateFooterPartner/'.$footer_partner->id) }}">
                                @csrf
                                @method('PUT')

                                <p class="text__description" style="text-align:center;">Partnership </p>
                                
                                <div class="data__field--1">
                                    <input type="text" class="" id="title" name="title" placeholder="Partner With Us" value="{{ $footer_partner->title }}">
                                </div>

                                <div class="" style="margin:10px 20px; ">
                                    <textarea id="body" name="body" cols="" rows="10">{{ $footer_partner->body }}</textarea>
                                </div>

                                <div class="data__field--1">
                                    <input type="text" class="" id="pay_btn" name="pay_btn" placeholder="Pay Online" value="{{ $footer_partner->pay_btn }}">
                                </div>  
                                
                                <div class="data__field--1">
                                    <input type="text" class="" id="pay_btn_url" name="pay_btn_url" placeholder="http://" value="{{ $footer_partner->pay_btn_url }}">
                                </div>  

                                <div class="save__button--container" style="margin-top:0px;">
                                    <button class="button" id="submit__button"><span>Save</span></button>
                                </div>

                            </form>
                        </div>
                    </div> 
                </div>  
                <div class="col-md-5">
                    <div class="form__container" style="position:relative;">
                        <div class="geo">
                            <form method="POST" action="{{ url('updateFooterDownload/'.$footer_download->id) }}">
                                @csrf
                                @method('PUT') 
                                <p class="text__description" style="text-align:center;">Download </p>
                                <div class="data__field--1">
                                    <input type="text" class="" id="title" name="title" placeholder="Download" value="{{ $footer_download->title }}">
                                </div>
                                <div class="data__field--1">
                                        <input type="text" class="" id="subtitle" name="subtitle" placeholder="Get the Android App" value="{{ $footer_download->subtitle }}">
                                </div>
                                <div class="data__field--1">
                                        <input type="text" class="" id="play_store" name="play_store" placeholder="Available On Playstore" value="{{ $footer_download->play_store }}">
                                </div>
                                <div class="data__field--1">
                                        <input type="text" class="" id="play_store_url" name="play_store_url" placeholder="http://" value="{{ $footer_download->play_store_url }}">
                                </div>
                                {{-- <div class="data__field--1 row">
                                        <span class="col-md-1"><img src="resources/images/playstore2.png" alt="" style="margin-top:20px; margin-left:10px;"></span>
                                        <input type="file" class="col-md-8" id="download_icon" name="download_icon" >
                                </div> --}}
                                          
                                <div class="save__button--container" style="margin-top:0px;">
        
                                    <button class="button" id="submit__button"><span>Save</span></button>
                
                                </div>
                            </form>
                        </div>
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

