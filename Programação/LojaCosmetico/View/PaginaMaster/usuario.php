<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuário</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>    <!-- font Awesome -->

        <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
        <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>  

        <link rel="stylesheet" type="text/css" href="vendors/datatables/css/select2.css" />
        <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" />
        <link href="css/pages/tables.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!--select css-->
        <link href="vendors/select2/select2.css" rel="stylesheet" />
        <link rel="stylesheet" href="vendors/select2/select2-bootstrap.css" />
        <!--clock face css-->
        <link href="vendors/iCheck/skins/all.css" rel="stylesheet" />
        <link href="css/pages/formelements.css" rel="stylesheet" />
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
            a.glyphicon-edit{margin-left: 7px; margin-top: 6px; float: start; font-size: 25px;}
            a.glyphicon-remove-circle{margin-left: 6px; margin-top: 6px; font-size: 25px; color: #EF6F6C;}
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

        <!--clock face css-->
        <link href="vendors/iCheck/skins/all.css" rel="stylesheet" />
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
                                                <option value="0"></option>

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
                    <div class="panel-heading clearfix" style="background-color:#1bbc9b;">
                        <h3 class="panel-title pull-left">
                            <i class="livicon" data-name="search" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Consultar
                        </h3>
                        <div class="pull-right">
                            <div id="sample_editable_1_filter" class="dataTables_filter"><input type="search" class="form-control input-medium input-inline" aria-controls="sample_editable_1" id="mySearch" onkeyup="myFunction()"></div>
                            <!-- <button type="button" class="btn btn-primary btn-sm" id="addButton">Add row</button>
                             <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>-->
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="sample_editable_1_wrapper">
                            <table class="table table-striped table-hover" id="sample_editable_1" role="grid">
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
                                            Edit
                                            : activate to sort column ascending">Editar</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                            Delete
                                            : activate to sort column ascending">Desativar</th>
                                    </tr>
                                </thead>
                                <tbody id="userData">
                                    <?php
                                    include '../../Modelo/DB.php';
                                    $db = new DB();
                                    $users = $db->getRows('usuario', array('order_by' => 'codigoFuncional ASC'));
                                    if (!empty($users)): $count = 0;
                                    foreach ($users as $user): $count++;
                               
                                    ?>
                                    <?php      
                                    if ($user['status'] == 0) 
                                        echo '<tr style = "color: red">';
                                    else echo '<tr>'?>
                                  
                                        <td><?php echo $user['codigoFuncional']; ?></td>
                                        <td><?php echo $user['nome']; ?></td>
                                        <td><?php
                                    if ($user['tipoUsuario'] == 1)
                                    echo 'Gerente';
                                    else if ($user['tipoUsuario'] == 2)
                                    echo 'Estoquista';
                                    else
                                    echo ' ';
                                    ?></td>


                                        <td>
                                            <a href="javascript:void(0);" class="glyphicon glyphicon-edit"  onclick="editUser('<?php echo $user['id']; ?>');"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="glyphicon glyphicon-remove-circle"  onclick="$('#delete_confirm_modal').modal('show'); deletar('<?php echo $user['id']; ?>');"></a>
                                        </td>   <!--  <a href="javascript:void(0);" class=" glyphicon glyphicon-calendar" onclick="calendario();"></a>-->



                                    </tr>
                                    <?php
                                    endforeach;
                                    else:
                                    ?>
                                    <tr><td colspan="5">Nenhum usuário encontrado ......</td></tr>
                                    <?php endif; ?>
                                </tbody>
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
                        <div class="modal-body" id="editForm">

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
                                                    <option value="0"></option>

                                                    <option value="1">Gerente</option>
                                                    <option value="2">Estoquista</option>

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
                                                <input type="hidden" class="form-control" name="id" id="idEdit"/>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">fechar</button>
                                    <a href="javascript:void(0);" class="btn btn-success" onclick="userAction('edit')">Atualizar usuário</a>
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


        <script>
                                        /* function calendario(){
                                         $("#modalCalendario").modal("show");
                                         }*/

                                        function getUsers() {
                                            $.ajax({
                                                type: 'POST',
                                                url: '../../Controle/controleUsuario.php',
                                                data: 'action_type=view&' + $("#userForm").serialize(),
                                                success: function (html) {
                                                    $('#userData').html(html);
                                                }
                                            });
                                        }

                                        /*   function getCalendarUsers() {
                                         $.ajax({
                                         type: 'POST',
                                         url: '../../Controle/controleUsuario.php',
                                         data: 'action_type=view&' + $("#userForm").serialize(),
                                         success: function (html) {
                                         $('#userData').html(html);
                                         }
                                         });
                                         }*/

                                        function userAction(type, id) {
                                            id = (typeof id === "undefined") ? '' : id;
                                            var statusArr = {add: "added", edit: "updated", delete: "deleted"};
                                            var userData = '';
                                            if (type === 'add') {
                                                userData = $("#addForm").find('.form').serialize() + '&action_type=' + type + '&id=' + id;
                                            } else if (type === 'edit') {
                                                userData = $("#editForm").find('.form').serialize() + '&action_type=' + type;
                                                $('#editarUsuario').modal('hide');

                                            } else {
                                                userData = 'action_type=' + type + '&id=' + id;
                                            }
                                            $.ajax({
                                                type: 'POST',
                                                url: '../../Controle/controleUsuario.php',
                                                data: userData,
                                                success: function (msg) {
                                                    if (msg == 'ok') {
                                                        $('#modalSucesso').modal('show');
                                                        getUsers();
                                                        $('.form')[0].reset();
                                                        $('.formData').slideUp();
                                                    } else {
                                                        if (msg == "err")
                                                            alert('Algum problema ocorreu, por favor tente de novo.');
                                                        else
                                                        {
                                                            var div = document.getElementById("texto");

                                                            div.innerHTML = msg;
                                                            $("#modalErro").modal("show");
                                                        }
                                                    }
                                                }
                                            });
                                        }
                                        $('#example').dataTable( {

 "aProcessing": true,

 "aServerSide": true,

"ajax": "server-response.php",

} );

                                        function editUser(id) {
                                            $('#editarUsuario').modal('show');
                                            $.ajax({
                                                type: 'POST',
                                                dataType: 'JSON',
                                                url: '../../Controle/controleUsuario.php',
                                                data: 'action_type=data&id=' + id,
                                                success: function (data) {
                                                    $('#idEdit').val(data.id);
                                                    $('#codigoFuncionalEditar').val(data.codigoFuncional);
                                                    $('#nomeEditar').val(data.nome);
                                                    $('#cpfEditar').val(data.cpf);
                                                    $('#enderecoEditar').val(data.endereco);
                                                    $('#contaBancariaEditar').val(data.contaBancaria);
                                                    $('#tipoUsuarioEditar').val(data.tipoUsuario);
                                                    $('#statusEditar').val(data.status);
                                                }
                                            });
                                        }
                                        $('#tabelaHorario').hide();
                                        $('#tabelaHorarioEditar').hide();
                                        function aparecerEditar() {
                                            $('#tabelaHorarioEditar').slideDown('fast');
                                            document.getElementById("tabelaHorarioEditar").style.visibility = "visible";
                                        }

                                        function desaparecerEditar() {
                                            $('#tabelaHorarioEditar').slideUp('fast');
                                            document.getElementById("tabelaHorarioEditar").style.visibility = "hidden";


                                        }
                                        function aparecer() {
                                            $('#tabelaHorario').slideDown('fast');
                                            document.getElementById("tabelaHorario").style.visibility = "visible";
                                        }

                                        function desaparecer() {
                                            $('#tabelaHorario').slideUp('fast');
                                            document.getElementById("tabelaHorario").style.visibility = "hidden";


                                        }
                                        function deletar(e) {
                                            $("#deletarSim").click(function () {
                                                userAction('delete', e);
                                            });

                                        }
                                        function check(radio) {
                                            if (radio === 1) {
                                                $('#escolherEditarSim').prop("checked", true);
                                                aparecerEditar();

                                            } else {
                                                $('#escolherEditarNao').prop("checked", true);
                                                desaparecerEditar();
                                            }

                                        }
        </script>



        <script type="text/javascript">
            function myFunction() {
                // Declare variables 
                var input, filter, table, tr, td, i;
                input = document.getElementById("mySearch");
                filter = input.value.toUpperCase();
                table = document.getElementById("sample_editable_1");
                tr = table.getElementsByTagName("tr");
                td = table.getElementsByTagName("td");

                // Loop through all table rows, and hide those who don't match the search query
                for (i = 0; i < tr.length; i++) {
                    for (i = 0; i < td.length; i++) {

                        td = tr[i].getElementsByTagName("td")[td];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            }
            $(document).ready(function () {
                $('#sample_editable_1').dataTable({
                    
                    "language": {

                        "lengthMenu": "_MENU_",
                        "zeroRecords": "Nenhum usuário encontrado",
                        "info": "Mostrar paginas _PAGE_ de _PAGES_",
                        "infoFilteostrar page _PAGE_ de _PAGES_red": "(filtered from _MAX_ total records)",
                        "sInfoEmpty": "Mostrar 0 de 0",

                    },
                    "bFilter": false
                });
                //   var table = $('#sample_editable_1').DataTable();

                // #myInput is a <input type="text"> element
                /*$('#global_filter').on('keyup', function () {
                 table.search(this.value).draw();
                 });*/

            }
            );

        </script>
        <!-- end of page level js -->
    </body>
</html>
