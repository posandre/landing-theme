<?php
/**
 *  Content of the section2
 */
$post_id = get_the_ID();

$title = landing_theme_get_acf_field('section2_title', $post_id, __('A Better Way To Read', 'landing-theme'));
$subtitle = landing_theme_get_acf_field('section2_subtitle', $post_id, __('Let the Gradients Guide Your Eyes', 'landing-theme'));
$text = landing_theme_get_acf_field('section2_text', $post_id, __('The technology behind <strong>Reading Flow™</strong> is ingeniously simple. It applies a color gradient to the main body text of the page that reduces confusion and inadvertent line skips. The patented gradients wrap from the end of one line to the beginning of<br> the next. This color grouping technique helps your eyes<br> quickly locate the next line, significantly impact reading<br> accuracy, speed and comprehension for people who spend a<br> lot of time reading online as well as those with visual<br>ß processing challenges, visual impairments, dyslexia, and<br> learning disabilities.', 'landing-theme'));
$button_link = landing_theme_get_acf_field('section2_button_link', $post_id, __('https://google.com', 'landing-theme'));
?>

<div class="parallax-section__empty"></div>
<section class="section parallax-section hidden section--grey section-2">
    <div class="section__title section-2__title"><?php echo $title; ?></div>
    <div class="section__two-colons-row section-2__two-colons-row">
        <div class="section__colon section__colon-left section-2__colon-left">
            <div class="section__image section-2__image">
                <?php landing_theme_the_picture_section('big-image-2.png', 'big-image-2-mob.png', __('Big image 2', 'landing-theme'));?>
            </div>
        </div>
        <div class="section__colon section__colon-right section-2__colon-right">
            <div class="section__colon-title section-2__colon-title"><?php echo $subtitle; ?></div>
            <div class="section__colon-text section-2__colon-text"><?php echo apply_filters('the_content', $text); ?></div>
            <div class="section__button section-2__button">
                <span><?php _e('Get Reading Flow™', 'landing-theme'); ?></span>
                <a class="section__btn section-2__btn" rel="nofollow" target="_blank" href="<?php esc_attr_e($button_link); ?>"><?php _e('Start Free Trial', 'domo-theme');?></a>
            </div>
        </div>
    </div>
</section>