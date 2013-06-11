<?php

/**
 * Roots includes
 */
require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/activation.php');      // Theme activation
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/nav.php');             // Custom nav modifications
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/rewrites.php');        // URL rewriting for assets
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/scripts.php');         // Scripts and stylesheets
require_once locate_template('/lib/custom.php');          // Custom functions

function contact_details_func($atts) {
    extract(shortcode_atts(array(
        'name' => null,
        'title' => null,
        'email' => null,
        'phone' => null,
                    ), $atts));

    $html = '
            <div class="contact-details" itemscope itemtype=\"Person\"> 
            <div class="information">
                <h3 itemprop="name">' . $name . '</h3>
                <div itemprop="jobTitle">' . $title . '</div>
                <div itemprop="email">' . $email . '</div>';
    if ($phone)
        $html .= '
                <div itemprop="telephone">' . $phone . '</div>';
    $html .= '
        <div>www.peili-markkinointi.fi</div>
        </div>
    </div>';
    return $html    ;
}

add_shortcode('contact_details', 'contact_details_func');