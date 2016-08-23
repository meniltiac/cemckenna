<?php

/* LOAD STYLESHEETS
================================================== */
if (!function_exists('sf_enqueue_styles')) {
    function sf_enqueue_styles() {

        wp_enqueue_style('bootstrap', '/wp-content/themes/cemckenna/bootstrap-4.0.0-alpha.3/dist/css/bootstrap.css', array(), NULL, 'all');
    }
    add_action('wp_enqueue_scripts', 'sf_enqueue_styles', 99);
}
