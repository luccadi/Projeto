<?php
$page = 'deleted_users';
$title = 'Deleted Users';
$css = <<<EOT
<!--page level css -->
<link rel="stylesheet" type="text/css" href="../vendors/datatables/css/dataTables.bootstrap.css" />
<link href="../css/pages/tables.css" rel="stylesheet" type="text/css" />
<!-- end page css -->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Deleted users
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Users</li>
            <li class="active">
                Deleted users
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="users-remove" data-size="18" data-c="#ffffff" data-hc="#ffffff"></i>
                        Deleted Users List
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr class="filters">
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>
                                        User E-mail
                                    </th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Adele</td>
                                    <td>Becker</td>
                                    <td>
                                        otis98@hotmail.com
                                    </td>
                                    <td>
                                        2 weeks ago
                                    </td>
                                    <td>
                                        <a href="">
                                            <i class="livicon" data-name="user-flag" data-c="#01BC8C" data-hc="#01BC8C" data-size="18" title="restore"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Adan</td>
                                    <td>Schmeler</td>
                                    <td>
                                        arnoldo19@gmail.com
                                    </td>
                                    <td>
                                        2 weeks ago
                                    </td>
                                    <td>
                                        <a href="">
                                            <i class="livicon" data-name="user-flag" data-c="#01BC8C" data-hc="#01BC8C" data-size="18" title="restore"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Abbey</td>
                                    <td>Conn</td>
                                    <td>
                                        lehner.rhianna@christiansenwill.info
                                    </td>
                                    <td>
                                        2 weeks ago
                                    </td>
                                    <td>
                                        <a href="">
                                            <i class="livicon" data-name="user-flag" data-c="#01BC8C" data-hc="#01BC8C" data-size="18" title="restore"></i>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
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
<script type="text/javascript" src="../vendors/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../vendors/datatables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
    </script>
<!-- end of page level js -->
</body>
</html>