<?php
namespace Thewizardplusplus\Microblog\ReportWidgets;

use RainLab\Blog\Models\Post;
use BackendAuth;
use Carbon\Carbon;
use Str;
use RainLab\Blog\Models\Category;

class PostCreator
{
    const WORD_PATTERN = '/[\p{L}\p{N}\p{Pd}]+/u';
    const TITLE_TEMPLATE = '%s...';
    const CATEGORY_MARK_PATTERN = '/@([\p{L}\p{N}\p{Pd}]+)/u';
    const CATEGORY_SLUG_MARK = ':slug';
    const CATEGORY_LINK_TEMPLATE = '<a href="%s">%s</a>';

    public static function create(
        $content,
        $published,
        $title_length,
        $category_processing,
        $url_template
    ) {
        $post = Post::make();
        $post->title = self::generateTitle($content, $title_length);
        $post->slug = self::generateSlug();
        $post->user_id = BackendAuth::getUser()->id;

        $post->published = !!$published;
        if ($post->published) {
            $post->published_at = Carbon::now();
        }

        list($content, $categories_ids) = self::processCategories(
            $content,
            $category_processing,
            $url_template
        );
        $post->content = $content;

        $post->forceSave();

        if (!empty($categories_ids)) {
            $post->categories()->sync($categories_ids, false);
        }
    }

    private static function generateTitle($content, $length)
    {
        preg_match_all(self::WORD_PATTERN, $content, $words);
        $words = array_slice($words[0], 0, intval($length));
        return sprintf(self::TITLE_TEMPLATE, implode(' ', $words));
    }

    private static function generateSlug()
    {
        return Str::slug(uniqid(rand(), true));
    }

    private static function processCategories(
        $content,
        $category_processing,
        $url_template
    ) {
        $categories_ids = [];
        $content = preg_replace_callback(
            self::CATEGORY_MARK_PATTERN,
            function ($matches) use (
                &$categories_ids,
                $category_processing,
                $url_template
            ) {
                list($new_mark, $category_id) = self::processCategory(
                    $matches[0],
                    $matches[1],
                    $category_processing,
                    $url_template
                );
                if (!is_null($category_id)) {
                    $categories_ids[] = $category_id;
                }

                return $new_mark;
            },
            $content
        );

        return [$content, $categories_ids];
    }

    private static function processCategory(
        $mark,
        $name,
        $category_processing,
        $url_template
    ) {
        if ($category_processing == CategoryProcessing::NONE) {
            return [$mark, null];
        }

        $category = Category::firstOrCreate(['name' => $name]);
        $category_id = $category->id;

        switch ($category_processing) {
            case CategoryProcessing::REMOVE:
                $new_mark = '';
                break;
            case CategoryProcessing::SAVE_NAME:
                $new_mark = $name;
                break;
            case CategoryProcessing::ADD_LINK:
            default:
                $category_url = str_replace(
                    self::CATEGORY_SLUG_MARK,
                    $category->slug,
                    $url_template
                );
                $new_mark = sprintf(
                    self::CATEGORY_LINK_TEMPLATE,
                    $category_url,
                    $mark
                );

                break;
        }

        return [$new_mark, $category_id];
    }
}
