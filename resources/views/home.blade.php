<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/LOGOSS4.png') }}" type="image/png">
    <title>Sistema Supletivo</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">



    <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flaticon/flaticon.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu">
            <div class="container">
                <div class="top_inner">
                    <div class="float-left">
                        <a class="navbar-brand logo_h" href="{{ route('home') }}"><img
                                src="{{ asset('img/LOGOSS4.png') }}" alt="" width="95px"></a>

                    </div>
                    <div class="float-right">
                        <ul class="list header_socila">

                            <li><img class="gov" src="{{ asset('/img/banner/SEDUC_LOGO.png') }}" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu visible" id="mainNav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- <a class="navbar-brand logo_h" href="index.html"><img src="img/logoss1.png" alt=""><img src="img/logoss1.png" alt=""></a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="#"><label
                                        for="estudante">Aluno</label></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><label
                                        for="responsavel">Responsável</label></a></li>
                            @if ($show)
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('usuarios.index') }}">Usuários</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrar</a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <label class="menu-close">
                                        <a href="route('logout')"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();"><span
                                                class="sair"><img src="{{ asset('/img/close.png') }}"
                                                    width="30px">Sair</span></a>
                                    </label>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div id="3daluno" style="display: none;"><img class="alunoimg"
                        src="{{ asset('/img/3d-aluno.png') }}"></div>
                <div id="3dresp" style="display: none;"><img class="alunoimg" src="{{ asset('/img/3d-resp.png') }}">
                </div>
                <div class="row">

                    <div class="col-lg-8">
                        <div id="3dss" class="" style="display: block;">
                            <div><img class="fluid" src="{{ asset('/img/banner/ss.png') }}">
                                <div class="banner_content" id="ss" style="display: block;">
                                    <h3>Sistema</h4>
                                        <h2>Supletivo</h2>
                                        <!-- <span class="inputtxt">Sistema de Consultas</span> -->
                                </div>
                            </div>
                        </div>

                        <div class="banner_content" id="aluno" style="display: none;">
                            <form action="{{ route('search_aluno') }}" method="post">
                                @csrf
                                <h4>Encontrar</h4>
                                <h2>Aluno<br /><br /></h2>
                                <span class="inputtxt">Informe o nome completo do Aluno e a Data de Nascimento</span>

                                <input type="text" class="form-control " maxlength="80" name="search_name">

                                <br>
                                <input type="date" class="form-control col-lg-4">
                                <br>
                                <button class="banner_btn" type="submit">Procurar</button>
                            </form>
                        </div>



                        <div class="banner_content" id="resp" style="display: none;">
                            <form action="{{ route('search_mae') }}" method="post">
                                @csrf
                                <h4>Encontrar</h4>
                                <h2>Responsavel<br /><br /></h2>
                                <span class="inputtxt">Informe o nome da Mãe do aluno</span>

                                <input type="text" class="form-control " maxlength="80" name="search_name">
                                <br>
                                <button class="banner_btn" type="submit">Procurar</button>
                            </form>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="home_right_box">
                            <div class="home_item">

                                <label class="menu">

                                    <input class="home_item " type="radio" id="estudante" name="plan"
                                        value="ALUNO"><i class=""></i>
                                    <span><img src="/img/icons-std.png"></span>
                                </label>
                            </div>
                            <div class="home_item">
                                <label class="menu">
                                    <input class="home_item " type="radio" id="responsavel" name="plan"
                                        value="MAE"><i class=""></i>
                                    <span><img src="/img/responsavel.png"></span>
                                </label>
                            </div>
                            @if ($show)
                                <div class="home_item">
                                    <a href="{{ route('usuarios.index') }}">
                                        <label class="menu">
                                            <span><img src="{{ asset('/img/people.png') }}" width="70px"></span>
                                        </label>
                                    </a>
                                </div>

                                <div class="home_item">
                                    <a href="{{ route('register') }}">
                                        <label class="menu">
                                            <span><img src="{{ asset('/img/usuarioslista.png') }}"
                                                    width="70px"></span>
                                        </label>
                                    </a>
                                </div>
                            @else
                                <div class="home_item">
                                    <span><img src="{{ asset('/img/people.png') }}" width="70px"
                                            style="filter: grayscale(100%);"></span>
                                </div>

                                <div class="home_item">

                                    <span><img src="{{ asset('/img/usuarioslista.png') }}" width="70px"
                                            style="filter: grayscale(100%);"></span>

                                </div>
                            @endif
                            <div>
                            </div>
                            <div class="home_close">

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        <label class="menu-close">
                                            <span class="sair"><img src="{{ asset('/img/close.png') }}"
                                                    width="30px">SAIR</span>
                                        </label>
                                    </a>
                                </form>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>







</body>

</html>
<style>
    .visible {
        visibility: hidden !important;
    }

    @media only screen and (max-width: 997px) {
        .visible {
            visibility: visible !important;
        }
    }

    .home_banner_area .home_right_box .home_close {
        flex: 0 0 100%;
        max-width: 100%;
        text-align: center;
        line-height: 150px;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
        transition: all 300ms linear 0s;
    }

    .fluid {
        width: 100%;
        max-width: 540px;
    }

    .titulo {
        position: absolute;
        top: 40%;
        right: 55%;

    }

    h2,
    h3,
    h4 {
        text-shadow: black 0.1em 0.1em 0.2em
    }

    .alunoimg {
        position: absolute;
        top: 40%;
        right: 85%;
        width: 160px;
        max-height: 300px;
    }

    .banner_btn {
        display: inline-block;
        background: #50D0A2;
        color: #fff;
        width: 148px;
        font-size: 14px;
        font-weight: 500;
        border: 1px solid #50D0A2;
        line-height: 48px;
        border-radius: 3px;
        outline: none !important;
        box-shadow: none !important;
        text-align: center;
        cursor: pointer;

    }

    /* .home_banner_area .home_right_box .home_item:hover  {
        background: #50D0A2; }  */

    input[type=radio] {
        display: none;
    }

    .sair {
        font-weight: 600;
    }

    .menu {
        width: 140px;
        height: 163px;
        /* box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); */
        border-radius: 4px;
        padding: 5px 2px;
        margin: 0;
        background-color: transparent;
        transition: 0.1s;
        position: relative;
        text-align: center;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
        color: #ffffff;
        font-weight: 500;
    }

    .menu:hover {
        cursor: pointer;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    }

    .menu-close {
        width: 300px;
        height: 155px;
        /* box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); */
        border-radius: 4px;
        padding: 5px 2px;
        margin: 0;
        background-color: transparent;
        transition: 0.1s;
        position: relative;
        text-align: center;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
        color: #ffffff;
        font-weight: 500;
    }

    .menu-close:hover {
        cursor: pointer;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    }

    .label-checked {
        /* border: 2px solid #ffffff; */
        background-color: #50D0A2 !important;
    }

    .radio-header {
        font-weight: 600;
    }

    .radio-text {
        color: #777;
    }

    .radio-check {
        display: none;
    }

    .check-icon {
        color: #50D0A2;
        position: absolute;
        top: 12px;
        right: 8px;
    }

    .radio-body {
        font-size: 24px;
        font-weight: bold;
        margin-top: 8px;
    }

    /* breadcrumb em css */
    @import url('https://fonts.googleapis.com/css?family=Heebo:300,400,500,700|Roboto:300,400,500,700');

    /* Home Banner Area css ============================================================================================ */
    /*font Variables*/
    /*Color Variables*/
    /*=================== fonts ====================*/
    .home_banner_area {
        z-index: 1;
        background: url({{ asset('/img/banner/Royal.jpg') }}) no-repeat scroll center center;
        background-size: cover;
    }

    .home_banner_area .banner_inner {
        width: 100%;
    }

    .home_banner_area .banner_inner .col-lg-8 {
        vertical-align: middle;
        align-self: center;
    }

    .home_banner_area .banner_inner .banner_content {
        text-align: left;
        color: #fff;
    }

    .home_banner_area .banner_inner .banner_content h2 {
        margin-top: 0px;
        font-size: 36px;
        font-weight: bold;
        font-family: 'Heebo', sans-serif;
        line-height: 47px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .home_banner_area .banner_inner .banner_content p {
        color: #fff;
        font-family: 'Roboto', sans-serif;
        margin-bottom: 35px;
        max-width: 555px;
    }

    .home_banner_area .banner_inner .banner_content .banner_map_img {
        text-align: right;
    }

    .home_banner_area .banner_inner .banner_content .banner_btn {
        margin-right: 0px;
    }

    .home_banner_area .home_right_box {
        background: rgba(255, 255, 255, .10);
        padding: 30px;
        display: flex;
        flex-wrap: wrap;
        margin-top: 210px;
        margin-bottom: 250px;
        border: 1px solid rgba(255, 255, 255, .1);
        border-radius: 10px;
    }

    .home_banner_area .home_right_box .home_item {
        flex: 0 0 50%;
        max-width: 50%;
        text-align: center;
        line-height: 150px;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
        transition: all 300ms linear 0s;
    }

    .home_banner_area .home_right_box .home_item i {
        font-size: 40px;
    }

    .home_banner_area .home_right_box .home_item i:before {
        font-size: 40px;
        color: #fff;
        margin-left: 0px;
    }

    .home_banner_area .home_right_box .home_item:nth-child(odd) {
        border-right: 1px solid rgba(255, 255, 255, .1);
    }

    .home_banner_area .home_right_box .home_item:nth-child(5) {
        border-bottom: 0px;
    }

    .home_banner_area .home_right_box .home_item:last-child {
        border-bottom: 0px;
    }

    .blog_banner {
        min-height: 780px;
        position: relative;
        z-index: 1;
        overflow: hidden;
        margin-bottom: 0px;
    }

    .blog_banner .banner_inner {
        background: #04091e;
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 780px;
        z-index: 1;
    }

    .blog_banner .banner_inner .overlay {
        background: url(../img/banner/banner-2.jpg) no-repeat scroll center center;
        opacity: 0.5;
        height: 125%;
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        z-index: -1;
    }

    .blog_banner .banner_inner .blog_b_text {
        max-width: 700px;
        margin: auto;
        color: #fff;
        margin-top: 40px;
    }

    .blog_banner .banner_inner .blog_b_text h2 {
        font-size: 60px;
        font-weight: bold;
        line-height: 66px;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .blog_banner .banner_inner .blog_b_text p {
        font-size: 16px;
        margin-bottom: 35px;
    }

    .blog_banner .banner_inner .blog_b_text .white_bg_btn {
        line-height: 42px;
        padding: 0px 45px;
    }

    .banner_box {
        max-width: 1620px;
        margin: auto;
    }

    .banner_area {
        position: relative;
        z-index: 1;
        min-height: 430px;
    }

    .banner_area .banner_inner {
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 430px;
        background: #000;
        z-index: 1;
    }

    .banner_area .banner_inner .overlay {
        background: url(../img/banner/banner.jpg) no-repeat scroll center center;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        height: 125%;
        bottom: 0;
        z-index: -1;
        opacity: 0.4;
    }

    .banner_area .banner_inner .banner_content {
        margin-top: 70px;
    }

    .banner_area .banner_inner .banner_content h2 {
        color: #fff;
        font-size: 48px;
        font-family: 'Heebo', sans-serif;
        margin-bottom: 0px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .banner_area .banner_inner .banner_content .page_link a {
        font-size: 14px;
        color: #fff;
        font-family: 'Roboto', sans-serif;
        margin-right: 32px;
        position: relative;
    }

    .banner_area .banner_inner .banner_content .page_link a:before {
        content: "\e87a";
        font-family: 'Linearicons-Free';
        font-size: 14px;
        position: absolute;
        right: -25px;
        top: 54%;
        transform: translateY(-50%);
    }

    .banner_area .banner_inner .banner_content .page_link a:last-child {
        margin-right: 0px;
    }

    .banner_area .banner_inner .banner_content .page_link a:last-child:before {
        display: none;
    }

    /* End Home Banner Area css ============================================================================================ */


    /* style header */
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
</style>


<script>
    $(function() {

        $('input[name=plan]').on('change', function() {
            let $this = $(this);
            let $label = $this.parent('label');
            retorno = this.value;


            if (!($label.hasClass('label-checked'))) {
                $('label').removeClass('label-checked');
                $('label').find('.radio-check').hide();
                $label.addClass('label-checked');
                $label.find('.radio-check').show();
            }
            if (retorno == "ALUNO") {
                $('#aluno').show();
                $('#3daluno').show();

                $('#resp').hide();
                $('#3dresp').hide();
                $('#3dss').hide();
            } else if (retorno == "MAE") {
                $('#aluno').hide();
                $('#3daluno').hide();
                $('#3dss').hide();

                $('#resp').show();
                $('#3dresp').show();
            }
        });


    });
</script>
