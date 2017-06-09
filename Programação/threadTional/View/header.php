
<?php ?>
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
        <style>
            .badge-notify{
                background:red;
                position:relative;
                top: -20px;
                right: 10px;
            }
            .my-cart-icon-affix {
                position: fixed;
                z-index: 999;
            }
        </style>
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