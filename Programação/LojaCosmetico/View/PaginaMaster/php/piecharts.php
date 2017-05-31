<?php
$page = 'piecharts';
$title = 'Pie Charts';
$css = <<<EOT
<!--page level css -->
<link href="../css/pages/piecharts.css" rel="stylesheet" type="text/css" />
<!--end of page level css-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Pie Charts</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Charts</li>
            <li class="active">Pie Charts</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <!-- Trans label pie charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Interactive Charts
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="demo-container">
                            <div class="col-lg-4">
                                <div id="placeholderradiuslabel" class="demo-placeholder1"></div>
                            </div>
                            <div class="col-lg-4">
                                <div id="placeholdertiltedpie" class="demo-placeholder1"></div>
                            </div>
                            <div class="col-lg-4">
                                <div id="placeholdertranslabel" class="demo-placeholder1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-4">
                <!-- Trans label pie charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Radius Label
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="demo-container">
                            <div id="placeholderinteractivity" class="demo-placeholder"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Trans label pie charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Styled Label #1
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="demo-container">
                            <div class="col-lg-6">
                                <div id="placeholderstylelabel1" class="demo-placeholder1"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="placeholderstylelabel2" class="demo-placeholder1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--row-->
        <div class="row">
            <div class="col-lg-12">
                <!-- Trans label pie charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Hidden Labels &amp;  Rectangular Pie
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="demo-container">
                            <div class="col-lg-4">
                                <div id="placeholderhiddenlabels" class="demo-placeholder1"></div>
                            </div>
                            <div class="col-lg-4">
                                <div id="placeholderrectangularpie" class="demo-placeholder1"></div>
                            </div>
                            <div class="col-lg-4">
                                <div id="placeholdercombinedlabels" class="demo-placeholder1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--row-->
        <div class="row">
            <div class="col-lg-4">
                <!-- Basic Pie charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Pie Chart #1
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="demo-container">
                            <div id="placeholderbasic" class="demo-placeholder"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Trans label pie charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Donut Hole
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="demo-container">
                            <div class="col-lg-6">
                                <div id="placeholderdonuthole" class="demo-placeholder1"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="placeholdernolegend" class="demo-placeholder1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.pie.js"></script>
<script language="javascript" type="text/javascript" src="../vendors/charts/jquery.flot.resize.js"></script>
<script language="javascript" type="text/javascript" src="../js/pages/custompiecharts.js"></script>
<!-- end of page level js -->
</body>
</html>