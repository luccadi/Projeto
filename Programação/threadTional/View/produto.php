<?php
if (isset($_GET['produto']) && !empty($_GET['produto'])) {
    include '../Modelo/DB.php';
    $db = new DB();
    $tblName = "produto";
    $conditions['where'] = array('codigoProduto' => $_GET['produto']);
    $conditions['return_type'] = 'single';
    $produto = $db->getRows($tblName, $conditions);

    if ($produto & $produto['status'] == 1) {
        $categoria = 0;
        switch ($produto['categoria']){
            case "Perfumes":
                $categoria = 1;
                break;
            case "Cabelos":
                $categoria = 2;
                break;
            case "Maquiagem":
                $categoria = 3;
                break;
            case "Estética":
                $categoria = 4;
                break;
            
        }
                ?>
        <?php
        include_once 'header.php';
        ?>
        <!-- //navigation -->
        <!-- breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                    <li><a href="produtos.php"><span  aria-hidden="true"></span>Produtos</a></li>
                    <li><a href="categoria.php?categoria=<?php echo $categoria;?>"><span  aria-hidden="true"></span><?php echo $produto['categoria']; ?></a></li>
                    <li class="active"><?php echo $produto['nomeProduto']; ?></li>

                </ol>
            </div>
        </div>
        <!-- //breadcrumbs -->
        <div class="products">
            <div class="container">
                <div class="agileinfo_single">

                    <div class="col-md-4 agileinfo_single_left">
                        <?php
                        $filename = '../../LojaCosmetico/View/imagensProduto/' . $produto['id'];
                        if (file_exists($filename)) {
                            $types = array('png', 'jpg', 'jpeg', 'gif');
                            $path = $filename;
                            $dir = new DirectoryIterator($path);
                            foreach ($dir as $fileInfo) {
                                $ext = strtolower($fileInfo->getExtension());
                                if (in_array($ext, $types)) {
                                    $caminho = $filename . "/" . $fileInfo->getFilename();
                                    echo '<img id="example" src="' . $caminho . '" alt=" " class="img-responsive">';
                                }
                            }
                        } else {
                            echo "NO IMG";
                        }
                        ?>
                    </div>
                    <div class="col-md-8 agileinfo_single_right">
                        <h2><?php echo $produto['nomeProduto']; ?></h2>

                        <div class="w3agile_description">
                            <h4>Descrição :</h4>
                            <p><?php echo $produto['descricao']; ?></p>
                        </div>
                        <div class="snipcart-item block">
                            <div class="snipcart-thumb agileinfo_single_right_snipcart">
                                <h4 class="m-sing">R$ <?php echo $produto['precoVenda']; ?></h4>
                            </div>
                            <?php if ($produto['quantidade'] > 0) { ?>
                                <div class="snipcart-details agileinfo_single_right_details">
                              
                                    
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="business" value="<?php echo $produto['codigoProduto']; ?>">
                                            <input type="hidden" name="item_name" value="<?php echo $produto['nomeProduto']; ?>">
                                            <input type="hidden" name="amount" value="<?php echo number_format($produto['precoVenda'], 2, '.', ''); ?>">
                                            <input type="hidden" name="currency_code" value="BRL">
                                            <input type="hidden" name="return" value=" ">
                                            <input type="hidden" name="cancel_return" value=" ">
                                            <?php if ($produto['quantidade'] > 0) { ?>
                                                <input type="submit" name="submit" value="Adicionar" class="button">
                                            <?php
                                            } else {
                                                echo '<div class=button>Produto Indisponivel</div>';
                                            }
                                            ?>
                                        </fieldset>
                                    </form>
                                </div>
                                <?php
                            } else {
                                echo '  <h4 class="m-sing">Produto Indisponivel!</h4>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- new -->

        <!-- //new -->
        <!-- //footer -->
        <?php
        include_once 'footer.php';
        ?>

        <?php
    } else {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta http-equiv="refresh" content="0;url=index.php">
                <title>Frequência</title>
                <script language="javascript">
                    window.location.href = "index.php"
                </script>
            </head>
            <body>
                Go to <a href="index.php">index.php</a>
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
            <title>Frequência</title>
            <script language="javascript">
                window.location.href = "index.php"
            </script>
        </head>
        <body>
            Go to <a href="index.php">index.php</a>
        </body>
    </html>

    <?php
}
?>