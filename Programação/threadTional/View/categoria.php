<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include_once 'header.php';
$categoria;
if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
    if ($_GET['categoria'] == 1) {
        $categoria = "Perfumes";
    } else if ($_GET['categoria'] == 2) {
        $categoria = "Cabelos";
    } else if ($_GET['categoria'] == 3) {
        $categoria = "Maquiagem";
    } else if ($_GET['categoria'] == 4) {
        $categoria = "Estética";
    } else {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta http-equiv="refresh" content="0;url=index.php">
                <title>Threadtional</title>
                <script language="javascript">
                    window.location.href = "produtos.php"
                </script>
            </head>
            <body>
                Go to <a href="produtos.php">produtos.php</a>
            </body>
        </html>

        <?php
    }
} else {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="refresh" content="0;url=index.php">
            <title>Threadtional</title>
            <script language="javascript">
                window.location.href = "produtos.php"
            </script>
        </head>
        <body>
            Go to <a href="produtos.php">produtos.php</a>
        </body>
    </html>

    <?php
}
?>

<!-- //navigation -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <?php
            echo '<li><a href="produtos.php">Produtos</a></li>';
            echo '<li>' . $categoria . '</li>';
            ?>

        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!--- products --->
<div class="products">
    <div class="container">
        <div class="col-md-4 products-left">
            <div class="categories">
                <h2>Categorias</h2>
                <ul class="cate">

                    <li><a href="categoria.php?categoria=1"><i class="fa fa-arrow-right" aria-hidden="true"></i>Perfumes</a></li>

                    <li><a href="categoria.php?categoria=2"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cabelos</a></li>
                    <li><a href=categoria.php?categoria=3"><i class="fa fa-arrow-right" aria-hidden="true"></i>Maquiagem</a></li>
                    <li><a href="categoria.php?categoria=4"><i class="fa fa-arrow-right" aria-hidden="true"></i>Estética</a></li>

                </ul>
            </div>																																												
        </div>
        <div class="col-md-8 products-right">

            <?php
            include '../Modelo/DB.php';
            $db = new DB();
            $produto = $db->getRows('produto', array('order_by' => 'nomeProduto ASC'));
            if (!empty($produto)) {
                $count = 0;
                $i = 3;
                foreach ($produto as $prod):

                    if ($prod['status'] != 0 && $prod['categoria'] == $categoria) {
                        $count++;
                        if ($count == 4) {
                            $count = 1;
                        }
                        //  echo $i;
                        if ($count == 1) {
                            echo '<div class="agile_top_brands_grids">';
                        }
                        ?>
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="produto.php?produto=<?php echo $prod["codigoProduto"]; ?>">
                                                        <?php
                                                        $filename = '../../LojaCosmetico/View/imagensProduto/' . $prod['id'];
                                                        if (file_exists($filename)) {
                                                            $types = array('png', 'jpg', 'jpeg', 'gif');
                                                            $path = $filename;
                                                            $dir = new DirectoryIterator($path);
                                                            foreach ($dir as $fileInfo) {
                                                                $ext = strtolower($fileInfo->getExtension());
                                                                if (in_array($ext, $types)) {
                                                                    $caminho = $filename . "/" . $fileInfo->getFilename();
                                                                    echo '<img id="example" src="' . $caminho . '" alt=" " class="snipcart-thumb" width="100" height="100">';
                                                                }
                                                            }
                                                        } else {
                                                            echo "NO IMG";
                                                        }
                                                        ?>

                                                    </a>	
                                                    <a href="produto.php?produto=<?php echo $prod["codigoProduto"]; ?>">

                                                        <p><?php echo $prod['nomeProduto']; ?></p></a>
                                                    <h4>R$ <?php
                                                        echo number_format($prod['precoVenda'], 2, '.', '');
                                                        ?></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="controleCarrinho.php" method="post" id="enviar">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value="<?php echo $produto['codigoProduto']; ?>">
                                                            <input type="hidden" name="item_name" value="<?php echo $prod['nomeProduto']; ?>">
                                                            <input type="hidden" name="amount" value="<?php echo number_format($prod['precoVenda'], 2, '.', ''); ?>">
                                                            <input type="hidden" name="currency_code" value="BRL">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <?php if ($prod['quantidade'] > 0) { ?>
                                                                <input type="submit" name="submit" value="Adiconar" class="button">
                                                                <?php
                                                            } else {
                                                                echo '<div class=button>Produto Indisponivel</div>';
                                                            }
                                                            ?>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($count == 3) {
                            echo '<div class="clearfix"> </div></div>';
                        }
                    }
                endforeach;
                if ($count < 3) {
                    echo '<div class="clearfix"> </div></div>';
                }
            } else {
                ?>
                <div colspan="5">Nenhum produto encontrado ......</div>
            <?php } ?>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--- products --->
<!-- //footer -->
<?php
include_once 'footer.php';
?>