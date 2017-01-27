<?php namespace Octotco\GitHubWidget;

use Backend;
use System\Classes\PluginBase;

/**
 * GitHubWidget Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'GitHubWidget',
            'description' => 'No description provided yet...',
            'author'      => 'Octotco',
            'icon'        => 'icon-github'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Octotco\GitHubWidget\Components\Widget' => 'RepositoryWidget',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'octotco.githubwidget.some_permission' => [
                'tab' => 'GitHubWidget',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'githubwidget' => [
                'label'       => 'GitHubWidget',
                'url'         => Backend::url('octotco/githubwidget/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['octotco.githubwidget.*'],
                'order'       => 500,
            ],
        ];
    }

}
