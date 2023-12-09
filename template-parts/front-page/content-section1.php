<?php
/**
 *  Content of the section1
 */

$post_id = get_the_ID();

$title = landing_theme_get_acf_field('section1_title', $post_id, __('Reading Flow<span>™</span>', 'landing-theme'));
$subtitle = landing_theme_get_acf_field('section1_subtitle', $post_id, __('A patented technology that improves reading speed and accuracy. <span class="marker">Now on UserWay</span>', 'landing-theme'));
$text = landing_theme_get_acf_field('section1_text', $post_id, __('UserWay is proud to partner with Beeline Reader to offer <strong>Reading Flow™</strong>, a patented text display innovation that makes reading on-screen texts easier, faster, and more enjoyable.', 'landing-theme'));
$video_link = landing_theme_get_acf_field('section1_video_link', $post_id, __('https://google.com', 'landing-theme'));
$button_link = landing_theme_get_acf_field('section1_button_link', $post_id, __('https://google.com', 'landing-theme'));
$bottom_title = landing_theme_get_acf_field('section1_bottom_title', $post_id, __('Breeze Through Long Texts', 'landing-theme'));
$bottom_text = landing_theme_get_acf_field('section1_bottom_text', $post_id, __('<p><strong>Reading Flow™</strong> works by using a simple cognitive trick — an eye-guiding color gradient — to pull your eyes through long blocks of text, helping improve focus, concentrating and reading speed.</p>
<p>The Intel-backed technology has won awards from the United Nations and Stanford University, and has been adopted by top US colleges and universities. The technology has also received widespread recognition by Scientific American, the United Nations and Google who hail BeeLine for its benefits to people with ADHD, Dyslexia and as a general tool to i<strong>mprove reading speed & comprehension</strong> for everyone.</p>
<p><strong>Reading Flow™</strong> is the latest addition to the best-in-class accessibility functions offered by UserWay.</p>', 'landing-theme'));

?>

<section class="section-container">
    <div class="section section-1">
        <div class="section__title section-1__title"><h1><?php echo $title; ?></h1></div>
        <div class="section__subtitle section-1__subtitle"><?php echo $subtitle; ?></div>
        <div class="section__subtitle section-1__text"><?php echo apply_filters('the_content', $text); ?></div>
        <div class="section__video-button section-1__button">
            <a class="section__video-link section-1__link" rel="nofollow" target="_blank" href="<?php esc_attr_e($button_link); ?>">
                <img width="72" height="72" alt="<?php esc_attr_e('Play buimage', 'landing-theme');?>" src="<?php echo landing_theme_get_image_url('video-play-back.svg'); ?>">
                <?php _e('Watch the video', 'landing-theme'); ?>
            </a>
        </div>
        <div class="section__button section-1__button">
            <span><?php _e('Get Reading Flow™', 'landing-theme'); ?></span>
            <a class="section__btn section-1__btn" rel="nofollow" target="_blank" href="<?php esc_attr_e($video_link); ?>"><?php _e('Start Free Trial', 'domo-theme');?></a>
        </div>
        <div class="section__image section-1__image">
            <?php landing_theme_the_picture_section('big-image-1.png', 'big-image-1-mob.png', __('Big image 1', 'landing-theme'));?>
        </div>
        <div class="section__banner section-1__banner">
            <?php landing_theme_the_picture_section('banner-image-1.png', 'banner-image-1-mob.png', __('Big image 1', 'landing-theme'));?>
        </div>
        <div class="section__bottom section-1__bottom">
            <div class="section-1__bottom-title"><?php echo $bottom_title; ?></div>
            <div class="section-1__bottom-text"><?php echo apply_filters('the_content', $bottom_text); ?></div>
        </div>
    </div>
</section>
