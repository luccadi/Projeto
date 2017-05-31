<?php
$page = 'charts';
$title = 'Flot Charts';
$css = <<<EOT
<!--page level css -->
<link type="text/css" rel="stylesheet" href="../css/pages/flot.css" />
<!--end of page level css-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>Flot Charts</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">Charts</a>
            </li>
            <li class="active">Flot Charts</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <!-- Stack charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Stacked  Bar Charts
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="basicFlotLegend" class="flotLegend"></div>
                        <div id="bar-chart-stacked" class="flotChart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- toggling series charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Bar Charts
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="basicFlotLegend" class="flotLegend"></div>
                        <div id="bar-chart" class="flotChart"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <!-- Tracking charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Spline Chart
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="basicFlotLegend1" class="flotLegend"></div>
                        <div id="spline-chart" class="flotChart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Stack charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Line Chart
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="basicFlotLegend" class="flotLegend"></div>
                        <div id="line-chart" class="flotChart1"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <!-- Real time charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Area Chart
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="area-chart" class="flotChart3"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Spline Area Chart
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="chart-spline" class="flotChart3"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Interacting charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Real Time Chart
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="realtime" class="flotChart3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row --> </section>
    <!-- content -->
</aside>
<!-- right-side -->

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.min.js"></script>
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.stack.js"></script>
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.crosshair.js"></script>
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.time.js"></script>
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.selection.js"></script>
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.symbol.js"></script>
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.resize.js"></script>
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.categories.js" ></script>
<script  language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.spline.js" ></script>
<script language="javascript" type="text/javascript"src="../vendors/charts/jquery.flot.tooltip.js" ></script>
<script language="javascript" type="text/javascript" src="../js/pages/customcharts.js"></script>
<!-- end of page level js -->
</body>
</html>