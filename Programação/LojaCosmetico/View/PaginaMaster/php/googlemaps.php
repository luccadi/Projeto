<?php
$page = 'googlemaps';
$title = 'Google Maps';
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
            Google Maps
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Maps</li>
            <li class="active">
                Google Maps
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Basic</h4>
                        <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-top" class="gmap"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">Terrain</h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-terrain" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">Satellite</h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-satellite" class="gmap"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4 class="panel-title">Markers</h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-markers" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Styled Maps
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-styled" class="gmap"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">Map Types</h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-types" class="gmap"></div>
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
<script type="text/javascript" src="../vendors/gmaps/custommaps.js"></script>
<!-- end of page level js -->
</body>
</html>