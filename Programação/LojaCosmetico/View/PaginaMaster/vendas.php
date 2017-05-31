<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vendas</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>    <!-- font Awesome -->

        <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
        <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>  
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

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
        <link href="css/panel.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="vendors/datatables/css/select2.css" />
        <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" />
        <link href="css/pages/tables.css" rel="stylesheet" type="text/css" />
        <link href="vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!--select css-->
        <link href="vendors/select2/select2.css" rel="stylesheet" />
        <link rel="stylesheet" href="vendors/select2/select2-bootstrap.css" />
        <!--clock face css-->
        <link href="vendors/iCheck/skins/all.css" rel="stylesheet" />

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
                        <li ><a href="usuario.php">Usuário</a></li>
                        <li ><a href="produto.php">Produto</a></li>
                        <li class="active" ><a href="vendas.php">Vendas</a></li>
                        <li><a href="estoque.php">Estoque</a></li>
                    </ul>
                    <div class="navbar-right">
                        <ul class="nav navbar-nav">

                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="" style="font-color:black;">

                                        <i class="livicon" data-name="user" data-s="18"> Admin</i>

                                        <span>
                                            <i class="caret"></i>
                                        </span>

                                    </div>
                                </a>
                                <ul class="dropdown-menu">


                                    <li role="presentation"></li>
                                    <li>
                                        <a href="#">
                                            <i class="livicon" data-name="gears" data-s="18"></i>
                                            Configurações
                                        </a>
                                    </li>

                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="login.html">
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

                        <div class="btn-group pull-right">

                            <button class="btn btn-default pull-right" id="daterange-btn">
                                <i class="fa fa-calendar"></i>
                                Escolher data de venda
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>


                        <div class="btn-group pull-right">
                            <button class="btn dropdown-toggle btn-green1" data-toggle="dropdown">
                                Filtro
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="#">Mais vendios</a>
                                </li>
                                <li>
                                    <a href="#">Menos vendidos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="sample_editable_1_wrapper">
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
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--livicons-->
        <script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
        <script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
        <script src="js/josh.js" type="text/javascript"></script>
        <script src="js/metisMenu.js" type="text/javascript"></script>
        <script src="vendors/holder-master/holder.js" type="text/javascript"></script>
        <!-- end of global js -->

        <!-- begining of page level js -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="vendors/datatables/select2.min.js"></script>
        <script type="text/javascript" src="vendors/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="vendors/datatables/dataTables.bootstrap.js"></script>


        <!-- date-range-picker -->
        <script src="vendors/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="vendors/select2/select2.js" type="text/javascript"></script>
        <script src="vendors/iCheck/icheck.js" type="text/javascript"></script>
        <script src="vendors/iCheck/demo/js/custom.min.js" type="text/javascript"></script>
        <script src="vendors/autogrow/js/jQuery-autogrow.js" type="text/javascript"></script>
        <script src="vendors/maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
        <script src="vendors/card/jquery.card.js" type="text/javascript"></script>

        <script type="text/javascript">
            /* Brazilian initialisation for the jQuery UI date picker plugin. */
            /* Written by Leonildo Costa Silva (leocsilva@gmail.com). */
     


            $(document).ready(function () {

                $('#sample_editable_1').dataTable({
                      
       
       
                    "language": {

                        "lengthMenu": "_MENU_",
                        "zeroRecords": "Nenhuma venda encontrado",
                        "info": "Mostrar page _PAGE_ de _PAGES_",
                        "infoFilteostrar page _PAGE_ de _PAGES_red": "(filtered from _MAX_ total records)",
                        "sInfoEmpty": "Mostrar 0 de 0",
                        "sSearch": "Pesquisar:",

                    },
                    "bFilter": true
                });

            });
    
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                   ranges: {
                    'Hoje': [moment(), moment()],
                    'Ontem': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Ultimos 7 dias': [moment().subtract('days', 6), moment()],
                    'Ultimos 30 dias': [moment().subtract('days', 29), moment()],
                    'Este mês': [moment().startOf('month'), moment().endOf('month')],
                    'Mês passado': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                locale: {
                    applyLabel: 'Aplicar',
                    cancelLabel: 'Cancelar',
                    fromLabel: 'De',
                    toLabel: 'Para',
                    weekLabel: 'W',
                    customRangeLabel: 'Data customizada'

                },
                startDate: moment().subtract('days', 29),
                endDate: moment()
            },
                    function (start, end) {
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    }
            );

        </script>
        <!-- end of page level js -->
    </body>
</html>


