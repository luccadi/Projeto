<?php
$page = 'advancedmaps';
$title = 'Advanced Maps';
$css = <<<EOT
<!--page level css -->
<link rel="stylesheet" type="text/css" href="../vendors/gmaps/examples.css" />
<!--end of page level css-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Advanced Maps
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Maps</li>
            <li class="active">
                Advanced Maps
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <i class="livicon" data-name="search" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                            Search Place
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <form method="post" id="geocoding_form">
                            <div class="input">
                                <input type="text" id="address" name="address" size="28" />
                                <input type="submit" value="Search" />
                            </div>
                        </form>
                        <br />
                        <div id="map1" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="search" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                            Search Routes
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="map" class="large"></div>
                        <div class="row">
                            <a href="#" class="btn btns btn-responsive btn-small" id="get_route">Get route</a>
                            <a href="#" class="btn btns btn-responsive btn-small" id="back">
                                &laquo; Back
                            </a>
                            <a href="#" class="btn btns btn-responsive btn-small" id="forward">
                                Forward &raquo;
                            </a>
                        </div>
                        <div class="row"> <b>Directions:</b> 
                            <ul id="steps"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row --> </section>
</aside>

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<script type="text/javascript" src="../vendors/gmaps/maps_api.js"></script>
<script type="text/javascript" src="../vendors/gmaps/gmaps.min.js"></script>
<script type="text/javascript" src="../vendors/gmaps/adv_maps.js"></script>
<!-- end of page level js -->
</body>
</html>