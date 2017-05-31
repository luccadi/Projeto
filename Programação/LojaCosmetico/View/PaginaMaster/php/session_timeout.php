<?php
$page = 'session_timeout';
$title = 'Session Timeout';
$css = <<<EOT
 <!--page level css -->
    <link rel="stylesheet" href="../css/pages/session_timeout.css" />
    <!--end of page level css-->
EOT;
require_once('header.php');
?>    
   
<aside class="right-side">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Session Timeout</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">UI features</a>
                    </li>
                    <li class="active">Session Timeout</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">Widget settings form goes here</div>
                            <div class="modal-footer">
                                <button type="button" class="btn blue">Save changes</button>
                                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Session Timeout
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="note note-success">
                                    <p>
                                        After a set amount of time(10 seconds set for demo), a dialog is shown to the user with the option to either log out now, or stay connected. If log out now is selected, the page is redirected to a logout URL. If stay connected is selected, a keep-alive URL is requested through AJAX. If no options is selected after another set amount of time, the page is automatically redirected to a timeout URL. To learn more please check out
                                        <a href="https://github.com/maxfierke/jquery-sessionTimeout-bootstrap" target="_blank">the plugin's official homepage</a>
                                    </p>
                                </div>
                            </div>
                        </div>
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
    <script type="text/javascript">
    $(document).on('click', '.panel-heading span.clickable', function(e) {
        var $this = $(this);
        if (!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    })
    </script>
    <script src="../js/jquery.sessionTimeout.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        // initialize session timeout settings
        $.sessionTimeout({
            title: 'Session Timeout Notification',
            message: 'Your session is about to expire.',
            keepAliveUrl: 'session_timeout.php',
            redirUrl: 'lockscreen.php',
            logoutUrl: 'login.php',
            warnAfter: 5000, //warn after 5 seconds
            redirAfter: 10000, //redirect after 10 secons
        });
    });
    </script>
    <!-- end of page level js -->
</body>
</html>
