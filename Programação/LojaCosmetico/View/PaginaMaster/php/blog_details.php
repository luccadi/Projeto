<?php
$page = 'blog_details';
$title = 'Blog Details';
$css = <<<EOT
<!--page level css-->
    <link rel="stylesheet" href="../css/pages/blog.css" />
    <!--end of page level css-->
EOT;
require_once('header.php');
?>
    
<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Blog Details</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li class="active">Blog Details</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-sm-8 col-md-9 col-full-width-right">
                        <div class="blog-detail-image">
                            <img data-src="holder.js/1900x380/#00bc8c:#fff" class="img-responsive" alt="Image">
                        </div>
                        <!-- /.blog-detail-image -->
                        <div class="the-box no-border blog-detail-content">
                            <p>
                                <span class="label label-danger square">July 11, 2014 @05:10:45 PM</span>
                            </p>
                            <p class="text-justify">
                                Cookie jelly beans soufflé icing. Gummi bears tootsie roll powder chupa chups cheesecake chocolate jelly-o lollipop lollipop. Halvah applicake chupa chups. Marshmallow chocolate jujubes icing lollipop gummi bears chupa chups pudding bonbon. Jelly beans jelly soufflé jujubes. Sesame snaps lollipop icing donut lemon drops soufflé. Tilefish electric knifefish salmon shark southern Dolly Varden. Pacific argentine tope golden shiner ilisha barreleye loosejaw catla, dogteeth tetra catfish tenpounder nase scup Ragfish brotula." Codlet brook lamprey pleco, Japanese eel convict cichlid titan triggerfish, plownose chimaera topminnow Black scalyfin. Walleye pollock, blue shark Sacramento blackfish prickleback airbreathing catfish yellowfin cutthroat trout, goby southern sandfish. North Pacific daggertooth dorab cepalin weever flying gurnard.
                            </p>
                            <blockquote>
                                <p>
                                    Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science.
                                </p>
                                <small>
                                    Someone famous in
                                    <cite title="Source Title">Source Title</cite>
                                </small>
                            </blockquote>
                            <h3>Sub heading here</h3>
                            <p class="text-justify">
                                Donut caramels gingerbread. Sweet roll macaroon pastry cotton candy oat cake sesame snaps biscuit lemon drops dessert. Candy canes carrot cake danish carrot cake soufflé jelly chocolate cake muffin. Topping brownie donut. Oat cake marzipan dragée cheesecake. Donut chocolate cake jujubes tart dragée toffee.
                            </p>
                            <h3>Sub heading here</h3>
                            <p class="text-justify">
                                Cookie jelly beans soufflé icing. Gummi bears tootsie roll powder chupa chups cheesecake chocolate jelly-o lollipop lollipop. Halvah applicake chupa chups. Marshmallow chocolate jujubes icing lollipop gummi bears chupa chups pudding bonbon. Jelly beans jelly soufflé jujubes. Sesame snaps lollipop icing donut lemon drops soufflé. Donut caramels gingerbread. Sweet roll macaroon pastry cotton candy oat cake sesame snaps biscuit lemon drops dessert. Candy canes carrot cake danish carrot cake soufflé jelly chocolate cake muffin. Topping brownie donut. Oat cake marzipan dragée cheesecake. Donut chocolate cake jujubes tart dragée toffee. Tilefish electric knifefish salmon shark southern Dolly Varden. Pacific argentine tope golden shiner ilisha barreleye loosejaw catla, dogteeth tetra catfish tenpounder nase scup Ragfish brotula." Codlet brook lamprey pleco, Japanese eel convict cichlid titan triggerfish, plownose chimaera topminnow Black scalyfin. Walleye pollock, blue shark Sacramento blackfish prickleback airbreathing catfish yellowfin cutthroat trout, goby southern sandfish. North Pacific daggertooth dorab cepalin weever flying gurnard.
                            </p>
                            <hr>
                            <p>
                                <span class="label label-info square">LEAVE A COMMENT</span>
                            </p>
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" placeholder="Your email address">
                                </div>
                                <div class="form-group">
                                    <input type="url" class="form-control input-lg" placeholder="Your website">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control input-lg no-resize" style="height: 200px" placeholder="Your comment"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-md">
                                        <i class="fa fa-comment"></i>
                                        Submit comment
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /the.box .no-border -->
                    </div>
                    <!-- /.col-sm-9 -->
                    <div class="col-sm-4 col-md-3 col-full-width-left">
                        <div class="the-box bg-primary no-border text-center no-margin more-padding">
                            <h4 style="color:black">MOST POPULAR</h4>
                            <h2>
                                <a href="">
                                    You know, being a test pilot isn't always the healthiest business in the world.
                                </a>
                            </h2>
                            <p>April 2l, 2014</p>
                            <button class="btn btn-primary btn-block">Read more</button>
                        </div>
                        <!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
                        <div class="the-box bg-warning no-border no-margin text-center more-padding">
                            <h4 style="color:black">FEATURED AUTHORS</h4>
                            <br>
                            <div class="row">
                                <div class="col-xs-3">
                                    <p>
                                        <a href="#fakelink">
                                            <img data-src="holder.js/22x22/#00bc8c:#fff" class="img-responsive img-circle" alt="riot">
                                        </a>
                                    </p>
                                </div>
                                <!-- /.col-xs-3 -->
                                <div class="col-xs-3">
                                    <p>
                                        <a href="#fakelink">
                                            <img data-src="holder.js/22x22/#00bc8c:#fff" class="img-responsive img-circle" alt="riot">
                                        </a>
                                    </p>
                                </div>
                                <!-- /.col-xs-3 -->
                                <div class="col-xs-3">
                                    <p>
                                        <a href="#fakelink">
                                            <img data-src="holder.js/22x22/#00bc8c:#fff" class="img-responsive img-circle" alt="riot">
                                        </a>
                                    </p>
                                </div>
                                <!-- /.col-xs-3 -->
                                <div class="col-xs-3">
                                    <p>
                                        <a href="#fakelink">
                                            <img data-src="holder.js/22x22/#00bc8c:#fff" class="img-responsive img-circle" alt="riot">
                                        </a>
                                    </p>
                                </div>
                                <!-- /.col-xs-3 -->
                            </div>
                            <!-- /.row -->
                            <button class="btn btn-success btn-block">Browse all author</button>
                        </div>
                        <!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
                        <div class="the-box no-border no-margin more-padding">
                            <span class="label label-success square">RECENT POSTS</span>
                            <ul class="media-list media-sm media-dotted recent-post">
                                <li class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="blog-detail.php">Duis autem vel eum iriure dolor in hendrerit in</a>
                                        </h4>
                                        <p>
                                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        </p>
                                        <p class="text-danger">
                                            <small>July 11, 2014</small>
                                        </p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="blog-detail.php">Nam liber tempor cum soluta nobis eleifend</a>
                                        </h4>
                                        <p>
                                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        </p>
                                        <p class="text-danger">
                                            <small>July 11, 2014</small>
                                        </p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="blog-detail.php">Typi non habent claritatem insitam</a>
                                        </h4>
                                        <p>
                                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        </p>
                                        <p class="text-danger">
                                            <small>July 11, 2014</small>
                                        </p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="blog-detail.php">Claritas est etiam processus dynamicus</a>
                                        </h4>
                                        <p>
                                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        </p>
                                        <p class="text-danger">
                                            <small>July 11, 2014</small>
                                        </p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="blog-detail.php">Claritas est etiam processus dynamicus</a>
                                        </h4>
                                        <p>
                                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        </p>
                                        <p class="text-danger">
                                            <small>July 11, 2014</small>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
                    </div>
                    <!-- /.col-sm-3 -->
                </div>
                <!--main content ends-->
            </section>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
<?php
require_once('footer.php');
?>   

</html>
</body>
