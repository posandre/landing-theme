<?php
$anchor_navigation_items = landing_theme_get_acf_field('anchor_navigation_items');

if (empty($anchor_navigation_items)) return;

$output = '<div class="anchor-navigation container">';
$output .=  '<div class="anchor-navigation__title">' .__('ANCHOR NAV', 'landing-theme'). '</div>';
$output .=  '<ul class="anchor-navigation__items">';

foreach ($anchor_navigation_items as $anchor_navigation_item) {
	$output .= '<li class="anchor-navigation__item">
					<a class="anchor-navigation__link" href="' .$anchor_navigation_item['anchor']. '">' .$anchor_navigation_item['title']. '</a>
			    </li>';
}

$output .=  '</ul>
		   </div>';

echo $output;