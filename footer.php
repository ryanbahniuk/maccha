        <footer>
            <div class="container">
                <div class="row">
                    <?php //places the first widgetized area in the footer ?>
                    <?php if (!dynamic_sidebar('footer_1')) : ?>
                        <div class="alert alert-danger col-sm-3">
                            <p>No Widgets Activated!</p>
                        </div>
                    <? endif; ?>
                    
                    <?php //places the second widgetized area in the footer ?>
                    <?php if (!dynamic_sidebar('footer_2')) : ?>
                        <div class="alert alert-danger col-sm-3">
                            <p>No Widgets Activated!</p>
                        </div>
                    <? endif; ?>
                    
                    <?php //places the third widgetized area in the footer ?>
                    <?php if (!dynamic_sidebar('footer_3')) : ?>
                        <div class="alert alert-danger col-sm-3">
                            <p>No Widgets Activated!</p>
                        </div>
                    <? endif; ?>
                    
                    <?php //places the fourth widgetized area in the footer ?>
                    <?php if (!dynamic_sidebar('footer_4')) : ?>
                        <div class="alert alert-danger col-sm-3">
                            <p>No Widgets Activated!</p>
                        </div>
                    <? endif; ?>
                </div>
            </div>
        </footer>

       
        <script type="text/javascript">var directory = "<?php echo get_template_directory_uri(); ?>";</script>
        <script type="text/javascript">var home = "<?php bloginfo( 'url' ); ?>";</script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

        <?php wp_footer(); ?>

    </body>
</html>