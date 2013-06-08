<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

    <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

    <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
        get_template_part('templates/header-top-navbar');
    } else {
        get_template_part('templates/header');
    }
    ?>
    <div id="city-bottom">
        <div class="wrap container white" role="document">
            <div class="row add-bottom">
                <div class="span1">
                    &nbsp;
                </div>
                <div class="main span10" role="main">
                    <div class="content clearfix">
                        <?php include roots_template_path(); ?>
                    </div>
                </div><!-- /.main -->
                <div class="span1">
                    &nbsp;
                </div>
                <?php if (roots_display_sidebar()) : ?>
                    <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
                        <?php include roots_sidebar_path(); ?>
                    </aside><!-- /.sidebar -->
                <?php endif; ?>
            </div>
            <img src="/assets/img/arrow.jpg" alt="arrow" />
        </div><!-- /.wrap -->
    </div>
    <?php get_template_part('templates/footer'); ?>

</body>
</html>
