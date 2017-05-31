<?php
$page = 'imagecropping';
$title = 'Image Cropping';
$css = <<<EOT
 <!--page level css -->
<link rel="stylesheet" href="../vendors/imgcrop/css/main.css" type="text/css" />
<link rel="stylesheet" href="../vendors/imgcrop/css/demos.css" type="text/css" />
<link rel="stylesheet" href="../vendors/imgcrop/css/basic.css" type="text/css" />
<link rel="stylesheet" href="../vendors/imgcrop/css/jquery.Jcrop.css" type="text/css" />
<link rel="stylesheet" href="../css/pages/cropcustom.css" type="text/css" />
<!-- styles for this page ends here-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <section class="content-header">
        <h1>
            Image Cropping
        </h1>
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
                <a href="#">
                    Image Cropping
                </a>
            </li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary tabtop">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <i class="livicon" data-name="crop" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Gallery
                        </h4>
                    </div>
                    <div class="panel-body" style="padding-top:5px !important;">
                        <div class="table-responsive">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1" data-toggle="tab">Basic</a>
                                    </li>
                                    <li>
                                        <a href="#tab_2" data-toggle="tab">
                                            Image Handler
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_3" data-toggle="tab">
                                            Image Preview
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_4" data-toggle="tab">Animation</a>
                                    </li>
                                    <li>
                                        <a href="#tab_5" data-toggle="tab">
                                            API Interface
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_6" data-toggle="tab">Styling</a>
                                    </li>
                                    <li>
                                        <a href="#tab_7" data-toggle="tab">
                                            Text Copping
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_8" data-toggle="tab">
                                            PHP Cropping
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1" style="padding:10px;">
                                        <div class="col-md-8">
                                            <h4>
                                                Hey Just Crop it.
                                            </h4>
                                            <img src="../img/cropping-image.jpg" class="img-responsive" id="target1" alt="[Jcrop Example]" />
                                        </div>
                                        <div class="col-md-4">
                                            <div class="description">
                                                <p> <b>This example demonstrates the default behavior of Image Cropping.</b> 
                                                    <br />
                                                    There is no event handlers have been attached, it only performs just cropping behavior.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane 1 -->
                                    <div class="tab-pane" id="tab_2" style="padding:10px;">
                                        <div class="col-md-8">
                                            <img src="../img/cropping-image.jpg" class="img-responsive" id="target2" alt="[Jcrop Example]" />
                                        </div>
                                        <div class="col-md-4">
                                            <div class="description">
                                                Cropped Image Details
                                            </div>
                                            <form id="coords" class="coords" onsubmit="return false;" action="">
                                                <div class="inline-labels">
                                                    <label>
                                                        X1
                                                        <input type="text" size="4" id="x1" name="x1" />
                                                    </label>
                                                    <label>
                                                        Y1
                                                        <input type="text" size="4" id="y1" name="y1" />
                                                    </label>
                                                    <label>
                                                        X2
                                                        <input type="text" size="4" id="x2" name="x2" />
                                                    </label>
                                                    <label>
                                                        Y2
                                                        <input type="text" size="4" id="y2" name="y2" />
                                                    </label>
                                                    <label>
                                                        Weight
                                                        <input type="text" size="4" id="w" name="width" />
                                                    </label>
                                                    <label>
                                                        Height
                                                        <input type="text" size="4" id="h" name="Height" />
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="description">
                                            <p> <b>This example demonstrates the default behavior of Image Cropping.</b> 
                                                <br />
                                                There is no event handlers have been attached, it only performs just cropping behavior.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane 2 -->
                                    <div class="tab-pane" id="tab_3" style="padding:10px;">
                                        <img src="../img/cropping-image.jpg" class="img-responsive" id="target3" alt="[Jcrop Example]" />
                                        <div id="preview-pane">
                                            <div class="preview-container">
                                                <img src="../img/cropping-image.jpg" class="jcrop-preview" alt="Preview" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane 3-->
                                    <div class="tab-pane" id="tab_4" style="padding:10px;">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <img src="../img/cropping-image.jpg" class="img-responsive" id="target4" alt="[Jcrop Example]" />
                                            </div>
                                            <div class="col-md-4">
                                                <div class="span3" id="interface" style="width:220px;">
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="fadetog" />
                                                        Enable fading (bgFade: true)
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="shadetog" />
                                                        Use experimental shader (shade: true)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane 4-->
                                    <div class="tab-pane" id="tab_5" style="padding:10px;">
                                        <div class="col-md-7">
                                            <img src="../img/cropping-image2.png" width="500%" height="600%" class="img-responsive" id="target5" alt="[Jcrop Example]" />
                                        </div>
                                        <div class="col-md-5">
                                            <div style="margin: .8em 0 .5em;">
                                                <span class="requiresjcrop">
                                                    <button id="setSelect" class="btn btn-mini">setSelect</button>
                                                    <button id="animateTo" class="btn btn-mini">animateTo</button>
                                                    <button id="release" class="btn btn-mini">Release</button>
                                                    <button id="disable" class="btn btn-mini">Disable</button>
                                                </span>
                                                <button id="enable" class="btn btn-mini" style="display:none;">Re-Enable</button>
                                                <button id="unhook" class="btn btn-mini">Destroy!</button>
                                                <button id="rehook" class="btn btn-mini" style="display:none;">
                                                    Attach Jcrop
                                                </button>
                                            </div>
                                            <fieldset class="optdual requiresjcrop">
                                                <legend>
                                                    Option Toggles
                                                </legend>
                                                <div class="optlist">
                                                    <label>
                                                        <input type="checkbox" id="can_click" />
                                                        Allow new selections
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" id="can_move" />
                                                        Selection can be moved
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" id="can_size" />
                                                        Resizable selection
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" id="ar_lock" />
                                                        Aspect ratio
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" id="size_lock" />
                                                        minSize/maxSize setting
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane 5-->
                                    <div class="tab-pane" id="tab_6" style="padding:10px;">
                                        <div class="col-md-8">
                                            <img src="../img/cropping-image.jpg" class="img-responsive" id="target6" alt="[Jcrop Example]" />
                                        </div>
                                        <div class="col-md-4">
                                            <div style="margin-top:1em;">
                                                <fieldset>
                                                    <legend>
                                                        Manipulate classes
                                                    </legend>
                                                    <div class="btn-group" id="buttonbar">
                                                        <button id="radio1" data-setclass="jcrop-light" class="btn active">
                                                            jcrop-light
                                                        </button>
                                                        <button id="radio2" data-setclass="jcrop-dark" class="btn">jcrop-dark</button>
                                                        <button id="radio3" data-setclass="jcrop-normal" class="btn">normal</button>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane 6-->
                                    <div class="tab-pane" id="tab_7" style="padding:10px; line-height:35px;">
                                        <p id="target7">
                                            <b style="display:block; padding: .5em 1em;">
                                                This is an example to crop a non-image item. You are now cropping just a paragraph tag.
                                                Crop this paragraph just like cropping a normal image.
                                            </b>
                                        </p>
                                    </div>
                                    <!-- /.tab-pane 7-->
                                    <div class="tab-pane" id="tab_8" style="padding:10px;">
                                        <div class="col-md-8">
                                            <img src="../img/cropping-image.jpg" class="img-responsive" id="cropbox" />
                                        </div>
                                        <div class="col-md-4">
                                            <form action="../crop-demo.php" method="post" onsubmit="return checkCoords();">
                                                <input type="hidden" id="x" name="x" />
                                                <input type="hidden" id="y" name="y" />
                                                <input type="hidden" id="we" name="w" />
                                                <input type="hidden" id="he" name="h" />
                                                <input type="submit" value="Crop Image" class="btn btn-large btn-inverse" />
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane 8--> </div>
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
<script src="../vendors/imgcrop/jquery.Jcrop.min.js"></script>
<script src="../vendors/imgcrop/jquery.color.js"></script>
<script src="../vendors/imgcrop/cropcustom.js"></script>
<!-- end of page level js -->
</body>
</html>