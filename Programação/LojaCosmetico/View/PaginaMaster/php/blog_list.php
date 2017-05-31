<?php
$page = 'blog_list';
$title = 'Blog List';
$css = <<<EOT
<!--page level css -->
<link rel="stylesheet" href="../vendors/tags/dist/bootstrap-tagsinput.css" />
<link rel="stylesheet" href="../css/pages/blog.css" />
<!--end of page level css-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>Blog List</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li class="active">Blog List</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <div class="col-md-8">
                <!-- BEGIN FEATURED POST -->
                <div class="featured-post-wide">
                    <img data-src="holder.js/1900x263/#418bca:#fff" class="img-responsive" alt="Image">
                    <div class="featured-text relative-left">
                        <h3>
                            <a href="#">
                                Sample blog post
                            </a>
                        </h3>
                        <p class="date">
                            2 hours ago
                        </p>
                        <p>
                            Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.
                        </p>
                        <p class="additional-post-wrap">
                            <span class="additional-post"> <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i>
                                by
                                <a href="#">Admin</a>
                            </span>
                            <span class="additional-post">
                                <i class="livicon" data-name="clock" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i>
                                <a href="#">April 20</a>
                            </span>
                            <span class="additional-post">
                                <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i>
                                <a href="#">3 comments</a>
                            </span>
                        </p>
                        <hr>
                        <p class="text-right">
                            <a href="blog_details.php" class="btn btn-info">Read more</a>
                        </p>
                    </div>
                    <!-- /.featured-text --> </div>
                <!-- /.featured-post-wide -->
                <!-- END FEATURED POST -->
                <!-- BEGIN FEATURED POST -->
                <div class="featured-post-wide">
                    <img data-src="holder.js/1900x263/#00bc8c:#fff" class="img-responsive" alt="Image">
                    <div class="featured-text relative-left">
                        <h3>
                            <a href="#">
                                Sample blog post 2
                            </a>
                        </h3>
                        <p class="date">
                            2 hours ago
                        </p>
                        <p>
                            Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.
                        </p>
                        <p class="additional-post-wrap">
                            <span class="additional-post">
                                <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i>
                                by
                                <a href="#">Admin</a>
                            </span>
                            <span class="additional-post">
                                <i class="livicon" data-name="clock" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i>
                                <a href="#">April 20</a>
                            </span>
                            <span class="additional-post">
                                <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i>
                                <a href="#">3 comments</a>
                            </span>
                        </p>
                        <hr>
                        <p class="text-right">
                            <a href="blog_details.php" class="btn btn-info">Read more</a>
                        </p>
                    </div>
                    <!-- /.featured-text --> </div>
                <!-- /.featured-post-wide -->
                <!-- END FEATURED POST -->
                <!-- BEGIN FEATURED POST -->
                <div class="featured-post-wide">
                    <img data-src="holder.js/1900x263/#5bc0de:#fff" class="img-responsive" alt="Image">
                    <div class="featured-text relative-left">
                        <h3>
                            <a href="#">
                                Sample blog post 3
                            </a>
                        </h3>
                        <p class="date">
                            2 hours ago
                        </p>
                        <p>
                            Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.
                        </p>
                        <p class="additional-post-wrap">
                            <span class="additional-post">
                                <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i>
                                by
                                <a href="#">Admin</a>
                            </span>
                            <span class="additional-post">
                                <i class="livicon" data-name="clock" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i>
                                <a href="#">April 20</a>
                            </span>
                            <span class="additional-post">
                                <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i>
                                <a href="#">3 comments</a>
                            </span>
                        </p>
                        <hr>
                        <p class="text-right">
                            <a href="blog_details.php" class="btn btn-info">Read more</a>
                        </p>
                    </div>
                    <!-- /.featured-text --> </div>
                <!-- /.featured-post-wide -->
                <!-- END FEATURED POST -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">← Older</a>
                    </li>
                    <li class="next disabled">
                        <a href="#">Newer →</a>
                    </li>
                </ul>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <!-- BEGIN POPULAR POST -->
                <div class="the-box no-border bg-danger text-center signup-newsletter">
                    <h4 class="small-heading more-margin-bottom">
                        POPULAR POST
                    </h4>
                    <a href="#">
                        <h3>
                            You know, being a test pilot isn't always the healthiest business in the world.
                        </h3>
                    </a>
                    <p>
                        <small>
                            WRITTEN BY
                            <a href="#">
                                ADMINISTRATOR
                            </a>
                        </small>
                    </p>
                    <hr>
                    <p>
                        <button class="btn btn-danger btn-block">
                            READ MORE THIS STORY
                        </button>
                    </p>
                </div>
                <!-- /.the-box .no-border -->
                <!-- END POPULAR POST -->
                <!-- BEGIN JOIN NEWSLETTER -->
                <div class="the-box no-border text-center signup-newsletter">
                    <h4 class="small-heading more-margin-bottom">
                        JOIN NEWSLETTER
                    </h4>
                    <p>
                        Sign up for our daily Newslatter
                    </p>
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter email"></div>
                            </div>
                            <!-- /.col-xs-8 -->
                            <div class="col-xs-4 col-full-width-left">
                                <button type="submit" class="btn btn-info btn-block">Sign up</button>
                            </div>
                            <!-- /.col-xs-4 --> </div>
                        <!-- /.row --> </form>
                </div>
                <!-- /.the-box .no-border -->
                <!-- END JOIN NEWSLETTER -->
                <!-- BEGIN TAG CLOUD -->
                <div class="the-box no-border tags-cloud">
                    <div class="example example_markup">
                        <h3>TAGS CLOUD</h3>
                        <p>
                            Just add
                            <code>data-role="tagsinput"</code>
                            to your input field to automatically change it to a tags input field.
                        </p>
                        <div class="bs-example">
                            <input type="text" value="Bootstrap,Photoshop,HTML,CSS3,Jquery" data-role="tagsinput" />
                        </div>
                        <div class="accordion">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#accordion_example_markup">Show code</a>
                                </div>
                                <div id="accordion_example_markup" class="accordion-body collapse">
                                    <div class="accordion-inner highlight">
                                        <pre class="prettyprint linenums">&lt;input type=&quot;text&quot; value=&quot;Bootstrap,Photoshop,HTML,CSS3,Jquery&quot; data-role=&quot;tagsinput&quot; /&gt;</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.the-box .no-border -->
                <!-- END TAG CLOUD -->
                <!-- BEGIN RECENT POST -->
                <div class="the-box no-border">
                    <h4 class="small-heading more-margin-bottom">
                        RECENT POSTS
                    </h4>
                    <ul class="media-list media-xs media-dotted">
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Duis autem vel eum iriure dolor in hendrerit in
                                    </a>
                                </h4>
                                <p class="date">
                                    <small>
                                        6 hours ago
                                    </small>
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Nam liber tempor cum soluta nobis eleifend
                                    </a>
                                </h4>
                                <p class="date">
                                    <small>yesterday</small>
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Typi non habent claritatem insitam
                                    </a>
                                </h4>
                                <p class="date">
                                    <small>
                                        April 21, 2014
                                    </small>
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Claritas est etiam processus dynamicus
                                    </a>
                                </h4>
                                <p class="date">
                                    <small>
                                        February 20, 2014
                                    </small>
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Claritas est etiam processus dynamicus
                                    </a>
                                </h4>
                                <p class="date">
                                    <small>
                                        February 05, 2014
                                    </small>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.the-box .no-border -->
                <!-- END RECENT POST -->
                <!-- BEGIN RECENT COMMENTS -->
                <div class="the-box no-border">
                    <h4 class="small-heading more-margin-bottom">
                        RECENT COMMENTS
                    </h4>
                    <ul class="media-list media-xs media-dotted">
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img data-src="holder.js/35x35/#00bc8c:#fff" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot"></a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Elizabeth Owens
                                    </a>
                                    at
                                    <a href="#">
                                        Duis autem vel eum iriure dolor in hendrerit in
                                    </a>
                                </h4>
                                <p class="date">
                                    <small>yesterday</small>
                                </p>
                                <p class="small">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo...
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img data-src="holder.js/35x35/#00bc8c:#fff" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot"></a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Harold Chavez
                                    </a>
                                    at
                                    <a href="#">
                                        Duis autem vel eum iriure dolor in hendrerit in
                                    </a>
                                </h4>
                                <p class="date">
                                    <small>yesterday</small>
                                </p>
                                <p class="small">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo...
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img data-src="holder.js/35x35/#00bc8c:#fff" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot"></a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Mihaela Cihac
                                    </a>
                                    at
                                    <a href="#">
                                        Duis autem vel eum iriure dolor in hendrerit in
                                    </a>
                                </h4>
                                <p class="date">
                                    <small>yesterday</small>
                                </p>
                                <p class="small">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo...
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.the-box .no-border -->
                <!-- END RECENT COMMENTS --> </div>
            <!-- /.col-md-4 --> </div>
        <!--main content ends--> </section>
    <!-- content -->
</aside>
<!-- right-side -->

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<!--tags-->
<script src="../vendors/tags/dist/bootstrap-tagsinput.js"></script>
<!-- end of page level js -->
</body>
</html>