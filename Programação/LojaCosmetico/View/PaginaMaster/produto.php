
<?php
// esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.


session_start();
if (!empty($_GET["logout"])) {
    session_destroy();
    header('location:../../index.php');
    exit;
}
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true) && $_SESSION['tipoUsuario'] != 3) {
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
        <title>Produto</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>    <!-- font Awesome -->

        <link href="../elementos/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../elementos/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
        <link href="../elementos/css/metisMenu.css" rel="stylesheet" type="text/css"/>  
        <link href="../elementos/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="../elementos/vendors/datatables/css/select2.css" />

        <link href="../elementos/css/pages/tables.css" rel="stylesheet" type="text/css" />
        <link href="../elementos/vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!--select css-->
        <link href="../elementos/vendors/select2/select2.css" rel="stylesheet" />
        <link rel="stylesheet" href="../elementos/vendors/select2/select2-bootstrap.css" />
        <!--clock face css-->
        <link href="../elementos/vendors/iCheck/skins/all.css" rel="stylesheet" />
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
            a.glyphicon-edit{font-size: 25px;}
            a.glyphicon-remove-circle{ font-size: 25px; color: #EF6F6C;}
            a.glyphicon-picture{ font-size: 25px; color: #1bbc9b;}            
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
        <link rel="stylesheet" type="text/css" href="../elementos/vendors/datatables/css/dataTables.bootstrap.css" />
        <!--clock face css-->
        <link href="../elementos/vendors/iCheck/skins/all.css" rel="stylesheet" />
        <link href="../elementos/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
        <link href="../elementos/vendors/touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" media="all" />

        <link rel="stylesheet" href="../gh-fork-ribbon.css" />

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

                                        <i class="livicon" data-name="user" data-s="18">Admin</i>

                                        <span>
                                            <i class="caret"></i>
                                        </span>

                                    </div>
                                </a>
                                <ul class="dropdown-menu">



                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="produto.php?logout=1">
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
                        <form class="form" id="produtoadd">  
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group" >
                                            <label for="exampleInputName2">Informe o código de barras</label>
                                            <input type="text" class="form-control" placeholder="Insira o codigo do produto" id="codigoProduto" name="codigoProduto" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName3">Nome do produto</label>
                                            <input type="text" class="form-control"  placeholder="Insira um nome do produto" id="nomeProduto" name="nomeProduto" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName4">Descrição</label>
                                            <input type="text" class="form-control"  placeholder="Insire a descrição" id="descricao" name="descricao"required>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName5">Quantidade</label>
                                            <input class="form-control"  placeholder="Quantidade" id="quantidade" name="quantidade" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName6">Preço de compra</label>
                                            <input type="text" class="form-control"  placeholder="Insira o preço de compra" id="precoCompra"  name="precoCompra" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName7">Preço de venda</label>
                                            <input type="text" class="form-control"  placeholder="Insira o preço de venda" id="precoVenda" name="precoVenda" required>

                                        </div>

                                        <div class="form-group">
                                            <label for="validate-select">Categoria</label>
                                            <select class="form-control select2" id="categoria" name="categoria" required>
                                                <option value="">Selecione uma Categoria</option>
                                                <option value="Cabelos">Cabelos</option>
                                                <option value="Maquiagem">Maquiagem</option>
                                                <option value="Estética">Estética</option>    
                                                <option value="Perfumes">Perfumes</option> 

                                            </select>
                                        </div>
                                        <!--
                                                                                <div class="form-group">
                                                                                    <label for="validate-select">Categoria</label>
                                                                                    <div class="input-group">
                                                                                        <select class="form-control" name="validate-select" id="validate-select" required="">
                                                                                            <option value="">Selecione uma Categoria</option>
                                                                                            <option value="Cabelos">Cabelos</option>
                                                                                            <option value="Maquiagem">Maquiagem</option>
                                                                                            <option value="Estética">Estética</option>    
                                                                                            <option value="Perfumes">Perfumes</option>    
                                        
                                                                                        </select>
                                                                                        <span class="input-group-addon danger">
                                                                                            <span class="glyphicon glyphicon-plus"></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>-->




                                        <div class="form-group">
                                            <a href="javascript:void(0);" class="btn btn-danger" onclick="$('#addForm').slideUp();">Cancelar</a>
                                            <button href="javascript:void(0);" class="btn btn-green1" type="submit">Adicionar</button>
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
                            Consultar produto
                        </h3>

                    </div>
                    <div class="panel-body">
                        <div id="sample_editable_1_wrapper">
                            <table class="table table-striped table-hover" id="tabelaProduto" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1"style="width: 65px;">Código do produto</th>
                                        <th class="sorting" tabindex="2" aria-controls="sample_editable_1" rowspan="1" colspan="1">Nome</th>
                                        <th class="sorting" tabindex="3" aria-controls="sample_editable_1" rowspan="1" colspan="1">Quantidade</th>

                                        <th class="sorting" tabindex="4" aria-controls="sample_editable_1" rowspan="1" colspan="1" >Status</th>
                                        <th class="sorting" tabindex="5" aria-controls="sample_editable_1" rowspan="1" colspan="1"style="width: 65px;" >Editar</th>
                                        <th class="sorting" tabindex="6" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 65px;">Desativar</th>
                                        <th class="sorting" tabindex="7" aria-controls="sample_editable_1" rowspan="1" colspan="1"style="width:100px;">Imagem</th>
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
        <div class="modal fade bs-example-modal-lg" id="adiconarImagem" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Adicionar Imagem</h4>
                    </div>

                    <div class="panel-body" id="adiconarImagem">
                        <form action="upload.php" method="post" id="upload" class="form">

                            <div class="col-lg-10">
                                <div class="form-group" >


                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                            <span class="fileinput-filename"></span>
                                        </div>
                                        <span class="input-group-addon btn btn-default btn-file">
                                            <span class="fileinput-new">Selecione arquivo</span>
                                            <span class="fileinput-exists">Mudar</span>
                                            <input type="hidden"><input type="file" name="file" id="file" accept="image/*" /></span>
                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                                    </div>

                                    <input type="hidden" name="idFoto" id="idFoto"/>
                                    <button type="submit" value="Enviar"class="btn btn-primary start">
                                        <i class="glyphicon glyphicon-upload"></i>
                                        <span>Enviar</span>

                                    </button>
                                </div>

                            </div>    
                        </form>
                        <div id="preview"></div>

                        <div class="col-lg-10">
                            <div class="form-group" >
                                <table class="table table-striped table-hover" id="tabelaImagem" role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1"style="width: 100px;">Imagem</th>
                                            <th class="sorting" tabindex="2" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 100px;">Nome</th>
                                            <th class="sorting" tabindex="3" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 70px;">Deletar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabelaImagemBody">

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>





                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" id="editarProduto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Editar Produto</h4>
                    </div>
                    <div class="modal-body" id="editForm1">
                        <form class="form" id="produtoedit">  
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group" >
                                            <label for="exampleInputName2">Informe o código de barras</label>
                                            <input type="text" class="form-control" placeholder="Insira o codigo do produto" id="codigoProdutoEditar" name="codigoProdutoEditar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName3">Nome do produto</label>
                                            <input type="text" class="form-control"  placeholder="Insira um nome do produto" id="nomeProdutoEditar" name="nomeProdutoEditar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName4">Descrição</label>
                                            <input type="text" class="form-control"  placeholder="Insire a descrição" id="descricaoEditar" name="descricaoEditar"required>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName5">Quantidade</label>
                                            <input class="form-control"  placeholder="Quantidade" id="quantidadeEditar" name="quantidadeEditar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName6">Preço de compra</label>
                                            <input type="text" class="form-control"  placeholder="Insira o preço de compra" id="precoCompraEditar"  name="precoCompraEditar" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName7">Preço de venda</label>
                                            <input type="text" class="form-control"  placeholder="Insira o preço de venda" id="precoVendaEditar" name="precoVendaEditar" required>

                                        </div>

                                        <div class="form-group">
                                            <label for="validate-select">Categoria</label>
                                            <select class="form-control select2" id="categoriaEditar" name="categoriaEditar" required>
                                                <option value="">Selecione uma Categoria</option>
                                                <option value="Cabelos">Cabelos</option>
                                                <option value="Maquiagem">Maquiagem</option>
                                                <option value="Estética">Estética</option>    
                                                <option value="Perfumes">Perfumes</option> 

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="e2" class="control-label">
                                                Status
                                            </label>
                                            <select class="form-control select2" id="status" name="status" required>
                                                <option value="0">Desativado</option>
                                                <option value="1">Ativo</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="id" id="id"/>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">fechar</button>
                                <button type="submit" class="btn btn-success">Atualizar produto</button>

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
        <script src="../dist/js/jquery-3.1.1.min.js"></script>
        <script src="../elementos/js/bootstrap.min.js" type="text/javascript"></script>
        <!--livicons-->
        <script src="../elementos/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
        <script src="../elementos/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
        <script src="../elementos/js/josh.js" type="text/javascript"></script>
        <script src="../elementos/js/metisMenu.js" type="text/javascript"></script>
        <script src="../elementos/vendors/holder-master/holder.js" type="text/javascript"></script>
        <script src="../elementos/vendors/touchspin/dist/jquery.bootstrap-touchspin.js"></script>


        <script src="../elementos/vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>

        <script type="text/javascript">

                                                $("input[name='quantidade']").TouchSpin({
                                                    verticalbuttons: true,
                                                    min: 0,
                                                    max: 1000000000,
                                                });
                                                $("input[name='precoVendaEditar']").TouchSpin({
                                                    min: 0,
                                                    max: 1000000000,
                                                    step: 0.01,
                                                    decimals: 2,
                                                    boostat: 5,
                                                    maxboostedstep: 10000000,
                                                    prefix: 'R$'
                                                });
                                                $("input[name='precoCompraEditar']").TouchSpin({
                                                    min: 0,
                                                    max: 1000000000,
                                                    step: 0.01,
                                                    decimals: 2,
                                                    boostat: 5,
                                                    maxboostedstep: 10000000,
                                                    prefix: 'R$'
                                                });
                                                $("input[name='quantidadeEditar']").TouchSpin({
                                                    verticalbuttons: true,
                                                    min: 0,
                                                    max: 1000000000,
                                                });
                                                $("input[name='precoVenda']").TouchSpin({
                                                    min: 0,
                                                    max: 1000000000,
                                                    step: 0.01,
                                                    decimals: 2,
                                                    boostat: 5,
                                                    maxboostedstep: 10000000,
                                                    prefix: 'R$'
                                                });
                                                $("input[name='precoCompra']").TouchSpin({
                                                    min: 0,
                                                    max: 1000000000,
                                                    step: 0.01,
                                                    decimals: 2,
                                                    boostat: 5,
                                                    maxboostedstep: 10000000,
                                                    prefix: 'R$'
                                                });
        </script>
        <script type="text/javascript" src="../elementos/vendors/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/dataTables.tableTools.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/dataTables.colReorder.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/dataTables.scroller.min.js"></script>
        <script type="text/javascript" src="../elementos/vendors/datatables/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
                                                var $formUpload = document.getElementById('upload'),
                                                        $preview = document.getElementById('preview'),
                                                        i = 0;

                                                $formUpload.addEventListener('submit', function (event) {
                                                    event.preventDefault();

                                                    var xhr = new XMLHttpRequest();

                                                    xhr.open("POST", $formUpload.getAttribute('action'));

                                                    var formData = new FormData($formUpload);
                                                    formData.append("i", i++);
                                                    xhr.send(formData);

                                                    xhr.addEventListener('readystatechange', function () {
                                                        if (xhr.readyState === 4 && xhr.status == 200) {
                                                            var json = JSON.parse(xhr.responseText);

                                                            if (!json.error && json.status === 'ok') {
                                                                alert('Eviado!!');
                                                                addFoto(json.id);
                                                            } else {
                                                                alert('Arquivo não enviado');
                                                            }

                                                        }
                                                    });

                                                    xhr.upload.addEventListener("progress", function (e) {
                                                        if (e.lengthComputable) {
                                                            var percentage = Math.round((e.loaded * 100) / e.total);
                                                            $preview.innerHTML = String(percentage) + '%';
                                                        }
                                                    }, false);

                                                    xhr.upload.addEventListener("load", function (e) {
                                                        $preview.innerHTML = String(100) + '%';

                                                    }, false);

                                                }, false);



        </script>
        <script type="text/javascript">

            (function ($) {
                remove = function (item) {
                    var tr = $(item).closest('tr');

                    tr.fadeOut(400, function () {
                        tr.remove();
                    });

                    return false;
                }


            })(jQuery);
            function addFoto(id) {
                $('#adiconarImagem').modal('show');
                $('#idFoto').val(id);

                $.ajax({
                    type: 'POST',
                    url: 'upload.php',
                    data: 'getPictures=' + id,
                    success: function (html) {
                        $('#tabelaImagemBody').html(html);
                    }
                });

            }
            function deltarFoto(id) {
                $.ajax({
                    type: 'POST',
                    url: 'upload.php',
                    data: 'deletarFoto=' + id
                });

            }

            function desativar(id) {

                if ('undefined' != typeof id) {
                    $.getJSON('../../Controle/controleProduto.php?desativar=' + id, function (obj) {
                        var tr = $('a[data-id="row-' + id + '"]').parent().parent();
                        var status;
                        if (obj.status == 1) {
                            status = "Ativo";
                        } else {
                            status = "Desativado";
                        }
                        $('td:eq(0)', tr).html(obj.codigoProduto);
                        $('td:eq(1)', tr).html(obj.nomeProduto);
                        $('td:eq(2)', tr).html(obj.quantidade);
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
                    $.getJSON('../../Controle/controleProduto.php?edit=' + id, function (obj) {
                        $('#id').val(obj.id);
                        $('#codigoProdutoEditar').val(obj.codigoProduto);
                        $('#nomeProdutoEditar').val(obj.nomeProduto);
                        $('#descricaoEditar').val(obj.descricao);
                        $('#quantidadeEditar').val(obj.quantidade);
                        $('#precoCompraEditar').val(obj.precoCompra);
                        $('#precoVendaEditar').val(obj.precoVenda);
                        $('#categoriaEditar').val(obj.categoria);
                        $('#status').val(obj.status);

                        $('#editarProduto').modal('show');
                    }).fail(function () {
                        var div = document.getElementById("texto");
                        div.innerHTML = "Algum problema contante o administrador.";
                        $("#modalErro").modal("show");

                    });
                } else
                    alert('id desconhecido.');
            }

            $(document).ready(function () {
                $('#tabelaProduto').dataTable({
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
                        url: '../../Controle/controleProduto.php', // json datasource
                        type: "post" // method  , by default get       

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
                $("#produtoedit").on("submit", function (event) {
                    event.preventDefault();
                    $.post("../../Controle/controleProduto.php?edit=" + $('#id').val(), $(this).serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        if (obj != '<h2>Produto já cadastrado!</h2>') {
                            var tr = $('a[data-id="row-' + $('#id').val() + '"]').parent().parent();
                            var status;
                            if (obj.status == 1) {
                                status = "Ativo";
                            } else {
                                status = "Desativado";
                            }
                            $('td:eq(0)', tr).html(obj.codigoProduto);
                            $('td:eq(1)', tr).html(obj.nomeProduto);

                            $('td:eq(2)', tr).html(obj.quantidade);
                            $('td:eq(3)', tr).html(status);

                            $('#editarProduto').modal('hide');
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
                        } else {
                            var div = document.getElementById("texto");
                            div.innerHTML = obj;
                            $("#modalErro").modal("show");
                        }
                    }).fail(function (msg) {
                        var div = document.getElementById("texto");
                        div.innerHTML = msg;
                        $("#modalErro").modal("show");
                    });
                });



                $("#produtoadd").on("submit", function (event) {
                    event.preventDefault();
                    $.post("../../Controle/controleProduto.php?add", $(this).serialize(), function (data) {
                        if (data != '<h2>Usuário já cadastrado!</h2>' && data != '<h2>Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.</h2>' && data != '<h2>Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"</h2>' && data != 'Você não enviou nenhum arquivo!') {
                            var obj = $.parseJSON(data);

                            $('#tabelaProduto tbody tr:last').after('<tr><td>' + obj.codigoProduto + '</td><td>'
                                    + obj.nomeProduto + '</td>' +
                                    '<td>' + obj.quantidade + '</td>' +
                                    '<td>Ativo</td>' +
                                    '<td><a data-id="row-' + obj.id + '" href="javascript:editRow(' + obj.id + ');" class="glyphicon glyphicon-edit"></a></td>' +
                                    '<td><a href="javascript:desativar(' + obj.id + ');" class="glyphicon glyphicon-remove-circle"></a></td>'
                                    + '<td><a href="javascript:addFoto(' + obj.id + ');" class="glyphicon glyphicon glyphicon-picture"></a></td></tr>');
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
                }
                );


            });



        </script>    




        <!-- end of page level js -->
    </body>
</html>