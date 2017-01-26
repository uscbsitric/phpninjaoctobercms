<?php

return [
    'plugin' => [
        'name' => 'Microblog',
        'description' =>
            'Provides the backend widget for a fast publishing of posts.'
    ],
    'widget' => [
        'name' => 'Post editor',
        'content_editor_label' => 'Content',
        'published_flag_label' => 'Published',
        'save_button_text' => 'Save',
        'widget_title_description' =>
            'The title of the widget that is displayed on the dashboard.',
        'post_title_length_title' => 'Post title length',
        'post_title_length_description' =>
            'The length of the post title in words.',
        'post_title_length_error' =>
            'The length of the post title is required '
            . 'and should be a natural number greater than zero.',
        'category_processing_title' => 'Category processing',
        'category_processing_description' =>
            'The type of the processing of categories marks.',
        'category_processing_none' => 'None',
        'category_processing_remove' => 'Remove',
        'category_processing_save_name' => 'Save name',
        'category_processing_add_link' => 'Add link',
        'category_url_template_title' => 'Category URL template',
        'category_url_template_description' =>
            'The template of the category URL. It must contain a ":mark" mark.',
        'category_url_template_error' =>
            'The template of the category URL is required '
            . 'and must contain a ":mark" mark.'
    ]
];
