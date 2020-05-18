<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package virgo
 */
/* HEADER ------------------------------------------- */
function virgo_custom_styling() { ?>
	<?php if ( function_exists( 'ot_get_option' ) ) : ?>

		<style>
			<?php if ( ot_get_option( 'virgo_logowidth' ) !='' &&  ot_get_option( 'virgo_logowidth' ) != '39'): ?>
			.brand img {
				width: <?php echo esc_attr( ot_get_option( 'virgo_logowidth' ) ); ?>px;
			}
			<?php endif; ?>

			<?php if ( ot_get_option( 'virgo_font_size' ) !='' &&  ot_get_option( 'virgo_font_size' ) != '1.875'): ?>
			.brand {
				font-size: <?php echo esc_attr( ot_get_option( 'virgo_font_size' ) ); ?>em;
			}
			
			<?php endif; ?>
			<?php if( is_customize_preview('administrator')): ?>
			.logged-in .navbar.affix, .logged-in .navbar {
				top: 0px;
			}

			<?php endif; ?>

			<?php if ( ot_get_option( 'virgo_navigationbg' ) !='' ): ?>
			.navbar-desctop.affix-top {
				background-color: <?php echo esc_attr( ot_get_option( 'virgo_navigationbg' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_navitem' ) !='' ): ?>
			.navbar-desctop > li > a {
				color: <?php echo esc_attr( ot_get_option( 'virgo_navitem' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_navitem_affix' ) !='' ): ?>
			.navbar-desctop.affix-top .navbar-desctop li a {
				color: <?php echo esc_attr( ot_get_option( 'virgo_navitem' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_navitemhover' ) !='' ): ?>
			.navbar-desctop > li > a:hover, .navbar-desctop > li > a:focus, .navbar-desctop > .active > a {
				color: <?php echo esc_attr( ot_get_option( 'virgo_navitem_affix' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_navigationbg' ) !='' ): ?>

			.navbar-desctop.affix-top .navbar-desctop li > a:hover,
			.navbar-desctop.affix-top .navbar-desctop .active > a {
				color: <?php echo esc_attr( ot_get_option( 'virgo_navigationbg' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_sidebarwidgettitlecolor' ) !='' ): ?>
			.widget-title {

				color: <?php echo esc_attr( ot_get_option( 'virgo_sidebarwidgettitlecolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_sidebarwidgetgeneralcolor' ) !='' ): ?>
			.widget ul, .widget li {
				color: <?php echo esc_attr( ot_get_option( 'virgo_sidebarwidgetgeneralcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_sidebarlinkcolor' ) !='' ): ?>
			.widget ul li a {
				color: <?php echo esc_attr( ot_get_option( 'virgo_sidebarlinkcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_sidebarlinkhovercolor' ) !='' ): ?>
			.widget ul li a:hover {
				color: <?php echo esc_attr( ot_get_option( 'virgo_sidebarlinkhovercolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_sidebarsearchsubmittextcolor' ) !='' ): ?>
			input[type="text"], input[type="password"], input[type="search"], input[type="email"], input[type="phone"], input[type="tel"], textarea, select {
				color: <?php echo esc_attr( ot_get_option( 'virgo_sidebarsearchsubmittextcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_sidebarsearchsubmitbgcolor' ) !='' ): ?>
			.search-form button {
				color: <?php echo esc_attr( ot_get_option( 'virgo_sidebarsearchsubmitbgcolor' ) ); ?>;
			}

			<?php endif; ?>

			<?php if ( ot_get_option( 'virgo_blogheaderpaddingtop' ) !='' && ot_get_option( 'virgo_blogheaderpaddingtop' ) !='17'): ?>

			.page .main-inner , .category .main-inner {

				padding-top: <?php echo esc_attr( ot_get_option( 'virgo_blogheaderpaddingtop' ) ); ?>em !important;
				padding-bottom: <?php echo esc_attr( ot_get_option( 'virgo_blogheaderpaddingbottom' ) ); ?>em !important;
				padding-left: 0em;
				padding-right: 0em;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_blogheadingcolor' ) !='' ): ?>
			.page .main-blog h1, .category .main-blog h1, .page .main-blog p.lead, .category .main-blog p.lead {
				color: <?php echo esc_attr( ot_get_option( 'virgo_blogheadingcolor' ) ); ?>;
			}
			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_blogsubtitlecolor' ) !='' ): ?>
			.category .blog-list h3.post-title {
				color: <?php echo esc_attr( ot_get_option( 'virgo_blogsubtitlecolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_m_c' ) !='' ): ?>
			.showcase-item-hover {
				background-color: <?php echo esc_attr( ot_get_option( 'virgo_m_c' ) ); ?> !important;
			}

			.address-panel-2 {
				background-color: <?php echo esc_attr( ot_get_option( 'virgo_m_c' ) ); ?> !important;
			}

			<?php endif; ?>
			<?php if ( ot_get_option('virgo_mask') == 'off') : ?>
			.showcase-item-hover {
				background-color: transparent;
			}



			<?php endif; ?>

			<?php if ( ot_get_option('virgo_mask_c_page_header') == 'off') : ?>
			.main-blog {
				background: none !important;
			}

			<?php endif; ?>

			<?php if ( ot_get_option( 'virgo_frontpage_header_slogan_color' ) !='' ): ?>
			.home p {
				color: <?php echo esc_attr( ot_get_option( 'virgo_frontpage_header_slogan_color' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_frontpage_header_buttonbg_color' ) !='' ): ?>
			.home .btn, .home [type="submit"] {
				background-color: <?php echo esc_attr( ot_get_option( 'virgo_frontpage_header_buttonbg_color' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_frontpage_header_buttonbg_hover_color' ) !='' ): ?>
			.home .btn:hover, .home .btn:focus, .home [type="submit"]:hover, .home [type="submit"]:focus {
				background-color: <?php echo esc_attr( ot_get_option( 'virgo_frontpage_header_buttonbg_hover_color' ) ); ?>;
			}

			<?php endif; ?>

			<?php if ( ot_get_option( 'virgo_singleheadingcolor' ) !='' ): ?>
			.single .main-inner h1,.single .main-inner p.lead {
				color: <?php echo esc_attr( ot_get_option( 'virgo_singleheadingcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_singleheaderparagraphcolor' ) !='' ): ?>
			.single .blog-list h3 {
				color: <?php echo esc_attr( ot_get_option( 'virgo_singleheaderparagraphcolor' ) ); ?> !important;
			}

			<?php endif; ?>

			<?php if ((    ot_get_option( 'virgo_singleheaderpaddingtop' ) !='' and ot_get_option( 'virgo_singleheaderpaddingtop' ) !='17') ||(ot_get_option( 'virgo_singleheaderpaddingbottom' ) !='' &&  ot_get_option( 'virgo_singleheaderpaddingbottom' ) !='14' )): ?>

			.single .main-inner   {
				padding-top: <?php echo esc_attr( ot_get_option( 'virgo_singleheaderpaddingtop' ) ); ?>em !important;
				padding-bottom: <?php echo esc_attr( ot_get_option( 'virgo_singleheaderpaddingbottom' ) ); ?>em !important;
				padding-left: 0em;
				padding-right: 0em;
			}

			<?php endif; ?>

			<?php $virgo_archiveheadingcolor = ot_get_option( 'virgo_archiveheadingcolor', array() ); ?>
			<?php if($virgo_archiveheadingcolor) { ?>
			.archive .main-inner h1 {
				color: <?php echo esc_attr( $virgo_archiveheadingcolor['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_archiveheadingcolor['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_archiveheadingcolor['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_archiveheadingcolor['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_archiveheadingcolor['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_archiveheadingcolor['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_archiveheadingcolor['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_archiveheadingcolor['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_archiveheadingcolor['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_archiveheadingcolor['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php if (( ot_get_option( 'virgo_archiveheaderpaddingtop' ) !=''  &&   ot_get_option( 'virgo_archiveheaderpaddingtop' ) !='17') ||( ot_get_option( 'virgo_archiveheaderpaddingbottom' ) !='' && ot_get_option( 'virgo_archiveheaderpaddingbottom' ) !='14' )): ?>

			.archive .main-inner  {
				padding-top: <?php echo esc_attr( ot_get_option( 'virgo_archiveheaderpaddingtop' ) ); ?>em !important;
				padding-bottom: <?php echo esc_attr( ot_get_option( 'virgo_archiveheaderpaddingbottom' ) ); ?>em !important;
				padding-left: 0em;
				padding-right: 0em;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_errorpageheadbg' ) !='' ): ?>
			.main-404 {
				background: url( <?php echo esc_attr( ot_get_option( 'virgo_errorpageheadbg' ) ); ?>);
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_errorheaderbgcolor' ) !='' ): ?>
			.main-404 {
				background-color: <?php echo esc_attr( ot_get_option( 'virgo_errorheaderbgcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php $virgo_errorheadingcolor = ot_get_option( 'virgo_errorheadingcolor', array() ); ?>
			<?php if($virgo_errorheadingcolor) { ?>
			.error404 .main-inner h1 {
				color: <?php echo esc_attr( $virgo_errorheadingcolor['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_errorheadingcolor['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_errorheadingcolor['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_errorheadingcolor['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_errorheadingcolor['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_errorheadingcolor['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_errorheadingcolor['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_errorheadingcolor['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_errorheadingcolor['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_errorheadingcolor['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php if ( ot_get_option( 'virgo_errorheadingcolor' ) !='' ): ?>
			.main-404  h1 {
				color: <?php echo esc_attr( ot_get_option( 'virgo_errorheadingcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_errorheaderparagraphcolor' ) !='' ): ?>
			.main-404 p {
				color: <?php echo esc_attr( ot_get_option( 'virgo_errorheaderparagraphcolor' ) ); ?>;
			}

			<?php endif; ?>

			<?php $virgo_errorheaderparagraphcolor = ot_get_option( 'virgo_errorheaderparagraphcolor', array() ); ?>
			<?php if($virgo_errorheaderparagraphcolor) { ?>
			.main-404 p.lead {
				color: <?php echo esc_attr( $virgo_errorheaderparagraphcolor['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_errorheaderparagraphcolor['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_errorheaderparagraphcolor['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_errorheaderparagraphcolor['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_errorheaderparagraphcolor['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_errorheaderparagraphcolor['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_errorheaderparagraphcolor['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_errorheaderparagraphcolor['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_errorheaderparagraphcolor['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_errorheaderparagraphcolor['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php if ((ot_get_option( 'virgo_errorheaderpaddingtop' ) !=''  &&   ot_get_option( 'virgo_errorheaderpaddingtop' ) != '17')||( ot_get_option( 'virgo_errorheaderpaddingbottom' ) !='' && ot_get_option( 'virgo_errorheaderpaddingbottom' )  !='14' )): ?>

			.main-404  {
				padding-top: <?php echo esc_attr( ot_get_option( 'virgo_errorheaderpaddingtop' ) ); ?>em !important;
				padding-bottom: <?php echo esc_attr( ot_get_option( 'virgo_errorheaderpaddingbottom' ) ); ?>em !important;
				padding-left: 0em;
				padding-right: 0em;
			}

			<?php endif; ?>

			<?php if ( ot_get_option( 'virgo_searchpageheadbg' ) !='' ): ?>
			.search {
				background: url( <?php echo esc_attr( ot_get_option( 'virgo_searchpageheadbg' ) ); ?>) no-repeat scroll center top / cover !important;
			}

			<?php endif; ?>
			


			<?php $virgo_searchheaderbgcolor = ot_get_option( 'virgo_searchheaderbgcolor', array() ); ?>
			<?php if($virgo_searchheaderbgcolor) { ?>
			.search  .main-inner h1  {
				color: <?php echo esc_attr( $virgo_searchheaderbgcolor['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_searchheaderbgcolor['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_searchheaderbgcolor['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_searchheaderbgcolor['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_searchheaderbgcolor['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_searchheaderbgcolor['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_searchheaderbgcolor['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_searchheaderbgcolor['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_searchheaderbgcolor['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_searchheaderbgcolor['text-transform'] ) ; ?>;
			}

			<?php } ?>


			<?php if ( ot_get_option( 'virgo_search_heading_fontsize' ) !='' ): ?>
			.search .main-inner h1 {
				font-size: <?php echo esc_attr( ot_get_option( 'virgo_search_heading_fontsize' ) ); ?>px;
			}

			<?php endif; ?>


			<?php if ( ot_get_option( 'virgo_searchheaderpaddingtop' ) !='' && ot_get_option( 'virgo_searchheaderpaddingtop' ) !='17' ): ?>

			.search .main-inner {

				padding-top: <?php echo esc_attr( ot_get_option( 'virgo_searchheaderpaddingtop' ) ); ?>em !important;
				padding-bottom: <?php echo esc_attr( ot_get_option( 'virgo_searchheaderpaddingbottom' ) ); ?>em !important;
				padding-left: 0em;
				padding-right: 0em;
			}

			<?php endif; ?>



			<?php
			  /*
			 * Typography
			 */
			 $virgo_tipigrof = ot_get_option( 'virgo_tipigrof', array() ); ?>
			<?php if($virgo_tipigrof) { ?>
			body {
				color: <?php echo esc_attr( $virgo_tipigrof['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_tipigrof['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_tipigrof['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_tipigrof['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_tipigrof['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_tipigrof['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_tipigrof['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_tipigrof['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_tipigrof['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_tipigrof['text-transform'] ) ; ?>;
			}

			<?php } ?>
			<?php if ( ot_get_option( 'virgo_blogheaderbgcolor' ) !='' ): ?>
			.page .main, .single .main, 	.category .main {
				background-color: <?php echo esc_attr( ot_get_option( 'virgo_blogheaderbgcolor' ) ); ?> !important;

			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'virgo_blogheaderbgcolor_mask' ) !='' ): ?>
			.page .main-inner:before, .single .main-inner:before, 	.category .main-inner:before {
				background-color: <?php echo esc_attr( ot_get_option( 'virgo_blogheaderbgcolor_mask' ) ); ?> !important;

			}

			<?php endif; ?>
			<?php

			 $virgo_tipigrof1 = ot_get_option( 'virgo_tipigrof1', array() ); ?>
			<?php if( $virgo_tipigrof1 ) { ?>
			h1 {
				color: <?php echo esc_attr( $virgo_tipigrof1['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_tipigrof1['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_tipigrof1['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_tipigrof1['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_tipigrof1['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_tipigrof1['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_tipigrof1['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_tipigrof1['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_tipigrof1['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_tipigrof1['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php $virgo_tipigrof2 = ot_get_option( 'virgo_tipigrof2', array() ); ?>
			<?php if($virgo_tipigrof2) { ?>
			h2 {
				color: <?php echo esc_attr( $virgo_tipigrof2['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_tipigrof2['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_tipigrof2['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_tipigrof2['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_tipigrof2['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_tipigrof2['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_tipigrof2['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_tipigrof2['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_tipigrof2['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_tipigrof2['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php $virgo_tipigrof3 = ot_get_option( 'virgo_tipigrof3', array() ); ?>
			<?php if($virgo_tipigrof3) { ?>
			h3 {
				color: <?php echo esc_attr( $virgo_tipigrof3['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_tipigrof3['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_tipigrof3['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_tipigrof3['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_tipigrof3['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_tipigrof3['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_tipigrof3['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_tipigrof3['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_tipigrof3['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_tipigrof3['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php $virgo_tipigrof4 = ot_get_option( 'virgo_tipigrof4', array() ); ?>
			<?php if($virgo_tipigrof4) { ?>
			h4 {
				color: <?php echo esc_attr( $virgo_tipigrof4['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_tipigrof4['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_tipigrof4['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_tipigrof4['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_tipigrof4['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_tipigrof4['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_tipigrof4['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_tipigrof4['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_tipigrof4['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_tipigrof4['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php $virgo_tipigrof5 = ot_get_option( 'virgo_tipigrof5', array() ); ?>
			<?php if($virgo_tipigrof5) { ?>
			h5 {
				color: <?php echo esc_attr( $virgo_tipigrof5['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_tipigrof5['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_tipigrof5['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_tipigrof5['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_tipigrof5['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_tipigrof5['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_tipigrof5['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_tipigrof5['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_tipigrof5['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_tipigrof5['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php $virgo_tipigrof6 = ot_get_option( 'virgo_tipigrof6', array() ); ?>
			<?php if($virgo_tipigrof6) { ?>
			h6 {
				color: <?php echo esc_attr( $virgo_tipigrof6['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $virgo_tipigrof6['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $virgo_tipigrof6['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $virgo_tipigrof6['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $virgo_tipigrof6['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $virgo_tipigrof6['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $virgo_tipigrof6['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $virgo_tipigrof6['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $virgo_tipigrof6['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $virgo_tipigrof6['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php if (ot_get_option('additionalcss') != '') {
				echo wp_kses_post(ot_get_option('additionalcss'));
			} ?>


		</style>

		<?php if ( ot_get_option( 'additionaljs' ) != '' ): ?>
			<script type="text/javascript">
				<?php if ( ot_get_option( 'additionaljs' ) ) {
					echo wp_kses_post( ot_get_option( 'additionaljs' ) );
				} ?>
			</script>
		<?php endif; ?>

	<?php endif; ?>
<?php }

add_action( 'wp_head', 'virgo_custom_styling' );