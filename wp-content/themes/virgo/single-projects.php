<?php

/**
 * Template Name: sidebar left dark 
 * Preview:
 *
 */

 
get_template_part( 'partials/header','dark' );
if ( have_posts() ) :
    while ( have_posts() ) : the_post();


        $shotrcodes = get_the_content();
        preg_match_all( '#\[virgo_header_slider.*?\]#', $shotrcodes, $math );
        preg_match_all( '#\[virgo_about_main_section.*?\]#', $shotrcodes, $math_v );
        preg_match_all( '#\[virgo_page_heading_section.*?\]#', $shotrcodes, $heading );


        if ( isset( $math_v[0][0] ) ) {
            echo do_shortcode( apply_filters( 'the_content', $math_v[0][0] ) );
        }

        if ( isset( $heading[0][0] ) ) {
            echo do_shortcode( apply_filters( 'the_content', $heading[0][0] ) );
        }


        ?>

        <?php if ( isset( $math[0][0] ) ) {
            echo do_shortcode( apply_filters( 'the_content', $math[0][0] ) );
        } ?>
        <?php
        $content = $shotrcodes;

        if ( isset( $math[0][0] ) ) {
            $content = apply_filters( 'the_content', str_replace( $math[0][0], '', $shotrcodes ) );
        }
        ?>
        <div class="content">

            <?php


            if ( isset( $math_v[0][0] ) ) {
                $content = apply_filters( 'the_content', str_replace( $math_v[0][0], '', $shotrcodes ) );
            }
            if ( isset( $heading[0][0] ) ) {
                $content = apply_filters( 'the_content', str_replace( $heading[0][0], '', $shotrcodes ) );
            }

            if ( isset( $_GET['vc_editable'] ) ) {

                echo do_shortcode( str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) ) );
            } else {
                echo do_shortcode( str_replace( ']]>', ']]&gt;', $content ) );

            }
            
            ?>

        </div>
    <?php endwhile;
else :
endif; ?>
   <?php 
get_template_part( 'partials/footer','dark' );


