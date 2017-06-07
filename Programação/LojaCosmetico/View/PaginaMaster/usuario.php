<?php
// esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.


session_start();
if (!empty($_GET["logout"])) {
    session_destroy();
    header('location:../../index.php');
    exit;
}
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:../../index.php');
}

$logado = $_SESSION['login'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuário</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>    <!-- font Awesome -->

        <link href="../elementos/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../elementos/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
        <link href="../elementos/css/metisMenu.css" rel="stylesheet" type="text/css"/>  

        <link rel="stylesheet" type="text/css" href="../elementos/vendors/datatables/css/select2.css" />
        <link href="../elementos/css/pages/tables.css" rel="stylesheet" type="text/css" />
        <link href="../elementos/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../elementos/vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!--select css-->
        <link href="../elementos/vendors/select2/select2.css" rel="stylesheet" />
        <link rel="stylesheet" href="../elementos/vendors/select2/select2-bootstrap.css" />
        <!--clock face css-->
        <link href="../elementos/vendors/iCheck/skins/all.css" rel="stylesheet" />
        <link href="../elementos/css/pages/formelements.css" rel="stylesheet" />
        <!-- Bootstrap core CSS -->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../dist/css/sticky-footer-navbar.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../assets/js/ie-emulation-modes-warning.js"></script>
        <style type="text/css">

            td{font-size: 16px;}
            .glyphicon-plus{float: right; font-size: 25px;}
            a.glyphicon{text-decoration: none;}
            a.glyphicon-edit{margin-left: 6px; margin-top: 6px; float: start; font-size: 25px;}
            a.glyphicon-remove-circle{margin-left: 6px; margin-top: 6px; font-size: 25px; color: #EF6F6C;}
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
        <link rel="stylesheet" type="text/css" href="../elementos/vendors/datatables/css/dataTables.colReorder.min.css" />
        <link rel="stylesheet" type="text/css" href="../elementos/vendors/datatables/css/dataTables.scroller.min.css" />
        <link rel="stylesheet" type="text/css" href="../elementos/vendors/datatables/css/dataTables.bootstrap.css" />
        <link href="../elementos/css/pages/tables.css" rel="stylesheet" type="text/css">

        <!--clock face css-->
        <link href="../elementos/vendors/iCheck/skins/all.css" rel="stylesheet" />
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
                        <li class="active"><a href="usuario.php">Usuário</a></li>
                        <li ><a href="produto.php">Produto</a></li>
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

                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="usuario.php?logout=1">
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
                <h1>Usuário</h1>
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
                                            <label for="exampleInputName2">Informe o registro</label>
                                            <input type="text" class="form-control" placeholder="Insira o registro do funcionário" id="codigoFuncional" name="codigoFuncional" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName3">Nome</label>
                                            <input type="text" class="form-control"  placeholder="Insira um nome" id="nome" name="nome" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName4">CPF</label>
                                            <input type="text" class="form-control"  placeholder="Insira o CPF" id="cpf" name="cpf" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName5">Endereço</label>
                                            <input type="text" class="form-control"  placeholder="Insira o endereço (Fomato ex: Rua Oswaldo Bertolini, 155, Morro Azul, Limeira-SP)" id="endereco" name="endereco" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName6">Conta bancaria</label>
                                            <input type="text" class="form-control"  placeholder="Insira a conta bancaria (Formato ex: nº agencia, nº conta)" id="contaBancaria" name="contaBancaria" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="e1" class="control-label">
                                                Tipo de usuário
                                            </label>
                                            <select class="form-control select2" id="tipoUsuario" name="tipoUsuario" required>
                                                <option value="0">Selecione um tipo de usuário</option>

                                                <option value="1">Gerente</option>
                                                <option value="2">Estoquista</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="e1" class="control-label">
                                                Obs: As senhas são geradas automaticamente e o username é o RF (registro funcional).
                                            </label>

                                        </div>

                                        <div class="form-group">
                                            <a href="javascript:void(0);" class="btn btn-danger" onclick="$('#addForm').slideUp();">Cancelar</a>
                                            <button type="submit" class="btn btn-green1" >Adicionar</button>

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
                    <div class="panel-heading clearfix" style="background-color:#1bbc9b;">
                        <h3 class="panel-title pull-left">
                            <i class="livicon" data-name="search" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Consultar
                        </h3>
                        <div class="pull-right">
                            <!-- <button type="button" class="btn btn-primary btn-sm" id="addButton">Add row</button>
                         <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>-->
                        </div>
                    </div>
                    <div class="panel-body">

                        <div id="sample_editable_1_wrapper" class="">
                            <table class="table table-striped table-hover" id="sample_5">                              
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1">Registro funcioal</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Full Name
                                            : activate to sort column ascending">Nome</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Points
                                            : activate to sort column ascending">Tipo de usuário</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Points
                                            : activate to sort column ascending">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Edit
                                            : activate to sort column ascending">Editar</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Delete
                                            : activate to sort column ascending">Desativar</th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal fade" id="delete_confirm_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body">
                            <p>Você tem certeza que deseja deletar o usuário?</p>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="user_id" value="" />
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Não</button>
                            <button class="btn btn-primary delete" data-dismiss="modal" id="deletarSim">Sim</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bs-example-modal-lg" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Editar usuário</h4>
                        </div>
                        <div class="modal-body" id="editForm1">

                            <form class="form" id="editForm">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="form-group" >
                                                <label for="exampleInputName2">Informe o registro</label>
                                                <input type="text" class="form-control" placeholder="Insira o registro do funcionário" id="codigoFuncionalEditar" name="codigoFuncionalEditar" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName3">Nome</label>
                                                <input type="text" class="form-control"  placeholder="Insira um nome" id="nomeEditar" name="nomeEditar" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName4">CPF</label>
                                                <input type="text" class="form-control"  placeholder="Insira o CPF" id="cpfEditar" name="cpfEditar" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName5">Endereço</label>
                                                <input type="text" class="form-control"  placeholder="Insira o endereço (Fomato ex: Rua Oswaldo Bertolini, 155, Morro Azul, Limeira-SP)" id="enderecoEditar" name="enderecoEditar" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName6">Conta bancaria</label>
                                                <input type="text" class="form-control"  placeholder="Insira a conta bancaria (Formato ex: nº agencia, nº conta)" id="contaBancariaEditar" name="contaBancariaEditar" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="e1" class="control-label">
                                                    Tipo de usuário
                                                </label>
                                                <select class="form-control select2" id="tipoUsuarioEditar" name="tipoUsuarioEditar" required>
                                                    <option value="0">Selecione um tipo de usuário</option>

                                                    <option value="1">Gerente</option>
                                                    <option value="2">Estoquista</option>
                                                    <option value="3">Administrador</option>


                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="e2" class="control-label">
                                                    Status
                                                </label>
                                                <select class="form-control select2" id="statusEditar" name="statusEditar" required>
                                                    <option value="0">Desativado</option>
                                                    <option value="1">Ativo</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="e1" class="control-label">
                                                    Obs: As senhas são geradas automaticamente e o username é o RF (registro funcional).
                                                </label>

                                            </div>

                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="id" id="id"/>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">fechar</button>
                                    <button type="submit" class="btn btn-success">Atualizar usuário</button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalSucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body">
                            <h2>Operação realizada com sucesso.</h2>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id='fecharSucesso'>Ok</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body" id="texto">
                            <h2>Operação realizada com sucesso.</h2>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id='fecharSucesso'>Ok</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalCalendario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body" id="texto">
                            <h2>Operação realizada com sucesso.</h2>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id='fecharSucesso'>Ok</button>

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
        <script type="text/javascript" src="../elementos/vendors/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/dataTables.tableTools.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/dataTables.colReorder.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/dataTables.scroller.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/dataTables.bootstrap.js"></script>



        <script type="text/javascript">
                                                function desativar(id) {

                                                    if ('undefined' != typeof id) {
                                                        $.getJSON('../../Controle/controleUsuario.php?desativar=' + id, function (obj) {
                                                            var tr = $('a[data-id="row-' + id + '"]').parent().parent();
                                                            var status;
                                                            if (obj.status == 1) {
                                                                status = "Ativo";
                                                            } else {
                                                                status = "Desativado";
                                                            }
                                                            $('td:eq(0)', tr).html(obj.codigoFuncional);
                                                            $('td:eq(1)', tr).html(obj.nome);
                                                            var tipoUsuario;
                                                            if (obj.tipoUsuario == 1) {
                                                                tipoUsuario = "Gerente";
                                                            } else if (obj.tipoUsuario == 2) {
                                                                tipoUsuario = "Estoquista";
                                                            } else if (obj.tipoUsuario == 3) {
                                                                tipoUsuario = "Administrador";
                                                            }
                                                            $('td:eq(2)', tr).html(tipoUsuario);
                                                            $('td:eq(3)', tr).html(status);

                                                            $('#editarUsuario').modal('hide');
                                                            var intervalo = window.setInterval(function () {
                                                                $('td', tr).css('color', '#4de34d');
                                                            }, 50);
                                                            window.setTimeout(function () {
                                                                $('td', tr).css('color', '#4de34d');
                                                                if (obj.status == 0)
                                                                {
                                                                    $('td', tr).css('color', '#FF0000');
                                                                } else
                                                                {

                                                                    $('td', tr).css('color', '#000000');


                                                                }
                                                                clearInterval(intervalo);
                                                            }, 2000);


                                                            if (obj.status == 0)
                                                            {
                                                                $('td', tr).css('color', '#FF0000');
                                                            } else
                                                            {

                                                                $('td', tr).css('color', '#000000');


                                                            }
                                                        }).fail(function () {
                                                            var div = document.getElementById("texto");
                                                            div.innerHTML = "Algum problema contante o administrador.";
                                                            $("#modalErro").modal("show");

                                                        });
                                                    } else
                                                        alert('id desconhecido.');
                                                }

                                                function editRow(id) {
                                                    if ('undefined' != typeof id) {
                                                        $.getJSON('../../Controle/controleUsuario.php?edit=' + id, function (obj) {
                                                            $('#id').val(obj.id);
                                                            $('#codigoFuncionalEditar').val(obj.codigoFuncional);
                                                            $('#nomeEditar').val(obj.nome);
                                                            $('#cpfEditar').val(obj.cpf);
                                                            $('#enderecoEditar').val(obj.endereco);
                                                            $('#contaBancariaEditar').val(obj.contaBancaria);
                                                            $('#tipoUsuarioEditar').val(obj.tipoUsuario);
                                                            $('#statusEditar').val(obj.status);

                                                            $('#editarUsuario').modal('show')
                                                        }).fail(function () {
                                                            var div = document.getElementById("texto");
                                                            div.innerHTML = "Algum problema contante o administrador.";
                                                            $("#modalErro").modal("show");

                                                        });
                                                    } else
                                                        alert('id desconhecido.');
                                                }


                                                jQuery(document).ready(function ()
                                                {

                                                    var table = $('#sample_5');
                                                    var oTable = table.dataTable({
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
                                                            url: '../../Controle/controleUsuario.php', // json datasource
                                                            type: "post", // method  , by default get       

                                                        },
                                                        fnRowCallback: function (nRow, data) {
                                                            if (data[3] == "Desativado")
                                                            {
                                                                $('td', nRow).css('color', '#FF0000');
                                                            } else
                                                            {

                                                                $('td', nRow).css('color', '#000000');


                                                            }


                                                        }


                                                    });

                                                    // Save edited row
                                                    $("#editForm").on("submit", function (event) {
                                                        event.preventDefault();
                                                        $.post("../../Controle/controleUsuario.php?edit=" + $('#id').val(), $(this).serialize(), function (data) {
                                                            var obj = $.parseJSON(data);

                                                            var tr = $('a[data-id="row-' + $('#id').val() + '"]').parent().parent();
                                                            var status;
                                                            if (obj.status == 1) {
                                                                status = "Ativo";
                                                            } else {
                                                                status = "Desativado";
                                                            }
                                                            $('td:eq(0)', tr).html(obj.codigoFuncional);
                                                            $('td:eq(1)', tr).html(obj.nome);
                                                            var tipoUsuario;
                                                            if (obj.tipoUsuario == 1) {
                                                                tipoUsuario = "Gerente";
                                                            } else if (obj.tipoUsuario == 2) {
                                                                tipoUsuario = "Estoquista";
                                                            } else if (obj.tipoUsuario == 3) {
                                                                tipoUsuario = "Administrador";
                                                            }
                                                            $('td:eq(2)', tr).html(tipoUsuario);
                                                            $('td:eq(3)', tr).html(status);

                                                            $('#editarUsuario').modal('hide');
                                                            var intervalo = window.setInterval(function () {
                                                                $('td', tr).css('color', '#4de34d');
                                                            }, 50);
                                                            window.setTimeout(function () {
                                                                $('td', tr).css('color', '#4de34d');
                                                                if (obj.status == 0)
                                                                {
                                                                    $('td', tr).css('color', '#FF0000');
                                                                } else
                                                                {

                                                                    $('td', tr).css('color', '#000000');


                                                                }
                                                                clearInterval(intervalo);
                                                            }, 2000);


                                                            if (obj.status == 0)
                                                            {
                                                                $('td', tr).css('color', '#FF0000');
                                                            } else
                                                            {

                                                                $('td', tr).css('color', '#000000');


                                                            }

                                                        }).fail(function (msg) {
                                                            var div = document.getElementById("texto");
                                                            div.innerHTML = msg;
                                                            $("#modalErro").modal("show");
                                                        });
                                                    });

                                                    $("#userForm").on("submit", function (event) {
                                                        event.preventDefault();
                                                        $.post("../../Controle/controleUsuario.php?add", $(this).serialize(), function (data) {
                                                            if (data != '<h2>Usuário já cadastrado!</h2>') {
                                                                var obj = $.parseJSON(data);
                                                                var tipoUsuario = " ";
                                                                if (data.tipoUsuario == 1) {
                                                                    tipoUsuario = "Gerente";
                                                                } else {
                                                                    tipoUsuario = "Estoquista";
                                                                }
                                                                if (data.tipoUsuario == 1) {
                                                                    tipoUsuario = "Gerente";
                                                                } else if (obj.tipoUsuario == 2) {
                                                                    tipoUsuario = "Estoquista";
                                                                } else if (obj.tipoUsuario == 3) {
                                                                    tipoUsuario = "Administrador";
                                                                }


                                                                $('#sample_5 tbody tr:last').after('<tr><td>' + obj.codigoFuncional + '</td><td>'
                                                                        + obj.nome + '</td>' +
                                                                        '<td>' + tipoUsuario +
                                                                        '</td><td>Ativo</td>' +
                                                                        '<td><a data-id="row-' + obj.id + '" href="javascript:editRow(' + obj.id + ');" class="glyphicon glyphicon-edit"></a></td>' +
                                                                        '<td><a href="javascript:desativar(' + obj.id + ');" class="glyphicon glyphicon-remove-circle"></a></td></tr>');
                                                                $('#modalSucesso').modal('show');

                                                            } else {
                                                                var div = document.getElementById("texto");
                                                                div.innerHTML = data;
                                                                $("#modalErro").modal("show");
                                                            }
                                                            $('.form')[0].reset();
                                                            $('.formData').slideUp();

                                                        }).fail(function (msg) {
                                                            $('.form')[0].reset();
                                                            $('.formData').slideUp();
                                                            var div = document.getElementById("texto");
                                                            div.innerHTML = msg;
                                                            $("#modalErro").modal("show");

                                                        });
                                                    });


                                                });

        </script>
        <!-- end of page level js -->
    </body>
</html>