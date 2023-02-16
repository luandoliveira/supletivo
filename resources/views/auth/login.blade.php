<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('img/LOGOSS4.png')}}" type="image/png">
    <title>Sistema Supletivo</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">



    <link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/flaticon/flaticon.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu">
            <div class="container">
                <div class="top_inner">
                    <div class="float-left">
                        <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{asset('img/LOGOSS4.png')}}" alt=""
                                width="95px"></a>

                    </div>
                    <div class="float-right">
                        <ul class="list header_socila">

                            <li><img class="gov" src="{{asset('/img/banner/SEDUC_LOGO.png')}}" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="home_right_box">

                            <form class="card-body p-lg" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="text-center">
                                    <img src="{{asset("/img/LOGOSS4.png")}}" class="img-fluid i rounded-circle my-3" width="200px"
                                        alt="profile">
                                </div>

                                <div class="mb-3">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" id="Username" name="email" aria-describedby="E-mail"
                                        placeholder="E-mail">
                                </div>
                                <div class="mb-3">
                                    <label>Senha</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                                </div>
                                <div class="text-center"><button type="submit"
                                        class="btn btn-color px-5 mb-5 w-100">Acessar</button></div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/stellar.js')}}"></script>
    <script src="{{asset('vendors/lightbox/simpleLightbox.min.js')}}"></script>
    <script src="{{asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('vendors/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendors/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>

</body>

</html>
<style>
    .home_banner_area {
        z-index: 1;
        background: url({{asset('/img/banner/Royal.jpg')}}) no-repeat scroll center center;
        background-size: cover;
    }

    .btn-color {
        background-color: #0e1c36;
        color: #fff;

    }

    .profile-image-pic {
        height: 200px;
        width: 200px;
        object-fit: cover;
    }

    label {
        color: #fff;
        font-weight: 600;
    }


    a {
        text-decoration: none;
    }

    /* End Home Banner Area css ============================================================================================ */

    .form-control {
        display: block;
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #fff;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .home_banner_area .home_right_box {
        background: rgba(255, 255, 255, 0.712);
        padding: 30px;
        display: flex;
        flex-wrap: wrap;
        margin-top: 210px;
        margin-bottom: 253px !important;
        border: 1px solid rgb(255 255 255 / 0%);
        border-radius: 10px;
    }

    .top_menu .top_inner {
        background: rgba(255, 255, 255, 0.15);
        overflow: hidden;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 8px;
    }

    .gov {
        padding-top: 20px;
    }


    /* Home Banner Area css
============================================================================================ */

    .home_banner_area .banner_inner {
        width: 100%;
    }

    .home_banner_area .banner_inner .banner_content {
        text-align: center;
        color: #c21414;
    }

    .home_banner_area .banner_inner .banner_content h2 {
        margin-top: 0px;
        font-size: 36px;
        font-weight: bold;
        font-family: "Heebo", sans-serif;
        line-height: 47px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .home_banner_area .banner_inner .banner_content p {

        font-family: "Roboto", sans-serif;
        margin-bottom: 35px;
        max-width: 555px;
    }

    .home_banner_area .banner_inner .banner_content .banner_map_img {
        text-align: center;
    }

    .home_banner_area .banner_inner .banner_content .banner_btn {
        margin-right: 0px;
    }

    .home_banner_area .home_right_box {
        background: rgba(255, 255, 255, 0.1);
        padding: 30px;
        display: flex;
        flex-wrap: wrap;
        margin-top: 210px;
        margin-bottom: 210px;
        border: 1px solid rgba(180, 180, 180, 0.041);
        border-radius: 10px;
    }

    .home_banner_area .home_right_box .home_item {
        flex: 0 0 50%;
        max-width: 50%;
        text-align: center;
        line-height: 150px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.877);
        transition: all 300ms linear 0s;
    }
</style>
