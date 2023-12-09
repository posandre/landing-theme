<?php
/**
 *  Content of the section3
 */
$post_id = get_the_ID();

$title = landing_theme_get_acf_field('section3_title', $post_id, __('Reading Flow™<br> Increases User Engagement', 'landing-theme'));
$subtitle_1 = landing_theme_get_acf_field('section3_subtitle_1', $post_id, __('Metrics that Matter', 'landing-theme'));
$subtitle_2 = landing_theme_get_acf_field('section3_subtitle_2', $post_id, __('Customizable Colors<br> Customizable Accessibility', 'landing-theme'));
$text_1 = landing_theme_get_acf_field('section3_text_1', $post_id, __('Experiments comparing Reading Flow™ to standard black text have demonstrated its power in making content more accessible for people with dyslexia, ADHD, and a variety of visual impairments. It also has a positive effect on website engagement metrics. Studies have found website visitors read nearly 50% further into articles than people reading traditional black text. They also visit about 45% more pages on sites that use UserWay’s Reading Flow™.', 'landing-theme'));
$text_2 = landing_theme_get_acf_field('section3_text_1', $post_id, __('When Reading Flow™ is activated via UserWay’s AI-Powered Accessibility widget, each website visitor gains access to a simple user interface that allows them to choose from a number of color schemes.', 'landing-theme'));
$button_link_1 = landing_theme_get_acf_field('section3_button_1_link', $post_id, __('https://google.com', 'landing-theme'));
$button_link_2 = landing_theme_get_acf_field('section3_button_2_link', $post_id, __('https://google.com', 'landing-theme'));
?>

<section class="section-container">
    <div class="section section-3">
        <div class="section__title section-3__title"><?php echo $title; ?></div>
        <div class="section__two-colons-row section-3__two-colons-row section-3__two-colons-row-1">
            <div class="section__colon-left section-3__colon-left">
                <div class="section__colon-title section-1__colon-title"><?php echo $subtitle_1; ?></div>
                <div class="section__colon-text section-3__text"><?php echo apply_filters('the_content', $text_1); ?></div>
                <div class="section__button section-3__button">
                    <span><?php _e('Get Reading Flow™', 'landing-theme'); ?></span>
                    <a class="section__btn section-3__btn" rel="nofollow" target="_blank" href="<?php esc_attr_e($button_link_1); ?>"><?php _e('Start Free Trial', 'domo-theme');?></a>
                </div>
            </div>
            <div class="section__colon-right section-3__colon-right">
                <div class="section__image section-3__image">
                    <?php landing_theme_the_picture_section('big-image-3-1.png', 'big-image-3-1-mob.png', __('Big image 3-1', 'landing-theme'));?>
                </div>
            </div>
        </div>
        <div class="section__two-colons-row section-3__two-colons-row section-3__two-colons-row-2">
            <div class="section__colon-left section-3__colon-left">
                <div class="section__image section-3__image">
                    <?php landing_theme_the_picture_section('big-image-3.png', 'big-image-3-mob.png', __('Big image 3', 'landing-theme'));?>
                </div>
            </div>
            <div class="section__colon-right section-3__colon-right">
                <div class="section__colon-title section-1__colon-title"><?php echo $subtitle_2; ?></div>
                <div class="section__colon-text section-3__text"><?php echo apply_filters('the_content', $text_2); ?></div>
                <div class="section__button section-3__button">
                    <span><?php _e('Get Reading Flow™', 'landing-theme'); ?></span>
                    <a class="section__btn section-3__btn" rel="nofollow" target="_blank" href="<?php esc_attr_e($button_link_2); ?>"><?php _e('Start Free Trial', 'domo-theme');?></a>
                </div>
            </div>
        </div>
    </div>
</section>