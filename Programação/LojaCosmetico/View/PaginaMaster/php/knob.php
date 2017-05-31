<?php
$page = 'knob';
$title = 'Circle sliders';
$css = <<<EOT
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            Circle sliders
        </h1>
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
            <li class="active">
                Circle sliders
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="star-full" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Circle Dials
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <!--knob-->
                        <div class="row visible-ie8">
                            <div class="col-md-12">
                                <div class="alert alert-warning alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    The Circle Dial plugin is not compatible with Internet Explorer 8 and older.
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-5">
                                    <div class="text-left">Disable</div>
                                    <input class="knob" data-width="80%" data-fgColor="#418bca" data-displayinput=false value="35"></div>
                                <div class="col-md-3 col-sm-3 col-xs-5">
                                    <div class="text-left">Cursor</div>
                                    <input class="knob" data-width="80%" data-cursor=true data-fgColor="#00bc8c" data-thickness=.3 value="29"></div>
                                <div class="col-md-3 col-sm-3 col-xs-5">
                                    <div class="text-left">
                                        Display previous
                                    </div>
                                    <input class="knob" data-width="80%" data-fgColor="#5bc0de" data-min="-100" data-displayprevious=true value="44"></div>
                                <div class="col-md-3 col-sm-3 col-xs-5">
                                    <div class="text-left">
                                        Angle offset
                                    </div>
                                    <input class="knob" data-angleoffset="90" data-fgcolor="#EF6F6C" data-width="80%" value="35"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-5">
                                    <div class="text-left">
                                        Angle offset arc
                                    </div>
                                    <input class="knob" data-angleoffset="-125" data-anglearc="250" data-fgcolor="#EF6F6C" data-width="80%" value="35"></div>
                                <div class="col-md-3 col-sm-3 col-xs-5">
                                    <div class="text-left">
                                        5-digit values
                                    </div>
                                    <input class="knob" data-min="-15000" data-fgColor="#5bc0de" data-max="15000" data-width="80%" value="-11000"></div>
                                <div class="col-md-3 col-sm-3 col-xs-5">
                                    <div class="text-left">Responsive</div>
                                    <input class="knob" data-width="80%" data-fgColor="#00bc8c" value="35"></div>
                                <div class="col-md-3 col-sm-3 col-xs-5">
                                    <div class="text-left">Readonly</div>
                                    <input class="knob" data-fgColor="#418bca" data-thickness=".4" data-width="80%" readonly value="22"></div>
                            </div>
                        </div>
                    </div>
                    <!--knob ends--> </div>
            </div>
        </div>
    </section>
    <!-- content -->
</aside>
<!-- right-side -->

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<script src="../vendors/Knob/jquery.knob.js"></script>
<script>
    $(function($) {
        $(".knob").knob({
            change: function(value) {
                //console.log("change : " + value);
            },
            release: function(value) {
                //console.log(this.$.attr('value'));
                console.log("release : " + value);
            },
            cancel: function() {
                console.log("cancel : ", this);
            },
            /*format : function (value) {
                        return value + '%';
                    },*/
            draw: function() {
                // "tron" case
                if (this.$.data('skin') == 'tron') {

                    this.cursorExt = 0.3;

                    var a = this.arc(this.cv) // Arc
                        ,
                        pa // Previous arc
                        , r = 1;

                    this.g.lineWidth = this.lineWidth;

                    if (this.o.displayPrevious) {
                        pa = this.arc(this.v);
                        this.g.beginPath();
                        this.g.strokeStyle = this.pColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                        this.g.stroke();
                    }
                    this.g.beginPath();
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                    this.g.stroke();

                    this.g.lineWidth = 2;
                    this.g.beginPath();
                    this.g.strokeStyle = this.o.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                    this.g.stroke();

                    return false;
                }
            }
        });
        // Example of infinite knob, iPod click wheel
        var v, up = 0,
            down = 0,
            i = 0,
            $idir = $("div.idir"),
            $ival = $("div.ival"),
            incr = function() {
                i++;
                $idir.show().php("+").fadeOut();
                $ival.php(i);
            },
            decr = function() {
                i--;
                $idir.show().php("-").fadeOut();
                $ival.php(i);
            };
        $("input.infinite").knob({
            min: 0,
            max: 20,
            stopper: false,
            change: function() {
                if (v > this.cv) {
                    if (up) {
                        decr();
                        up = 0;
                    } else {
                        up = 1;
                        down = 0;
                    }
                } else {
                    if (v < this.cv) {
                        if (down) {
                            incr();
                            down = 0;
                        } else {
                            down = 1;
                            up = 0;
                        }
                    }
                }
                v = this.cv;
            }
        });
    });
    </script>
<!-- end of page level js -->
</body>
</html>