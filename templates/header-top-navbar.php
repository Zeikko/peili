<header>
    <div id="city-top">
        <div class="container">
            <div class="banner navbar" role="banner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="<?php echo home_url(); ?>/">
                    <?php bloginfo('name'); ?>
                </a>
                <nav class="nav-main nav-collapse collapse" role="navigation">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
                    endif;
                    ?>
                </nav>
                <div class="clearfix"></div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        jQuery('.slideshow').bxSlider({
                            auto: true,
                        });
                    });
                </script>

            </div>
            <div class="slideshow">
                <div class="entry slide six columns alpha omega">
                    <div class="caption-absolute">
                        <div class="caption-relative">Peili - Markkinoinnin salapoliisitoimisto</div>
                    </div>
                    <img class="slide-image" src="/assets/img/detective.jpg" alt="" />
                </div>
                <div class="entry slide six columns alpha omega">
                    <div class="caption-absolute">
                        <div class="caption-relative">Facebook - uusi tapa ymmärtää asiakkaitasi</div>
                    </div>
                    <img class="slide-image" src="/assets/img/peili.jpg" alt="" />
                </div>
                <div class="entry slide six columns alpha omega">
                    <div class="caption-absolute">
                        <div class="caption-relative">Asiakastutkimukset - liiketoimintasi tärkein mittari</div>
                    </div>
                    <img class="slide-image" src="/assets/img/kirjoituskone.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</header>
