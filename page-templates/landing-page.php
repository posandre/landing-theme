<?php
/**
 * The template for displaying Landing page
 *
 * Template Name: Landing page
 *
 */

$anchor_navigation_items = landing_theme_get_acf_field('landing_page_sections');

get_header();
?>

<main class="landing-theme__wrapper">
    <?php
    if (!empty($anchor_navigation_items)) :
        $i = 1;

        foreach ($anchor_navigation_items as $anchor_navigation_item) :
            $section_type = str_replace('_', '-', $anchor_navigation_item['section_type']); ?>

            <section id="section-<?php echo $i; ?>" class="<?php echo $section_type; ?>">
	        <?php
            get_template_part(
                    'template-parts/landing-page/section',
                    $section_type,
                    array(
                            'data'  =>  $anchor_navigation_item
                    )
            );

            $i++;
            ?>
            </section>
    <?php
        endforeach;
    endif;
    ?>
</main><!-- #main -->

<?php
get_footer();