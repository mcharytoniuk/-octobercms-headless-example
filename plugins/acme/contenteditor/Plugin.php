<?php namespace Acme\ContentEditor;

use Backend;
use System\Classes\PluginBase;

/**
 * ContentEditor Plugin Information File
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
            'name'        => 'ContentEditor',
            'description' => 'No description provided yet...',
            'author'      => 'Acme',
            'icon'        => 'icon-leaf'
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
        return []; // Remove this line to activate

        return [
            'Acme\ContentEditor\Components\MyComponent' => 'myComponent',
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
            'acme.contenteditor.some_permission' => [
                'tab' => 'ContentEditor',
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
        return [
            'contenteditor' => [
                'label' => 'ContentEditor',
                'url' => Backend::url('acme/contenteditor/example/update'),
                'icon' => 'icon-align-left',
                'permissions' => ['acme.contenteditor.*'],
                'order' => 500,
                'sideMenu' => [
                    'example' => [
                        'label' => 'Example',
                        'icon' => 'icon-home',
                        'url' => Backend::url('acme/contenteditor/example/update'),
                    ],
                ],
            ],
        ];
    }
}
