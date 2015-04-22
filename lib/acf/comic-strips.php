<?php

// ACF for the comic strips
if(function_exists("register_field_group")) {
    register_field_group(array (
        'id' => 'acf_comic-strips',
        'title' => 'Comic strips',
        'fields' => array (
            array (
                // *The* comic strip in all its glory:
                'key'           => 'field_5442683838af1',
                'label'         => 'Comic Image',
                'name'          => 'comic-img',
                'type'          => 'image',
                'instructions'  => 'Upload your comic strip',
                'required'      => 1,
                'save_format'   => 'object',
                'preview_size'  => 'comicThumb',
                'library'       => 'all',
            ),
            array (
                // Field for who the comic is dedicated to:
                'key'           => 'field_544268b353dab',
                'label'         => 'Comic Dedication',
                'name'          => 'comic_dedication',
                'type'          => 'text',
                'instructions'  => 'Is this comic strip dedicated to anyone? Do share! =) Max characters of 50.',
                'default_value' => '',
                'placeholder'   => '',
                'prepend'       => '',
                'append'        => '',
                'formatting'    => 'none',
                'maxlength'     => 50,
            ),
            array (
                // Which chapter it belongs to:
                'key'               => 'field_5479d139952c4',
                'label'             => 'Chapter',
                'name'              => 'chapter',
                'type'              => 'taxonomy',
                'instructions'      => 'Choose which chapter this comic strip belongs to.',
                'required'          => 1,
                'taxonomy'          => 'chapter',
                'field_type'        => 'select',
                'allow_null'        => 0,
                'load_save_terms'   => 0,
                'return_format'     => 'object',
                'multiple'          => 0,
            ),
        ),
        'location'  => array (
            array (
                array (
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'comic',
                    'order_no'  => 0,
                    'group_no'  => 0,
                ),
            ),
        ),
        'options'   => array (
            'position'          => 'normal',
            'layout'            => 'no_box',
            'hide_on_screen'    => array (
                0   => 'the_content',
                1   => 'featured_image',
            ),
        ),
        'menu_order'    => 0,
    ));
}
?>