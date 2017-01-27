<?php namespace Octotco\GitHubWidget\Components;

use Cms\Classes\ComponentBase;

class Widget extends ComponentBase
{
    const VALIDATION_PATTERN = '^(http[s]{0,1}:\/\/github.com\/){0,1}([\w_-]*\/[\w_-]*)';

    /**
     * @inheritdoc
     */
    public function componentDetails()
    {
        return [
            'name' => 'RepositoryWidget',
            'description' => 'Renders github repository widget'
        ];
    }

    /**
     * @inheritdoc
     */
    public function defineProperties()
    {
        return [
            'repository' => [
                'title' => 'Repository URL or Namespace',
                'description' => 'Provide GitHub repository URL or Namespace.
                    e.g. octotoco/githubwidget or https://github.com/octotco/githubwidget',
                'type' => 'string',
                'required' => true,
                'validationPattern' => self::VALIDATION_PATTERN,
                'validationMessage' => 'Invalid source URI or namespace.',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function onRun()
    {
        $this->addJs('/plugins/octotco/githubwidget/assets/jquery.githubRepoWidget.min.js');

        $this->page['repository'] = $this->extractNamespace($this->property('repository'));
    }

    /**
     * Extracts repository namespace from repository URI.
     *
     * @param string $source
     * @return bool | string
     */
    protected function extractNamespace($source)
    {
        if (preg_match('/' . self::VALIDATION_PATTERN . '/', $source, $matches)) {
            if (array_key_exists(1, $matches)) {
                return $matches[2];
            }
        }

        return false;
    }
}
