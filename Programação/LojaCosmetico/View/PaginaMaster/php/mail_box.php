<?php
$page = 'mail_box';
$title = 'Inbox';
$css = <<<EOT
 <!--page level css -->
<link href="../css/pages/alertmessage.css" rel="stylesheet" />
<link href="../css/pages/mail_box.css" rel="stylesheet" type="text/css" />
<!-- page level css ends-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Inbox</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="mail_box.php">Email</a>
            </li>
            <li class="active">Inbox</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row web-mail">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="whitebg">
                    <ul>
                        <li class="compose">
                            <a href="compose.php"> <i class="livicon" data-n="pen" data-s="16" data-c="white"></i>
                                &nbsp; &nbsp;Compose
                            </a>
                        </li>
                        <li class="active">
                            <a href="mail_box.php">
                                <i class="livicon" data-n="inbox" data-s="16" data-c="white"></i>
                                &nbsp; &nbsp;Inbox
                            </a>
                        </li>
                        <li>
                            <a href="sent.php">
                                <i class="livicon" data-n="check-circle" data-s="16" data-c="gray"></i>
                                &nbsp; &nbsp; Sent
                            </a>
                        </li>
                        <li>
                            <a href="trash.php">
                                <i class="livicon" data-n="trash" data-s="16" data-c="gray"></i>
                                &nbsp; &nbsp; Trash
                            </a>
                        </li>
                        <li>
                            <a href="spam.php">
                                <i class="livicon" data-n="eye-close" data-s="16" data-c="gray"></i>
                                &nbsp; &nbsp; Spam
                            </a>
                        </li>
                        <li>
                            <a href="draft.php">
                                <i class="livicon" data-n="unlink" data-s="16" data-c="gray"></i>
                                &nbsp; &nbsp; Draft (10)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8">
                <div class="whitebg">
                    <table class="table table-striped table-advance table-hover" id="inbox-check">
                        <thead>
                            <tr>
                                <td colspan="6">
                                    <div class="col-md-8">
                                        <h4> <strong>Inbox</strong>
                                        </h4>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="6">
                                    <div class="row no-padding">
                                        <div class="col-md-8 col-lg-9 col-xs-12">
                                            <div class="btn-group pull-left table-bordered paddingrightleft_10 paddingtopbottom_5px">
                                                <input type="checkbox" id="checkall">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu ul">
                                                    <!-- dropdown menu links -->
                                                    <li>
                                                        <a href="#">All</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">None</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Read</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">UnRead</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Starred</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Unstarred</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-group pull-left table-bordered paddingrightleft_10 paddingtopbottom_5px margin_left">
                                                <i class="livicon" data-n="refresh" data-s="17"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 col-xs-12">
                                            <div class="pull-right">
                                                <ul class="pagination no-padding">
                                                    <li class="">
                                                        <a href="#">&laquo;</a>
                                                    </li>
                                                    <li>
                                                        <a>
                                                            1 - 18 of 228
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#">&raquo;</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-messageid="1" class="unread">
                                <td style="width:4%;" class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td style="width:2%;" class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td style="width:22%;" class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">John</a>
                                </td>
                                <td style="width:56%;" class="view-message ">
                                    <a href="view_mail.php">
                                        Fwd: Make changes as needed
                                    </a>
                                </td>
                                <td style="width:3%;" class="view-message inbox-small-cells">
                                    <a href="view_mail.php">
                                        <i class="fa fa-paperclip"></i>
                                    </a>
                                </td>
                                <td style="width:13%;" class="view-message text-right">
                                    <a href="view_mail.php">16:30 PM</a>
                                </td>
                            </tr>
                            <tr data-messageid="2" class="unread">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Marin</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        Ya comin' to our July webinar?
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 15</a>
                                </td>
                            </tr>
                            <tr data-messageid="3">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Jenny</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        Mobile-First Type & Layout
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 15</a>
                                </td>
                            </tr>
                            <tr data-messageid="4">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Twiter</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        This looks like borrows page
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 14</a>
                                </td>
                            </tr>
                            <tr data-messageid="5">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Grace</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        Ya comin' to our July webinar?
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 15</a>
                                </td>
                            </tr>
                            <tr data-messageid="6">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Kimy</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        Analysis on Views
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php">
                                        <i class="fa fa-paperclip"></i>
                                    </a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 14</a>
                                </td>
                            </tr>
                            <tr data-messageid="7">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Tony</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        Ya comin' to our July webinar?
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php">
                                        <i class="fa fa-paperclip"></i>
                                    </a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 15</a>
                                </td>
                            </tr>
                            <tr data-messageid="8">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Sandy</a>
                                </td>
                                <td class="view-message view-message">
                                    <a href="view_mail.php">
                                        Analysis on Views
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 14</a>
                                </td>
                            </tr>
                            <tr data-messageid="9">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Avin</a>
                                </td>
                                <td class="view-message view-message">
                                    <a href="view_mail.php">
                                        Mobile-First Type & Layout
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 15</a>
                                </td>
                            </tr>
                            <tr data-messageid="10">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">MJ</a>
                                </td>
                                <td class="view-message view-message">
                                    <a href="view_mail.php">
                                        Make changes as needed
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 14</a>
                                </td>
                            </tr>
                            <tr data-messageid="11">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Lofer</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        Welcome back to here
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 15</a>
                                </td>
                            </tr>
                            <tr data-messageid="12">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="hidden-xs">
                                    <span class="view-message hidden-xs">
                                        <a href="view_mail.php">
                                            <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Renny</a>
                                    </span>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        Dolor sit amet, consectetuer adipiscing
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php">
                                        <i class="fa fa-paperclip"></i>
                                    </a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 14</a>
                                </td>
                            </tr>
                            <tr data-messageid="13">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Benny</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        This looks like borrows page
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php">
                                        <i class="fa fa-paperclip"></i>
                                    </a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 15</a>
                                </td>
                            </tr>
                            <tr data-messageid="14">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="hidden-xs">
                                    <span class="view-message hidden-xs">
                                        <a href="view_mail.php">
                                            <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Grace</a>
                                    </span>
                                </td>
                                <td class="view-message view-message">
                                    <a href="view_mail.php">
                                        Analysis on Views
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 14</a>
                                </td>
                            </tr>
                            <tr data-messageid="15">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Mike</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        Ya comin' to our July webinar?
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 15</a>
                                </td>
                            </tr>
                            <tr data-messageid="16">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Clark</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        Make changes as needed
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 14</a>
                                </td>
                            </tr>
                            <tr data-messageid="17">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Robin</a>
                                </td>
                                <td class="view-message">
                                    <a href="view_mail.php">
                                        Mobile-First Type & Layout
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php"></a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 15</a>
                                </td>
                            </tr>
                            <tr data-messageid="18">
                                <td class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" class="mail-checkbox"></span>
                                    </div>
                                </td>
                                <td class="inbox-small-cells">
                                    <i class="livicon" data-n="star-full" data-s="15"></i>
                                </td>
                                <td class="view-message hidden-xs">
                                    <a href="view_mail.php">
                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">FB</a>
                                </td>
                                <td class="view-message view-message">
                                    <a href="view_mail.php">
                                        Ya comin' to our July webinar?
                                    </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <a href="view_mail.php">
                                        <i class="fa fa-paperclip"></i>
                                    </a>
                                </td>
                                <td class="view-message text-right">
                                    <a href="view_mail.php">June 14</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
    $('#slimscrollside').slimscroll({
        height: '700px',
        size: '3px',
        color: 'black',
        opacity: .3
    });
    </script>
<script>
    $(document).ready(function() {
        $("#inbox-check #checkall").click(function() {

            if ($("#inbox-check #checkall").is(':checked')) {
                $("#inbox-check input[type=checkbox]").each(function() {
                    $(this).prop("checked", true);
                });
            } else {
                $("#inbox-check input[type=checkbox]").each(function() {
                    $(this).prop("checked", false);
                });
            }
        });
    });
    </script>
<!-- end of page level js -->
</body>
</html>