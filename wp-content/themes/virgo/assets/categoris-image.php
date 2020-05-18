<?php


define('virgo_IMAGE_PLACEHOLDER', esc_url(get_template_directory_uri() . "/img/tr.png"));


add_action('admin_init', 'virgo_init');
function virgo_init()
{
    $virgo_taxonomies = get_taxonomies();
    if (is_array($virgo_taxonomies)) {
        $virgo__options = get_option('virgo_options');
        if (empty($virgo__options['excluded_taxonomies']))
            $virgo__options['excluded_taxonomies'] = array();

        foreach ($virgo_taxonomies as $virgo_taxonomy) {
            if (in_array($virgo_taxonomy, $virgo__options['excluded_taxonomies']))
                continue;
            add_action($virgo_taxonomy . '_add_form_fields', 'virgo_add_texonomy_field');
            add_action($virgo_taxonomy . '_edit_form_fields', 'virgo_edit_texonomy_field');
            add_filter('manage_edit-' . $virgo_taxonomy . '_columns', 'virgo_taxonomy_columns');
            add_filter('manage_' . $virgo_taxonomy . '_custom_column', 'virgo_taxonomy_column', 10, 3);
        }
    }
}


// add image field in add form
function virgo_add_texonomy_field()
{
    if (get_bloginfo('version') >= 3.5)
        wp_enqueue_media();
    else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('thickbox');
    }

    echo '<div class="form-field">
		<label for="taxonomy_image">' .  esc_html__(  'Image', 'virgo') . '</label>
		<input type="text" name="taxonomy_image" id="taxonomy_image" value="" />
		<br/>
		<button class="virgo_upload_image_button button">' .  esc_html__(  'Upload/Add image', 'virgo') . '</button>
	</div>' ;
}

// add image field in edit form
function virgo_edit_texonomy_field($taxonomy)
{
    if (get_bloginfo('version') >= 3.5)
        wp_enqueue_media();
    else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('thickbox');
    }

    if (virgo_taxonomy_image_url($taxonomy->term_id, NULL, TRUE) == virgo_IMAGE_PLACEHOLDER)
        $image_url = "";
    else
        $image_url = virgo_taxonomy_image_url($taxonomy->term_id, NULL, TRUE);
    echo '<tr class="form-field">
		<th scope="row" valign="top"><label for="taxonomy_image">' .  esc_html__(  'Image', 'virgo') . '</label></th>
		<td><img class="taxonomy-image" src="' . esc_url(virgo_taxonomy_image_url($taxonomy->term_id, 'medium', TRUE)) . '"/><br/>
		<input type="text" name="taxonomy_image" id="taxonomy_image" value="' . esc_url($image_url) . '" /><br />
		<button class="virgo_upload_image_button button">' .  esc_html__(  'Upload/Add image', 'virgo') . '</button>
		<button class="virgo_remove_image_button button">' .  esc_html__(  'Remove image', 'virgo') . '</button>
		</td>
	</tr>';
}


// save our taxonomy image while edit or save term
add_action('edit_term', 'virgo_save_taxonomy_image');
add_action('create_term', 'virgo_save_taxonomy_image');
function virgo_save_taxonomy_image($term_id)
{
    if (isset($_POST['taxonomy_image']))
        update_option('virgo_taxonomy_image' . $term_id, sanitize_text_field($_POST['taxonomy_image']), NULL);
}

// get attachment ID by image url
function virgo_get_attachment_id_by_url($image_src)
{
    global $wpdb;
    $id = $wpdb->get_var($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid = %s", $image_src));
    return (!empty($id)) ? $id : NULL;
}

// get taxonomy image url for the given term_id (Place holder image by default)
function virgo_taxonomy_image_url($term_id = NULL, $size = 'full', $return_placeholder = FALSE)
{
    if (!$term_id) {
        if (is_category())
            $term_id = get_query_var('cat');
        elseif (is_tag())
            $term_id = get_query_var('tag_id');
        elseif (is_tax()) {
            $current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
            $term_id = $current_term->term_id;
        }
    }

    $taxonomy_image_url = get_option('virgo_taxonomy_image' . $term_id);
    if (!empty($taxonomy_image_url)) {
        $attachment_id = virgo_get_attachment_id_by_url($taxonomy_image_url);
        if (!empty($attachment_id)) {
            $taxonomy_image_url = wp_get_attachment_image_src($attachment_id, $size);
            $taxonomy_image_url = $taxonomy_image_url[0];
        }
    }

    if ($return_placeholder)
        return ($taxonomy_image_url != '') ? $taxonomy_image_url : virgo_IMAGE_PLACEHOLDER;
    else
        return $taxonomy_image_url;
}

function virgo_quick_edit_custom_box($column_name, $screen, $name)
{
    if ($column_name == 'thumb')
        echo '<fieldset>
		<div class="thumb inline-edit-col">
			<label>
				<span class="title"><img src="" alt=""/></span>
				<span class="input-text-wrap"><input type="text" name="taxonomy_image" value="" class="tax_list" /></span>
				<span class="input-text-wrap">
					<button class="virgo_upload_image_button button">' .  esc_html__(  'Upload/Add image', 'virgo') . '</button>
					<button class="virgo_remove_image_button button">' .  esc_html__(  'Remove image', 'virgo') . '</button>
				</span>
			</label>
		</div>
	</fieldset>';
}

/**
 * Thumbnail column added to category admin.
 *
 * @access public
 * @param mixed $columns
 * @return void
 */
function virgo_taxonomy_columns($columns)
{
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['thumb'] =  esc_html__(  'Image', 'virgo');

    unset($columns['cb']);

    return array_merge($new_columns, $columns);
}

/**
 * Thumbnail column value added to category admin.
 *
 * @access public
 * @param mixed $columns
 * @param mixed $column
 * @param mixed $id
 * @return void
 */
function virgo_taxonomy_column($columns, $column, $id)
{
    if ($column == 'thumb')
        $columns = '<span><img width="100px" src="' . esc_url( virgo_taxonomy_image_url($id, 'thumbnail', TRUE) ). '" alt="' .  esc_html__(  'Thumbnail', 'virgo') . '" class="wp-post-image" /></span>';

    return $columns;
}

// Change 'insert into post' to 'use this image'
function virgo_change_insert_button_text($safe_text, $text)
{
    return str_replace("Insert into Post", "Use this image", $text);
}

// Style the image in category list
if (strpos($_SERVER['SCRIPT_NAME'], 'edit-tags.php') > 0) {

    add_action('quick_edit_custom_box', 'virgo_quick_edit_custom_box', 10, 3);
    add_filter("attribute_escape", "virgo_change_insert_button_text", 10, 2);
}





// Settings section description
function virgo_section_text()
{
    echo '<p>' .  esc_html__(  'Please select the taxonomies you want to exclude it from Categories Images plugin', 'virgo') . '</p>';
}

// Excluded taxonomies checkboxs
function virgo_excluded_taxonomies()
{
    $options = get_option('virgo_options');
    $disabled_taxonomies = array('nav_menu', 'link_category', 'post_format');
    foreach (get_taxonomies() as $tax) : if (in_array($tax, $disabled_taxonomies)) continue; ?>
        <input type="checkbox" name="virgo_options[excluded_taxonomies][<?php echo esc_html($tax); ?>]"
               value="<?php echo esc_html($tax); ?>" <?php checked(isset($options['excluded_taxonomies'][$tax])); ?> /> <?php echo esc_html($tax); ?>
        <br/>
    <?php endforeach;
}

// Validating options
function virgo_options_validate($input)
{
    return $input;
}

// Plugin option page
function virgo_options()
{
    if (!current_user_can('manage_options'))
        wp_die( esc_html__(  'You do not have sufficient permissions to access this page.', 'virgo'));
    $options = get_option('virgo_options');
    ?>
    <div class="wrap">
        <h2><?php esc_html_e('Categories Images', 'virgo'); ?></h2>
        <form method="post" action="options.php">
            <?php settings_fields('virgo_options'); ?>
            <?php do_settings_sections('zci-options'); ?>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}


// display taxonomy image for the given term_id
function virgo_taxonomy_image($term_id = NULL, $size = 'full', $attr = NULL, $echo = false)
{
    if (!$term_id) {
        if (is_category())
            $term_id = get_query_var('cat');
        elseif (is_tag())
            $term_id = get_query_var('tag_id');
        elseif (is_tax()) {
            $current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
            $term_id = $current_term->term_id;
        }
    }

    $taxonomy_image_url = get_option('virgo_taxonomy_image' . $term_id);
    if (!empty($taxonomy_image_url)) {
        $attachment_id = virgo_get_attachment_id_by_url($taxonomy_image_url);
        if (!empty($attachment_id))
            $taxonomy_image = wp_get_attachment_image($attachment_id, $size, FALSE, $attr);
    }

    if ($echo)
        echo  esc_url($taxonomy_image_url);
    else
        return esc_url($taxonomy_image_url);
}


