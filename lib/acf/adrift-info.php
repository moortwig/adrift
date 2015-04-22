<?php

// ACF for information about Adrift
if(function_exists("register_field_group")) {

    register_field_group(array (
        'id'        => 'acf_adrift-information',
        'title'     => 'Adrift information',
        'fields'    => array (
            array (
                // Image at About page:
                'key'           => 'field_5448f169299e1',
                'label'         => 'About image',
                'name'          => 'about_image',
                'type'          => 'image',
                'instructions'  => 'This image will appear on the "About" page.',
                'required'      => 1,
                'save_format'   => 'object',
                'preview_size'  => 'thumbnail',
                'library'       => 'all',
            ),
            array (
                // Adrift logo
                'key'           => 'field_54454f162a103',
                'label'         => 'Adrift Logo',
                'name'          => 'adrift_logo',
                'type'          => 'image',
                'required'      => 1,
                'save_format'   => 'object',
                'preview_size'  => 'thumbnail',
                'library'       => 'all',
            ),
            array (
                // Adrift logo text
                'key'           => 'field_5445508d2a104',
                'label'         => 'Logo Text',
                'name'          => 'logo_text',
                'type'          => 'text',
                'instructions'  => 'Text appearing next to the logo. Max 15 characters, if you please!',
                'default_value' => '',
                'placeholder'   => '',
                'prepend'       => '',
                'append'        => '',
                'formatting'    => 'none',
                'maxlength'     => 15,
            ),
            array (
                // Adrift copyright information
                'key'           => 'field_544552f3f0100',
                'label'         => 'Copyright info',
                'name'          => 'copyright',
                'type'          => 'text',
                'instructions'  => 'This text will appear after "Copyright". Example: "<em>2014 Jane Doe</em>". Max 60 characters.',
                'default_value' => '',
                'placeholder'   => '',
                'prepend'       => '',
                'append'        => '',
                'formatting'    => 'none',
                'maxlength'     => 60,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param'     => 'page',
                    'operator'  => '==',
                    'value'     => '106',
                    'order_no'  => 0,
                    'group_no'  => 0,
                ),
            ),
        ),
        'options'               => array (
            'position'          => 'normal',
            'layout'            => 'no_box',
            'hide_on_screen'    => array (
                0       => 'featured_image',
            ),
        ),
        'menu_order'    => 0,
    ));
}
?>