<?php
$page = 'users';
$title = 'Users';
$css = <<<EOT
<!--page level css -->
<link rel="stylesheet" type="text/css" href="../vendors/datatables/css/dataTables.bootstrap.css" />
<link href="../css/pages/tables.css" rel="stylesheet" type="text/css" />
<!-- end of page level css -->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Users</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Users</li>
            <li class="active">Users</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Users List
                    </h4>
                </div>
                <br />
                <div class="panel-body">
                    <table class="table table-bordered " id="table">
                        <thead>
                            <tr class="filters">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>
                                    User E-mail
                                </th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>
                                    admin@admin.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    1 month ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mozzy</td>
                                <td>
                                    loomy69@gmail.com
                                </td>
                                <td>
                                    loomy69@gmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    4 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>jonh</td>
                                <td>Doe</td>
                                <td>
                                    email@email.com.br
                                </td>
                                <td>Activated</td>
                                <td>
                                    3 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lue</td>
                                <td>Gutkowski</td>
                                <td>
                                    weissnat.ron@feeney.biz
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Claire</td>
                                <td>Crooks</td>
                                <td>
                                    yd&#039;amore@grimes.net
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hailie</td>
                                <td>Lesch</td>
                                <td>
                                    mschultz@gmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mollie</td>
                                <td>Quigley</td>
                                <td>
                                    morar.reta@daughertyromaguera.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Roxanne</td>
                                <td>Streich</td>
                                <td>
                                    oquitzon@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sincere</td>
                                <td>Hackett</td>
                                <td>
                                    vickie.hackett@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Oral</td>
                                <td>Stroman</td>
                                <td>
                                    hoeger.gennaro@gmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Will</td>
                                <td>Gaylord</td>
                                <td>
                                    schimmel.delores@schiller.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hal</td>
                                <td>Kuphal</td>
                                <td>
                                    hflatley@deckow.biz
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Leone</td>
                                <td>Dach</td>
                                <td>
                                    pcruickshank@waters.info
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Letha</td>
                                <td>Ebert</td>
                                <td>
                                    darien55@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Blaise</td>
                                <td>Rohan</td>
                                <td>
                                    jerde.zechariah@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Raina</td>
                                <td>Kilback</td>
                                <td>
                                    idenesik@schneider.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Enid</td>
                                <td>Rippin</td>
                                <td>
                                    ashlee23@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cathryn</td>
                                <td>Jakubowski</td>
                                <td>
                                    qmohr@kilback.org
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Rickie</td>
                                <td>Frami</td>
                                <td>
                                    flatley.wilhelmine@gaylord.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lyric</td>
                                <td>Reinger</td>
                                <td>
                                    storphy@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cortney</td>
                                <td>Walter</td>
                                <td>
                                    wmayer@gmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Keegan</td>
                                <td>Hilpert</td>
                                <td>
                                    yokuneva@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Vito</td>
                                <td>Fay</td>
                                <td>
                                    dlynch@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nakia</td>
                                <td>Gutkowski</td>
                                <td>
                                    genoveva84@mitchellreichel.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Stephania</td>
                                <td>Mayer</td>
                                <td>
                                    diego.hilll@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Selmer</td>
                                <td>Feest</td>
                                <td>
                                    mann.uriah@gmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Chauncey</td>
                                <td>Stiedemann</td>
                                <td>
                                    braeden.dicki@reillywilkinson.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lilyan</td>
                                <td>Lemke</td>
                                <td>
                                    jamison25@connelly.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mose</td>
                                <td>Paucek</td>
                                <td>
                                    lueilwitz.lavada@reinger.org
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pearlie</td>
                                <td>Stiedemann</td>
                                <td>
                                    pearl.jerde@walkerwilkinson.net
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Moriah</td>
                                <td>Zulauf</td>
                                <td>
                                    breitenberg.golda@mohr.net
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lenny</td>
                                <td>Bergnaum</td>
                                <td>
                                    wolf.burdette@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Zack</td>
                                <td>Kuphal</td>
                                <td>
                                    pmoore@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Adrien</td>
                                <td>Kirlin</td>
                                <td>
                                    jacobi.mossie@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Frida</td>
                                <td>Turner</td>
                                <td>
                                    esmeralda.huels@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Clifford</td>
                                <td>Marvin</td>
                                <td>
                                    zboncak.otis@feeney.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Carli</td>
                                <td>Ziemann</td>
                                <td>
                                    thalia.langosh@lakin.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kamryn</td>
                                <td>Bogan</td>
                                <td>
                                    rheaney@johnsgottlieb.biz
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ebba</td>
                                <td>Herzog</td>
                                <td>
                                    laurence.emmerich@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Rolando</td>
                                <td>Bailey</td>
                                <td>
                                    zziemann@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Florence</td>
                                <td>Wunsch</td>
                                <td>
                                    tom.jacobi@witting.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Joyce</td>
                                <td>Hansen</td>
                                <td>
                                    emie11@beier.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Felton</td>
                                <td>Wisoky</td>
                                <td>
                                    pschoen@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hope</td>
                                <td>Von</td>
                                <td>
                                    raegan79@yostprosacco.net
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Aliza</td>
                                <td>Effertz</td>
                                <td>
                                    candelario.barton@gmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Charlene</td>
                                <td>Cummerata</td>
                                <td>
                                    pcronin@davis.biz
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Zita</td>
                                <td>
                                    Greenfelder
                                </td>
                                <td>
                                    emmerich.orion@beier.org
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Wyatt</td>
                                <td>Koch</td>
                                <td>
                                    dora.marquardt@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sadye</td>
                                <td>Kub</td>
                                <td>
                                    salma.rau@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Paige</td>
                                <td>Collier</td>
                                <td>
                                    d&#039;angelo.turcotte@hirthethompson.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jace</td>
                                <td>Heaney</td>
                                <td>
                                    chanel41@huels.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Betty</td>
                                <td>Nader</td>
                                <td>
                                    mnienow@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Phoebe</td>
                                <td>Simonis</td>
                                <td>
                                    yolanda51@bashirian.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Velda</td>
                                <td>Maggio</td>
                                <td>
                                    vickie87@gmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Danielle</td>
                                <td>Kling</td>
                                <td>
                                    gaylord88@gmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Winifred</td>
                                <td>Johnston</td>
                                <td>
                                    kpfannerstill@maggiogreenholt.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Michelle</td>
                                <td>Homenick</td>
                                <td>
                                    von.edison@vonrueden.org
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Vernice</td>
                                <td>Hills</td>
                                <td>
                                    devante.schmeler@jaskolski.org
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Winifred</td>
                                <td>Schoen</td>
                                <td>
                                    terry.lavada@wisokypfeffer.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Leta</td>
                                <td>Koch</td>
                                <td>
                                    shirley.quitzon@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Aryanna</td>
                                <td>Stiedemann</td>
                                <td>
                                    alan.bode@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jensen</td>
                                <td>Hansen</td>
                                <td>
                                    dveum@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Otha</td>
                                <td>Nikolaus</td>
                                <td>
                                    zhansen@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>June</td>
                                <td>Osinski</td>
                                <td>
                                    celine82@colliermcdermott.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jeromy</td>
                                <td>McCullough</td>
                                <td>
                                    dzemlak@lesch.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kacie</td>
                                <td>Wunsch</td>
                                <td>
                                    bradtke.tatum@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Angelo</td>
                                <td>Kris</td>
                                <td>
                                    ametz@hessel.info
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Michale</td>
                                <td>Yundt</td>
                                <td>
                                    cschmitt@gottliebjaskolski.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Alessandro</td>
                                <td>McClure</td>
                                <td>
                                    hauck.izaiah@wehner.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Vergie</td>
                                <td>Terry</td>
                                <td>
                                    langosh.pearlie@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mohamed</td>
                                <td>Bayer</td>
                                <td>
                                    bechtelar.donnell@king.net
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cielo</td>
                                <td>Corkery</td>
                                <td>
                                    jhowell@gaylordklein.net
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Chadrick</td>
                                <td>Schneider</td>
                                <td>
                                    conrad83@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Myrna</td>
                                <td>Hyatt</td>
                                <td>
                                    rolfson.pedro@gmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gilda</td>
                                <td>Jerde</td>
                                <td>
                                    waylon.emmerich@beatty.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Alanis</td>
                                <td>Aufderhar</td>
                                <td>
                                    labbott@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Raymundo</td>
                                <td>Yundt</td>
                                <td>
                                    ggislason@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Edwina</td>
                                <td>Stark</td>
                                <td>
                                    tamia.koepp@thompsonkozey.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Joseph</td>
                                <td>Lynch</td>
                                <td>
                                    briana14@lubowitzheaney.net
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ahmad</td>
                                <td>Stehr</td>
                                <td>
                                    christy.marquardt@flatley.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sherman</td>
                                <td>Tromp</td>
                                <td>
                                    yasmine.brown@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mara</td>
                                <td>King</td>
                                <td>
                                    nico.kshlerin@swift.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Junius</td>
                                <td>Howe</td>
                                <td>
                                    auer.leonel@yahoo.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bella</td>
                                <td>Cummings</td>
                                <td>
                                    gankunding@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Clemens</td>
                                <td>
                                    O&#039;Reilly
                                </td>
                                <td>
                                    rosalinda.carroll@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mekhi</td>
                                <td>Marks</td>
                                <td>
                                    terry.odie@dickinson.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Delia</td>
                                <td>Jakubowski</td>
                                <td>
                                    ldoyle@feilfeil.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Krista</td>
                                <td>Bergstrom</td>
                                <td>
                                    florence.luettgen@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lottie</td>
                                <td>West</td>
                                <td>
                                    general54@howell.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gordon</td>
                                <td>Herzog</td>
                                <td>
                                    ckirlin@kessler.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Webster</td>
                                <td>Heaney</td>
                                <td>
                                    urobel@bartellsmith.biz
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Catalina</td>
                                <td>Bernhard</td>
                                <td>
                                    boehm.mason@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Evangeline</td>
                                <td>Erdman</td>
                                <td>
                                    ijaskolski@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Fatima</td>
                                <td>Rosenbaum</td>
                                <td>
                                    heidenreich.lenora@moen.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kiara</td>
                                <td>Hamill</td>
                                <td>
                                    raynor.maegan@klocko.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Joe</td>
                                <td>Cronin</td>
                                <td>
                                    vwiza@torp.org
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Emery</td>
                                <td>Goodwin</td>
                                <td>
                                    cummings.enrique@beer.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Marlee</td>
                                <td>Bednar</td>
                                <td>
                                    nwhite@pouros.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tevin</td>
                                <td>Price</td>
                                <td>
                                    lueilwitz.dewayne@hotmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Franco</td>
                                <td>Waelchi</td>
                                <td>
                                    quigley.karelle@gmail.com
                                </td>
                                <td>Activated</td>
                                <td>
                                    2 weeks ago
                                </td>
                                <td>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                    <a href="view_user.php">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <!-- Modal for showing delete confirmation -->
                    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="user_delete_confirm_title">
                                        Delete User
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete this user? This operation is irreversible.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <a href="#" type="button" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
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
<script type="text/javascript" src="../vendors/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../vendors/datatables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('#table').dataTable();
    });
    </script>
<!-- end of page level js -->
</body>
</html>