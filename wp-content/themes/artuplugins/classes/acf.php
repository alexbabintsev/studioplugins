<?php
add_action('acf/init', function(){

    acf_add_local_field_group(array(
        'key' => 'group_5f9952e68d9168',
        'title' => 'Page',
        'fields' => array(
            array(
                'key' => 'field_5f9952f1c5a1cc',
                'label' => 'Body html class',
                'name' => 'body_html_class',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
	
	acf_add_options_page( [
        'page_title' => __('Настройки сайта','artu' ),
        'menu_title' => __('Настройки сайта','artu' ),
        'menu_slug' => 'theme-options',
        //'capability' => 'edit_posts',
        'position' => '',
        //'parent_slug' => 'my-parent-page',
        'icon_url' => 'dashicons-admin-customizer',
        'redirect' => true,
        'post_id' => 'options',
        'autoload' => false,
        'update_button' => __('Update', 'acf'),
        'updated_message' => __("Options Updated", 'acf'),
    ] );

    acf_add_local_field_group(array(
        'key' => 'group_5fb28103c39580',
        'title' => __('Настройки сайта','artu' ),
        'fields' => [
            array(
                'key' => 'field_5fb280fa5d70a4',
                'label' => 'Форма "Предзаказ"',
                'name' => 'form_preorder',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'wpcf7_contact_form',
                ),
                'taxonomy' => '',
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'id',
                'ui' => 1,
            ),
        ],
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-options',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => __( '','artu' ),
    ));

    //custom-video-landing
    acf_register_block_type( [
        'name' => 'custom-video-landing',
        'title' => __('Custom Video Landing', 'valueone'),
        'description' => __('', 'valueone'),
        'category' => 'studioplugins-blocks',
        //'icon' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z" /><path d="M19 13H5v-2h14v2z" /></svg>',
        'keywords' => array('custom', 'video','landing'),
        //'post_types' => array('page'),
        'mode' => 'edit',//auto preview edit
        'align' => 'full',//“left”, “center”, “right”, “wide”, “full”
        'render_template' => 'blocks/custom-video-landing.php',
        //'render_callback' => function(){},
        //'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.css',
        //'enqueue_script' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.js',
        //'enqueue_assets' => function(){},
        'supports' =>[
            //'align' => array( 'left', 'right', 'full' ),
            'mode' => false,
            //'multiple' => false,
            //'__experimental_jsx' => true,
        ],
        'example'  => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    //'testimonial'   => "Your testimonial text here",
                    //'author'        => "John Smith"
                    //'title' =>__('Test title', 'valueone'),
                    //'subtitle' =>__('Test subtitle', 'valueone'),
                )
            )
        )
    ] );
    //creative-image-block
    acf_register_block_type( [
        'name' => 'creative-image-block',
        'title' => __('Creative image block', 'valueone'),
        'description' => __('', 'valueone'),
        'category' => 'studioplugins-blocks',
        //'icon' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z" /><path d="M19 13H5v-2h14v2z" /></svg>',
        'keywords' => array('creative', 'image','block'),
        //'post_types' => array('page'),
        'mode' => 'edit',//auto preview edit
        'align' => 'full',//“left”, “center”, “right”, “wide”, “full”
        'render_template' => 'blocks/creative-image-block.php',
        //'render_callback' => function(){},
        //'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.css',
        //'enqueue_script' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.js',
        //'enqueue_assets' => function(){},
        'supports' =>[
            //'align' => array( 'left', 'right', 'full' ),
            'mode' => false,
            //'multiple' => false,
            //'__experimental_jsx' => true,
        ],
        'example'  => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    //'testimonial'   => "Your testimonial text here",
                    //'author'        => "John Smith"
                    //'title' =>__('Test title', 'valueone'),
                    //'subtitle' =>__('Test subtitle', 'valueone'),
                )
            )
        )
    ] );
    acf_add_local_field_group(array(
        'key' => 'group_5f992f9a322d10',
        'title' => __('Custom Video Landing', 'valueone'),
        'fields' => array(
            array(
                'key' => 'field_5f992ff00b4394',
                'label' => __('Image', 'valueone'),
                'name' => 'image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/creative-image-block',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => __( '', 'valueone' ),
    ));
    //benefits-block
    acf_register_block_type( [
        'name' => 'benefits-block',
        'title' => __('Benefits block', 'valueone'),
        'description' => __('', 'valueone'),
        'category' => 'studioplugins-blocks',
        //'icon' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z" /><path d="M19 13H5v-2h14v2z" /></svg>',
        'keywords' => array('creative', 'image','block'),
        //'post_types' => array('page'),
        'mode' => 'edit',//auto preview edit
        'align' => 'full',//“left”, “center”, “right”, “wide”, “full”
        'render_template' => 'blocks/benefits-block.php',
        //'render_callback' => function(){},
        //'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.css',
        //'enqueue_script' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.js',
        //'enqueue_assets' => function(){},
        'supports' =>[
            //'align' => array( 'left', 'right', 'full' ),
            'mode' => false,
            //'multiple' => false,
            //'__experimental_jsx' => true,
        ],
        'example'  => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    //'testimonial'   => "Your testimonial text here",
                    //'author'        => "John Smith"
                    //'title' =>__('Test title', 'valueone'),
                    //'subtitle' =>__('Test subtitle', 'valueone'),
                )
            )
        )
    ] );
    acf_add_local_field_group(array(
        'key' => 'group_5f993d8211a9fc',
        'title' => __('Benefits block', 'valueone'),
        'fields' =>  array(
            array(
                'key' => 'field_5f993f8729374c',
                'label' => __('Title', 'valueone'),
                'name' => 'title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f993e2429ba60',
                'label' => 'Blocks',
                'name' => 'bocks',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_5f993e57589374',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5f993e4a420c48',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'full',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_5f993e57589374',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5f993e661f3b64',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                        'delay' => 0,
                    ),
                ),
            ),
            array(
                'key' => 'field_5f99411d866668',
                'label' => __('Mac Link', 'valueone'),
                'name' => 'mac_link',
                'type' => 'link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_5f994124fb22d0',
                'label' => __('Windows Link', 'valueone'),
                'name' => 'win_link',
                'type' => 'link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/benefits-block',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => __( '', 'valueone' ),
    ));
    //nitrozime-block
    acf_register_block_type( [
        'name' => 'nitrozime-block',
        'title' => __('Nitrozime block', 'valueone'),
        'description' => __('', 'valueone'),
        'category' => 'studioplugins-blocks',
        //'icon' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z" /><path d="M19 13H5v-2h14v2z" /></svg>',
        'keywords' => array('creative', 'image','block'),
        //'post_types' => array('page'),
        'mode' => 'edit',//auto preview edit
        'align' => 'full',//“left”, “center”, “right”, “wide”, “full”
        'render_template' => 'blocks/nitrozime-block.php',
        //'render_callback' => function(){},
        //'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.css',
        //'enqueue_script' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.js',
        //'enqueue_assets' => function(){},
        'supports' =>[
            //'align' => array( 'left', 'right', 'full' ),
            'mode' => false,
            //'multiple' => false,
            //'__experimental_jsx' => true,
        ],
        'example'  => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    //'testimonial'   => "Your testimonial text here",
                    //'author'        => "John Smith"
                    //'title' =>__('Test title', 'valueone'),
                    //'subtitle' =>__('Test subtitle', 'valueone'),
                )
            )
        )
    ] );
    acf_add_local_field_group(array(
        'key' => 'group_5f9942b94c8b44',
        'title' => __('Nitrozime block', 'valueone'),
        'fields' => array(
            array(
                'key' => 'field_5f9943eb004188',
                'label' => __('Title', 'valueone'),
                'name' => 'title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f9943f2ba1cac',
                'label' => __('Subtitle', 'valueone'),
                'name' => 'subtitle',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f99431ff81064',
                'label' => 'Blocks',
                'name' => 'blocks',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5f994341a624dc',
                        'label' => 'Top text',
                        'name' => 'top_text',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                        'delay' => 1,
                    ),
                    array(
                        'key' => 'field_5f9943488147b0',
                        'label' => 'Bottom text',
                        'name' => 'bottom_text',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                        'delay' => 1,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/nitrozime-block',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => __( '', 'valueone' ),
    ));
    //requirements-block
    acf_register_block_type( [
        'name' => 'requirements-block',
        'title' => __('Requirements block', 'valueone'),
        'description' => __('', 'valueone'),
        'category' => 'studioplugins-blocks',
        //'icon' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z" /><path d="M19 13H5v-2h14v2z" /></svg>',
        'keywords' => array('creative', 'image','block'),
        //'post_types' => array('page'),
        'mode' => 'edit',//auto preview edit
        'align' => 'full',//“left”, “center”, “right”, “wide”, “full”
        'render_template' => 'blocks/requirements-block.php',
        //'render_callback' => function(){},
        //'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.css',
        //'enqueue_script' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.js',
        //'enqueue_assets' => function(){},
        'supports' =>[
            //'align' => array( 'left', 'right', 'full' ),
            'mode' => false,
            //'multiple' => false,
            //'__experimental_jsx' => true,
        ],
        'example'  => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    //'testimonial'   => "Your testimonial text here",
                    //'author'        => "John Smith"
                    //'title' =>__('Test title', 'valueone'),
                    //'subtitle' =>__('Test subtitle', 'valueone'),
                )
            )
        )
    ] );
    acf_add_local_field_group(array(
        'key' => 'group_5f99448c781064',
        'title' => __('Requirements block', 'valueone'),
        'fields' => array(
            array(
                'key' => 'field_5f99457a449ba4',
                'label' => 'Main color',
                'name' => 'main_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5f9d59c36ac084',
                'label' => 'Background Image',
                'name' => 'background_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5f994542e8b438',
                'label' => __('Title', 'valueone'),
                'name' => 'title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f994592158108',
                'label' => 'Blocks',
                'name' => 'blocks',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_5f9945acf2b020',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5f9d5afc391688',
                        'label' => 'Images',
                        'name' => 'images',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'collapsed' => '',
                        'min' => 0,
                        'max' => 0,
                        'layout' => 'block',
                        'button_label' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5f9d60c3651eb8',
                                'label' => 'Image',
                                'name' => 'image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'full',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            ),
                        ),
                    array(
                        'key' => 'field_5f9945acf2b020',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/requirements-block',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => __( '', 'valueone' ),
    ));
    //subscribe-block
    acf_register_block_type( [
        'name' => 'subscribe-block',
        'title' => __('Subscribe block', 'valueone'),
        'description' => __('', 'valueone'),
        'category' => 'studioplugins-blocks',
        //'icon' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z" /><path d="M19 13H5v-2h14v2z" /></svg>',
        'keywords' => array('creative', 'image','block'),
        //'post_types' => array('page'),
        'mode' => 'edit',//auto preview edit
        'align' => 'full',//“left”, “center”, “right”, “wide”, “full”
        'render_template' => 'blocks/subscribe-block.php',
        //'render_callback' => function(){},
        //'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.css',
        //'enqueue_script' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.js',
        //'enqueue_assets' => function(){},
        'supports' =>[
            //'align' => array( 'left', 'right', 'full' ),
            'mode' => false,
            //'multiple' => false,
            //'__experimental_jsx' => true,
        ],
        'example'  => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    //'testimonial'   => "Your testimonial text here",
                    //'author'        => "John Smith"
                    //'title' =>__('Test title', 'valueone'),
                    //'subtitle' =>__('Test subtitle', 'valueone'),
                )
            )
        )
    ] );
    acf_add_local_field_group(array(
        'key' => 'group_5f99464af6872c',
        'title' => __('Subscribe block', 'valueone'),
        'fields' => array(
            array(
                'key' => 'field_5f9946a3753f7c',
                'label' => __('Title', 'valueone'),
                'name' => 'title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f994681774bc8',
                'label' => 'Form',
                'name' => 'form',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'wpcf7_contact_form',
                ),
                'taxonomy' => '',
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'id',
                'ui' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/subscribe-block',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => __( '', 'valueone' ),
    ));
    //download-hero-block
    acf_register_block_type( [
        'name' => 'download-hero-block',
        'title' => __('Download hero block', 'valueone'),
        'description' => __('', 'valueone'),
        'category' => 'studioplugins-blocks',
        //'icon' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z" /><path d="M19 13H5v-2h14v2z" /></svg>',
        'keywords' => array('creative', 'image','block'),
        //'post_types' => array('page'),
        'mode' => 'edit',//auto preview edit
        'align' => 'full',//“left”, “center”, “right”, “wide”, “full”
        'render_template' => 'blocks/download-hero-block.php',
        //'render_callback' => function(){},
        //'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.css',
        //'enqueue_script' => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.js',
        //'enqueue_assets' => function(){},
        'supports' =>[
            //'align' => array( 'left', 'right', 'full' ),
            'mode' => false,
            //'multiple' => false,
            //'__experimental_jsx' => true,
        ],
        'example'  => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    //'testimonial'   => "Your testimonial text here",
                    //'author'        => "John Smith"
                    //'title' =>__('Test title', 'valueone'),
                    //'subtitle' =>__('Test subtitle', 'valueone'),
                )
            )
        )
    ] );
    acf_add_local_field_group(array(
        'key' => 'group_5f9947bc856040',
        'title' => __('Download hero block', 'valueone'),
        'fields' => array(
            array(
                'key' => 'field_5f9949bb73b644',
                'label' => __('Subitle', 'valueone'),
                'name' => 'subtitle',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f99496bd0a3d8',
                'label' => __('Title', 'valueone'),
                'name' => 'title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f994a16116874',
                'label' => __('Features', 'valueone'),
                'name' => 'features',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f994b975eb850',
                'label' => __('Button text', 'valueone'),
                'name' => 'button_text',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f994a8aa8b438',
                'label' => __('Mac Link', 'valueone'),
                'name' => 'mac_link',
                'type' => 'link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_5f994a91f0624c',
                'label' => __('Windows Link', 'valueone'),
                'name' => 'win_link',
                'type' => 'link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/download-hero-block',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => __( '', 'valueone' ),
    ));
});