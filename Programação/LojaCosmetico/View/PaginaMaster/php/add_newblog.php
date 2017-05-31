<?php
$page = 'add_newblog';
$title = 'Add New Blog';
$css = <<<EOT
<!--page level css -->
<link rel="stylesheet" href="../css/pages/blog.css" />
<link href="../vendors/bootstrap-wysihtml5-rails-b3/src/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
<!--end of page level css-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            Add new blog
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li class="active">
                Add new blog
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content paddingleft_right15">
        <!--main content-->
        <div class="row">
            <div class="the-box no-border">
                <form role="form">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="Post title here..."></div>
                            <div class='box-body pad'>

                                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                            </div>
                        </div>
                        <!-- /.col-sm-8 -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>
                                    Post category
                                </label>
                                <input type="text" class="form-control" placeholder="Post category"></div>
                            <div class="form-group">
                                <label>Post date</label>
                                <input type="text" class="form-control datepicker" data-date-format="mm-dd-yy" placeholder="mm-dd-yy"></div>
                            <div class="form-group">
                                <label>
                                    Post author
                                </label>
                                <input type="text" class="form-control" placeholder="Post author"></div>
                            <div class="form-group">
                                <label>
                                    Featured image
                                </label>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <span class="btn btn-primary btn-file">
                                        <span class="fileupload-new">
                                            Select file
                                        </span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" />
                                    </span>
                                    <span class="fileupload-preview"></span>
                                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">
                                    Save and post
                                </button>
                                <button class="btn btn-danger">Discard</button>
                            </div>
                        </div>
                        <!-- /.col-sm-4 --> </div>
                    <!-- /.row --> </form>
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
<!--new blog-->
<script type="text/javascript" src="../vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js"></script>
<script type="text/javascript" src="../vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js"></script>
<script type="text/javascript">
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.

        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
    </script>
<!-- end of page level js -->
</body>
</html>