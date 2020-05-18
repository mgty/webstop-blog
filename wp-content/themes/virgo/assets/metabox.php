<?php


add_action( 'add_meta_boxes', 'virgo_custom_meta_box' );

function virgo_custom_meta_box( $postType ) {

	$postType = ( isset( $postType ) ) ? $postType : "post";
	add_meta_box( 'virgo_meta_box',
		esc_html__( 'Virgo Page Options', 'virgo' ),
		'virgo_footer_meta_box',
		'page',
		'side',
		'low' );

	add_meta_box( 'virgo_meta_box_all_posttype',
		esc_html__( 'Big title', 'virgo' ),
		'virgo_meta_box_all_posttype_fun',
		$postType,
		'normal',
		'high' );

	add_meta_box( 'virgo_meta_box',
		esc_html__( 'virgo portfolio', 'virgo' ),
		'virgo_portfolio_box_func',
		'portfolio',
		'side',
		'low' );
}

function virgo_portfolio_box_func( $post ) {

	$virgo_portfolio_widht = get_post_meta( $post->ID, '_virgo_portfolio_widht', true );

	?>
    <div class="inside">

        <label class="selectit">
            <input <?php checked( 'on', $virgo_portfolio_widht ); ?> type="checkbox" name="_virgo_portfolio_widht"
                                                                      id="in-portfolio_categories-191">
			<?php esc_html_e( '50% widht?', 'virgo' ); ?>
        </label>

    </div>
	<?php
}


add_action( 'save_post', 'virgo_save_metabox', 9999 );

function virgo_save_metabox( $post_id ) {
	global $post;


	if ( !empty( $_POST['_virgo_portfolio_widht'] ) ) {
		update_post_meta( $post_id, '_virgo_portfolio_widht', wp_kses_post( $_POST['_virgo_portfolio_widht'] ) );

	}
	if ( !empty( $_POST['virgo_type_footer'] ) ) {
		update_post_meta( $post_id, '_virgo_type_footer', wp_kses_post( $_POST['virgo_type_footer'] ) );

	} else {
	    delete_post_meta( $post_id, '_virgo_type_footer');
    }


    if ( !empty( $_POST['virgo_type_header'] ) ) {
		update_post_meta( $post_id, '_virgo_type_header', wp_kses_post( $_POST['virgo_type_header'] ) );

	} else {
	    delete_post_meta( $post_id, '_virgo_type_header');
    }


    if ( !empty( $_POST['virgo_type_sidebar'] ) ) {
		update_post_meta( $post_id, '_virgo_type_sidebar', wp_kses_post( $_POST['virgo_type_sidebar'] ) );

	} else {
	    delete_post_meta( $post_id, '_virgo_type_sidebar');
    }


	if ( !empty( $_POST['_virgo_short_description'] ) ) {
		$datta = wp_kses_post( $_POST['_virgo_short_description'] );
		update_post_meta( $post_id, '_virgo_short_description', $datta );

	}

	if ( !current_user_can( 'edit_page', $post_id ) ) {
		return $post_id;
	}

	if ( isset( $post->ID ) ) {
		if ( isset( $_POST["virgo_menu_name"] ) ) {
			$meta_element_class = serialize( $_POST['virgo_menu_name'] );
			update_post_meta( $post->ID, '_virgo_menu_name', ( $meta_element_class ) );
		} else {
			delete_post_meta( $post->ID, '_virgo_menu_name' );
		}
		if ( isset( $_POST["virgo_munu_url"] ) ) {
			$meta_element_class = serialize( $_POST['virgo_munu_url'] );
			update_post_meta( $post->ID, '_virgo_munu_url', ( $meta_element_class ) );
		} else {
			delete_post_meta( $post->ID, '_virgo_munu_url' );
		}

		$frontpage_id = get_option( 'page_on_front' );
		$contents = unserialize( get_post_meta( $post->ID, '_virgo_menu_name', true ) );
		$socialurl = unserialize( get_post_meta( $post->ID, '_virgo_munu_url', true ) );
		if ( $post->ID == $frontpage_id ) {


			$menu = '';
			if ( ( $contents && $socialurl ) != '' ) {
				foreach ( array_combine( $contents, $socialurl ) as $content => $url ) {
					$menu .= ' 	<li><a href="' . esc_url( $url ) . '">' . esc_html( $content ) . '</a></li>';
				}
			}
			if ( $menu != '' ) {
				update_option( 'virgo_one_page_menu', $menu );	

			} else {
				delete_option( 'virgo_one_page_menu');
			}

		} else {
			/*
			 * onother page
			 */
			$menu_o = '';
			if ( ( $contents && $socialurl ) != '' ) {
				foreach ( array_combine( $contents, $socialurl ) as $content => $url ) {
					$menu_o .= ' 	<li><a href="' . esc_url( $url ) . '">' . esc_html( $content ) . '</a></li>';
				}
			}
			if ( $menu_o != '' ) {
				update_option( 'virgo_one_page_menu_' . $post->ID, $menu_o );
			} else {
				delete_option( 'virgo_one_page_menu_' . $post->ID);
            }

		}

	}


}


function virgo_footer_meta_box( $post ) {

	$virgo_munu_url = unserialize( get_post_meta( $post->ID, '_virgo_munu_url', true ) );
	$virgo_menu_name = unserialize( get_post_meta( $post->ID, '_virgo_menu_name', true ) );

	$virgo_type_footer = sanitize_text_field ( get_post_meta( $post->ID, '_virgo_type_footer', true ) );
	
	$virgo_type_header = sanitize_text_field ( get_post_meta( $post->ID, '_virgo_type_header', true ) );
	$virgo_type_sidebar = sanitize_text_field ( get_post_meta( $post->ID, '_virgo_type_sidebar', true ) );


	?>
    <p class="post-attributes-label-wrapper">
        <label class="post-attributes-label" for="virgo_type_footer"><?php  esc_html_e('Select footer style ','virgo'); ?></label></p>
    <select name="virgo_type_footer" id="virgo_type_footer">

        <option class="level-0"  <?php  selected($virgo_type_footer,1); ?> value="1"><?php  esc_html_e('dark','virgo'); ?>

            </option>
        <option class="level-0" <?php  selected($virgo_type_footer,2); ?> value="2"><?php  esc_html_e('light','virgo'); ?></option>
    </select>
    <hr>

    <p class="post-attributes-label-wrapper">
        <label class="post-attributes-label" for="virgo_type_header"><?php  esc_html_e('Select header style ','virgo'); ?></label></p>
    <select name="virgo_type_header" id="virgo_type_header">

        <option class="level-0"  <?php  selected($virgo_type_header,1); ?> value="1"><?php  esc_html_e('default','virgo'); ?>

            </option>
        <option class="level-0" <?php  selected($virgo_type_header,2); ?> value="2"><?php  esc_html_e('fixed','virgo'); ?></option>
    </select>

    <hr>

    <p class="post-attributes-label-wrapper">
        <label class="post-attributes-label" for="virgo_type_sidebar"><?php  esc_html_e('Select sidebar style ','virgo'); ?></label></p>
    <select name="virgo_type_sidebar" id="virgo_type_sidebar">
        <option class="level-0"  <?php  selected($virgo_type_sidebar,1); ?> value="1"><?php  esc_html_e('default','virgo'); ?></option>
        <option class="level-0" <?php  selected($virgo_type_sidebar,2); ?> value="2"><?php  esc_html_e('dark','virgo'); ?></option>
        <option class="level-0" <?php  selected($virgo_type_sidebar,3); ?> value="3"><?php  esc_html_e('brown','virgo'); ?></option>
        <option class="level-0" <?php  selected($virgo_type_sidebar,4); ?> value="4"><?php  esc_html_e('gray','virgo'); ?></option>
    </select>

    <hr>


 
	<?php
}



function virgo_meta_box_all_posttype_fun( $post ) {

	$valueeee2 = get_post_meta( $post->ID, '_virgo_short_description', true );
	wp_editor( wp_kses_post( $valueeee2 ), 'mettaabox_ID_stylee',
		$settings = array(
			'textarea_name' => '_virgo_short_description',
			'textarea_rows' => 3,
			'media_buttons' => false
		) );
}

add_action( 'add_meta_boxes', 'virgo_image_add_metabox' );
function virgo_image_add_metabox() {

	add_meta_box( 'virgoimagediv', esc_html__( 'virgo Image', 'virgo' ),
		'virgo_image_metabox', 'post', 'side', 'low' );
	add_meta_box( 'virgoimagediv', esc_html__( 'virgo Image', 'virgo' ),
		'virgo_image_metabox', 'page', 'side', 'low' );
}

function virgo_image_metabox( $post ) {
	global $content_width, $_wp_additional_image_sizes;
	$image_id = get_post_meta( $post->ID, '_virgo_image_id', true );
	$old_content_width = $content_width;
	$content_width = 254;
	if ( $image_id && get_post( $image_id ) ) {

		if ( !isset( $_wp_additional_image_sizes['post-thumbnail'] ) ) {
			echo wp_get_attachment_image( $image_id, array( $content_width, $content_width ) );
		} else {
			echo wp_get_attachment_image( $image_id, 'post-thumbnail' );
			$thumbnail_html = wp_get_attachment_image( $image_id, 'post-thumbnail' );
		}
		if ( !empty( $thumbnail_html ) ) {

			?>
            <p class="hide-if-no-js">
                <a href="javascript:;"
                   id="remove_virgo_image_button">
					<?php esc_html_e( 'Remove virgo image', 'virgo' ); ?>
                </a>
            </p>

            <input type="hidden"
                   id="upload_virgo_image"
                   name="_virgo_cover_image"
                   value="<?php echo esc_attr( $image_id ); ?>"/>
			<?php
		}
		$content_width = $old_content_width;
	} else {
		?>
        <img id="virgo_image_two" src=""
        />

        <p class="hide-if-no-js">
            <a title="<?php esc_html_e( 'Set virgo image', 'virgo' ); ?>"
               href="javascript:;"
               id="upload_virgo_image_button"
               id="set-virgo-image<?php echo esc_html__( 'Choose an image', 'virgo' ) ?>"
               data-uploader_button_text="<?php echo esc_html__( 'Set virgo image', 'virgo' ) ?>"><?php
				echo esc_html__( 'Set virgo image', 'virgo' ); ?></a>
        </p>
        <input type="hidden" id="upload_virgo_image" name="_virgo_cover_image" value=""/>
		<?php

	}


}

add_action( 'save_post', 'virgo_image_save', 10, 1 );
function virgo_image_save( $post_id ) {
	if ( isset( $_POST['_virgo_cover_image'] ) ) {
		$image_id = (int) $_POST['_virgo_cover_image'];
		update_post_meta( $post_id, '_virgo_image_id', $image_id );
	}
}