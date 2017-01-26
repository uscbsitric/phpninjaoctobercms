<?php
namespace Thewizardplusplus\Microblog\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Thewizardplusplus\Microblog\LangUtils;
use RainLab\Blog\Models\Post;
use Lang;
use Flash;

class PostEditor extends ReportWidgetBase
{
    // must be string
    const POST_TITLE_LENGTH_DEFAULT = '5';
    const POST_TITLE_LENGTH_PATTERN = '^[1-9]\d*$';
    const CATEGORY_URL_TEMPLATE_DEFAULT_TEMPLATE = '/tag/%s';

    // used by Markdown editor
    public $previewMode = false;

    public function defineProperties()
    {
        return [
            'widget_title' => [
                'title' => LangUtils::dashboard('widget_title_label'),
                'description' => LangUtils::widget('widget_title_description'),
                'default' => LangUtils::widget('name'),
                'type' => 'string',
                'validationMessage' => LangUtils::dashboard(
                    'widget_title_error'
                ),
                'required' => 'true'
            ],
            'post_title_length' => [
                'title' => LangUtils::widget('post_title_length_title'),
                'description' => LangUtils::widget(
                    'post_title_length_description'
                ),
                'default' => self::POST_TITLE_LENGTH_DEFAULT,
                'type' => 'string',
                'validationPattern' => self::POST_TITLE_LENGTH_PATTERN,
                'validationMessage' => LangUtils::widget(
                    'post_title_length_error'
                ),
                'required' => 'true'
            ],
            'category_processing' => [
                'title' => LangUtils::widget('category_processing_title'),
                'description' => LangUtils::widget(
                    'category_processing_description'
                ),
                'default' => CategoryProcessing::ADD_LINK,
                'type' => 'dropdown',
                'options' => [
                    CategoryProcessing::NONE => LangUtils::get(
                        'category_processing_none'
                    ),
                    CategoryProcessing::REMOVE => LangUtils::get(
                        'category_processing_remove'
                    ),
                    CategoryProcessing::SAVE_NAME => LangUtils::get(
                        'category_processing_save_name'
                    ),
                    CategoryProcessing::ADD_LINK => LangUtils::get(
                        'category_processing_add_link'
                    )
                ]
            ],
            'category_url_template' => [
                'title' => LangUtils::widget('category_url_template_title'),
                'description' => LangUtils::get(
                    'category_url_template_description',
                    ['mark' => PostCreator::CATEGORY_SLUG_MARK]
                ),
                'default' => sprintf(
                    self::CATEGORY_URL_TEMPLATE_DEFAULT_TEMPLATE,
                    PostCreator::CATEGORY_SLUG_MARK
                ),
                'type' => 'string',
                'validationPattern' => preg_quote(
                    PostCreator::CATEGORY_SLUG_MARK
                ),
                'validationMessage' => LangUtils::get(
                    'category_url_template_error',
                    ['mark' => PostCreator::CATEGORY_SLUG_MARK]
                ),
                'required' => 'true'
            ]
        ];
    }

    public function render()
    {
        return $this->makePartial('widget');
    }

    // used by Markdown editor
    public function onRefresh()
    {
        $content = post('content');
        $html = Post::formatHtml($content, true);
        return ['preview' => $html];
    }

    public function onSave()
    {
        $content = post('content');
        $published = post('published');

        $title_length = $this->property('post_title_length');
        $category_processing = $this->property('category_processing');
        $url_template = $this->property('category_url_template');

        PostCreator::create(
            $content,
            $published,
            $title_length,
            $category_processing,
            $url_template
        );

        self::flashOnSuccess();
    }

    private static function flashOnSuccess()
    {
        $subject_name = Lang::get('rainlab.blog::lang.blog.create_post');
        $message = Lang::get(
            LangUtils::backend('form.create_success'),
            ['name' => $subject_name]
        );
        Flash::success($message);
    }
}
