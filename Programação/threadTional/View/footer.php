<!-- //new -->
<!-- //footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                <h3>Contato</h3>

                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                </ul>
            </div>

            <div class="col-md-3 w3_footer_grid">
                <h3>Categoria</h3>
                <ul class="info"> 
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Perfumes</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Cabelos</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Maquiagem</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Estética</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Perfil</h3>
                <ul class="info"> 
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="finalizarPedido.php">Finalizar pedidos</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="footer-copy">

        <div class="container">
            <p>© 2017 Loja ThreadTional. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>

</div>	
<div class="footer-botm">
    <div class="container">
        <div class="w3layouts-foot">
            <ul>
                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
// Mini Cart


</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">

    //paypal.minicart.cart.add('<');
    //var myTemplate = "<div><%= config.strings.subtotal %> <%= cart.total({ format: true, showCode: true }) %></div>";
      paypal.minicart.render();

        paypal.minicart.cart.on('checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    jQuery(document).ready(function () {
        $("#enviar").on("submit", function (event) {
            event.preventDefault();
            alert('here');

        }
        );

        jQuery('#demo1').skdslider({'delay': 5000, 'animationSpeed': 2000, 'showNextPrev': true, 'showPlayButton': true, 'autoSlide': true, 'animationType': 'fading'});

        jQuery('#responsive').change(function () {
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>	
<script type="text/javascript" src="vendors/wizard/jquery-steps/js/jquery.validate.min.js"></script>
<script  src="vendors/wizard/jquery-steps/js/additional-methods.min.js" type="text/javascript"></script>
<script src="vendors/wizard/jquery-steps/js/wizard.js"></script>
<script src="vendors/wizard/jquery-steps/js/jquery.steps.js"></script>
<script src="vendors/wizard/jquery-steps/js/form_wizard.js"></script>
<script src="js/pages/formwizard.js"></script>
<!-- //main slider-banner --> 
</body>
</html>