<?php

/***
 * Class WPBakeryShortCode_virgo_conatainer
 */
class WPBakeryShortCode_virgo_section extends WPBakeryShortCodesContainer
{


    protected function content($atts, $content = null)
    {

        ob_start();
        $content = !empty($content) ? $content : "";
        $atts = shortcode_atts(
            array(
                'color' => '',
                'class' => '',
                'css' => '',
                'id' => ''
            ), $atts
        );

        extract($atts);

        if ($class == 'about') {
            $class = 'about text-center section pb-0';
        } elseif ($class == 'section-lg') {
            $class = 'rel-1 section-lg ';
        } elseif ($class == 'dark') {
            $class = 'bgc-dark text-center-xs section';
        } elseif ($class == 'standard') {
            $class = 'text-center section';
        } elseif ($class == 'bgc-light') {
            $class = 'reviews bgc-light text-center section';
        } elseif ($class == 'address') {
            $class = 'section-address bgc-dark';
        } elseif ($class == 'reviews') {
            $class = 'reviews text-center section';
        } elseif ($class == 'video-section') {
            $class = 'video-section text-white masked section-lg';
        } elseif ($class == 'partners') {
            $class = 'partners bgc-light';
        } elseif ($class == 'charts') {
            $class = 'charts section';
        } elseif ($class == 'features') {
            $class = 'features section';
        } elseif ($class == 'features-bgc-light') {
            $class = 'features bgc-light section';
        } elseif ($class == 'bgc-primary') {
            $class = 'text-white bgc-primary section-sm';
        } elseif ($class == 'prices') {
            $class = 'prices text-center masked section';
        } elseif ($class == 'subscribe') {
            $class = 'text-center bgc-light section-sm';
        } elseif ($class == 'contacts') {
            $class = 'contacts text-center section';
        }elseif ($class == 'portfolio') {
            $class = 'contacts text-center section';
        }

        $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts);


        ?>


        <section <?php if (isset($id{1})) { ?>
            id="<?php echo esc_attr($id); ?>"
        <?php } ?> class=" <?php echo esc_attr($class); ?> <?php echo esc_attr($css_class); ?>
        "<?php if ($atts['class'] == 'prices') { ?>
            data-stellar-background-ratio="0.7" <?php } ?>
        >
            <?php echo do_shortcode($content); ?>

        </section>

        <?php

        return ob_get_clean();
    }

}


class WPBakeryShortCode_virgo_section_body extends WPBakeryShortCodesContainer
{


    protected function content($atts, $content = null)
    {

        ob_start();
        $content = !empty($content) ? $content : "";
        $atts = shortcode_atts(
            array(
                'class' => 'section-body',
                'css' => '',
                'id' => ''
            ), $atts
        );

        extract($atts);


        $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts);
        ?>

        <section class=" <?php echo esc_attr($class); ?> <?php echo esc_attr($css_class); ?>">
            <?php echo do_shortcode($content); ?>

        </section>

        <?php

        return ob_get_clean();
    }

}


/*
 * row
 */

class WPBakeryShortCode_virgo_row extends WPBakeryShortCodesContainer
{


    protected function content($atts, $content = null)
    {

        ob_start();
        $content = !empty($content) ? $content : "";
        $atts = shortcode_atts(
            array(
                'class' => ' ',
                'css' => ''


            ), $atts
        );
        extract($atts);


        extract($atts);
        if ($class == 'rowpadding') {
            $class = 'row-padding row row-columns';
        } elseif ($class == 'row-columns') {
            $class = 'row-columns row ';
        }

        $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts);


        ?>


        <div class="<?php echo esc_attr($class . ' ' . $css_class); ?>">
            <?php echo do_shortcode($content); ?>
        </div>

        <?php

        return ob_get_clean();
    }

}


/**
 *  div_section_body
 */
class WPBakeryShortCode_virgo_div_section_body extends WPBakeryShortCodesContainer
{


    protected function content($atts, $content = null)
    {

        ob_start();
        $content = !empty($content) ? $content : "";
        $atts = shortcode_atts(
            array(
                'class' => 'section-body',
                'css' => '',
                'id' => ''
            ), $atts
        );

        extract($atts);


        $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts);
        ?>

        <div class=" <?php echo esc_attr($class); ?> <?php echo esc_attr($css_class); ?>">
            <?php echo do_shortcode($content); ?>

        </div>

        <?php

        return ob_get_clean();
    }

}




if (class_exists('WPBakeryShortCodesContainer')) {

    class WPBakeryShortCode_virgo_section_content extends WPBakeryShortCodesContainer
    {
    }

}

add_shortcode('virgo_section_content', 'virgo__section_content_func');

/**
 * @param $atts
 * @param $content
 * @return string
 */
function virgo__section_content_func($atts, $content)
{
    $atts = shortcode_atts(
        array(
            'id' => '',
            'title' => '',
            'class' => ''

        ), $atts
    );
    $res = ' <section class="'.esc_attr($atts['class']).'" id="' . esc_attr($atts['id']) . '" data-title="' .
        esc_attr($atts['title']) . '" >';
    $res .= do_shortcode($content) . ' </section>';

    return $res;

}




/**
 * container
 */
/*
 * row
 */

class WPBakeryShortCode_virgo_container extends WPBakeryShortCodesContainer
{


    protected function content($atts, $content = null)
    {

        ob_start();
        $content = !empty($content) ? $content : "";
        $atts = shortcode_atts(
            array(
                'class' => ' ',
                'css' => ''


            ), $atts
        );
        extract($atts);


        $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts);
        ?>


        <div class="container <?php echo esc_attr($class); ?> <?php echo esc_attr($css_class); ?>  ">
            <?php echo do_shortcode($content); ?>
        </div>

        <?php

        return ob_get_clean();
    }

}


add_shortcode('virgo_address_item', 'virgo_address_item_func');

/**
 * @param $atts
 * @param $content
 * @return string
 */
function virgo_address_item_func($atts, $content)
{
    ob_start();

    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'icon' => '',
            't' => ''


        ), $atts
    );

    extract($atts);
    ?>
    <div class="col-contact column column-padding col-md-4">
        <i class="icon  fa-3x  <?php echo esc_attr($icon); ?>"></i>
        <h3><?php echo esc_html($atts['t']); ?></h3>
        <p> <?php echo wp_kses_post($content); ?></p>
    </div>


    <?php
    return ob_get_clean();
}


/**
 *  virgo_header
 */
add_shortcode('virgo_subscribe_form', 'virgo_subscribe_form_func');
function virgo_subscribe_form_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'placeholder' => esc_html__('Email address', 'virgo'),
            't' => esc_html__('Subscribe', 'virgo'),
            'css' => ''
        ), $atts
    );

    $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($atts['css'], ' '), '', $atts);



    ?>

    <div class="top-space-sm">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <form id="mc-form">
                      <div class="input-group">
                        <input required id="mc-email" type="email" class="form-control" placeholder="<?php echo esc_attr( $atts['placeholder'] ) ?>" name="EMAIL">
                        <span class="input-group-btn">
                          <button class="btn" type="submit"><?php echo esc_html( $atts['t'] ); ?></button>
                        </span>
                      </div>
                      <p><label for="mc-email" id="mc-notification"></label></p>
                    </form>
                  </div>
                </div>
              </div> <?php
    return ob_get_clean();
}


/**
 *  virgo_header
 */
add_shortcode('virgo_header', 'virgo_header_func');
function virgo_header_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'title' => esc_html__('Easy and Clean Startup Landing page.', 'virgo'),
            'desc' => esc_html__('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form', 'virgo'),
            'video' => 'http://www.youtube.com/watch?v=ANwf8AE3_d0',
            'tb' => esc_html__('Get start now', 'virgo'),
            'css' => '',
             'type' => '',
              'poster' => get_template_directory_uri() . '/video/poster.jpg',

        ), $atts
    );

    extract($atts);
    $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($atts['css'], ' '), '', $atts);


    ?>
     <?php  if ($type == 'video'){ ?>

      <main id="home" class="masthead-video masked">
    <video class="video" autoplay="" loop="" muted="" poster="<?php echo esc_url($poster); ?>">
        <source src="<?php  echo esc_url(get_template_directory_uri()); ?>/video/video.mp4" type="video/mp4">
        <source src="<?php  echo esc_url(get_template_directory_uri()); ?>/video/video.webm" type="video/webm">
      </video>
      <div class="opener rel-1">
        <div class="container">
          <div class="row">
            <div class="lead col-lg-6">
              <h1 class="wow fadeInDown"><?php echo esc_html($title); ?></h1>

                        <p class="lead-text"><?php echo esc_html($desc); ?></p>

                        <div class="lead-controls">
                            <a href="#request" class="btn-lead btn" data-toggle="modal"><?php echo esc_html($tb); ?></a>
                            <a href="<?php echo esc_html($video) ?>" class="text-white play play-home js-play">
                                <i class="fa fa-play-circle"></i>
                               <?php  esc_html_e('Watch video','virgo') ?>
                            </a>
                        </div>
            </div>
          </div>
        </div>
      </div>
    </main>
      <?php


      } else {
        ?>
          <main id="home" class="masthead <?php echo esc_attr($css_class); ?> masked">


        <div class="opener rel-1">
            <div class="container">
                <div class="row">
                    <div class="lead col-lg-6">

                        <h1 class="wow fadeInDown"><?php echo esc_html($title); ?></h1>

                        <p class="lead-text"><?php echo esc_html($desc); ?></p>

                        <div class="lead-controls">
                            <a href="#request" class="btn-lead btn" data-toggle="modal"><?php echo esc_html($tb); ?></a>
                            <a href="<?php echo esc_html($video) ?>" class="text-white play play-home js-play">
                                <i class="fa fa-play-circle"></i>
                               <?php  esc_html_e('Watch video','virgo') ?>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>


      <?php } ?>
   <?php
    return ob_get_clean();
}


/**
 *  virgo_play_video
 */

add_shortcode('virgo_play_video', 'virgo_play_video_func');
function virgo_play_video_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(

            'desc' => esc_html__('Watch our video', 'virgo'),
            'video' => '',
            'class' => ' ',

        ), $atts
    );

    extract($atts);

    $class2 = $atts['class'] == true ? 'col-md-12' : '';

    ?>
    <p class="top-space <?php echo esc_attr($class2); ?> ">
        <a href="<?php echo esc_html($video) ?>" class="text-white play js-play"><i
                class="text-white fa fa-3x fa-play-circle"></i> <?php echo esc_html($desc); ?></a>
    </p>
    <?php
    return ob_get_clean();
}


/**
 * feature-img
 */

add_shortcode('virgo_feature_img', 'virgo_feature_img_func');
function virgo_feature_img_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'images' => '',
            'class' => ''

        ), $atts
    );

    extract($atts);

    global $virgo_class;


    $img_arr = wp_get_attachment_image_src($images, 'full');
    $img = $virgo_class->trim_img_by_url($img_arr[0], 360, 738);


    ?>


    <div class="col-feature-img column column-padding col-md-5 text-center wow <?php echo esc_attr($class); ?>">
        <img alt="" class="feature-img" src="<?php echo esc_url($img); ?>">
    </div>

    <?php
    return ob_get_clean();
}


/**
 * partners
 */
add_shortcode('virgo_partners', 'virgo_partners_func');
function virgo_partners_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'items' => '',
            'images' => ''

        ), $atts
    );
    extract($atts);

    $arr_img = explode(',', $images);

    ?>


    <div class="partners-carousel">


        <?php
        foreach ($arr_img as $item) { ?>

            <div class="partner">

                <?php              
                global $virgo_class;
                $img_arr = wp_get_attachment_image_src($item, 'full');

                $img = $virgo_class->trim_img_by_url($img_arr[0], 163, 163);

                ?>

                <img alt="" class="img-responsive" src="<?php echo esc_url($img); ?>">
            </div>
        <?php }
        ?>

    </div>


    <?php
    return ob_get_clean();
}


/**
 * product
 */
add_shortcode('virgo_product', 'virgo_product_func');
function virgo_product_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'images' => '',

        ), $atts
    );

    extract($atts);

    global $virgo_class;

    $img_arr = wp_get_attachment_image_src($images, 'full');
    $img = $virgo_class->trim_img_by_url($img_arr[0], 1170, 260);
    if (!isset($img{2})) $img = get_template_directory_uri() . '/img/product.png';
    ?>


    <div class="text-center wow animatePhone" data-wow-duration="2s">
        <img alt="" class="img-responsive"
             src="<?php echo esc_url($img); ?>"></div>


    <?php
    return ob_get_clean();
}


/**
 * icon-column
 */
add_shortcode('virgo_icon_column', 'virgo_icon_column_func');
function virgo_icon_column_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(

            'icon' => '',
            't' => esc_html__('Light', 'virgo'),
            'd' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', 'virgo'),


        ), $atts
    );
    extract($atts);


    ?>


    <div class="column column-padding col-md-4">
        <i class="icon fa fa-5x fa-renren <?php echo esc_attr($icon); ?> "></i>

        <h3><?php echo esc_html($t); ?></h3>

        <p><?php echo esc_html($d); ?></p>
    </div>


    <?php
    return ob_get_clean();
}

/*
 *  section about
 */


add_shortcode('virgo_section_text', 'virgo_section_text_func');
function virgo_section_text_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            't' => esc_html__('Some facts about product', 'virgo'),
            'd' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'virgo'),
            'white' => '',
            'opacity' => '',
            'class' =>'',
             'items' => '',

        ), $atts
    );
     $tems_v = vc_param_group_parse_atts($atts['items']);
    extract($atts);
    $class2 = $atts['white'] == true ? 'text-white' : '';
    $op = $atts['opacity'] == true ? 'text-opacity' : '';

    ?>

    <div class="row">
        <div class="text-center col-md-6 col-md-offset-3
         <?php echo esc_attr($class2); ?> <?php echo esc_attr($class); ?>">

            <h2 class="section-title <?php echo esc_attr($class2); ?>  "><?php echo esc_html($t); ?></h2>

            <p class=" <?php echo esc_attr($op); ?> "><?php echo esc_html($d); ?></p>
        </div>
    </div>


    <?php
    return ob_get_clean();
}/*
 *  media text
 */


add_shortcode('virgo_media_text', 'virgo_media_text_func');
function virgo_media_text_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            't' => esc_html__('Bootstrap 3x', 'virgo'),
            'd' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'virgo'),
            'icon' => '',
            'class' => '',
        ), $atts
    );
    extract($atts);
    ?>


    <div class="column <?php echo esc_attr($class); ?>">
        <div class="media-left">
            <i class="fa fa-2x fa-rss <?php echo esc_attr($icon); ?>"></i>
        </div>
        <div class="media-right">
            <h4><?php echo esc_html($t); ?></h4>
            <p><?php echo esc_html($d); ?></p>
        </div>
    </div>


    <?php
    return ob_get_clean();
}


/*
 *  features col
 */


class WPBakeryShortCode_virgo_features_col extends WPBakeryShortCodesContainer
{


    protected function content($atts, $content = null)
    {

        ob_start();
        $content = !empty($content) ? $content : "";
        $atts = shortcode_atts(
            array(

                'class' => '',
                'css' => '',

            ), $atts
        );

        extract($atts);
        if ($class == 'pull5') {
            $class = ' col-md-pull-5 col-md-7 ';
        } elseif ($class == 'col6') {
            $class = ' col-md-6';
        }
        $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts);


        ?>


        <div class="col-feature column column-padding<?php echo esc_attr($class . ' ' . $css_class); ?>">
            <?php echo do_shortcode($content); ?>
        </div>

        <?php

        return ob_get_clean();
    }

}


/*
 *  section text right
 */


add_shortcode('virgo_section_text_right', 'virgo_section_text_right_func');
function virgo_section_text_right_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'title' => esc_html__('Available anytime', 'virgo'),
            'desc' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas harum, hic officiis commodi reprehenderit explicabo tenetur eos! Excepturi adipisci consequatur quisquam error, velit, pariatur', 'virgo'),
            'class' => '',
            'white' => '',
            'opacity' => '',
        ), $atts
    );
    extract($atts);


    if ($class == 'colmdpush6') {
        $class = 'column col-md-6 col-md-push-6 ';
    } elseif ($class == 'colmdpull6') {
        $class = 'col-md-pull-6 ';
    } elseif ($class == 'colmd6') {
        $class = '  col-md-6';
    }

    $class2 = $atts['white'] == true ? 'text-white' : '';
    $op = $atts['opacity'] == true ? 'text-opacity' : '';
    ?>

    <div class="<?php echo esc_attr($class); ?> ">
        <h2 class="section-title text-left <?php echo esc_attr($class2); ?>  "><?php echo esc_html($title); ?></h2>

        <p class="text-left <?php echo esc_attr($op); ?> "><?php echo esc_html($desc); ?></p></div>


    <?php
    return ob_get_clean();
}


/*
 *  chart
 */


add_shortcode('virgo_chart', 'virgo_chart_func');
function virgo_chart_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'title' => esc_html__('Burn', 'virgo'),
            'number' => esc_html__('8,45', 'virgo'),
            'type' => esc_html__('Calories', 'virgo'),
            'items' => '',
        ), $atts
    );

    $tems_v = vc_param_group_parse_atts($atts['items']);

    extract($atts);

    ?>

    <div class="column col-md-6 col-md-pull-6 text-center">
        <div class="row-columns row">
            <?php foreach ($tems_v as $item): ?>
                <div class="column col-pie">
                    <div class="chart" data-percent="84.5">
                        <div class="chart-content">
                            <div
                                class="chart-title"><?php if (isset($item['title'])) echo esc_html($item['title']); ?></div>
                            <div
                                class="chart-number"><?php if (isset($item['number'])) echo esc_html($item['number']); ?></div>
                            <div class="line line-center"></div>
                            <div
                                class="chart-type"><?php if (isset($item['type'])) echo esc_html($item['type']); ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>


    <?php
    return ob_get_clean();

}

/*
 *  banner
 */

add_shortcode('virgo_banner', 'virgo_banner_func');
function virgo_banner_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'title' => esc_html__('Want to Learn More?', 'virgo'),
            'desc' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas harum, hic officiis commodi reprehenderit explicabo', 'virgo'),
            'tb' => esc_html__('Get start now', 'virgo'),
        ), $atts
    );

    extract($atts);

    ?>

    <div class="col-md-4">
        <h2 class="banner-title text-white"><?php echo esc_html($title); ?></h2>
    </div>
    <div class="col-md-5">
        <span class="text-opacity"><?php echo esc_html($desc); ?></span>
    </div>
    <div class="col-md-3 top-space-sm"><a href="#request" class="btn btn-b-white"
                                          data-toggle="modal"><?php echo esc_html($tb); ?></a></div>


    <?php
    return ob_get_clean();

}


/*

/*
 *  review-carousel
 */


add_shortcode('virgo_review_carousel', 'virgo_review_carousel_func');
function virgo_review_carousel_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'items' => '',
            'images' => '',
            'desc' => esc_html__('«Design is the method of putting form and content together; there is no single definition. Design can be aesthetics ', 'virgo'),
            'icon' => '',
            'name' => esc_html__('James Thornton ', 'virgo'),
        ), $atts
    );

    extract($atts);

    $tems_v = vc_param_group_parse_atts($atts['items']);


    ?>


    <div class="review-carousel carousel">


        <?php
        foreach ($tems_v as $item) { ?>
            <div class="review">
                <div class="text-center">

                    <?php                   
                    global $virgo_class;
                    $img_arr = wp_get_attachment_image_src($item['images'], 'full');

                    $img = $virgo_class->trim_img_by_url($img_arr[0], 150, 150);

                    ?>

                    <img alt="" class="img-circle" src="<?php echo esc_url($img); ?>">

                    <h3><?php echo esc_html($item['name']); ?></h3>
                    <i class="fa fa-2x fa-quote-right <?php echo esc_attr($item['icon']); ?>  "></i>

                    <p>

                    <p><?php echo esc_html($item['desc']); ?></p>

                </div>
            </div>
        <?php }
        ?>


    </div>

    <?php
    return ob_get_clean();
}

/*





/*
 * bg-full
 */
add_shortcode('virgo_bg-full', 'virgo_bg_full_func');
function virgo_bg_full_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'type' => 'right',
            'css' => '',
        ), $atts
    );


    $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($atts['css'], ' '), '', $atts);


    if ($atts['type'] == 'right') {

        ?>

        <div class="bg-full-right bg-1 col-md-6 hidden-sm hidden-xs<?php echo esc_attr($css_class); ?>"></div>
        <?php
    } else {
        ?>

        <div class="bg-full-left bg-2 col-md-6 hidden-sm hidden-xs"></div>
        <?php
    }
    return ob_get_clean();
}

/**
 * progress-box
 */
add_shortcode('virgo_progress_box', 'virgo_progress_box_func');
function virgo_progress_box_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'items' => '',

        ), $atts
    );

    $items_v = vc_param_group_parse_atts($atts['items']);

    ?>
    <div class="col-full-left col-md-6">
        <div class="progress-box">
            <?php if ($items_v) {
                foreach ($items_v as $item) {
                    ?>
                    <div class="column-progress">
                        <div class="progress-header clearfix">
                            <h4><span class="pull-left"><?php echo esc_html($item['title']); ?></span> <span
                                    class="pull-right"><?php
                                    echo esc_html($item['value']);
                                    esc_html_e('%', 'virgo') ?></span></h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                 aria-valuenow="<?php echo esc_attr($item['value']); ?>" aria-valuemin="0"
                                 aria-valuemax="100" style=" width: <?php echo esc_attr($item['value']); ?>%;">
                                <div class="bar-line wow"></div>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>

        </div>
    </div>
    <?php
    return ob_get_clean();
}


/**
 * progress-box
 */
add_shortcode('virgo_dark_box_1', 'virgo_dark_box_1_func');
function virgo_dark_box_1_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'h_s' => esc_html__('What Do You Know About Us', 'virgo'),
            'h' => esc_html__('«A few words about us»', 'virgo'),
            'author' => '',
            'vb' => esc_html__('Video trailer', 'virgo'),
            'vurl' => 'http://www.youtube.com/watch?v=ANwf8AE3_d0'

        ), $atts
    );

    ?>
    <div class="text-right-md col-md-4">
        <h2 class="section-title text-white"><?php echo esc_html($atts['h']); ?></h2>
    </div>
    <div class="col-md-5">
        <?php echo wp_kses_post($content); ?>
        <p class="text-right text-primary"><i><?php echo esc_html($atts['author']); ?></i></p>
    </div>
    <div class="col-md-2 margin-top-sm">
        <a href="<?php echo esc_url($atts['vurl']); ?>" class="icon-link text-white hvr-wobble-vertical js-play">
            <i class="icon fa fa-play-circle"></i><span class="hidden-md"><?php echo esc_html($atts['vb']); ?></span>
        </a>
    </div>
    <?php
    return ob_get_clean();
}


/**
 * progress-box
 */
add_shortcode('virgo_columns_with_icon', 'virgo_columns_with_icon_func');
function virgo_columns_with_icon_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'items' => '',
        ), $atts
    );
    $items_v = vc_param_group_parse_atts($atts['items']);
    ?>
    <div class="col-full-right col-md-6 col-md-offset-6">
        <?php if ($items_v):
            foreach ($items_v as $item) {
                ?>
                <div class="column">
                    <div
                        class="icon-pull-left text-primary <?php if (isset($item['content'])) echo esc_attr($item['icon']); ?>
                    "></div>
                    <div class="media-body">
                        <h3><?php if (isset($item['h'])) echo esc_html($item['h']) ?> </h3>

                        <p>
                            <?php if (isset($item['content'])) echo wp_kses_post($item['content']); ?>
                        </p>
                    </div>
                </div>
                <?php
            }
        endif; ?>

    </div>
    <?php
    return ob_get_clean();
}

/**
 * progress-box
 */
add_shortcode('virgo_dark_box_2', 'virgo_dark_box_2_func');
function virgo_dark_box_2_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'h_s' => esc_html__('Reason why us', 'virgo'),
            'h' => esc_html__('Why choose us?', 'virgo'),
            'author' => '',
            'tb' => esc_html__('Send request', 'virgo'),


        ), $atts
    );

    ?>


    <div class="container">
        <div class="text-right-md col-md-4">
            <h2 class="section-title text-white"><?php echo esc_html($atts['h']); ?></h2>

            <p class="subtitle text-primary"><i><?php echo esc_html($atts['author']); ?></i></p>
        </div>
        <div class="col-md-5">
            <?php echo wp_kses_post($content); ?>
        </div>
        <div class="col-md-3 margin-top-sm">
            <a href="#request" class="btn btn-light" data-text-hover="<?php echo esc_html($atts['tb']); ?>"
               data-toggle="modal">
                <span class="btn-text"><?php echo esc_html($atts['tb']); ?></span>
              <span class="line-top">
                <span class="line-square-l-t line-square"></span>
                <span class="line-square-r-t line-square"></span>
              </span>
              <span class="line-bottom">
                <span class="line-square-l-b line-square"></span>
                <span class="line-square-r-b line-square"></span>
              </span>
            </a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

/**
 *  header
 */
add_shortcode('virgo_header_text', 'virgo_dark_header_text_func');
function virgo_dark_header_text_func($atts, $content)
{
    ob_start();

    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'title' => '',
            'content' => '',
            'video' => false,
            'tb' => false

        ), $atts
    );
    $class = $atts['white'] == true ? 'text-white' : '';

    ?>
    <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
        <header class="text-center">
            <h2 <?php if ($atts['mg'] == false){ ?>
                class="section-title <?php }
                echo esc_attr($class); ?>"><?php echo esc_html($atts['h']); ?></h2>

            <p class="subtitle text-primary"><i><?php echo esc_html($atts['h_s']); ?></i></p>

            <p> <?php echo wp_kses_post($content); ?></p>
        </header>
    </div>
    <?php
    return ob_get_clean();
}

/**
 *  portfolio
 */
add_shortcode('virgo_portfolio', 'virgo_dark_portfolio_func');

/**
 * @param $atts
 * @param $content
 * @return string
 */
function virgo_dark_portfolio_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'h_s' => '',
            'h' => '',
            'css' => ''

        ), $atts
    );
    extract($atts);
    $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), '', $atts);

    $virgo_class = virgo_get_global_class();
    ?>
    <div class="container">
        <ul class="filter">
            <li class="active"><a href="#" data-filter="*"> <?php esc_html_e('All', 'virgo'); ?></a></li>
            <?php $terms = get_terms('portfolio_categories', array('hide_empty' => true));
            foreach ($terms as $v) {

                ?>
                <li class="all "><a href="#"
                                    data-filter=".<?php echo esc_attr($v->slug); ?>"><?php echo esc_html($v->name); ?></a>
                </li>
                <?php

            }
            ?>

        </ul>
    </div>
    <div class=" <?php echo esc_attr($css_class); ?> js-gallery js-iso">
        <?php
        $paged = (int)sanitize_text_field(get_query_var('paged'));
        $posts_per_page = (int)sanitize_text_field(get_option('posts_per_page'));

        $virgo_new_arr = array(
            'paged' => $paged,
            'showposts' => $posts_per_page + 100,

            'post_status' => 'publish',
            'post_type' => 'portfolio',
            'orderby' => 'date'
        );

        $virgo_custom_query = new WP_Query($virgo_new_arr);
        if ($virgo_custom_query->have_posts()):
            while ($virgo_custom_query->have_posts()) {
                $virgo_custom_query->the_post();


                $terms = get_the_terms(get_the_ID(), 'portfolio_categories');


                ?>
                <div class="<?php
                if (!empty($terms)):
                    foreach ($terms as $v) {
                        echo esc_html($v->slug . " ");
                    }
                endif; ?> col-portfolio col-xs-12 col-sm-6 col-md-4 col-lg-3 js-iso-item">
                    <a href="<?php $virgo_class->get_post_thumbnail(get_the_ID(), 600, 400, true); ?>"
                       title="<?php the_title(); ?>">
                        <figure class="hover-line">
                <span class="line-top">
                  <span class="line-square-l-t line-square"></span>
                  <span class="line-square-r-t line-square"></span>
                </span>
                <span class="line-bottom">
                  <span class="line-square-l-b line-square"></span>
                  <span class="line-square-r-b line-square"></span>
                </span>

                            <div class="image-holder"><img alt=""
                                                           src="<?php $virgo_class->get_post_thumbnail(get_the_ID(), 600, 400, true); ?>">
                            </div>
                            <figcaption>
                                <div class="portfolio-lead">
                                    <div class="portfolio-name text-primary">
                                        <i><?php the_title(); ?></i>
                                    </div>
                                    <p class="portfolio-description">
                                        <?php echo wp_kses_post(get_the_excerpt()); ?>
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <?php

            }
            wp_reset_postdata();


        endif;
        ?>

    </div>
    <?php
    return ob_get_clean();
}

/*
 * tariff plan
 */

add_shortcode('virgo_tariff_plan', 'virgo_tariff_plan_func');

/**
 * @param $atts
 * @param $content
 * @return string
 */
function virgo_tariff_plan_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'currency' => esc_html__('€', 'virgo'),
            'h' => '',
            'price' => '',
            'period' => esc_html__('mo', 'virgo'),
            'tb' => esc_html__('Select plan', 'virgo'),
            'tbh' => esc_html__('Get started', 'virgo'),
            'css' => '',
            'items' => '',
            'class' => ''

        ), $atts
    );
    extract($atts);
    $tems_v = vc_param_group_parse_atts($atts['items']);
    $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), '', $atts);
    if ($class == 'ADVANCED') {
        $css_class .= ' ' . 'leading   ';
    } elseif ($class == 'fadeInLeft') {
        $css_class .= ' ' . 'wow fadeInLeft   ';
    } elseif ($class == 'fadeInRight') {
        $css_class .= ' ' . 'wow fadeInRight   ';
    }


    ?>
    <div class="<?php echo esc_attr($css_class); ?> col-price ">
        <div class="price-box">
            <div class="price-body">
                <div class="price-inner">
                    <header class="price-header">
                        <h4 class="price-title"><?php echo esc_html($h); ?></h4>


                        <div class="price">
                            <strong class="price-currency"><?php echo esc_html($currency); ?></strong>
                            <strong class="price-amount"><?php echo esc_html($price); ?></strong>
                            <span class="price-delimiter">/</span><strong
                                class="price-period"><?php echo esc_html($period); ?></strong>
                        </div>
                    </header>
                    <div class="price-features">
                        <?php if ($tems_v): ?>
                            <ul>
                                <?php
                                foreach ($tems_v as $item) {
                                    ?>
                                    <li><?php if (isset($item['title'])) echo wp_kses_post($item['title']); ?></li>
                                    <?php
                                }
                                ?>


                            </ul>
                        <?php endif; ?>
                    </div>

                    <a href="#request" class="btn" data-toggle="modal"><?php echo esc_html($tbh); ?></a>


                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('virgo_team', 'virgo_team_func');

/**
 * @param $atts
 * @param $content
 * @return string
 */
function virgo_team_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'h' => '',
            'sh' => '',
            'name' => '',
            'items' => '',
            'images' => ''


        ), $atts
    );
    extract($atts);
    global $virgo_class;
    $tems_v = vc_param_group_parse_atts($atts['items']);

    $img_arr = wp_get_attachment_image_src($images, 'full');
    $img = $virgo_class->trim_img_by_url($img_arr[0], 400, 600);
    ?>
    <div class="column col-sm-6 col-md-4">
        <figure class="team-profile hover-line">
                  <span class="line-top">
                    <span class="line-square-l-t line-square"></span>
                    <span class="line-square-r-t line-square"></span>
                  </span>
                  <span class="line-bottom">
                    <span class="line-square-l-b line-square"></span>
                    <span class="line-square-r-b line-square"></span>
                  </span>
            <img alt="" class="img-responsive" src="<?php echo esc_url($img); ?>">
            <figcaption>
                <div class="team-lead">
                    <div class="team-name"><i class="text-primary"><?php echo esc_html($h); ?></i></div>
                    <div class="team-bio">
                        <?php echo esc_html($content); ?>
                        <?php if ($tems_v) {
                            ?>
                            <p class="team-social social">
                                <?php
                                foreach ($tems_v as $item) { ?>
                                    <a href="<?php if (isset($item['url']{0})) echo esc_url($item['url']); ?>"
                                       class="icon <?php if (isset($item['icon']{1})) echo esc_attr($item['icon']); ?> hvr-wobble-horizontal"></a>

                                <?php }
                                ?>
                            </p>
                            <?php
                        } ?>


                    </div>
                </div>
                <p class="team-spec">
                    <i class="text-primary"> <?php echo esc_html($name); ?></i>
                </p>
            </figcaption>
        </figure>
    </div>
    <?php
    return ob_get_clean();
}


add_shortcode('virgo_step', 'virgo_step_func');

/**
 * @param $atts
 * @param $content
 * @return string
 */
function virgo_step_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'h' => '',
            'sh' => '',
            'number' => '',
            'class' => 'fadeInLeft',
            'delay' => ''


        ), $atts
    );
    extract($atts);

    ?>
    <div class="column col-md-6 col-lg-4 wow  <?php echo esc_attr($class); ?>" <?php if (isset($delay{1}))  {
    ?>data-wow-delay="<?php echo esc_attr($delay); ?>"
        <?php
        } ?>>
        <h3 class="number pull-left"><?php echo esc_html($number); ?><span class="text-primary">.</span></h3>

        <div class="media-body">
            <h4 class="step-title"><?php echo esc_html($h); ?></h4>

            <p><?php echo wp_kses_post($content); ?></p>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

/*
 * review
 */

add_shortcode('virgo_review', 'virgo_review_func');

/**
 * @param $atts
 * @param $content
 * @return string
 */
function virgo_review_func($atts, $content)
{
    ob_start();
    $content = !empty($content) ? $content : "";
    $atts = shortcode_atts(
        array(
            'items' => ''
        ), $atts
    );
    extract($atts);
    $tems_v = vc_param_group_parse_atts($atts['items']);
    ?>
    <span class="text-primary icon-testimonials icon icon-quote"></span>
    <div class="review-carousel carousel">
        <?php if ($tems_v):
            foreach ($tems_v as $item) {
                ?>
                <div class="review">
                    <div class="text-center col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                        <p>
                            <?php if (isset($item['content']{1})) echo wp_kses_post($item['content']); ?>
                        </p>

                        <p class="subtitle"><i
                                class=" text-primary"><?php if (isset($item['name']{1})) echo wp_kses_post($item['name']); ?></i>
                        </p>
                    </div>
                </div>

            <?php }
        endif; ?>
    </div>
    <?php
    return ob_get_clean();
}

/**
 * contact form
 */




/*
 * map
 */


add_shortcode('virgo_gsm_map', 'virgo_gsm_map_func');

/**
 * @param $atts
 * @param $content
 * @return string
 */
function virgo_gsm_map_func($atts, $content)
{
    ob_start();


    $content = !empty($content) ? str_replace(array("\r\n", "\n"), array("", ''), $content) : "";

    if (isset($atts['images']{0})) {
        $img_arr = wp_get_attachment_image_src($atts['images'], 'thumbnail');
        if (isset($img_arr[0])) {
            $atts['images'] = $img_arr[0];
        }


    }
    $atts = shortcode_atts(
        array(
            'images' => esc_url(get_template_directory_uri()) . '/img/brand.png',
            'lat' => '45.036537',
            'lng' => '38.995768',
            'zoom' => 15,
            'url_t' =>'',
            'url' => '',
            'email' => '',
            'phone' => '',
            'st' => ''




        ), $atts
    );

    extract($atts);
    ?>
    <div class="section-body map-layer">
        <div id="map" data-img="<?php echo esc_attr($images); ?>" data-lat="<?php echo esc_attr($lat); ?>"
             data-lng="<?php echo esc_attr($lng); ?>"
             class="map">

   <div class="map-address-row">
   <i class="fa fa-map-marker"></i>
   <span class="text">
   <?php  echo wp_kses_post( str_replace(array('<p>','</p>'),array('',''),$st)); ?>
   </span>
   </div>
   <div class="map-address-row"
   ><i class="fa fa-phone"></i><span class="text"><?php  echo esc_html($phone); ?></span></div>

   <div class="map-address-row">
      <span class="map-email"><i class="fa fa-envelope"></i><span class="text">
      <?php  echo esc_html($email); ?></span></span>
      <p></p>
      <p class="gmap-open">
      <a href="<?php  echo esc_url($url); ?>" target="_blank"><?php  echo esc_html($url_t); ?></a></p>
   </div>
     </div>

    <script>


        {
            var mapLocation = new google.maps.LatLng(45.200, -72.4310); //change coordinates here
            var marker;
            var map;
            var mapOptions = {
                zoom: 12, // Change zoom here
                center: mapLocation,
                scrollwheel: false,
                styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{"color": "#333333"}]
                    },
                    {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]},
                    {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]},
                    {"featureType": "poi", "elementType": "labels.text", "stylers": [{"visibility": "off"}]},
                    {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]},
                    {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]},
                    {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]},
                    {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]},
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{"color": "#dbdbdb"}, {"visibility": "on"}]
                    }]
            };

            map = new google.maps.Map(document.getElementById('map'),
                mapOptions);


            //change address details here
            var contentString = '<div class="map-info">'
                + '<div class="map-title">'
                + '<h3><img alt="" width="140" src="img/brand.png"></h3></div>'
                + '<p class="map-address"><div class="map-address-row"><i class="fa fa-map-marker"></i>' +
                '<span class="text"><strong>St. Lorem ipsum</strong><br>Krasnodar, Russian Federation</span></div><div class="map-address-row"><i class="fa fa-phone"></i><span class="text">345 678 91 23</span></div><div class="map-address-row"><span class="map-email"><i class="fa fa-envelope"></i><span class="text">virgomail@mail.com</span></span></p>'
                + '<p class="gmap-open"><a href="https://www.google.com/maps/place/851+6th+Ave,+New+York,+NY+10001,+USA/data=!4m2!3m1!1s0x89c259af44f80211:0xbd87d30d3c7da9d2?sa=X&amp;ei=KqAdVazxJMTkuQS9sIGIBQ&amp;aved=0CB0Q8gEwAA" target="_blank">Open on Google Maps</a></p></div>';


            var infowindow = new google.maps.InfoWindow({
                content: contentString,
            });


            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                title: 'virgo', //change title here
                animation: google.maps.Animation.DROP,
                position: mapLocation
            });

            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });


            infowindow.open(map, marker);

        }
    </script>
    <?php
    return ob_get_clean();
}


add_shortcode('virgo-i', 'virgo_i_func');
function virgo_i_func($atts, $content)
{
    echo '<i class="text-primary">' . do_shortcode($content) . '</i>';
}


add_shortcode('virgo_social_links', 'virgo_social_links_function');

function virgo_social_links_function($atts)
{
    $atts = shortcode_atts(
        array(
            'url' => '#',
            'class' => '',
        ), $atts
    );
    ob_start();
    ?>
    <a class=" icon  <?php echo esc_html($atts['class']) ?> hvr-wobble-horizontal"
       href="<?php echo esc_url($atts['url']); ?>">

    </a>

    <?php
    return ob_get_clean();
}
