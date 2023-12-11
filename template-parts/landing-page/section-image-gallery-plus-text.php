<?php
$section_data = $args['data']['image_gallery_plus_text'];

if (empty($section_data)) return;
?>

<div class="image-gallery-plus-text__container container">
	<div class="image-gallery-plus-text__col image-gallery-plus-text__col--text">
		<?php if (!empty($section_data['title'])) : ?>
            <div class="image-gallery-plus-text__title"><h2><?php echo $section_data['title']; ?></h2></div>
		<?php endif; ?>

		<?php if (!empty($section_data['description'])) : ?>
			<div class="image-gallery-plus-text__description">
				<?php echo apply_filters( 'the_content',$section_data['description']); ?>
			</div>
		<?php endif; ?>
	</div>
	<div class="image-gallery-plus-text__col image-gallery-plus-text__col--gallery">
		<?php if (!empty($section_data['images'])) : ?>
		<div class="image-gallery-plus-text__images owl-carousel">
			<?php
			$i = 1;
			foreach ($section_data['images'] as $image) :
				landing_theme_the_attachment_image(
					$image,
					'image_gallery_plus_text_img',
					__('Image gallery + Text - ', 'landing theme') . $i,
					'image-gallery-plus-text__img',
					'gallery-no-image.jpg'
				);
				$i++;
			endforeach;
			?>
		</div>

		<?php endif; ?>
	</div>
</div>
