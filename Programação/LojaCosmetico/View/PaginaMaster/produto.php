<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Produto</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>    <!-- font Awesome -->

        <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
        <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>  
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="vendors/datatables/css/select2.css" />

        <link href="css/pages/tables.css" rel="stylesheet" type="text/css" />
        <link href="vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!--select css-->
        <link href="vendors/select2/select2.css" rel="stylesheet" />
        <link rel="stylesheet" href="vendors/select2/select2-bootstrap.css" />
        <!--clock face css-->
        <link href="vendors/iCheck/skins/all.css" rel="stylesheet" />
        <!-- Bootstrap core CSS -->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../dist/css/sticky-footer-navbar.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../assets/js/ie-emulation-modes-warning.js"></script>

        <style type="text/css">

            td{font-size: 15px;}
            .glyphicon-plus{float: right; font-size: 25px;}
            a.glyphicon{text-decoration: none;}
            a.glyphicon-edit{margin-left: 7px; margin-top: 6px; float: start; font-size: 23px;}
            a.glyphicon-trash{margin-left: 6px; margin-top: 6px; font-size: 23px;}
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
        <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" />
        <!--clock face css-->
        <link href="vendors/iCheck/skins/all.css" rel="stylesheet" />
        <link href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />

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
                        <li class="active" ><a href="produto.php">Produto</a></li>
                        <li><a href="vendas.php">Vendas</a></li>
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
                <h1>Produto</h1>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-info filterable">
                    <div class="panel-heading clearfix" style="background-color:#262626;">
                        <h3 class="panel-title pull-left">
                            <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Cadastrar    
                        </h3>
                        <div class="pull-right">
                            <div class="btn-group">
                                <button  class=" btn btn-green" onclick="javascript:$('#addForm').slideToggle();">
                                    Adicionar 
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- <button type="button" class="btn btn-primary btn-sm" id="addButton">Add row</button>
                             <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>-->
                        </div>
                    </div>
                    <div class="panel-body none formData" id="addForm">
                        <form class="form" id="userForm">  
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group" >
                                            <label for="exampleInputName2">Informe o códgo</label>
                                            <input type="text" class="form-control" placeholder="Insira o codigo do produto" id="idProduto" name="idProduto">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName3">Nome do produto</label>
                                            <input type="text" class="form-control"  placeholder="Insira um nome do produto" id="nomeProduto" name="nomeProduto">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName4">Descrição</label>
                                            <input type="text" class="form-control"  placeholder="Insire a descrição" id="cpf" name="cpf">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName5">Quantidade</label>
                                            <input type="number" class="form-control"  placeholder="Quantidade" id="quantidade" name="quantidade">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName6">Preço de compra</label>
                                            <input type="text" class="form-control"  placeholder="Insira o preço de compra" id="precoCompra" name="precoCompra">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName7">Preço de venda</label>
                                            <input type="text" class="form-control"  placeholder="Insira o preço de venda" id="precoVenda" name="precoVenda">

                                        </div>
                                        <div class="form-group">
                                            <label for="validate-select">Categoria</label>
                                            <div class="input-group">
                                                <select class="form-control" name="validate-select" id="validate-select" required="">
                                                    <option value="">Select an item</option>
                                                    <option value="item_1">Item 1</option>
                                                    <option value="item_2">Item 2</option>
                                                    <option value="item_3">Item 3</option>
                                                </select>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputName7">Selecione uma imagem do produto</label>

                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                    <span class="fileinput-filename"></span>
                                                </div>
                                                <span class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">Selecione uma imagem</span>
                                                    <span class="fileinput-exists">Mudar</span>
                                                    <input type="hidden"><input type="file" name="..."></span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="javascript:void(0);" class="btn btn-danger" onclick="$('#addForm').slideUp();">Cancelar</a>
                                            <a href="javascript:void(0);" class="btn btn-green1" onclick="userAction('add')">Adicionar</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-info filterable">
                    <div class="panel-heading clearfix" >
                        <h3 class="panel-title pull-left">
                            <i class="livicon" data-name="search" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Consultar categoria    
                        </h3>
                        <div class="pull-right">
                            <div class="btn-group">
                                <button  class=" btn btn-default" onclick="javascript:$('#consultarCategoria').slideToggle();">
                                    consultar 
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- <button type="button" class="btn btn-primary btn-sm" id="addButton">Add row</button>
                             <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>-->
                        </div>
                    </div>
                    <div class="panel-body none formData" id="consultarCategoria">
                        <div class="portlet box default">
                            <div class="portlet-body">
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                        <button id="sample_editable_1_new" class=" btn btn-custom">
                                            Adicionar novo
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>

                                </div>
                                <div id="sample_editable_1_wrapper" class="">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_editable_1" role="grid">
                                        <thead>
                                            <tr role="row">

                                                <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                    Full Name
                                                    : activate to sort column ascending" style="width: 222px;">Nome</th>

                                                <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                    Edit
                                                    : activate to sort column ascending" style="width: 10px;">Editar</th>
                                                <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                    Delete
                                                    : activate to sort column ascending" style="width: 10px;">Deletar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Permumes</td>

                                                <td>
                                                    <a href="javascript:;" id ="edit" class="glyphicon glyphicon-edit"></a>
                                                </td>
                                                <td>
                                                    <a a href="javascript:;" id ="delete" class="glyphicon glyphicon-trash"></a>                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-info filterable">
                    <div class="panel-heading clearfix" style="background-color:#1bbc9b;">
                        <h3 class="panel-title pull-left">
                            <i class="livicon" data-name="search" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Consultar produto
                        </h3>
                        <div class="pull-right">
                            <div id="sample_editable_1_filter" class="dataTables_filter"><input type="search" class="form-control input-medium input-inline" aria-controls="sample_editable_1"></div>
                            <!-- <button type="button" class="btn btn-primary btn-sm" id="addButton">Add row</button>
                             <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>-->
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="sample_editable_1_wrapper">
                            <table class="table table-striped table-hover" id="tabelaProduto" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1">Código do produto</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Full Name
                                            : activate to sort column ascending">Nome</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Points
                                            : activate to sort column ascending">Quantidade</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Points
                                            : activate to sort column ascending">Preço de venda</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Points
                                            : activate to sort column ascending">Preço de compra</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Edit
                                            : activate to sort column ascending">Editar</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Delete
                                            : activate to sort column ascending">Desativar</th>
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
        <div class="modal fade bs-example-modal-lg" id="adicionarCategoria" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Adicionar Categoria</h4>
                    </div>
                    <div class="modal-body" id="addCategoria">

                        <form class="form" id="addCategoria">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <label for="exampleInputName3">Nome da categoria</label>
                                        <input type="text" class="form-control"  placeholder="Insira uma categoria" id="nomeEditar" name="nomeEditar" required>
                                    </div>

                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">fechar</button>
                        <a href="javascript:void(0);" class="btn btn-success" onclick="userAction('edit')">Adicionar categoria</a>
                    </div>
                    </form>
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
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
                            $(document).ready(function () {
                                $('#tabelaProduto').dataTable({
                                    "language": {

                                        "lengthMenu": "_MENU_",
                                        "zeroRecords": "Nenhum produto encontrado",
                                        "info": "Mostrar page _PAGE_ de _PAGES_",
                                        "infoFilteostrar page _PAGE_ de _PAGES_red": "(filtered from _MAX_ total records)",
                                        "sInfoEmpty": "Mostrar 0 de 0",
                                    },
                                    "bFilter": false
                                });
                            });


                            function categoriaAparecer() {
                                $("#adicionarCategoria").modal("show");
                            }


    </script>    
    <script type="text/javascript" src="vendors/datatables/select2.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
                            jQuery(document).ready(function ()
                            {

                                function restoreRow(oTable, nRow) {
                                    var aData = oTable.fnGetData(nRow);
                                    var jqTds = $('>td', nRow);

                                    for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                                        oTable.fnUpdate(aData[i], nRow, i, false);
                                    }

                                    oTable.fnDraw();
                                }

                                function editRow(oTable, nRow) {
                                    var aData = oTable.fnGetData(nRow);
                                    var jqTds = $('>td', nRow);



                                    jqTds[0].innerHTML = '<input type="text" class="form-control" value="' + aData[0] + '">';
                                    jqTds[1].innerHTML = '<a class="edit" id="edit" href="">Salvar</a>';
                                    jqTds[2].innerHTML = '<a class="cancel" href="">Cancelar</a>';
                                }

                                function saveRow(oTable, nRow) {
                                    var jqInputs = $('input', nRow);
                                    oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);

                                    oTable.fnUpdate('<a href="javascript:;" id ="edit" class="glyphicon glyphicon-edit"></a>', nRow, 1, false);
                                    oTable.fnUpdate('<a a href="javascript:;" id ="delete" class="glyphicon glyphicon-trash"></a>', nRow, 2, false);
                                    oTable.fnDraw();
                                }

                                function cancelEditRow(oTable, nRow) {
                                    var jqInputs = $('input', nRow);
                                    oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                                    oTable.fnUpdate('<a class="edit" href="">Editar</a>', nRow, 1, false);
                                    oTable.fnDraw();
                                }

                                var table = $('#sample_editable_1');

                                var oTable = table.dataTable({

                                    "lengthMenu": [
                                        [5, 15, 20, -1],
                                        [5, 15, 20, "All"] // change per page values here
                                    ],
                                    // set the initial value
                                    "pageLength": 10,

                                    "language": {

                                        "lengthMenu": "_MENU_",
                                        "zeroRecords": "Nenhum usuário encontrado",
                                        "info": "Mostrar page _PAGE_ de _PAGES_",
                                        "infoFilteostrar page _PAGE_ de _PAGES_red": "(filtered from _MAX_ total records)",
                                        "sInfoEmpty": "Mostrar 0 de 0",
                                        "sSearch": "Buscar:"
                                    },
                                    "columnDefs": [{// set default column settings
                                            'orderable': true,
                                            'targets': [0]
                                        }, {
                                            "searchable": true,
                                            "targets": [0]
                                        }],
                                    "order": [
                                        [0, "asc"]
                                    ] // set first column as a default sort by asc
                                });

                                var tableWrapper = $("#sample_editable_1_wrapper");

                                tableWrapper.find(".dataTables_length select").select2({
                                    showSearchInput: false //hide search box with special css class
                                }); // initialize select2 dropdown

                                var nEditing = null;
                                var nNew = false;

                                $('#sample_editable_1_new').click(function (e) {
                                    e.preventDefault();
''
                                    if (nNew && nEditing) {
                                        if (confirm("Linha não salva. Você deseja salvar ?")) {
                                            saveRow(oTable, nEditing); // save
                                            $(nEditing).find("td:first").html("Untitled");
                                            nEditing = null;
                                            nNew = false;

                                        } else {
                                            oTable.fnDeleteRow(nEditing); // cancel
                                            nEditing = null;
                                            nNew = false;

                                            return;
                                        }
                                    }

                                    var aiNew = oTable.fnAddData(['', '', '', '', '', '']);
                                    var nRow = oTable.fnGetNodes(aiNew[0]);
                                    editRow(oTable, nRow);
                                    nEditing = nRow;
                                    nNew = true;
                                });

                                table.on('click', '#delete', function (e) {
                                    e.preventDefault();

                                    if (confirm("Você tem certeza que deseja deletar isso?") == false) {
                                        return;
                                    }

                                    var nRow = $(this).parents('tr')[0];
                                    oTable.fnDeleteRow(nRow);
                                    alert("Deleted! Do not forget to do some ajax to sync with backend :)");
                                });

                                table.on('click', '.cancel', function (e) {
                                    e.preventDefault();

                                    if (nNew) {
                                        oTable.fnDeleteRow(nEditing);
                                        nNew = false;
                                    } else {
                                        restoreRow(oTable, nEditing);
                                        nEditing = null;
                                    }
                                });

                                table.on('click', '#edit', function (e) {
                                    e.preventDefault();

                                    /* Get the row as a parent of the link that was clicked on */
                                    var nRow = $(this).parents('tr')[0];

                                    if (nEditing !== null && nEditing != nRow) {
                                        /* Currently editing - but not this row - restore the old before continuing to edit mode */
                                        restoreRow(oTable, nEditing);
                                        editRow(oTable, nRow);
                                        nEditing = nRow;
                                    } else if (nEditing == nRow && this.innerHTML == "Salvar") {
                                        /* Editing this row and want to save it */
                                        saveRow(oTable, nEditing);
                                        nEditing = null;
                                        alert("Updated! Do not forget to do some ajax to sync with backend :)");
                                    } else {
                                        /* No edit in progress - let's start one */
                                        editRow(oTable, nRow);
                                        nEditing = nRow;
                                    }
                                });
                            });




    </script>

    <!-- end of page level js -->
</body>
</html>


