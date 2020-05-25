<?php

namespace Acme\ContentEditor\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Example extends Controller
{
    public $implement = [
        'Newride.Headless.Behaviors.StaticContentEditor',
    ];

    public $formConfig = 'form_config.yaml';

    public function update(): void
    {
        parent::update();

        BackendMenu::setContext('Acme.ContentEditor', 'contenteditor', 'example');
    }
}
