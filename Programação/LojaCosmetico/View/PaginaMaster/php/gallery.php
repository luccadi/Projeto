<?php
$page = 'gallery';
$title = 'Gallery';
$css = <<<EOT
<!--page level css -->
<!-- Add fancyBox main CSS files -->
<link rel="stylesheet" type="text/css" href="../vendors/gallery/basic/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="../vendors/gallery/basic/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="../vendors/gallery/basic/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<!--page level css end-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <section class="content-header">
        <h1>Gallery</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Gallery</a>
            </li>
            <li class="active">
                <a href="#">Gallery</a>
            </li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary tabtop">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <i class="livicon" data-name="image" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Gallery
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1" data-toggle="tab">
                                            Basic Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_2" data-toggle="tab">
                                            Standard Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_3" data-toggle="tab">
                                            Button Helper
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_4" data-toggle="tab">
                                            Thubnail Helper
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active gallery-padding" id="tab_1">
                                        <div class="col-md-12">
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-b" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-c" href="../img/img_holder/400-x-699.jpg" title="Click on popup for exit">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-effects-a" href="../img/img_holder/400-x-699.jpg" title="Click aside to exit popup">
                                                    <img data-src="holder.js/241x241/#418bca:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /basic gallery -->
                                    <div class="tab-pane gallery-padding" id="tab_2">
                                        <div class="col-md-12">
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 1">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 2">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 3">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 4">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 4">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 1">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 2">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 3">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 4">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 4">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 1">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 ol-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 2">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 3">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 4">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 4">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 1">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 2">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 3">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 4">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox" href="../img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Image Title 4">
                                                    <img data-src="holder.js/241x241/#00bc8c:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /standard gallery -->
                                    <div class="tab-pane gallery-padding" id="tab_3">
                                        <div class="col-md-12">
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-buttons" data-fancybox-group="button" href="../img/img_holder/400-x-699-sky.jpg">
                                                    <img data-src="holder.js/241x241/#5bc0de:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /button helper gallery -->
                                    <div class="tab-pane gallery-padding" id="tab_4">
                                        <div class="col-md-12">
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-xs-6 col-sm-3 gallery-border">
                                                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="../img/img_holder/400-x-699-orange.jpg">
                                                    <img data-src="holder.js/241x241/#F89A14:#fff" class="img-responsive gallery-style" alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /thumnail helper gallery --> </div>
                                <!-- /.tab-content --> </div>
                            <!-- nav-tabs-custom --> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row--> </section>
</aside>

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="../vendors/gallery/basic/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
<script type="text/javascript" src="../vendors/gallery/basic/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="../vendors/gallery/basic/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="../vendors/gallery/basic/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="../vendors/gallery/basic/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.fancybox').fancybox();
        // Change title type, overlay closing speed
        $(".fancybox-effects-a").fancybox({
            helpers: {
                title: {
                    type: 'outside'
                },
                overlay: {
                    speedOut: 0
                }
            }
        });
        // Disable opening and closing animations, change title type
        $(".fancybox-effects-b").fancybox({
            openEffect: 'none',
            closeEffect: 'none',

            helpers: {
                title: {
                    type: 'over'
                }
            }
        });
        // Set custom style, close if clicked, change title type and overlay color
        $(".fancybox-effects-c").fancybox({
            wrapCSS: 'fancybox-custom',
            closeClick: true,
            openEffect: 'none',

            helpers: {
                title: {
                    type: 'inside'
                },
                overlay: {
                    css: {
                        'background': 'rgba(238,238,238,0.85)'
                    }
                }
            }
        });
        // Remove padding, set opening and closing animations, close if clicked and disable overlay
        $(".fancybox-effects-d").fancybox({
            padding: 0,

            openEffect: 'elastic',
            openSpeed: 150,

            closeEffect: 'elastic',
            closeSpeed: 150,

            closeClick: true,

            helpers: {
                overlay: null
            }
        });
        /*
         *  Button helper. Disable animations, hide close button, change title type and content
         */
        $('.fancybox-buttons').fancybox({
            openEffect: 'none',
            closeEffect: 'none',

            prevEffect: 'none',
            nextEffect: 'none',

            closeBtn: false,

            helpers: {
                title: {
                    type: 'inside'
                },
                buttons: {}
            },

            afterLoad: function() {
                this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
            }
        });
        /*
         *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
         */
        $('.fancybox-thumbs').fancybox({
            prevEffect: 'none',
            nextEffect: 'none',

            closeBtn: false,
            arrows: false,
            nextClick: true,

            helpers: {
                thumbs: {
                    width: 50,
                    height: 50
                }
            }
        });
        /*
         *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
         */
        $('.fancybox-media')
            .attr('rel', 'media-gallery')
            .fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                prevEffect: 'none',
                nextEffect: 'none',

                arrows: false,
                helpers: {
                    media: {},
                    buttons: {}
                }
            });
        /*
         *  Open manually
         */
        $("#fancybox-manual-a").click(function() {
            $.fancybox.open('vendors/gallery/basic/img/1_b.jpg');
        });

        $("#fancybox-manual-b").click(function() {
            $.fancybox.open({
                href: 'iframe.php',
                type: 'iframe',
                padding: 5
            });
        });
        $("#fancybox-manual-c").click(function() {
            $.fancybox.open([{
                href: 'vendors/gallery/basic/img/1_b.jpg',
                title: 'My title'
            }, {
                href: 'vendors/gallery/basic/img/2_b.jpg',
                title: '2nd title'
            }, {
                href: 'vendors/gallery/basic/img/3_b.jpg'
            }], {
                helpers: {
                    thumbs: {
                        width: 75,
                        height: 50
                    }
                }
            });
        });
    });
    </script>
<!-- end of page level js -->
</body>
</html>