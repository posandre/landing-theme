<?php
const IMAGE_SIZES = [
    'text_plus_image_img'   =>  [
        'width'     =>  555,
        'height'    =>  418
    ],
    '2_3_column_cards_img'   =>  [
        'width'     =>  68,
        'height'    =>  56
    ],
    'image_gallery_plus_text_img'   =>  [
        'width'     =>  504,
        'height'    =>  379
    ]
];


foreach (IMAGE_SIZES as $image_size_name => $image_size_data) {
    add_image_size(
        $image_size_name,
        $image_size_data['width'],
        $image_size_data['height'],
        true
    );
}
