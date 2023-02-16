<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png">
    <title>Sistema Supletivo</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">



    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <!-- tabela -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css">

</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu">
            <div class="container">
                <div class="top_inner">
                    <div class="float-left">
                        <a class="navbar-brand logo_h" href="{{route('home')}}"><img src="img/LOGOSS4.png" alt=""
                                width="95px"></a>

                    </div>
                    <div class="float-right">
                        <ul class="list header_socila">

                            <li><img class="gov" src="/img/banner/SEDUC_LOGO.png" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->


    <div class="banner_inner">
        <div class="container">
            <h1>Resultados</h1>
            <div class="row py-5">
                <div class="col-12">
                    <div class="home_right_box">

                        <table id="example" class="table table-hover responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ALUNO</th>
                                    <th>NASCIMENTO</th>
                                    <th>MÃE</th>
                                    <th>MUNICIPIO</th>
                                    <th>DISCIPLINA</th>
                                    <th>NOTA</th>
                                    <th>RESULTADO</th>
                                    <th>MÊS</th>
                                    <th>ANO</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($search as $name)
                                    <tr>
                                        <td>{{ $name->sup_num_aluno }}</td>
                                        <td>{{ $name->sup_nome }}</td>
                                        <td>{{ $name->sup_data_nasc }}</td>
                                        <td>{{ $name->sup_nome_mae }}</td>
                                        <td>{{ $name->sup_municipio }}</td>
                                        <td>{{ $name->sup_disciplina }}</td>
                                        <td>{{ $name->sup_nota }}</td>
                                        <td>{{ $name->sup_resultado }}</td>
                                        <td>{{ $name->sup_mes }}</td>
                                        <td>{{ $name->sup_ano }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

            <a href="{{ route('home') }}"> <button class="btn btn-color">Voltar</button></a>
        </div>
    </div>


    <!--================End Home Banner Area =================-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
<!-- TABELA -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<style>
    * {
        text-decoration: none !important;
    }

    body {
        z-index: 1;
        background: url(../img/banner/Royal.jpg) no-repeat scroll center center;
        background-size: cover;
        min-height: 700px;
        margin-bottom: 98px;
    }

    h1 {
        color: #FFF;
    }

    .banner_inner {

        margin-top: 200px;
    }


    a {
        text-decoration: none;
    }



    /* borda arredondada css sobreposto */
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


    /* css tabela */

    .table {
        border-spacing: 0 0.85rem !important;
    }

    .table .dropdown {
        display: inline-block;
    }

    .table td,
    .table th {
        vertical-align: middle;
        margin-bottom: 10px;
        border: none;
    }

    .table thead tr,
    .table thead th {
        border: none;
        font-size: 12px;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: transparent;
    }

    .table td {
        background: #fff;
    }

    .table th {
        color: #fff;
    }

    .table td:first-child {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .table td:last-child {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .avatar {
        width: 2.75rem;
        height: 2.75rem;
        line-height: 3rem;
        border-radius: 50%;
        display: inline-block;
        background: transparent;
        position: relative;
        text-align: center;
        color: #868e96;
        font-weight: 700;
        vertical-align: bottom;
        font-size: 1rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .avatar-sm {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 0.83333rem;
        line-height: 1.5;
    }

    .avatar-img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .avatar-blue {
        background-color: #c8d9f1;
        color: #467fcf;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child:before,
    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child:before {
        top: 28px;
        left: 14px;
        border: none;
        box-shadow: none;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child,
    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child {
        padding-left: 48px;
    }

    table.dataTable>tbody>tr.child ul.dtr-details {
        width: 100%;
    }

    table.dataTable>tbody>tr.child span.dtr-title {
        min-width: 50%;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr>td.child,
    table.dataTable.dtr-inline.collapsed>tbody>tr>th.child,
    table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty {
        padding: 0.75rem 1rem 0.125rem;
    }

    div.dataTables_wrapper div.dataTables_length label,
    div.dataTables_wrapper div.dataTables_filter label {
        margin-bottom: 0;
    }

    @media (max-width: 767px) {
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            -ms-flex-pack: center !important;
            justify-content: center !important;
            margin-top: 1rem;
        }
    }

    .btn-icon {
        background: #fff;
    }

    .btn-icon .bx {
        font-size: 20px;
    }

    .btn .bx {
        vertical-align: middle;
        font-size: 20px;
    }

    .dropdown-menu {
        padding: 0.25rem 0;
    }

    .dropdown-item {
        padding: 0.5rem 1rem;
    }

    .badge {
        padding: 0.5em 0.75em;
    }

    .badge-success-alt {
        background-color: #d7f2c2;
        color: #7bd235;
    }

    .table a {
        color: #212529;
    }

    .table a:hover,
    .table a:focus {
        text-decoration: none;
    }

    table.dataTable {
        margin-top: 12px !important;
    }

    .icon>.bx {
        display: block;
        min-width: 1.5em;
        min-height: 1.5em;
        text-align: center;
        font-size: 1.0625rem;
    }

    .btn {
        font-size: 0.9375rem;
        font-weight: 500;
        padding: 0.5rem 0.75rem;
    }

    .avatar-blue {
        background-color: #c8d9f1;
        color: #467fcf;
    }

    .avatar-pink {
        background-color: #fcd3e1;
        color: #f66d9b;
    }
</style>
<script>
    $(document).ready(function() {
        $("#example").DataTable({
            aaSorting: [],
            responsive: true,

            columnDefs: [{
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 2,
                    targets: -1
                }
            ],

            "bJQueryUI": true,
            "oLanguage": {
                "sProcessing": "Processando...",
                "sLengthMenu": "",
                "sZeroRecords": "Não foram encontrados resultados",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando de 0 até 0 de 0 registros",
                "sInfoFiltered": "",
                "sInfoPostFix": "",
                "sSearch": "",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sPrevious": "<",
                    "sNext": ">",
                    "sLast": "Anterior",

                }
            },
            "dataTables_filter input": "style='display:none;' ",
        });

        $(".dataTables_filter input")
            .attr("placeholder", "...")
            .css({
                width: "300px",
                display: "none"
            });

        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
