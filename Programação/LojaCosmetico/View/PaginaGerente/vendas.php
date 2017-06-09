<?php
// esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.
session_start();

if (!empty($_GET["logout"])) {
    session_destroy();
    header('location:../../index.php');
    exit;
}
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true) && $_SESSION['tipoUsuario'] !=1) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    unset($_SESSION['tipoUsuario']);
    header('location:../../index.php');
}

$logado = $_SESSION['login'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vendas</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>    <!-- font Awesome -->

        <link href="../elementos/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../elementos/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
        <link href="../elementos/css/metisMenu.css" rel="stylesheet" type="text/css"/>  
        <!-- Bootstrap core CSS -->
        <link href="../elementos/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../dist/css/sticky-footer-navbar.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../assets/js/ie-emulation-modes-warning.js"></script>
        <style type="text/css">

            td{font-size: 18px;}
            .glyphicon-plus{float: right; font-size: 25px;}
            a.glyphicon{text-decoration: none;}
            a.glyphicon-edit{margin-left: 7px; margin-top: 6px; float: start; font-size: 25px;}
            a.glyphicon-trash{margin-left: 6px; margin-top: 6px; font-size: 25px;}
            a.glyphicon-calendar{margin-left: 7px; margin-top: 6px; font-size: 25px;}
            .none{display: none;}
            .back-to-top {
                cursor: pointer;
                position: fixed;
                bottom: 30px;
                right: 30px;
                display: none;
                border-radius: 50%;
                padding: 15px;
                font-size: 10px;
                opacity: 0.7;
                border: 1px solid #0FF;
                z-index: 9999;
            }
            .nav_icons ul {
                margin: 0;
                padding-left: 29px;
                padding-top: 10px;
            }

            .nav_icons li {
                float: left;
                list-style: none;
                cursor: pointer;
                padding: 5px 9px;
            }
        </style>
        <link href="../elementos/css/panel.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../elementos/vendors/datatables/css/select2.css" />
        <link rel="stylesheet" type="text/css" href="../elementos/vendors/datatables/css/dataTables.bootstrap.css" />
        <link href="../elementos/css/pages/tables.css" rel="stylesheet" type="text/css" />
        <link href="../elementos/vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!--select css-->
        <link href="../elementos/vendors/select2/select2.css" rel="stylesheet" />
        <link rel="stylesheet" href="../elementos/vendors/select2/select2-bootstrap.css" />
        <!--clock face css-->
        <link href="../elementos/vendors/iCheck/skins/all.css" rel="stylesheet" />

        <!--end of page level css-->

        <!--end of page level css-->
    </head>

    <body style="background-color: #ebebeb;">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" >
                        <li ><a href="produto.php">Produto</a></li>
                        <li class="active" ><a href="vendas.php">Vendas</a></li>
                        <li><a href="estoque.php">Estoque</a></li>
                    </ul>
                    <div class="navbar-right">
                        <ul class="nav navbar-nav">

                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="" style="font-color:black;">

                                        <i class="livicon" data-name="user" data-s="18">Gerente</i>

                                        <span>
                                            <i class="caret"></i>
                                        </span>

                                    </div>
                                </a>
                                <ul class="dropdown-menu">

                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="vendas.php?logout=1">
                                                <i class="livicon" data-name="sign-out" data-s="18"></i>
                                                Sair
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            <div class="page-header">
                <h1>Vendas</h1>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-info filterable">
                    <div class="panel-heading clearfix" style="background-color:#262626;">
                        <h3 class="panel-title pull-left">
                            <i class="livicon" data-name="search" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Consultar
                        </h3>

                    </div>

                    <div class="panel-body">
                        <div class="portlet-body">

                            <div id="sample_editable_1_wrapper" class="">
                                <table class="table table-striped table-hover" id="sample_editable_1" role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1">Código de venda</th>
                                            <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                Full Name
                                                : activate to sort column ascending">Codigo do produto</th>
                                            <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                Points
                                                : activate to sort column ascending">Quantidade vendida</th>
                                            <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                Points
                                                : activate to sort column ascending">Preço das venda</th>
                                            <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                Points
                                                : activate to sort column ascending">Data da venda</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <footer class="footer" style="background-color:#262626;">
            <h3 style="text-align: center;  color: white;">Powered by US</h3>
        </footer>




        <!-- ./wrapper -->
        <a id="back-to-top" href="#" class="btn btn-green1 btn-lg back-to-top" role="button" data-toggle="tooltip" data-placement="left">
            <i class="livicon" data-name="angle-double-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
        </a>
        <!-- global js -->
        <script src="../dist/js/jquery-3.1.1.min.js"></script>
        <script src="../elementos/js/bootstrap.min.js" type="text/javascript"></script>
        <!--livicons-->
        <script src="../elementos/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
        <script src="../elementos/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
        <script src="../elementos/js/josh.js" type="text/javascript"></script>
        <script src="../elementos/js/metisMenu.js" type="text/javascript"></script>
        <script src="../elementos/vendors/holder-master/holder.js" type="text/javascript"></script>
        <!-- end of global js -->

        <!-- begining of page level js -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="../elementos/vendors/datatables/select2.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/dataTables.bootstrap.js"></script>


        <!-- date-range-picker -->
        <script src="../elementos/vendors/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="../elementos/vendors/select2/select2.js" type="text/javascript"></script>
        <script src="../elementos/vendors/iCheck/icheck.js" type="text/javascript"></script>
        <script src="../elementos/vendors/iCheck/demo/js/custom.min.js" type="text/javascript"></script>
        <script src="../elementos/vendors/autogrow/js/jQuery-autogrow.js" type="text/javascript"></script>
        <script src="../elementos/vendors/maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
        <script src="../elementos/vendors/card/jquery.card.js" type="text/javascript"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="../elementos/vendors/datatables/select2.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/dataTables.bootstrap.js"></script>

        <script type="text/javascript">
            /* Brazilian initialisation for the jQuery UI date picker plugin. */
            /* Written by Leonildo Costa Silva (leocsilva@gmail.com). */

            $(document).ready(function () {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("yyyy-mm", {
                    "placeholder": "yyyy-mm"
                });
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("yyyy-mm", {
                    "placeholder": "yyyy-mm"
                });


                $('#sample_editable_1').dataTable({
                    "language": {
                        "sProcessing": "Processando...",
                        "sLengthMenu": "Mostrar _MENU_ registros.",
                        "sZeroRecords": "Nenhum resultado encontrado.",
                        "sEmptyTable": "Nenhum dado disponivel nessa tabela.",
                        "sInfo": "Mostrando registros de _START_ até _END_ de um total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros de 0 até 0 de um total de 0 registros",
                        "sInfoFiltered": "(filtrado de um total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Pesquisar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Carregando...",
                        /*"oPaginate": {
                         "sFirst": "Primeiro",
                         "sLast": "Ultimo",
                         "sNext": "Seguinte",
                         "sPrevious": "Anterior"
                         },*/
                        "oAria": {
                            "sSortAscending": ": Ative para ordenar a tabela em ordem crescente",
                            "sSortDescending": ": Ative para ordenar a tabela em ordem decrecente"
                        }

                    },
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                        url: '../../Controle/controleVendas.php', // json datasource
                        type: "post" // method  , by default get       

                    }
                });

            });



        </script>
        <script src="../elementos/vendors/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="../elementos/vendors/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="../elementos/vendors/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- end of page level js -->
    </body>
</html>


