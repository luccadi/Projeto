<?php
$page = 'sliders';
$title = 'Sliders';
$css = <<<EOT
<!--page level css -->
<link rel="stylesheet" href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" />
<link rel="stylesheet" href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" />
<link rel="stylesheet" href="../vendors/slider/slider.css" />
<link rel="stylesheet" href="../css/pages/ion.css" />
<!--end of page level css-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>Sliders</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    UI Components
                </a>
            </li>
            <li class="active">Sliders</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="download" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Ion Range Sliders
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body" id="slim1">
                        <!--ion-->
                        <div class="row">
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            Basic Slider
                                        </label>
                                        <div class="col-md-10">
                                            <input id="example_1" class="form-control" type="text" name="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            Money Range
                                        </label>
                                        <div class="col-md-10">
                                            <input id="example_2" type="text" name="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Gold Range</label>
                                        <div class="col-md-10">
                                            <input id="example_3" type="text" name="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            Temperature Slider
                                        </label>
                                        <div class="col-md-10">
                                            <input id="example_4" type="text" name="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            Month Slider
                                        </label>
                                        <div class="col-md-10">
                                            <input id="example_5" type="text" name="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Year Range</label>
                                        <div class="col-md-10">
                                            <input id="example_6" type="text" name="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            Year Slider
                                        </label>
                                        <div class="col-md-10">
                                            <input id="example_7" type="text" name="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <label class="col-md-2 control-label">
                                            Ion range Slider
                                        </label>
                                        <div class="col-md-10">
                                            <input id="example_8" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--ion ends--> </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="globe" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Bootstrap Sliders
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body" id="slim2">
                        <!--slider-->
                        <div class="row">
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            Basic Slider
                                        </label>
                                        <div class="col-md-10">
                                            <input id="ex1" data-slider-id='ex1Slider' type="text" class="slider form-control" data-slider-handle="square" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            Money Range
                                        </label>
                                        <div class="col-md-10"> <b>€ 10</b>
                                            <input id="ex2" type="text" data-slider-id='ex2' class="slider form-control" data-slider-handle="square" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" /> <b>€ 1000</b>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            Color Range
                                        </label>
                                        <div class="col-md-10">
                                            <div class="well">
                                                <p>
                                                    <b>R</b>
                                                    <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square" />
                                                </p>
                                                <p>
                                                    <b>G</b>
                                                    <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round" />
                                                </p>
                                                <p>
                                                    <b>B</b>
                                                    <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle" />
                                                </p>
                                                <div id="RGB"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">
                                                Vertical Slider
                                            </label>
                                            <div class="col-md-10">
                                                <input id="ex4" type="text" class="slider form-control" data-slider-id='ex4' data-slider-handle="square" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="-3" data-slider-orientation="vertical" />
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Destroy</label>
                                                <div class="col-md-10">
                                                    <input id="ex5" type="text" class="slider form-control" data-slider-id='ex5' data-slider-handle="square" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="0" />
                                                    <button id="destroyEx5Slider" class='btn btn-danger'>
                                                        Click to Destroy
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">
                                                    Current Range
                                                </label>
                                                <div class="col-md-10">
                                                    <input id="ex6" type="text" class="slider form-control" data-slider-id='ex6' data-slider-min="-5" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="3" />
                                                    <span id="ex6CurrentSliderValLabel">
                                                        Current Slider Value:
                                                        <span id="ex6SliderVal">3</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">
                                                    Enable Slider
                                                </label>
                                                <div class="col-md-10">
                                                    <input id="ex7" type="text" class="slider form-control" data-slider-id='ex7' data-slider-min="0" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="5" data-slider-enabled="false" />
                                                    <input id="ex7-enabled" type="checkbox" />
                                                    Enabled
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">
                                                    Tooltip Slider
                                                </label>
                                                <div class="col-md-10">
                                                    <input id="ex8" class="slider form-control" data-slider-id='ex8' type="text" data-slider-min="0" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                                </div>
                                            </div>
                                            <div class="form-group last">
                                                <label class="col-md-2 control-label">
                                                    Precision Slider
                                                </label>
                                                <div class="col-md-10">
                                                    <input id="ex9" class="slider form-control" data-slider-id='ex9' data-slider-handle="square" type="text" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--slider ends--> </div>
                </div>
            </div>
        </div>
        <!--main content ends--> </section>
    <!-- content -->
</aside>
<!-- right-side -->

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<script src="../vendors/ion.rangeSlider/js/ion-rangeSlider/ion.rangeSlider.js"></script>
<script src="../vendors/slider/bootstrap-slider.js"></script>
<script>
    $(function($) {
        $("#example_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });
        $("#example_2").ionRangeSlider({
            min: 1000,
            max: 100000,
            from: 30000,
            to: 90000,
            type: 'double',
            step: 500,
            postfix: " &euro;",
            hasGrid: true
        });
        $("#example_3").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });
        $("#example_4").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            type: 'single',
            step: 1,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });
        $("#example_5").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });
        $("#example_6").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " light years",
            from: 55000,
            hideMinMax: false,
            hideFromTo: true
        });
        $("#example_7").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " light years",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });
        $("#example_8").ionRangeSlider({
            min: 1000000,
            max: 100000000,
            type: "double",
            postfix: " р.",
            step: 10000,
            from: 25000000,
            to: 35000000,
            onChange: function(obj) {
                delete obj.input;
                delete obj.slider;
                var t = "Range Slider value: " + JSON.stringify(obj, "", 2);

                $("#result").php(t);
            },
            onLoad: function(obj) {
                delete obj.input;
                delete obj.slider;
                var t = "Range Slider value: " + JSON.stringify(obj, "", 2);

                $("#result").php(t);
            }
        });

        $("#updateLast").on("click", function() {
            $("#example_8").ionRangeSlider("update", {
                min: Math.round(10000 + Math.random() * 40000),
                max: Math.round(200000 + Math.random() * 100000),
                step: 1,
                from: Math.round(40000 + Math.random() * 40000),
                to: Math.round(150000 + Math.random() * 80000)
            });

        });
    });
    </script>
<script type='text/javascript'>
    $(document).ready(function() {
        /* Example 1 */
        $('#ex1').slider({
            formater: function(value) {
                return 'Current value: ' + value;
            }
        });

        /* Example 2 */
        $("#ex2").slider({});

        /* Example 3 */
        var RGBChange = function() {
            $('#RGB').css('background', 'rgb(' + r.getValue() + ',' + g.getValue() + ',' + b.getValue() + ')')
        };

        var r = $('#R').slider()
            .on('slide', RGBChange)
            .data('slider');
        var g = $('#G').slider()
            .on('slide', RGBChange)
            .data('slider');
        var b = $('#B').slider()
            .on('slide', RGBChange)
            .data('slider');

        /* Example 4 */
        $("#ex4").slider({
            reversed: true
        });

        /* Example 5 */
        $("#ex5").slider();
        $("#destroyEx5Slider").click(function() {
            $("#ex5").slider('destroy');
        });

        /* Example 6 */
        $("#ex6").slider();
        $("#ex6").on('slide', function(slideEvt) {
            $("#ex6SliderVal").text(slideEvt.value);
        });

        /* Example 7 */
        $("#ex7").slider();
        $("#ex7-enabled").click(function() {
            if (this.checked) {
                $("#ex7").slider("enable");
            } else {
                $("#ex7").slider("disable");
            }
        });

        /* Example 8 */
        $("#ex8").slider({
            tooltip: 'always'
        });

        /* Example 9 */
        $("#ex9").slider({
            step: 0.01,
            value: 8.115
        });
    });
    </script>
<!-- end of page level js -->
</body>
</html>