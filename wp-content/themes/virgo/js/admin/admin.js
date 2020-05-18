jQuery(document).ready(function($) {

    var wordpress_ver =  virgo_admin_obj.version, upload_button;
    jQuery(".virgo_upload_image_button").click(function(event) {

        upload_button = $(this);
        var frame;
        if (wordpress_ver >= "3.5") {
            event.preventDefault();
            if (frame) {
                frame.open();
                return;
            }
            frame = wp.media();
            frame.on( "select", function() {
                // Grab the selected attachment.
                var attachment = frame.state().get("selection").first();
                frame.close();
                if (upload_button.parent().prev().children().hasClass("tax_list")) {
                    upload_button.parent().prev().children().val(attachment.attributes.url);
                    upload_button.parent().prev().prev().children().attr("src", attachment.attributes.url);
                }
                else
                    $("#taxonomy_image").val(attachment.attributes.url);
            });
            frame.open();
        }
        else {
            tb_show("", "media-upload.php?type=image&amp;TB_iframe=true");
            return false;
        }
    });

    jQuery(".virgo_remove_image_button").click(function() {
        jQuery(".taxonomy-image").attr("src", "' . virgo_IMAGE_PLACEHOLDER . '");
        jQuery("#taxonomy_image").val("");
        jQuery(this).parent().siblings(".title").children("img").attr("src","' . virgo_IMAGE_PLACEHOLDER . '");
        jQuery(".inline-edit-col :input[name=\'taxonomy_image\']").val("");
        return false;
    });

    if (wordpress_ver < "3.5") {
        window.send_to_editor = function(html) {
            imgurl = jQuery("img",html).attr("src");
            if (upload_button.parent().prev().children().hasClass("tax_list")) {
                upload_button.parent().prev().children().val(imgurl);
                upload_button.parent().prev().prev().children().attr("src", imgurl);
            }
            else
                jQuery("#taxonomy_image").val(imgurl);
            tb_remove();
        }
    }

    $(".editinline").click(function() {
        var tax_id = $(this).parents("tr").attr("id").substr(4);
        var thumb = $("#tag-"+tax_id+" .thumb img").attr("src");

        if (thumb != "' . virgo_IMAGE_PLACEHOLDER . '") {
            jQuery(".inline-edit-col :input[name=\'taxonomy_image\']").val(thumb);
        } else {
            jQuery(".inline-edit-col :input[name=\'taxonomy_image\']").val("");
        }

        jQuery(".inline-edit-col .title img").attr("src",thumb);
    });
});/**
 * Created by Pro on 25.04.2016.
 */


jQuery(document).ready(function($) {

    // Uploading files
    var file_frame;

    jQuery.fn.upload_virgo_image = function( button ) {
        var button_id = button.attr('id');
        var field_id = button_id.replace( '_button', '' );

        // If the media frame already exists, reopen it.
        if ( file_frame ) {
            file_frame.open();
            return;
        }

        // Create the media frame.
        file_frame = wp.media.frames.file_frame = wp.media({
            title: jQuery( this ).data( 'uploader_title' ),
            button: {
                text: jQuery( this ).data( 'uploader_button_text' ),
            },
            multiple: false
        });

        // When an image is selected, run a callback.
        file_frame.on( 'select', function() {
            var attachment = file_frame.state().get('selection').first().toJSON();
            jQuery("#"+field_id).val(attachment.id);
            jQuery("#virgoimagediv img").attr('src',attachment.url);
            jQuery( '#virgoimagediv img' ).show();
            jQuery( '#' + button_id ).attr( 'id', 'remove_virgo_image_button' );
            jQuery( '#remove_virgo_image_button' ).text( 'Remove virgo image' );
        });

        // Finally, open the modal
        file_frame.open();
    };

    jQuery('#virgoimagediv').on( 'click', '#upload_virgo_image_button', function( event ) {
        event.preventDefault();
        jQuery.fn.upload_virgo_image( jQuery(this) );
    });

    jQuery('#virgoimagediv').on( 'click', '#remove_virgo_image_button', function( event ) {
        event.preventDefault();
        jQuery( '#upload_virgo_image' ).val( '' );
        jQuery( '#virgoimagediv img' ).attr( 'src', '' );
        jQuery( '#virgoimagediv img' ).hide();
        jQuery( this ).attr( 'id', 'upload_virgo_image_button' );
        jQuery( '#upload_virgo_image_button' ).text( 'Set virgo image' );
    });

});