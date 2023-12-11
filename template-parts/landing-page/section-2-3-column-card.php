<?php
$section_data = $args['data']['2_3_column_card'];

if (empty($section_data)) return;
?>

<div class="2-3-column-card__container container">
    <?php if (!empty($section_data['title'])) : ?>
        <div class="2-3-column-card__title"><h2><?php echo $section_data['title']; ?></h2></div>
    <?php endif; ?>

	<?php if (!empty($section_data['cards'])) : ?>
    <div class="2-3-column-card__cards">
        <?php foreach ($section_data['cards'] as $card) : ?>
        <div class="2-3-column-card__card">
	        <?php if (!empty($card['image'] && !in_array('hide_image', $card['hide_card_content']))) :
		        $img_alt = empty($card['title'])
			        ? __('2-3-column-card img', 'landing-theme')
			        : $card['title']; ?>
                <div class="2-3-column-card__card-image">
	                <?php  landing_theme_the_attachment_image(
		                $card['image'],
		                '2_3_column_cards_img',
		                $img_alt,
		                '2-3-column-card__card-img',
		                'cards-no-image.jpg'
	                ); ?>
                </div>
	        <?php endif; ?>

	        <?php if (!empty($card['title'] && !in_array('hide_title', $card['hide_card_content']))) :?>
                <div class="2-3-column-card__card-title 2-3-column-card__card-title--<?php echo $card['title_style']; ?>">
			        <?php  echo $card['title'];?>
                </div>
	        <?php endif; ?>

	        <?php if (!empty($card['description'] && !in_array('hide_description', $card['hide_card_content']))) :?>
                <div class="2-3-column-card__card-description">
			        <?php echo apply_filters( 'the_content', $card['description']);?>
                </div>
	        <?php endif; ?>

	        <?php if (!empty($card['link'] && !in_array('hide_link', $card['hide_card_content']))) :?>
                <div class="2-3-column-card__card-link">
                    <a class="" href="<?php echo $card['link']; ?>"><?php _e('Learn more', 'landing-theme'); ?></a>
                </div>
	        <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
	<?php endif; ?>
</div>
