<?php
$section_data = $args['data']['text_plus_image'];

$img_alt = empty($section_data['title'])
    ? __('Text plus image img', 'landing-theme')
    : $section_data['title'];

$section_classes = array(
        'text-plus-image__container',
        'text-plus-image__container--image-' .$section_data['image_position'],
        'container'
)
?>

<div class="<?php echo implode(' ', $section_classes); ?>">
    <div class="text-plus-image__col">
        <?php if (!empty($section_data['title'])) : ?>
        <div class="text-plus-image__title"><?php echo $section_data['title']; ?></div>
        <?php endif; ?>

	    <?php if (!empty($section_data['description'])) : ?>
            <div class="text-plus-image__description">
                <?php echo apply_filters( 'the_content',$section_data['description']); ?>
            </div>
	    <?php endif; ?>

	    <?php if (!empty($section_data['buttons'])) : ?>
            <div class="text-plus-image__buttons">
                <?php foreach ($section_data['buttons'] as $button) : ?>
                    <a href="<?php echo $button['link']; ?>" class="text-plus-image__button btn btn--<?php echo $button['type']; ?>"><?php echo $button['title']; ?></a>
                <?php endforeach; ?>
            </div>

	    <?php endif; ?>
    </div>
    <div class="text-plus-image__col">
        <?php  landing_theme_the_attachment_image(
                $section_data['image'],
                'text_plus_image_img',
                $img_alt,
                'text-plus-image__img',
                'text-plus-image-no-image.jpg'
        ); ?>
</div>
