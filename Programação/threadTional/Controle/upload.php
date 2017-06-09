<?php

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
?>
