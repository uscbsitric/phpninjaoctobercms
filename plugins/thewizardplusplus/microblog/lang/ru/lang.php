<?php

return [
    'plugin' => [
        'name' => 'Микроблог',
        'description' =>
            'Предоставляет виджет для бекенда, '
            . 'позволяющий быстро публиковать посты.'
    ],
    'widget' => [
        'name' => 'Редактор поста',
        'content_editor_label' => 'Контент',
        'published_flag_label' => 'Опубликовано',
        'save_button_text' => 'Сохранить',
        'widget_title_description' =>
            'Заголовок виджета, который отображается на панели управления.',
        'post_title_length_title' => 'Длина заголовка поста',
        'post_title_length_description' => 'Длина заголовка поста в словах.',
        'post_title_length_error' =>
            'Длина заголовка поста обязательна '
            . 'и должна быть натуральным числом большим нуля.',
        'category_processing_title' => 'Обработка категорий',
        'category_processing_description' => 'Тип обработки меток категорий.',
        'category_processing_none' => 'Не обрабатывать',
        'category_processing_remove' => 'Удалить',
        'category_processing_save_name' => 'Сохранить имя',
        'category_processing_add_link' => 'Добавить ссылку',
        'category_url_template_title' => 'Шаблон ссылки категории',
        'category_url_template_description' =>
            'Шаблон ссылки на категорию. Должен содержать метку ":mark".',
        'category_url_template_error' =>
            'Шаблон ссылки на категорию обязателен '
            . 'и должен содержать метку ":mark".'
    ]
];
