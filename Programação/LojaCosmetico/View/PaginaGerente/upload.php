<?php

if (isset($_POST['deletarFoto'])) {
    $dir = "../imagensProduto/".$_POST['deletarFoto'];
    $di = new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS);
    $ri = new RecursiveIteratorIterator($di, RecursiveIteratorIterator::CHILD_FIRST);

    foreach ($ri as $file) {
        $file->isDir() ? rmdir($file) : unlink($file);
    }
    exit();
}


if (isset($_POST['getPictures']) && !empty($_POST['getPictures']) && empty($_POST['idFoto'])) {
    $filename = '../imagensProduto/' . $_POST['getPictures'];
    if (file_exists($filename)) {
        $types = array('png', 'jpg', 'jpeg', 'gif');
        $path = $filename;
        $dir = new DirectoryIterator($path);
        foreach ($dir as $fileInfo) {
            $ext = strtolower($fileInfo->getExtension());
            if (in_array($ext, $types)) {
                $caminho = $filename . "/" . $fileInfo->getFilename();
                echo '
                   <tr>
                            <td>
                                <span class="preview"><img src="' . $caminho . '" width="80" height="80"/></span>
                            </td>
                            <td>
                                <p class="name">' . $fileInfo->getFilename() . '</p>
                                <strong class="error text-danger"></strong>
                            </td>

                            <td>
               
                
                            <button class="btn btn-danger cancel" onclick="remove(this); deltarFoto(' . $_POST['getPictures']. ');">
                                <i class="glyphicon glyphicon-trash"></i>
                                <span>Deletar</span>
                            </button>
                
            </td>
        </tr>';
                //echo   '<img src="'.$caminho.'" style="width: 288px; height: 206px;">';
            }
        }
    } else {
        echo "no";
    }
    exit();
}
if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
    //file_put_contents('uploads/post.txt', 'name=' . $_POST['name'] . ',count=' . $_POST['i'] . PHP_EOL, FILE_APPEND);
    // move_uploaded_file($_FILES['file']['tmp_name'], "" . $_FILES['file']['name']);
    $arquivo_tmp = $_FILES['file']['tmp_name'];
    $nome = $_FILES['file']['name'];

    // Pega a extensao
    $extensao = strrchr($nome, '.');

    // Converte a extensao para mimusculo
    $extensao = strtolower($extensao);

    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfilero as extesões permitidas e separo por ';'
    // Isso server apenas para eu poder pesquisar dentro desta String
    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        $novoNome = $_POST['idFoto'] . $extensao;

        // Concatena a pasta com o nome
        $destino = '../imagensProduto/' . $_POST['idFoto'] . "/" . $novoNome;

        // tenta mover o arquivo para o destino
        @move_uploaded_file($arquivo_tmp, $destino);
        $ret = array('status' => 'ok', 'id' => $_POST['idFoto'], 'urlNovo' => $destino);
    } else {
        $ret = array('error' => 'no_file');
    }
} else {
    $ret = array('error' => 'no_file');
}
header('Content-Type: application/json');
echo json_encode($ret);
exit;
?>
