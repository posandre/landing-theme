<?php
$section_data = $args['data']['column_card_2_3'];

if (empty($section_data)) return;

$i =1;
?>

<div class="column-card-2-3__container container">
    <?php if (!empty($section_data['title'])) : ?>
        <div class="column-card-2-3__title"><h2><?php echo $section_data['title']; ?></h2></div>
    <?php endif; ?>

	<?php if (!empty($section_data['cards'])) : ?>
    <div class="column-card-2-3__cards">
        <?php foreach ($section_data['cards'] as $card) : ?>
        <div class="column-card-2-3__card wow bounceInUp" data-wow-delay="<?php echo $i; ?>s" data-wow-duration="2s">
	        <?php if (!empty($card['image'] && !in_array('hide_image', $card['hide_card_content']))) :
		        $img_alt = empty($card['title'])
			        ? __('2-3-column-card img', 'landing-theme')
			        : $card['title']; ?>
                <div class="column-card-2-3__card-image">
	                <?php  landing_theme_the_attachment_image(
		                $card['image'],
		                '2_3_column_cards_img',
		                $img_alt,
		                '2-3-column-card__card-img',
		                'cards-no-image.jpg'
	                ); ?>
                </div>
	        <?php $i +=0.5; endif; ?>

	        <?php if (!empty($card['title'] && !in_array('hide_title', $card['hide_card_content']))) :?>
                <div class="column-card-2-3__card-title column-card-2-3__card-title--<?php echo $card['title_style']; ?>">
			        <?php  echo $card['title'];?>
                </div>
	        <?php endif; ?>

	        <?php if (!empty($card['description'] && !in_array('hide_description', $card['hide_card_content']))) :?>
                <div class="column-card-2-3__card-description">
			        <?php echo apply_filters( 'the_content', $card['description']);?>
                </div>
	        <?php endif; ?>

	        <?php if (!empty($card['link'] && !in_array('hide_link', $card['hide_card_content']))) :?>
                <div class="column-card-2-3__card-link">
                    <a href="<?php echo $card['link']; ?>"><?php _e('Learn more', 'landing-theme'); ?></a>
                </div>
	        <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
	<?php endif; ?>
</div>
