<?php
namespace Thewizardplusplus\Microblog;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['RainLab.Blog'];

    public function pluginDetails()
    {
        return [
            'name' => LangUtils::plugin('name'),
            'description' => LangUtils::plugin('description'),
            'author' => 'thewizardplusplus',
            'icon' => 'icon-bolt',
            'homepage' =>
                'https://github.com/thewizardplusplus/october-microblog'
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Thewizardplusplus\Microblog\ReportWidgets\PostEditor' => [
                'label' => LangUtils::widget('name'),
                'context' => 'dashboard'
            ]
        ];
    }
}
