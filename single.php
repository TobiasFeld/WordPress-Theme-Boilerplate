<?php
/**
 *
 * <head>
 *
 */
get_template_part( 'partials/head', get_post_type() );



/**
 *
 * Header
 *
 */
get_template_part( 'partials/header', get_post_type() );



/**
 *
 * Content
 *
 */
the_post();
get_template_part( 'partials/content', get_post_type() );



/**
 *
 * Footer
 *
 */
get_template_part( 'partials/footer', get_post_type() );



/**
 *
 * Foot
 *
 */
get_template_part( 'partials/foot', get_post_type() );