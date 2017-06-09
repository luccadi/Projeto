
<?php 

?>


<!DOCTYPE html>
<html>
    <head>
        <title>THREDITIONAL</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1" content="pt">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <link href="vendors/wizard/jquery-steps/css/wizard.css" rel="stylesheet" >
        <link href="vendors/wizard/jquery-steps/css/jquery.steps.css" rel="stylesheet" >

        <!-- //js -->
        <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <link rel="stylesheet" type="text/css" href="elementos/vendors/datatables/css/dataTables.bootstrap.css" />

        <!-- start-smoth-scrolling -->
    </head>

    <body>
        <!-- header -->
        <div class="agileits_header">
            <div class="container">
                <div class="product_list_header">  
                    <form action="#" method="post" class="last"> 
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>  
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="logo_products">
            <div class="container">
                <div class="w3ls_logo_products_left1">

                </div>
                <div class="w3ls_logo_products_left">
                    <h1><a href="index.php">THREADTIONAL</a></h1>
                </div>
                <div class="w3l_search">
                    <form action="../Controle/controleConsuta.php" method="post">
                        <input type="search" name="Search" placeholder="Pesquisar produtos" required="">
                        <button type="submit" class="btn btn-default search" aria-label="Left Align">
                            <i class="fa fa-search" aria-hidden="true"> </i>
                        </button>
                        <div class="clearfix"></div>
                    </form>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //header -->
        <!-- navigation -->
        <div class="navigation-agileits">
            <div class="container">

                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php" class="act">Home</a></li>	
                            <li><a href="produtos.php">Produtos</a></li>

                            <li><a href="categoria.php?categoria=1">Perfumes</a></li>
                            <li><a href="categoria.php?categoria=2">Cabelos</a></li>
                            <li><a href="categoria.php?categoria=3">Maquiagem</a></li>
                            <li><a href="categoria.php?categoria=4">Estética</a></li>
                            <li><a href="finalizarPedido.php">Finalizar Pedidos</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- //navigation -->
        <!-- breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <ol class="breadcrumb breadcrumb1">
                    <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                    <li class="active">Finalizar pedido</li>
                </ol>
            </div>
        </div>
        <!-- //breadcrumbs -->
        <!-- checkout -->
        <div class="checkout">
            <div class="container">
                <div class="checkout-right">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>Nº Referencia</th>	
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Nome do produto</th>

                                <th>Preço</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tr class="rem1">
                            <td class="invert">10</td>
                            <td class="invert-image"><a href="single.html"><img src="../../LojaCosmetico/View/imagensProduto/10/10.jpg" alt=" " class="img-responsive" style="width: 60px; height: 60px;"/></a></td>
                            <td class="invert">
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value"><span>1</span></div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">PokeFume</td>

                            <td class="invert">R$200.00</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close1"> </div>
                                </div>
                                <script>$(document).ready(function (c) {
                                        $('.close1').on('click', function (c) {
                                            $('.rem1').fadeOut('slow', function (c) {
                                                $('.rem1').remove();
                                            });
                                        });
                                    });
                                </script>
                            </td>
                        </tr>
                    
                        <!--quantity-->
                        <script>
                            $('.value-plus').on('click', function () {
                                var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) + 1;
                                divUpd.text(newVal);
                            });

                            $('.value-minus').on('click', function () {
                                var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) - 1;
                                if (newVal >= 1)
                                    divUpd.text(newVal);
                            });
                        </script>
                        <!--quantity-->
                    </table>
                    <div class="checkout-right-basket">
                        <h3> Total: R$ 200,00</h3>
                    </div>
                </div>
                <div class="checkout-left">	
                 
                    
                    <div class="clearfix"> </div>

                    <div class="clearfix"> </div>
                    <div class="checkout-left">	
                        <h2>Finalizar compras</h2>
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="email" placeholder="Nome" name="nome">
                            </div>
                            <div class="form-group">
                                <label for="">CPF</label>
                                <input type="cpf" class="form-control" id="pwd" placeholder="CPF" name="cpf">
                            </div>
                            <div class="form-group">
                                <label for="">Endereço</label>
                                <input type="text" class="form-control"  placeholder="Insira o endereço (Fomato ex: Rua Oswaldo Bertolini, 155, Morro Azul, Limeira-SP)" id="endereco" name="endereco" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tipo pagamento</label>
                                <select class="form-control" id="tipoPagemento" name="tipoPagemento" required>
                                    <option value="0">Selecione um tipo de pagamento</option>

                                    <option value="1" onclick="$('#cartao').slideUp('slow');">Boleto</option>
                                    <option value="2" onclick="cartao(2);">Cartão</option>

                                </select>
                            </div>
                            <div class="panel panel-warning">
                                <div class="panel-heading default">
                                    <h3 >
                                        Cartão de crédito (Apenas se o tipo de pagamento for cartão)
                                    </h3>   
                                </div>
                                <div class="panel-body" id="cartao" nome="cartao">
                                    <div class="box-body">
                                        <div class="card-wrapper"></div>
                                        <br />
                                        <div id="card">
                                            <form class="form-horizontal">

                                                <div class="form-group">
                                                    <label>Número do cartão </label>
                                                    <input name="number" required type="text" placeholder="" class="form-control" />
                                                </div>

                                                <div class="form-group">
                                                    <label>Nome no Cartão</label>
                                                    <input name="name" type="text" class="form-control" required />

                                                </div>

                                                <div  class="form-group">
                                                    <label>CVV</label>
                                                    <input name="cvc" required type="text" placeholder="" class="form-control" />
                                                </div>

                                                <div  class="form-group">
                                                    <label>Data de vencimento</label>
                                                    <input name="expiry" placeholder="" class="form-control" />
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="pull-right">
                                <button type="submit" class="btn btn-warning">Finalizar compra</button></div>
                        </form>
                    </div></div>
                <div class="clearfix"> </div>

            </div>
        </div>
    </div>

    <!-- //footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <h3>Contato</h3>

                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>

                <div class="col-md-3 w3_footer_grid">
                    <h3>Categoria</h3>
                    <ul class="info"> 
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Perfumes</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Cabelos</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Maquiagem</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Estética</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Perfil</h3>
                    <ul class="info"> 
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="finalizarPedido.php">Finalizar pedidos</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="footer-copy">

            <div class="container">
                <p>© 2017 Loja ThreadTional. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>

    </div>	
    <div class="footer-botm">
        <div class="container">
            <div class="w3layouts-foot">
                <ul>
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- //footer -->	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
                                            $(document).ready(function () {
                                                /*
                                                 var defaults = {
                                                 containerID: 'toTop', // fading element id
                                                 containerHoverID: 'toTopHover', // fading element hover id
                                                 scrollSpeed: 1200,
                                                 easingType: 'linear' 
                                                 };
                                                 */

                                                $().UItoTop({easingType: 'easeOutQuart'});

                                            });
    </script>
    <!-- //here ends scrolling icon -->
    <script src="js/minicart.min.js"></script>
    <script>
    // Mini Cart

                                            paypal.minicart.render({
                                                action: 'controleCarrinho.php'

                                            });

                                            if (~window.location.search.indexOf('reset=true')) {
                                                paypal.minicart.reset();
                                            }
    </script>
    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">

                                            //paypal.minicart.cart.add('<');
                                            //var myTemplate = "<div><%= config.strings.subtotal %> <%= cart.total({ format: true, showCode: true }) %></div>";
                                            paypal.minicart.render();

                                            paypal.minicart.cart.on('checkout', function (evt) {
                                                var items, len, i;

                                                if (this.subtotal() > 0) {
                                                    items = this.items();

                                                    for (i = 0, len = items.length; i < len; i++) {
                                                        items[i].set('shipping', 0);
                                                        items[i].set('shipping2', 0);
                                                    }
                                                }

                                            });
                                            jQuery(document).ready(function () {
                                                $("#enviar").on("submit", function (event) {
                                                    event.preventDefault();
                                                    alert('here');

                                                }
                                                );

                                                jQuery('#demo1').skdslider({'delay': 5000, 'animationSpeed': 2000, 'showNextPrev': true, 'showPlayButton': true, 'autoSlide': true, 'animationType': 'fading'});

                                                jQuery('#responsive').change(function () {
                                                    $('#responsive_wrapper').width(jQuery(this).val());
                                                });

                                            });
    </script>	

    <script src="vendors/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="vendors/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="vendors/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="vendors/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="vendors/select2/select2.js" type="text/javascript"></script>
    <script src="vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script src="vendors/iCheck/demo/js/custom.min.js" type="text/javascript"></script>
    <script src="vendors/autogrow/js/jQuery-autogrow.js" type="text/javascript"></script>
    <script src="vendors/maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="vendors/card/jquery.card.js" type="text/javascript"></script>
    <script src="js/pages/formelements.js" type="text/javascript"></script>
    <!-- //main slider-banner --> 
</body>
</html>